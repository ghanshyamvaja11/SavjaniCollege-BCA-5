<?php

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
    <link rel="stylesheet" href="../CSS Files/about us.css">
    <link rel="stylesheet" href="../CSS Files/Infrastructure.css">
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
        <a href="About us.php"  style="color: yellow; background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">About us</a>
        <a href="Downloads.php">Downloads</a>
        <a href="Contact us.php">Contact us</a>
</div>

<main>
    <section>
        <div class="Section">
        <center><img src="../../Images/About us/Logo.png" alt="logo" id="c-logo"></center>
        <p><h4>The trust has established an institute named <span class="hl" style="color: red;">SHRI K.M. SAVJANI AND SMT. K.K. SAVJANI BBA/BCA COLLEGE VERAVAL</span> at the heart of the veraval city with the help of sponsored donation by <span class="hl" style="color: red;">SHRI KAKUBHAI MANJIBHAI SAVJANI AND SMT. KANCHANBEN KAKUBHAI SAVJANI</span>.</h4></p>
        <p><h4>The aim of this institute is to provide management and computer science education at UG level to the aspirants who wants to be graduate in management and computer science. The institute also makes efforts for the students to develop their personality skills, presentation skills and to improve proficiency in english through scope.</h4></p>
        <p><h4>We all trustees express our sincere thanks to <span class="hl" style="color: red;">SHRI KAKUBHAI MANJIBHAI SAVJANI AND SMT. KANCHANBEN KAKUBHAI SAVJANI</span>.</h4></p>
        </div>
    </section>
<hr>

<section>
    <div id="trustees" class="Section">
        <center><h1 class="Section-head">Our Trustees</h1></center>
            <marquee direction="left" Scrollamount="6">
       <?php
    $path    = '../../Images/About us/Trustees/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/About us/Trustees/<?php echo $file?>" alt="Trustees" class="imgs">
<?php
}
?>
        </marquee>
    </div>
</section>
<hr>

    <section>
        <div class="Section">
             <center><h1 class="Section-head">Our Introduction Video</h1></center>
        <center><iframe src="https://youtube.com/embed/Wnz7dkWCgUA" id="video"></iframe></center>
        </div>
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
        <h1 id="copyright">&copy;&nbsp;2022&nbsp;Savjani College - Veraval and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>