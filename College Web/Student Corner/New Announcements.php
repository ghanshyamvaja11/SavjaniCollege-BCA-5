<?php
session_start();
if (empty($_SESSION['Username'] && $_SESSION['Password']) || $_SESSION['Login_type'] != 'Student') {        
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
    <link rel="stylesheet" href="../CSS Files/Study Materials.css">
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
    <a href="Result.php">Result</a>
    <a href="New Announcements.php"  style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Announcements</a>
</div>
</section>

<main>
    <br>
    <section>
        <div class="Study_Material">
            <center>
            <fieldset style="width: 87%;">
                <legend style="background-color: red;">Announcements</legend>
                <?php
    $path    = '../../Announcements/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a href="../../Announcements/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
?>
            </fieldset>
            </center>
        </div>
        <br>
        <br>
    </section>
</main>

<footer>
         <center>
<h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> Savjani College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>