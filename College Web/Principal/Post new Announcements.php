<?php
session_start();
include "../php files/db_connection.php";
if (empty($_SESSION['Username'] && $_SESSION['Password']) || $_SESSION['Username'] != 'Principal@kmkks') {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: ../Login/Login.php'));
    }
//Input fields validation
if(isset($_POST['Logout'])){
    session_destroy();
    header( 'location: ../Login/Login.php');
}

if(isset($_POST['Change_Password'])){
    $_SESSION['Login_type'] = 'Principal';
    $_SESSION['Username'];
    header( 'location: Change Password.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savjani College</title>
<link rel="icon" type="image/x-icon" href="../../Images/Header&Footer/favicon.jpg">
    
    <link rel="stylesheet" href="../CSS Files/headerNmenuNfooter.css">
    <link rel="stylesheet" href="../CSS Files/Admin_Welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .disclaimer{
            display: none;
        }
    </style>
</head>
<body>
    
    <header id="header">
        <center>
            <img src="../../Images/Header&Footer/savjaniclg.png" alt="img"> 
        </center>
        </header>
        <section id="Logged_in_sec">
        <div id="Logged_in">
            <img src="../../Images/Login/Logged_in.jpg"><br>
          <?php
            echo "<small>";
        echo $_SESSION['Username']; 
 echo "</small>";
         ?>
         
<form method="POST">
 <br><input type='Submit' name='Logout' Value='Logout' id='Logout'> &nbsp; &nbsp; <input type="Submit" name="Change_Password" Value="Change Password">
</form>
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Principal Desk</h1></center>
<div class="navbar">
    <a href="Welcome.php">HOME</a>
    <a href="Upload_files.php">Upload files</a>
    <a href="Manage_files.php">Manage files</a>
    <a href="Post new Announcements.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Do Announcements</a>
    <a href="Add_Faculties.php">Add Faculties</a>
    <a href="Remove Faculties.php">Remove Faculties</a>
    <a href="Students Data.php">Students Data</a>
    <a href="Remove Studentsmphp">Remove Students</a>
    <a href="Manage_Queries.php">Manage Queries</a>
</div>
</section>

<main>
    <hr>
        <center><h2 style='color: white; background-color: red; border-radius: 29px; padding-bottom: 4.2px;'>Post  new Announcements</h2></center>
    <center>
    <form action="" method="POST" enctype="multipart/form-data">
        <div style='background-color: skyblue; display: inline-block; padding: 9px; border-radius: 15px; width: 92%;' id="pathSelection">
        <select name="path" id="path" style='height: 29px;'>
            <option value="../../Announcements/">/Announcements/</option>
        </select><p>
        <input type="file" name="file" multiple><p>
        <input type="submit" value="upload" name="upload" id='upload' onMouseOver="this.style.color='white'" onMouseOver="this.style.background-color='green'">
        </div>
        </center>
        </form>
        <hr>
        <!--Send files in Announcement Folder using PHP-->
        <?php
        if(isset($_POST['upload'])){
             $fileName = $_FILES['file']['name'];
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Announcements/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
            
            $sql = "SELECT *FROM `Student Registration`";
            
            $results = mysqli_query($conn, $sql);
           
           while($Match = $results -> fetch_assoc()){
               $to = $Match['Email'];
               $Subject = "Savjani College - New Announcement";
               $Message = "New Announcement Posted\n\n Username  : " . $Match['SPU_ID'] . "\n"."Password :" . $Match['Password'] . "\n" . "Click on This Link To Login : https://savjani-college.000webhostapp.com/College%20Web/Login/Login.php";
               
               //send mail
               mail($to, $Subject, $Message);
               
           }
                }
        else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
        ?>
</main>
  <footer>
  <center>
         <h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> Savjani College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>