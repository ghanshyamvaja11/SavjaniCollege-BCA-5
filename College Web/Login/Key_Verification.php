<?php
session_start();
if (empty($_SESSION['Login_type'])) {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: Login.php'));
    }
    
//Database Connection
include '../php files/db_connection.php';

$key = "";
 if(isset($_POST['Varify'])){
$_SESSION['Login_type'];
$_SESSION['Username'];
$key = $_POST['key'];
$Count1 = $Count2 = $Count3 = 1;
//Principal Key varification
 $sql = "SELECT *FROM `Login` WHERE Login_type='Principal'";
    
    $check = mysqli_query($conn, $sql);
   if($_SESSION['Login_type'] == "Principal")
   {
    while($Match = $check->fetch_assoc())
    {
        if($key == $Match['Secret_Key']){
            $OTP =  rand(100000, 999999);
            
        $sql = "UPDATE `Login` SET `Secret_Key`= '$OTP' WHERE `Login_type`='Principal'";
        mysqli_query($conn, $sql);
    $Count1 = 0;
   echo "<script>window.location= 'Create_New_Password.php'</script>";
   exit();
}
else
{
    if($Count1 == 1){
    echo "<center><h4 style='color: red;'>Enter valid Secret Key</h4></center>";
    break;
    }
}
}
    }
    
    //Clerk Key varification
  if($_SESSION['Login_type'] == "Clerk")
  {
      $sql = "SELECT *FROM `Login` WHERE Login_type='Clerk'";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($key == $Match['Secret_Key']){

            $OTP =  rand(100000, 999999);
            
        $sql = "UPDATE `Login` SET `Secret_Key`= '$OTP' WHERE `Login_type`='Clerk'";
        mysqli_query($conn, $sql);
        
  header("location: Create_New_Password.php", true, 301);
}
else
{
    echo "<center><h4 style='color: red;'>Enter valid Secret Key</h4></center>";
}
}
    }
    
   /* //Librarian Key varification
  if($_SESSION['Login_type'] == "Librarian")
  {
      $sql = "SELECT *FROM `Login` WHERE Login_type='Librarian'";
    
    $check = mysqli_query($conn, $sql);

      $OTP =  rand(100000, 999999);
            
        $sql = "UPDATE `Login` SET `Secret_Key`= '$OTP' WHERE `Login_type`='Librarian'";
        mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($key == $Match['Secret_Key']){
    
  header("location: Create_New_Password.php", true, 301);
}
else
{
    echo "<h4 style='color: red;'>Enter valid Secret Key<h4>";
}
}
    } */
    
    
    //Faculties Key varification
  if($_SESSION['Login_type'] == "Faculty")
   {
       $Username = $_SESSION['Username'];
       $sql = "SELECT *FROM `Faculties` WHERE Endorsement_No='$Username'";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($key == $Match['Secret_Key']){
            $OTP =  rand(100000, 999999);
            
        $sql = "UPDATE `Faculties` SET `Secret_Key`= '$OTP' WHERE `Endorsement_No`=$Username";
        mysqli_query($conn, $sql);
    $Count2 = 0;
 echo "<script>window.location= 'Create_New_Password.php'</script>";
 exit();
}
else{
    if($Count2 == 1){
        echo "<center><h4 style='color: red;'>Enter valid Secret Key</h4></center>";
        break;
    }
}
}
    }
    
    //Student Key varification
   if($_SESSION['Login_type'] == "Student")
   {
       $Username = $_SESSION['Username'];
       $sql = "SELECT *FROM `Student Registration` WHERE `SPU_ID`=$Username";
    
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($key == $Match['Secret_Key']){
            $OTP =  rand(100000, 999999);
            
        $sql = "UPDATE `Student Registration` SET `Secret_Key`= '$OTP' WHERE `SPU_ID`=$Username";
        mysqli_query($conn, $sql);
    $Count3 = 0;
echo "<script>window.location= 'Create_New_Password.php' </script>";
exit();
}
else
{
    if($Count3 == 1){
    echo "<center><h4 style='color: red;'>Enter valid Secret Key</h4></center>";
    break;
    }
}
}
    }
 }
 mysqli_close($conn);

$key = "";
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
    <link rel="stylesheet" href="../CSS Files/Forgot_Password.css">
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
            <legend>Key Varification</legend>
<center><img src="../../Images/Login/Logged_in.jpg" style='background-color: white; height: 96px; width: 95px; border-radius: 59px;'><br>
<?php
if($_SESSION['Login_type'] != ("Student" && "Faculty"))
{
echo "<h4 style='color: white;'>";
echo  $_SESSION['Login_type'];
echo "</h4>";
}
else
{
    echo "<h4 style='color: white;'>" . $_SESSION['Username'] . "</h4>";
}
?>
</center>
                <p>
            <input type="text" name="key" id="key" placeholder="Secret key *" required><br><br>
            <center><input type="submit" name="Varify" value="Verify" id="Check"></center>
            </fieldset>
        </form>
        <h4 style='color: white; background-color: green;'>Check your Registered Email Inbox.</h4>
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