<?php
session_start();
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
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 2.9px;'>Clerk Desk</h1></center>
<div class="navbar">
    <a href="Welcome.php">HOME</a>
    <a href="Post new Announcements.php">Do Announcements</a>
    <a href="Student Registration.php">Student Registration</a>
    <a href="Students Data.php">Students Data</a>
    <a href="Term Grant.php">Term Grant</a>
    <a href="Fees Info.php">Fees Info</a>
    <a href="Manage Queries.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Manage Queries</a>
</div>
</section>

<main>
    <hr>
    <center>
        <div id="sec">
        <h2>Recieved Queries</h2>
        <div id="form">
        <form Method='POST'>
            <center>
            <label for="email"><h4 >Enter the user email whose query has been solved.</h4></label></center>
        <input type='email' placeholder='Enter The email' id="email" name="email2" style="width: 42%;"> &nbsp; &nbsp;
        <input type='submit' value='solved' id="solved" name="solved">
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

$email = "";
if(isset($_POST['solved'])){
        $email = $_POST['email2'];
        
        if(empty($email))
        {
            echo "<center><h4 style=\"color: red\">Enter The user's email Address.</h4></center>";
        }
        
        $sql = "SELECT email FROM `Contact us`";
    $check = mysqli_query($conn, $sql);
    $duplicate_email=0;
    while($duplicates = $check->fetch_assoc())
    {
        if($email == $duplicates['email']){
         $duplicate_email = 1;
         
         $sql = "DELETE FROM `Contact us` WHERE email='$email'";
         mysqli_query($conn, $sql);
         echo "<center><strong style='color: red;'>$email query is removed from database.</strong></center>";
         echo "<p>";
         break;
        }
    }
    if($duplicate_email == 0 && !empty($email))
        {
            echo "<center><strong style='color: red'>Enter the Valid Email Address.</strong></center>";
            echo "<p>";
        }
}
    

//SQl query to select data from database
$sql = "SELECT *FROM `Contact us`";
$result = mysqli_query($conn, $sql);

 while($data=$result -> fetch_assoc())
  {
      echo "<center>";
      echo "<div id=\"show\">";
      echo "<strong style=\"color : darkblue;\">User : </strong>";
      echo "<strong>";
      echo  "<small style='color: yellow; display: inline; font-size: 15.9px;'>";
      echo $data['name'];
      echo "</strong> <br>";
      echo "<strong style=\"color:red; background-color: black; padding-up: 2px; padding-bottom: .5px;\">email : </strong>";
      echo "<span style=\"color: white; background-color: black; padding-left: 2px; padding-right: 2px;\">";
      echo $data['email'];
      echo "</span> <br>";
       echo "<strong style=\"color:darkblue;\">query type: </strong>";
      echo "<span style='color: black; font-weight: bolder;'>";
      echo $data['query_type'];
      echo "</span> <br>";
       echo "<strong style=\"color:darkblue;\">description : </strong>";
      echo "<span style=\"color: black\";>";
      echo $data['description'];
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