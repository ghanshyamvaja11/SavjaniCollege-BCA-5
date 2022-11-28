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
    <link rel="stylesheet" href="../CSS Files/Events.css">
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
    <a href="Events.php"  style="color: yellow; background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">Events</a>
    <a href="About us.php">About us</a>
    <a href="Downloads.php">Downloads</a>
    <a href="Contact us.php">Contact us</a>
</div>
<main>
    <section>
        <div id="sec1" class="sec">
            <h1 class="title">Days Celebration 2022</h1>
            <center><video id="Video" src="../../Videos/Days Celebration-2022.mp4" poster="../../Videos/Thumbnails/Days Celebration-2022.jpg" controls style='height: 56.81.54%; width: 82.9%; border: 2px solid white;'></video></center>
           <br>
        </center>
        </div>
    </section>
    
    <section>
        <div id="sec2" class="sec">
            <h1 class="title">Tech Fest</h1>
        <center>
        <br>
        <?php
    $path    = '../../Images/Events/Tech Fest/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Events/Tech Fest/<?php echo $file?>" alt="Tech Fest" class="imgs">
<?php
}
?>
        </center>
        </div>
    </section>
    <hr>

    <section>
        <div id="sec3" class="sec">
            <h1 class="title">Navratri</h1>
            <center>
            <br>
             <?php
    $path    = '../../Images/Events/Navratri/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Events/Navratri/<?php echo $file?>" alt="Navratri" class="imgs">
<?php
}
?>
            </center>
        </div>
    </section>
    <hr>

    <section>
        <div id="sec4" class="sec">
            <h1 class="title">Farewell Celebration</h1>
            <center>
                <br>
            </center>
            <marquee direction="left" scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">  
                 <?php
    $path    = '../../Images/Events/Farewell Celebration/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Events/Farewell Celebration/<?php echo $file?>" alt="Farewell Celebration" class="imgs">
<?php
}
?>
            </marquee>
        </div>
    </section>
    <hr>

    <section>
        <div id="sec5" class="sec">
   <h1 class="title">Days Celebration 2020</h1>
            <center>
                <br>
            </center>
            <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="6">
             <?php
    $path    = '../../Images/Events/Days Celebration/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Events/Days Celebration/<?php echo $file?>" alt="Days Celebration" class="imgs">
<?php
}
?>
            </marquee>
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