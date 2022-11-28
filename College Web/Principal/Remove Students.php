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

if(isset($_POST['Change_Email'])){
    $_SESSION['Login_type'] = 'Principal';
    $_SESSION['Username'];
    header( 'location: Change Email.php');
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
 <br><input type='Submit' name='Logout' Value='Logout' id='Logout' style="color: white;
    background-color: black; cursor: pointer; border-radius: 15.9px; font-size: 13.4px; font-weight: 400;"> &nbsp; &nbsp; <input type="Submit" name="Change_Password" Value="Change Password" id="Change_Password" style="color: white;
    background-color: black; cursor: pointer; border-radius: 15.9px; font-size: 13.4px; font-weight:  400;"> &nbsp;&nbsp; <input type="Submit" name="Change_Email" Value="Change Email" id="Change Email" style="color: white;
    background-color: black; cursor: pointer; border-radius: 15.9px; font-size: 13.4px; font-weight:  400;">
</form>
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 2.9px;'>Principal Desk</h1></center>
<div class="navbar">
    <a href="Welcome.php">HOME</a>
    <a href="Upload_files.php">Upload files</a>
    <a href="Manage_files.php">Manage files</a>
    <a href="Post new Announcements.php">Do Announcements</a>
    <a href="Add_Faculties.php">Add Faculties</a>
    <a href="Remove Faculties.php">Remove Faculties</a>
    <a href="Students Data.php">Students Data</a>
    <a href="Term Grant.php">Term-Grant</a>
    <a href="Fees Info.php">Recieve Fees</a>
    <a href="Remove Students.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Remove Students</a>
    <a href="Manage_Queries.php">Manage Queries</a>
</div>
</section>

<main>
    <hr>
    <center>
        <div id="sec">
        <h2>Remove Students</h2>
        <div id="form">
            <br>
        <h4 style="color: white; background-color: red; display: inline; padding: 6.9px; border-radius: 29.9px;">Delete by SPUID</h4><br><br>
        <form Method='POST'>
            <center>
        <input type='Text' placeholder='Enter Students`s SPUID *' id="SPUID" name="SPU_ID" style="width: 54%; height: 19.9px;"> &nbsp; &nbsp;
        <input type='submit' value='Delete' id="solved" name="Delete">
           </form>
           <br><br>
           <h4 style="color: white; background-color: red; display: inline; padding: 6.9px; border-radius: 29.9px;">Delete Whole Class</h4>
           <br><br>
        <form Method='POST'>
            <center>
        <Select name="class" style="width: 54%; height: 29.8px;">
            <option Selected>Select class</option> 
            <option value="BCA">BCA Sem-6</option>
            <option value="BBA">BBA Sem-6</option>
            <option value="B.com">B.com Sem-6</option>
            </Select>
            &nbsp; &nbsp;
        <input type='submit' value='Delete' id="solved" name="DeleteClass">
        <br><br>
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
$SPU_ID = "";
if(isset($_POST['Delete'])){
        $SPU_ID = $_POST['SPU_ID'];
        
        if(empty($SPU_ID))
        {
            echo "<center><h4 style=\"color: red\">Enter The Student`s SPUID.</h4></center>";
        }
        
        $sql = "SELECT SPU_ID FROM `Student Registration`";
    $check = mysqli_query($conn, $sql);
    $Count=0;
    while($Match = $check->fetch_assoc())
    {
        if($SPU_ID == $Match['SPU_ID']){
         $Count = 1;
         
         $sql = "DELETE FROM `Student Registration` WHERE SPU_ID='$SPU_ID'";
         mysqli_query($conn, $sql);
         echo "<center><strong style='color: red;'>Student $SPU_ID is removed from database.</strong></center>";
         echo "<p>";
         break;
        }
    }
    if($Count == 0 && !empty($SPU_ID))
        {
            echo "<center><strong style='color: red'>Enter the Valid SPUID.</strong></center>";
            echo "<p>";
        }
    
}
/*//SQl query to select data from database
$sql = "SELECT *FROM `Student Registration`";
$result = mysqli_query($conn, $sql);

 while($data=$result -> fetch_assoc())
  {
      echo "<center>";
      echo "<div id=\"show\">";
      echo "<strong style=\"color : yellow; background-color: black;\">SPUID : </strong>";
      echo "<strong>";
      echo  "<small style='color: white; background-color: black; display: inline; font-size: 15.9px;'>";
      echo $data['SPU_ID'];
      echo "</small></strong> <br>";
      echo "<strong style=\"color : darkblue;\">Student : </strong>";
      echo "<strong>";
      echo  "<small style='color: Blue; display: inline; font-size: 15.9px;'>";
      echo $data['Name'];
      echo "</strong> <br>";
      echo "<strong style=\"color: darkblue; padding-up: 2px; padding-bottom: .5px;\">Course : </strong>";
      echo "<span style=\"color: black; padding-left: 2px; padding-right: 2px;\">";
      echo $data['Course'];
      echo "</span> <br>";
       echo "<strong style=\"color:darkblue;\">Semester : </strong>";
      echo "<span style='color: black;'>";
      echo $data['Semester'];
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
}*/
  if(isset($_POST['DeleteClass'])){
      if($_POST['class'] == 'BCA')
      {
      $sql = "DELETE FROM `Student Registration` WHERE `Course`='BCA' AND `Semester`='Sem-6'";
      $result = mysqli_query($conn, $sql);
      if($result)
      {
          echo "<center><h4 style='color: red;'>BCA Sem-6 class has been deleted successfully.</h4></center>";
      }
      }
      if($_POST['class'] == 'BBA')
      {
      $sql = "DELETE FROM `Student Registration` WHERE `Course`='BBA' AND `Semester`='Sem-6'";
      $result = mysqli_query($conn, $sql);
      if($result)
      {
          echo "<center><h4 style='color: red;'>BBA Sem-6 class has been deleted successfully.</h4></center>";
      }
      }
      if($_POST['class'] == 'B.com')
      {
      $sql = "DELETE FROM `Student Registration` WHERE  `Course`='B.com' AND `Semester`='Sem-6'";
      $result = mysqli_query($conn, $sql);
      if($result)
      {
          echo "<center><h4 style='color: red;'>B.com Sem-6 class has been deleted successfully.</h4></center>";
      }
      }
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