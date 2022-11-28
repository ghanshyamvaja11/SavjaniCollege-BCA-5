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
        input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
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
 <br><input type='Submit' name='Logout' Value='Logout' id='Logout' style="color: white;
    background-color: black; cursor: pointer; border-radius: 15.9px; font-size: 13.4px; font-weight: 400;"> &nbsp; &nbsp; <input type="Submit" name="Change_Password" Value="Change Password" id="Change_Password" style="color: white;
    background-color: black; cursor: pointer; border-radius: 15.9px; font-size: 13.4px; font-weight:  400;"> &nbsp;&nbsp; <input type="Submit" name="Change_Email" Value="Change Email" id="Change Email" style="color: white;
    background-color: black; cursor: pointer; border-radius: 15.9px; font-size: 13.4px; font-weight:  400;">
</form>
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Principal Desk</h1></center>
<div class="navbar">
    <a href="Welcome.php">HOME</a>
    <a href="Upload_files.php">Upload Files</a>
    <a href="Manage_files.php">Manage files</a>
    <a href="Post new Announcements.php">Do Announcements</a>
     <a href="Add_Faculties.php">Add Faculties</a>
     <a href="Remove Faculties.php">Remove Faculties</a>
    <a href="Students Data.php">Students data</a>
    <a href="Term Grant.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Term-Grant</a>
    <a href="Fees Info.php">Recieve Fees</a>
    <a href="Remove Students.php">Remove Students</a>
    <a href="Manage_Queries.php">Manage Queries</a>
</div>
</section>

<main>
    <hr>
        <center><h2 style='color: white; background-color: red; border-radius: 29px; padding-bottom: 4.2px;'>Term-Grant</h2></center>
    <center>
        <div style='background-color: skyblue; display: inline-block; border-radius: 15px; width: 92%; padding: 9px;'>
        <form action="" method="POST">
        <input style="height: 29.8px; width: 51%;" type="number" name="SPUID" placeholder="Enter SPUID*" id="SPU_ID"><br><br>
        <input type="submit" value="Search" name="Search" id='see' style="font-size: 19.9px; color: black; background-color: white;" class="see">
        </form>
        <br>
        <?php
        $Count = 0;
        $Count2 = 0;
        
        if(!empty($_POST['SPUID']) and isset($_POST['Search'])){
         $_SESSION['SPUID'] = $_POST['SPUID'];
         $Spuid = $_POST['SPUID'];
    $sql = "SELECT *FROM `Student Registration` WHERE SPU_ID='$Spuid'";
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        $Course = $Match['Course'];
        if($Spuid == $Match['SPU_ID']){?>
        <div style="display: inline-block; text-align: left; color: white; background-color: blue; padding: 9px; border-radius: 29px;">
            <h4 style="display: inline;">SPU ID : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['SPU_ID']; ?></h5><br>
            <h4 style="display : inline;">Student's Name : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Name']; ?></h5><br>
            <h4 style="display : inline;">Course : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Course']; ?></h5><br>
            <h4 style="display : inline;">Current Semester : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Semester']; ?></h5><br>
            <h4 style="display : inline;">Mobile : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Mobile']; ?></h5><br>
            <h4 style="display : inline;">Email : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Email']; ?></h5>
            </div>
        <?php
        $Count = 1;
        }
    }
        }
        if(isset($_POST['Search']) && $Count != 1){
            echo "<h4 style='color: red;'>Enter Valid SPUID.</h4>";
        }
        if(isset($_POST['Search']) && $Count == 1){
            $Spuid = $_POST['SPUID'];
        $sql = "SELECT Course,Semester FROM `Student Registration` WHERE SPU_ID ='$Spuid'";
        $check = mysqli_query($conn, $sql);
        while($Match = $check->fetch_assoc()){
            if($Match['Semester'] != 'Sem-6'){
        ?>
        <form action="" method="POST">
        <p>
        <select name="Class" style="height: 29.4px; width: 51%;" required>
            <option selected>Select a Class</option>
            <?php
             if($Match['Course'] == 'BCA' && $Match['Semester'] != 'Sem-6'){?>
            <option value="Sem-1">BCA Sem-1</option>
            <option value="Sem-2">BCA Sem-2</option>
            <option value="Sem-3">BCA Sem-3</option>
            <option value="Sem-4">BCA Sem-4</option>
            <option value="Sem-5">BCA Sem-5</option>
            <option value="Sem-6">BCA Sem-6</option>
            <?php
            $Count2 = 1;
             }
             else if($Match['Course'] == 'BBA' && $Match['Semester'] != 'Sem-6')
             {
             ?>
            <option value="Sem-1">BBA Sem-1</option>
            <option value="Sem-2">BBA Sem-2</option>
            <option value="Sem-3">BBA Sem-3</option>
            <option value="Sem-4">BBA Sem-4</option>
            <option value="Sem-5">BBA Sem-5</option>
            <option value="Sem-6">BBA Sem-6</option>
            <?php
            $Count2 = 1;
             }
             else if($Match['Course'] == 'B.com' && $Match['Semester'] != 'Sem-6'){
             ?>
            <option value="Sem-1">B.com Sem-1</option>
            <option value="Sem-2">B.com Sem-2</option>
            <option value="Sem-3">B.com Sem-3</option>
            <option value="Sem-4">B.com Sem-4</option>
            <option value="Sem-5">B.com Sem-5</option>
            <option value="Sem-6">B.com Sem-6</option>
            <?php
            $Count2 = 1;
             }
        }
        else{
                 echo "<h4 style='color: red;'>Student : $Spuid already in Last Semester(Sem-6).</h4>";
             }
        }
        
        if($Count2 == 1){
            ?>
        </select><p>
        <input type="submit" value="Transfer" name="Change" id='see' style="font-size: 19.9px; color: black; background-color: white; border-radius: 29px;" class="see">
        </div>
        <?php
        }
        }
        ?>
        </center>
        <p>
        <center>
       <?php
       $Count = 0;
       if(!empty($_POST['Class']) and isset($_POST['Change'])){
           $Spuid = $_SESSION['SPUID'];
           $Class = $_POST['Class'];
              $sql = "UPDATE `Student Registration` SET Semester='$Class' WHERE SPU_ID=$Spuid";
              mysqli_query($conn, $sql);
              echo "<h4 style='color: green;'>$Spuid`s Semester is Changed Successfully.</h4>";
        $sql = "SELECT Course,Email FROM `Student Registration` WHERE SPU_ID ='$Spuid'";
        $check = mysqli_query($conn, $sql);
        while($Match = $check->fetch_assoc()){
            $Course = $Match['Course'];
            $to = $Match['Email'];
            $Subject = "Term Grant Confirmation";
            $Message = "Hiii ".$Spuid .",\nYour Semester is Changed Successfully.\nYour Course : $Course \nYour Current Semester : $Class";
            mail($to, $Subject, $Message);
        }
        echo "<script>window.location='Fees Info.php'</script>";
       }
    ?>
</form>
<hr>
</main>
  <footer>
         <center>
<h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> Savjani College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>