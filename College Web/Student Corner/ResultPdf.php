<?php
session_start();
if (empty($_SESSION['Username'] ||$_SESSION['Password']) || $_SESSION['Login_type'] != 'Student') {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: ../Login/Login.php'));
    }
//Input fields validation
if(isset($_POST['Logout'])){
    session_destroy();
    header( 'location: ../Login/Login.php');
}
if(isset($_POST['Change_Password'])){
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
    <link rel="stylesheet" href="../CSS Files/Resultss.css">
    <link rel="stylesheet" href="../CSS Files/Admin_Welcome.css">
    <link rel="stylesheet" href="../CSS Files/Student_Welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .disclaimer{
            display: none;
        }
        .Study_Material{
            width: 99.6%;
        }
        .Study_Material a{
            font-size: 92.4%;
            overflow-y: hidden;        
        }
        legend{
            text-align: center;
            font-size: 29px;
            color: white;
            border-radius: 19.9px;
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
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Student Corner</h1></center>
<div class="navbar">
    <a href="Welcome_User.php">HOME</a>
    <a href="Study Materials.php">Study-Material</a>
    <a href="Results.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Result</a>
    <a href="New Announcements.php">Announcements</a>
</div>
</section>

<main>
    <br>
    <section>
        <div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "BCA" && $check['Semester'] == "Sem-1"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">BCA Sem-1 Results</legend>
                <?php
    $path    = '../../Results/BCA Sem-1/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/BCA Sem-1/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "BCA" && $check['Semester'] == "Sem-2"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">BCA Sem-2 Results</legend>
                <?php
    $path    = '../../Results/BCA Sem-2/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/BCA Sem-2/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "BCA" && $check['Semester'] == "Sem-3"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">BCA Sem-3 Results</legend>
                <?php
    $path    = '../../Results/BCA Sem-3/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/BCA Sem-3/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "BCA" && $check['Semester'] == "Sem-4"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">BCA Sem-4 Results</legend>
                <?php
    $path    = '../../Results/BCA Sem-4/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/BCA Sem-4/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "BCA" && $check['Semester'] == "Sem-5"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">BCA Sem-5 Results</legend>
                <?php
    $path    = '../../Results/BCA Sem-5/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/BCA Sem-5/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "BCA" && $check['Semester'] == "Sem-6"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">BCA Sem-6 Results</legend>
                <?php
    $path    = '../../Results/BCA Sem-6/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/BCA Sem-6/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
    <br>
    
    <!--BBA Results-->
        <div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "BBA" && $check['Semester'] == "Sem-1"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">BBA Sem-1 Results</legend>
                <?php
    $path    = '../../Results/BBA Sem-1/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/BBA Sem-1/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "BBA" && $check['Semester'] == "Sem-2"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">BBA Sem-2 Results</legend>
                <?php
    $path    = '../../Results/BBA Sem-2/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/BBA Sem-2/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "BBA" && $check['Semester'] == "Sem-3"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">BBA Sem-3 Results</legend>
                <?php
    $path    = '../../Results/BBA Sem-3/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/BBA Sem-3/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "BBA" && $check['Semester'] == "Sem-4"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">BBA Sem-4 Results</legend>
                <?php
    $path    = '../../Results/BBA Sem-4/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/BBA Sem-4/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "BBA" && $check['Semester'] == "Sem-5"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">BBA Sem-5 Results</legend>
                <?php
    $path    = '../../Results/BBA Sem-5/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/BBA Sem-5/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "BBA" && $check['Semester'] == "Sem-6"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">BBA Sem-6 Results</legend>
                <?php
    $path    = '../../Results/BBA Sem-6/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/BCA Sem-6/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
    <br>
    
    <!--B.com Results-->
       <div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "B.com" && $check['Semester'] == "Sem-1"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">B.com Sem-1 Results</legend>
                <?php
    $path    = '../../Results/B.com Sem-1/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/B.com Sem-1/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "B.com" && $check['Semester'] == "Sem-2"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">B.com Sem-2 Results</legend>
                <?php
    $path    = '../../Results/B.com Sem-2/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/B.com Sem-2/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "B.com" && $check['Semester'] == "Sem-3"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">B.com Sem-3 Results</legend>
                <?php
    $path    = '../../Results/B.com Sem-3/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/B.com Sem-3/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "B.com" && $check['Semester'] == "Sem-4"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">B.com Sem-4 Results</legend>
                <?php
    $path    = '../../Results/B.com Sem-4/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/B.com Sem-4/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "B.com" && $check['Semester'] == "Sem-5"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">B.com Sem-5 Results</legend>
                <?php
    $path    = '../../Results/B.com Sem-5/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/B.com Sem-5/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
<div class="Study_Material">
            <center>
            <?php
            include "../php files/db_connection.php";
            
            $SPU_ID = $_SESSION['Username'];
            $sql = "SELECT Course, Semester From `Student Registration` where `SPU_ID`=$SPU_ID";
            $result = mysqli_query($conn, $sql);
            
            while($check = $result -> fetch_assoc()){
                if($check['Course']  == "B.com" && $check['Semester'] == "Sem-6"){
            ?>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">B.com Sem-6 Results</legend>
                <?php
    $path    = '../../Results/B.com Sem-6/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Results/B.com Sem-6/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
}
}
?>
            </fieldset>
            </center>
        </div>
            </center>
    </section>
</main>

<footer>
<center>
<h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> Savjani College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>