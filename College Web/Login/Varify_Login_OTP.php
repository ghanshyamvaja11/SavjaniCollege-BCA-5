<?php
session_start();
if (empty($_SESSION['Login_type']) && empty($_SESSION['Username'])) {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: Login.php'));
    }

//Database Connection
include '../php files/db_connection.php';
    
$Login_type = $Username = $Password = $OTP = "";
 if(isset($_POST['Verify'])){
$OTP = $_POST['OTP'];
$Count = "";

    //OTP Validation for Principal
    $sql = "SELECT *FROM `Login` WHERE Login_type='Principal'";
    
    $check = mysqli_query($conn, $sql);
   if($_SESSION['Login_type'] == "Principal")
   {
    while($Match = $check->fetch_assoc())
    {
        if($OTP == $Match['OTP']){
            
        //Change old OTP using rand()
        $OTP = rand(100000, 999999);
        $sql = "UPDATE `Login` SET `OTP`='$OTP' WHERE `Login_type`='Principal'";
        mysqli_query($conn, $sql);
    
    $Count = 0;
    header("location: ../Principal/Welcome.php", true, 301);
    
}
else{
       echo "<center><h4 style='color: red; display: block-inline;'>Enter Valid OTP.</h4></center>";
       break;
   }
        }
   }
  else if($_SESSION['Login_type'] == "Clerk")
  {
    //OTP Validation for Clerk
    $sql = "SELECT *FROM `Login` WHERE Login_type='Clerk'";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($OTP == $Match['OTP']){
            
        //Change old OTP using rand()
        $OTP = rand(100000, 999999);
        $sql = "UPDATE `Login` SET `OTP`='$OTP' WHERE `Login_type`='Clerk'";
        mysqli_query($conn, $sql);
        
    header("location: ../Clerk/Welcome.php", true, 301);
}
else{
    echo "<center><h4 style='color: red; display: block-inline;'>Enter Valid OTP.</h4></center>";
}
        }
  }
//   else if($_SESSION['Login_type'] == "Librarian")
//   {
//     //OTP Validation for Librarian
//     $sql = "SELECT *FROM `Login` WHERE Login_type='Librarian'";
    
//     $check = mysqli_query($conn, $sql);
//     while($Match = $check->fetch_assoc())
//     {
//         if($OTP == $Match['OTP']){
            
//         //Change old OTP using rand()
//         $OTP = rand(100000, 999999);
//         $sql = "UPDATE `Login` SET `OTP`='$OTP' WHERE `Login_type`='Librarian'";
//         mysqli_query($conn, $sql);
        
//     header("location: ../Librarian/Welcome.php", true, 301);
// }
// else{
//     echo "<center><h4 style='color: red; display: block-inline;'>Enter valid OTP.</h4></center>";
// }
//         }
//     }
   
  /*else if($_SESSION['Login_type'] == "Student")
   {
        //OTP Validation for Student
        $Username = $_SESSION['Username'];
       $sql = "SELECT *FROM `Student Registration`";
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($OTP == $Match['OTP']){
            
        //Change old OTP using rand()
        $OTP = rand(100000, 999999);
        $sql = "UPDATE `Student Registration` SET `OTP`='$OTP' WHERE `SPU_ID`=$Username";
        mysqli_query($conn, $sql);
        
    header("location: ../Student Corner/Welcome_User.php", true, 301);
    
}
 else{
    echo "<center><h4 style='color: red; display: block-inline;'>Enter Valid OTP.</h4></center>";
}
        }
   }*/
   
   if($_SESSION['Login_type'] == "Faculty")
   {
       $Username = $_SESSION['Username'];
       $sql = "SELECT *FROM `Faculties` WHERE `Endorsement_No`='$Username'";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        //echo $Match['OTP'];
        if($OTP == $Match['OTP']){
    //Old OTP Change using rand()
            $OTP = rand(100000, 999999);
        $sql = "UPDATE `Faculties` SET `OTP`= '$OTP' WHERE `Endorsement_No`=$Username";
        mysqli_query($conn, $sql);
    
    $Count = 0;
   echo "<script>window.location= '../Faculties/Welcome.php'</script>";
   exit();
}
else{
        echo "<center><h4 style='color: red; display: block-inline;'>Enter Valid OTP.</h4></center>";
        break;
    }
}
    }
   
   if($_SESSION['Login_type'] == "Student")
   {
       $Username = $_SESSION['Username'];
       $sql = "SELECT *FROM `Student Registration` where SPU_ID=$Username";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        // echo $Match['OTP'];
        if($OTP == $Match['OTP']){
    //Old OTP Change using rand()
            $OTP = rand(100000, 999999);
            
        $sql = "UPDATE `Student Registration` SET `OTP`= '$OTP' WHERE SPU_ID=$Username";
        mysqli_query($conn, $sql);
    
    
    $Count = 0;
   echo "<script>window.location= '../Student Corner/Welcome_User.php'</script>";
   exit();
}
else{
        echo "<center><h4 style='color: red; display: block-inline;'>Enter Valid OTP.</h4></center>";
        break;
    }
}
    }
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
    <link rel="stylesheet" href="../CSS Files/Login.css">
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
#Verify:hover{
    background-color: red;
    font-color: white;
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
    <a href="/index.php">HOME</a>
    <a href="../php files/Courses.php">Courses</a>
    <a href="../Student Corner/Welcome.php">Student Corner</a>
    <a href="../php files/Infrastructure.php">Infrastructure</a>
    <a href="../php files/Events.php">Events</a>
    <a href="../php files/About us.php">About us</a>
    <a href="../php files/Downloads.php">Downloads</a>
    <a href="../php files/Contact us.php">Contact us</a>
</nav>
<main>
    <section>
        <p>
        <center>
        <form action="" method="POST">
            <fieldset>
            <legend>Login with OTP</legend>
<center><img src="../../Images/Login/Logged_in.jpg" style='background-color: white; height: 96px; width: 95px; border-radius: 59px;'><br>
<?php 
if($_SESSION['Login_type'] != ("Student" && "Faculty"))
{
echo "<h4 style='color: white;'>";
echo $_SESSION['Login_type'];
echo "</h4>";
}
else
{
echo "<h4 style='color: white;'>";
echo $_SESSION['Username'];
echo "</h4>";
}
?>
</center>
                <p>
            <input type="Number" name="OTP" id="Username" placeholder="Enter OTP *" required><br><br>
            <center><input type="submit" name="Verify" value="Verify" id="Verify" style="font-size: 19.9px; border-radius: 29.9px; font-color: black; font-weight: bolder;  background-color: white;">
            </center>
            </fieldset>
        </form>
        <h4 style="color: white; background-color: green;">Check your Registered Email's Inbox.</h4>
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