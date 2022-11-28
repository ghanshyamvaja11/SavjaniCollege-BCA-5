<?php
session_start();
include "../php files/db_connection.php";
if (empty($_SESSION['Username'] && $_SESSION['Password']) || $_SESSION['Username'] != 'Clerk@kmkks') {        
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

$spuid = $mobile = $OTP = 0;
$name = $course = $semester = $email = $password = $Confirm_password = $Secret_key = "";
$Count = 0;
 if(isset($_POST['Register'])){
     $spuid = $_POST['spuid'];
     $name = $_POST['name'];
     $course = $_POST['course'];
     $semester = $_POST['semester'];
     $mobile = $_POST['mobile'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $Confirm_password = $_POST['Confirm_password'];
     $OTP = rand(100000, 999999);
     $Secret_key = sha1($OTP);
 }
 if($_SERVER['REQUEST_METHOD'] == "POST"){
     echo "<center>";
     //spuid Validation
     if(strlen($spuid) != 10){
         echo "<strong style='color: red;'>Enter Valid SPU ID(10 Digits). <br></strong>";
         $Count = 1;
     }
    
    //mobile number validation
    if(strlen($mobile) != 10){
         echo "<strong style='color: red;'>Enter Valid Mobile Number. <br></strong>";
         $Count = 1;
     }
     
     //email validation
      if(empty($email)){
        echo "<center><strong>email : </strong>email is required. </center><br>";
    }
    else{
        //Check is email in well formed?
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<center><strong style='color: red;'>email format is not valid. </center><br>";
            $Count = 1;
        }
    }
     
    //password validation
    if(strlen($password) < 9){
        echo "<center><strong style='color: red;'>Your Password is too small. Enter More than 8 character in password.</strong><br></center>";
        $Count = 1;
     }
     
    else if($password != $Confirm_password){
        echo "<center><strong style='color:red;'>Your Entered Passwords are different from each other.Enter Same Password.</strong><br></center>";
        $Count = 1;
    }
    else if(!preg_match("#[0-9]+#", $password)) {
            echo "<center><strong style='color: red;'>Your Password Must Contain At Least 1 Number!</strong><br></center>";
            $Count = 1;
        }
    else if(!preg_match("#[A-Z]+#", $password)) {
           echo "<center><strong style='color: red;'>Your Password Must Contain At Least 1 Capital Letter!</strong><br></center>";
           $Count = 1;
        }
    else{
    if(!preg_match("#[a-z]+#", $password)) {
            echo "<center><strong style='color: red;'>Your Password Must Contain At Least 1 Lowercase Letter!</strong><br></center>";
            $Count = 1;
        }
    }
        if(isset($_POST['Register']) && $Count != 1){
        
        $sql = "INSERT INTO `Student Registration`(SPU_ID, Name, Course, Semester, Mobile, Email, Password, OTP, Secret_Key) VALUES ('$spuid', '$name', '$course', '$semester', '$mobile', '$email', '$password', '$OTP', '$Secret_key')";
        
        mysqli_query($conn, $sql); 
            echo "<h4 style='color: green;'>Student Registration is successful.</h4><br>";
        $subject = "Savajani College - Your Username & Password";
        $message = "Hi, " . $name ." \n \nYour Username : " . $spuid . "\nYour Password : " . $password;
        mail($email, $subject, $message);
        echo "</center>";
        }
}

$spuid = $mobile = $OTP = 0;
$name = $course = $semester = $email = $password = $Confirm_password = $Secret_key = "";
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
    <link rel="stylesheet" href="../CSS Files/Register.css">
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
<nav class="navbar">
    <a href="Welcome.php">HOME</a>
    <a href="Post new Announcements.php">Do Announcements</a>
    <a href="Student Registration.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Student Registration</a>
    <a href="Students Data.php">Students Data</a>
    <a href="Term Grant.php">Term Grant</a>
    <a href="Fees Info.php">Fees Info</a>
    <a href="Manage Queries.php">Manage Queries</a>
</nav>
<main>
    <section>
        <p>
        <center>
        <form action="" method="POST">
            <fieldset>
            <legend>Student Registration</legend>
<center><img src="../../Images/Login/Logged_in.jpg" style='background-color: white; height: 96px; width: 95px; border-radius: 59px;'></center>
                <p>
                <input type="number" id="spuid" class="fields" placeholder="Enter Your SPU ID *" name="spuid" inputmod="numeric" required /><br><br>
                <input type="text" id="name" class="fields" placeholder="Enter Your Name *" name="name"><br><br>
                <select name="course" id="course" class="fields" required>
                    <option selected>Select Your Course</option>
                    <option>BCA</option>
                    <option>BBA</option>
                    <option>B.com</option>
                </select><br>
                <select name="semester" id="semester" class="fields" required>
                    <option selected>Select Your Current Semester</option>
                    <option>Sem-1</option>
                    <option>Sem-2</option>
                    <option>Sem-3</option>
                    <option>Sem-4</option>
                    <option>Sem-5</option>
                    <option>Sem-6</option>
                </select><br><br>
            <input type="Number" name="mobile" id="mobile" placeholder="Enter Your Mobile Number *" class="fields" required><br>
            
  <input type="email" name="email" id="email" placeholder="Enter Your Email *" class="fields" required><br><br>
  
            <input type="password" name="password" id="Password" placeholder="Enter Your Password *" class="fields" required><br>
            <input type="password" name="Confirm_password" id="Password" placeholder="Confirm Password *" class="fields" required><br><br>
            <center><input type="submit" name="Register" value="Register" id="Register"></center>
        </form>
    </section>

<hr>
</main>

  <footer>
    <div id="Quick-Links">
        <h1>Quick Links</h1>
        <a target="_blank" href="https://www.bknmu.edu.in"><img src="../../Images/Header&Footer/Bknmu.png" alt="bknmu" style="background-color: transparent;"></a>
        <a target="_blank" href="https://www.veravaleducationsociety.org/index.php"><img src="../../Images/Header&Footer/veravaledu.png" alt="veravaleducationsociety" style="background-color: transparent;"></a>
        &nbsp;&nbsp;
        <a target="_blank" href="https://www.ugc.ac.in/"><img src="../../Images/Header&Footer/ugc_logo.png" alt="ugc_logo"></a>
    </div>
    <br>
    <div id="Contact">
        <center>
        <strong><span>Available @</span>&nbsp;Phone: 02876-246144</strong>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a href="https://www.youtube.com/channel/UC-81pH34mh1PNSgynAGskzQ/videos?view=0&sort=p&flow=grid" class="fa fa-youtube"></a>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a href="https://www.facebook.com/Kmsavjani-collage-585457021515265/" class="fa fa-facebook"></a> 
    </center>
        </div>
        <div id="headerNav">
            <a href="#header" style= "text-decoration:none;"><img src="../../Images/Header&Footer/Up-Arrow.png" alt="">
            <strong id="top">Top</strong>
            </a>
            </div>
        <center>
         <h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> Savjani College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>