<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savjani College</title>
<link rel="icon" type="image/x-icon" href="../../Images/Header&Footer/favicon.jpg">
    
    <link rel="stylesheet" href="../CSS Files/headerNmenuNfooter.css">
    <link rel="stylesheet" href="../CSS Files/Contact us.css">
    <link rel="stylesheet" href="../CSS Files/feedback.css">
    
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
        <div style='background-color: yellow; text-align: center; padding-top: 5px; padding-bottom: 1px;'><a href="../Login/Login.php"><img id="Login" src='../../Images/Login/Login.png'></a></div>
        </header>
<div class="navbar">
    <a href="../../index.php">HOME</a>
    <a href="Courses.php">Courses</a>
    <a  href="../Student Corner/Welcome.php">Student Corner</a>
    <a href="Infrastructure.php">Infrastructure</a>
    <a href="Events.php">Events</a>
    <a href="About us.php">About us</a>
    <a href="Downloads.php">Downloads</a>
    <a href="Contact us.php">Contact us</a>
</div>
<main>

    <section>
        <br>
    <center>
        <form action="" method="POST">
            <fieldset style= "background-color: red;">
            <legend style=" color: white; background-color: orange; border: 2px solid black;">Feedback Form</legend>
            <input type="text" name="name" id="name" placeholder="Enter Your Name *" required><br><br>
            <input type="email" name="email" id="email2" placeholder="Enter Your Email *" required><br><br>
            <textarea name="description" id="description" cols="20" rows="5" placeholder="Write Your Feedback *"></textarea><br>
            <center><input type="submit" name="submit" value="Submit" id="Submit"></center>
            </fieldset>
        </form>
    </section>
        
        <!--PHP Database Code-->
<?php
//Database Connection
include "db_connection.php";
$Count = 0;

//Form input fields variable
 $name = $email = $description = "";
 if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$description = str_replace("'", "&apos;", $_POST['description']);
    }
 
//Input fields validation
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    echo "<span style=\"color: red; \">";
    //name validation
    if(empty($name)){
        echo "<strong>name : </strong>name is Required.";
    }
    else{
        if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            echo "<strong>name : </strong>Only Alphabets & White Spaces are allowed.<br>";
        }
    }
    
    //email Validation
    if(empty($email)){
        echo "<strong>email : </strong>email is required. <br>";
    }
    else{
        //Check is email in well formed?
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<strong>email: </strong>email format is not valid. <br>";
        }
    }
    
    //description validation
    if(empty($description)){
        echo "<strong>description: </strong>Please Write Your Feedback.";
    }
    
    echo "</span>";
    $sql = "SELECT email FROM `Feedback`";
    $check = mysqli_query($conn, $sql);
    $duplicate_email=0;
    while($duplicates = $check->fetch_assoc())
    {
        if($email == $duplicates['email']){
                echo "<br>";
            echo "<center><strong style=\"color: red;\">This email is already registered in our database.Enter another email Address.</strong></center>";
            echo "<br>";
            $duplicate_email = 1;
            break;
        }
    }
    
    //Submit Validation
    if(isset($_POST['submit'])&&(!empty($name) && preg_match("/^[a-zA-Z ]*$/",$name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($description) && $duplicate_email == 0)){
        
        $sql = "INSERT INTO `Feedback` (name, email, description, date)  VALUES('$name', '$email', '$description', current_timestamp())";
        mysqli_query($conn, $sql);
            echo "<center><h4 style=\"color: green;\">Thank You for Your Feedback.</h4></center>";
            $Count = 1;
}
}

echo "<hr>";
echo "<center>";
echo "<h1 style=\"black: white; background-color: yellow; border-radius: 29px; display: inline; padding-left: 6px; padding-right: 5.9px;\">Recieved Feedbacks</h1>";
echo "</center>";
echo "<br>";
  $sql = "SELECT *FROM `Feedback` ORDER BY SerialNumber desc";
  $results = mysqli_query($conn, $sql);

  echo "<marquee direction=\"up\" scrollamount=\"5\" height= 400px; onmouseover= this.stop() onmouseout= this.start()>";
  while($data=$results -> fetch_assoc())
  {
      if($Count == 1)
      {
      echo "<center>";
      echo "<div id=\"first\">";
      echo "<strong style=\"color : yellow;\">User -> </strong>";
      echo "<strong style=\"color: white;\">";
      echo $data['name'];
      echo "</strong> <br>";
      echo "<strong style=\"color:yellow;\">Feedback : </strong>";
      echo "<span>";
      echo $data['description'];
      echo "</span>";
      echo "<br><br>";
      echo "<small style='color: black; text-align: center; font-size: 11.9px; font-weight: bold'>published on: ";
            echo date('F j, Y', strtotime($data['date']));
      echo "</small>";
      echo "</div>";
      echo "</center>";
      echo "<p>";
      
      $Count = 0;
      }
      else
      {
      echo "<center>";
      echo "<div id=\"show\">";
      echo "<strong style=\"color : darkblue;\">User -> </strong>";
      echo "<strong style=\"color: yellow\">";
      echo $data['name'];
      echo "</strong> <br>";
      echo "<strong style=\"color:darkblue;\">Feedback : </strong>";
      echo "<span>";
      echo $data['description'];
      echo "</span>";
      echo "<br><br>";
      echo "<small style='color: black; text-align: center; font-size: 29.4; font-weight: bold;'>published on: ";
      echo date('F j, Y', strtotime($data['date']));
      echo "</small>";
      echo "</div>";
      echo "</center>";
      echo "<p>";
      }
  }
  echo "</marquee>";
  
  $name = $email = $description = "";
?>

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
        <h1 id="copyright">&copy;&nbsp;2022&nbsp;Savjani College - Veraval and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>