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
    <link rel="stylesheet" href="../CSS Files/index.css">
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
    <a href="../Student Corner/Welcome.php">Student Corner</a>
    <a href="Infrastructure.php">Infrastructure</a>
    <a href="Events.php">Events</a>
    <a href="About us.php">About us</a>
    <a href="Downloads.php">Downloads</a>
    <a href="Contact us.php" style="color: yellow;  background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">Contact us</a>
</div>
<main>
    <section>
        <div id="sec">
        <div id="Address">
        <h1>Corporate Address</h1>
        <h2>Shri K.M.K.K.S. Savjani BBA/BCA College</h2><br>
        <div class="address">
        <strong class="address">Opp. Civil Hospital,</strong><br>
        <strong class="address">Rajendra Bhuvan Road,</strong><br>
        <strong class="address">Veraval - 362265,</strong><br>
        <strong class="address">District: Gir-Somnath(Gujarat).</strong><br>
        </div>
        <p>
            <div class="Contact">
            <strong><span id="phone">Phone:</span> 02876-246144</strong><br>
            <strong><span id="Fax">Fax:</span> 02876-246144</strong><br>
            <strong><span id="Email">Email:</span> <input type="email" name="email" id="email" value="info@veravaledusociety.org" disabled></strong><br>
            </div>
        <a href="https://www.youtube.com/channel/UC-81pH34mh1PNSgynAGskzQ/videos?view=0&sort=p&flow=grid" class="fa fa-youtube"></a>&nbsp;&nbsp;
        <a href="https://www.facebook.com/Kmsavjani-collage-585457021515265/" class="fa fa-facebook"></a> 
        </div>&nbsp;&nbsp;
    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.0537893503597!2d70.35742131493065!3d20.91015548606276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bfd32384cab82b9%3A0x72360426bec9a726!2sShri.%20K.M.%20%26%20Smt.%20K.K%20Savjani%20BBA%2FBCA%20College!5e0!3m2!1sen!2sin!4v1654001967853!5m2!1sen!2sin" style="border: 4px solid blue;" allowfullscreen="0" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<p>
<p>
    
    <section>
        <center><h2 style="background-color: transparent; color: red; display: inline;">OR</h2></center>
        <br>
    <center>
        <form action="" method="POST">
            <fieldset>
            <legend>Contact Form</legend>
            <input type="text" name="name" id="name" placeholder="Enter Your Name *" required><br><br>
            <input type="email" name="email" id="email2" placeholder="Enter Your Email *" required><br><br>
            <select name="query_type" id="query" required>
                <option value="" selected>Select Query Type</option>
                <option value="Admission">Admission Related</option>
                <option value="Any Complaint">Any Complaint</option>
                <option value="Exam">Exam Related</option>
                <option value="Scholarship">Scholarship Related</option>
                <option value="Library">Library Related</option>
                <option value="Computer Lab">Computer lab Related</option>
            </select><br><br>
            <textarea name="description" id="description" cols="20" rows="5" placeholder="describe Your Query in detail *"></textarea><br>
            <center><input type="submit" name="submit" value="Submit" id="Submit"></center>
            </fieldset>
        </form>
    </section>
        
        <!--PHP Database Code-->
<?php
include 'db_connection.php';

//Form input fields variable
 $name = $email = $query = $description = "";
 if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$query = $_POST['query_type'];
$description = str_replace("'", "&apos;", $_POST['description']);
    }
 
//Input fields validation
if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "<span style=\"color: white; background-color: red;\">";
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
        echo "<strong>Query description: </strong>Describe Your Selected Query in Detail.";
    }
    echo "</span>";
    
    $sql = "SELECT email FROM `Contact us`";
    $check = mysqli_query($conn, $sql);
    $duplicate_email=0;
    while($duplicates = $check->fetch_assoc())
    {
        if($email == $duplicates['email']){
            echo "<br>";
            echo "<center><strong style=\"color: white; background-color: red;\">This email is already registered in our database.Enter another email Address.</strong></center>";
            echo "<br>";
            $duplicate_email = 1;
            break;
        }
    }
    
    //Submit Validation
    if(isset($_POST['submit']) && !empty($name) && preg_match("/^[a-zA-Z ]*$/",$name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($description) && $duplicate_email == 0){
        
        $sql = "INSERT INTO `Contact us` VALUES('$name', '$email', '$query', '$description')";
        mysqli_query($conn, $sql);
            echo "<center><h4 style=\"color: white; background-color: green;\">Your Query Has been Submitted Successfully.<h4></center>";
    }
    
}

$name = $email = $query = $description = "";

//Close Connection
mysqli_close($conn);
?>

<hr>
<div id="feedback_link">
<center id="View-More"><a href="feedbacks.php"><input type="button" value="Click here for leave a Feedback"></a></center>
</div>
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
        <h1 id="copyright">&copy;&nbsp;2022&nbsp;Savjani College - Veraval and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>