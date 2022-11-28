<?php
session_start();
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
    <link rel="stylesheet" href="../CSS Files/Manage_queries.css">
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
 <br><input type='Submit' name='Logout' Value='Logout' id='Logout'> &nbsp; &nbsp; <input type="Submit" name="Change_Password" Value="Change Password"></form>
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 2.9px;'>Principal Desk</h1></center>
<div class="navbar">
    <a href="Welcome.php">HOME</a>
    <a href="Upload_files.php">Upload files</a>
    <a href="Manage_files.php">Manage files</a>
    <a href="Post new Announcements.php">Do Announcements</a>
    <a href="Add_Faculties.php">Add Faculties</a>
    <a href="Remove Faculties.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Remove Faculties</a>
    <a href="Students Data.php">Students Data</a>
    <a href="Remove Students.php">Remove Students</a>
    <a href="Manage_Queries.php">Manage Queries</a>
</div>
</section>

<main>
    <hr>
    <center>
        <div id="sec">
        <h2>Remove Faculties</h2>
        <div id="form">
        <form Method='POST'>
            <center>
        <input type='Text' placeholder='Enter Faculty`s Endorsement No *' id="Endorsement _No" name="Endorsement_No" style="width: 65%; height: 19.9px;"> &nbsp; &nbsp;
        <input type='submit' value='Delete' id="solved" name="Delete">
           </form>
           </div>
           </center>
           </div>
           </center>
           <p>
        <!--PHP Database Code-->
<?php
//Database Connection
include "../php files/db_connection.php";

if(isset($_POST['Delete'])){
        $Endorsement_No = $_POST['Endorsement_No'];
        
        if(empty($Endorsement_No))
        {
            echo "<center><h4 style=\"color: red\">Enter The Faculty`s Endorsement Number.</h4></center>";
        }
        
        $sql = "SELECT Endorsement_No FROM `Faculties`";
    $check = mysqli_query($conn, $sql);
    $Count=0;
    while($Match = $check->fetch_assoc())
    {
        if($Endorsement_No == $Match['Endorsement_No']){
         $Count = 1;
         
         $sql = "DELETE FROM `Faculties` WHERE Endorsement_No='$Endorsement_No'";
         mysqli_query($conn, $sql);
         echo "<center><strong style='color: red;'>$Endorsement_No Faculty is removed from database.</strong></center>";
         echo "<p>";
         break;
        }
    }
    if($Count == 0 && !empty($Endorsement_No))
        {
            echo "<center><strong style='color: red'>Enter the Valid Email Address.</strong></center>";
            echo "<p>";
        }
    
}
//SQl query to select data from database
$sql = "SELECT *FROM `Faculties`";
$result = mysqli_query($conn, $sql);

 while($data=$result -> fetch_assoc())
  {
      echo "<center>";
      echo "<div id=\"show\">";
      echo "<strong style=\"color : yellow; background-color: black;\">Endorsement No : </strong>";
      echo "<strong>";
      echo  "<small style='color: white; background-color: black; display: inline; font-size: 15.9px;'>";
      echo $data['Endorsement_No'];
      echo "</small></strong> <br>";
      echo "<strong style=\"color : darkblue;\">Faculty : </strong>";
      echo "<strong>";
      echo  "<small style='color: Blue; display: inline; font-size: 15.9px;'>";
      echo $data['Name'];
      echo "</strong> <br>";
      echo "<strong style=\"color: darkblue; padding-up: 2px; padding-bottom: .5px;\">Departments : </strong>";
      echo "<span style=\"color: black; padding-left: 2px; padding-right: 2px;\">";
      echo $data['Department'];
      echo "</span> <br>";
       echo "<strong style=\"color:darkblue;\">Mobile No : </strong>";
      echo "<span style='color: black;'>";
      echo $data['Mobile'];
      echo "</span> <br>";
       echo "<strong style=\"color:darkblue;\">Email : </strong>";
      echo "<span style=\"color: black\";>";
      echo $data['Email'];
      echo "</small>";
      echo "</span>";
      echo "</div>";
      echo "<br> <center>";
      echo "<p>";
}
  
mysqli_close($conn);
?>
</div>
    </center>
</main>
<hr>
<footer>
<center>
 <h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> Savjani College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>