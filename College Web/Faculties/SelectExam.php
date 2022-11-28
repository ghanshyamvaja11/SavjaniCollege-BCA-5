<?php
session_start();
include "../php files/db_connection.php";

 if (empty($_SESSION['Username'] && $_SESSION['Password']) ||  $_SESSION['Login_type'] != 'Faculty') {        
         header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
         die( header( 'location: ../Login/Login.php'));
     }
//Input fields validation
if(isset($_POST['Logout'])){
    session_destroy();
    header( 'location: ../Login/Login.php');
}

$_SESSION['Class'] = "";
$Username = $_SESSION['Username'];
//$_SESSION['Username'] = $Username;
$_SESSION['Login_type'] = $_SESSION['Login_type'];
$_SESSION['Username'] = $_SESSION['Username'];
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
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Faculty Desk</h1></center>
<div class="navbar">
    <a href="Welcome.php">HOME</a>
    <a href="Upload_study_Material.php">Upload study Material</a>
    <a href="Remove_study_Material.php">Remove Study Material</a>
    <a href="SelectExam.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Upload Result</a>
    <a href="Remove Result.php">Remove Result</a>
</div>
</section>
<main>
    <hr>
        <center><h2 style='color: white; background-color: red; border-radius: 29px; padding-bottom: 4.2px;'>Select Exam</h2></center>
        <center>
        <div style='background-color: skyblue; display: inline-block; border-radius: 15px; width: 92%; padding: 9px;' id="pathSelection">
    <form action="" method="POST">
        <input type="text" name="Login_type" value="<?php echo $_SESSION['Login_type']; ?>" hidden>
        <input type="text" name="Username" value="<?php echo $_SESSION['Username']; ?>" hidden>
        <select name="Exam" style="height: 29.4px; width: 51%;" class="class" required>
            <option value="Select an Exam" selected>Select an Exam</option>
            <option value="BCA-1">BCA Sem-1</option>
            <option value="BCA-2">BCA Sem-2</option>
            <option value="BCA-3">BCA Sem-3</option>
            <option value="BCA-4">BCA Sem-4</option>
            <option value="BCA-5">BCA Sem-5</option>
            <option value="BCA-6">BCA Sem-6</option>
            
            <option value="BBA-1">BBA Sem-1</option>
            <option value="BBA-2">BBA Sem-2</option>
            <option value="BBA-3">BBA Sem-3</option>
            <option value="BBA-4">BBA Sem-4</option>
            <option value="BBA-5">BBA Sem-5</option>
            <option value="BBA-6">BBA Sem-6</option>
            
            <option value="B.com-1">B.com Sem-1</option>
            <option value="B.com-2">B.com Sem-2</option>
            <option value="B.com-3">B.com Sem-3</option>
            <option value="B.com-4">B.com Sem-4</option>
            <option value="B.com-5">B.com Sem-5</option>
            <option value="B.com-6">B.com Sem-6</option>
        </select><p>
        <input type="submit" value="Select Exam" name="selectExam" style="font-size: 19.9px; color: black; background-color: white;" class="see class">
</form>
<?php 
if(isset($_POST['selectExam'])){
    $_SESSION['Class'] = $_POST['Exam'];
    $_SESSION['Login_type'] = $_POST['Login_type'];
    $_SESSION['Username'] = $_POST['Username'];
    if($_SESSION['Class'] == 'Select an Exam'){
        echo "<h4 style='color: red;'>Select an Exam from above List</h4>";
    }
    else{
        $_SESSION['Username'];
    echo "<script>window.location='SetSubjects.php';</script>";
}
}?>
</main>
  <footer>
  <center>
         <h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> Savjani College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>