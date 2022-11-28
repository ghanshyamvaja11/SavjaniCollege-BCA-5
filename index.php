<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savjani college</title>
    <link rel="icon" type="image/x-icon" href="Images/Header&Footer/favicon.jpg">
    <link rel="stylesheet" href="../College Web/CSS Files/headerNmenuNfooter.css">
    <link rel="stylesheet" href="../College Web/CSS Files/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        .disclaimer{
            display: none;
        }
    #As:hover{
        color: red;
    }

    #Developer_Page{
        color: white; 
        font-size: 19.5px; 
        font-family: Arial,San-Serif; 
        background-color: RGB(219, 112, 18); 
        padding: 9.6px; 
        display: inline; 
        text-decoration: none; 
        border-radius: 29.4px;
    }
    #Developer_Page:hover{
        background-color: yellow;
        color: blue;
    }

    </style>
</head>
<body>
    <header id="header">
        <center>
            <img src="../../Images/Header&Footer/savjaniclg.png" alt="img"> 
        </center>
        <div style='background-color: yellow; text-align: center; padding-top: 5px; padding-bottom: 1px;'><a href="College Web/Login/Login.php"><img id="Login" src='../../Images/Login/Login.png'></a>
        </div>
        <div style='background-color: lightblue;; text-align: center; padding-top: 15px; padding-bottom: 11.9px;'>
        <a href="College Web/php files/Developer Page.php" style="text-decoration: none;"><h5 id="Developer_Page" style="">See The Developer Page</h5></a></div>
        </header>
<div class="navbar">
    <a href="/index.php" style="color: yellow;  background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">HOME</a>
    <a href="College Web/php files/Courses.php">Courses</a>
    <a href="College Web/Student Corner/Welcome.php">Student Corner</a>
    <a href="College Web/php files/Infrastructure.php">Infrastructure</a>
    <a href="College Web/php files/Events.php">Events</a>
    <a href="College Web/php files/About us.php">About us</a>
    <a href="College Web/php files/Downloads.php">Downloads</a>
    <a href="College Web/php files/Contact us.php">Contact us</a>
</div>

<main>
    <section>
        <div id="Motive">
            <center>
            <img src="https://www.veravaleducationsociety.org/images/007.jpg" alt="Campus">
            </center>
            <marquee direction="left">
                <h6>The aim of this institute is to provide management and computer science education at UG level to the aspirants who wants to be graduate in management and computer science. The institute also makes efforts for the students to develop their personality skills, presentation skills and to improve proficiency in english through scope.</h6>
            </marquee>
            <a href="College Web/php files/About us.php"><input type="button" value="About us"></a>
        </div>
    </section>
    <hr>

    <section>
        <div id="New-Announcements">
            <center>
            <fieldset>
                <legend>New Announcements</legend>
                <marquee direction="up" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()">
                    <?php
$path    = 'Announcements/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<a id="As" href="Announcements/<?php echo $file?>" download><?php echo $file; ?></a><br>
<?php
}
?>
                </marquee>
            </fieldset>
            </center>
        </div>
        <div id="View-More">
            <a href="College Web/php files/Announcements.php">
            <input type="button" value="View More>>">
            </a>
        </div>
    </section>
    <hr>

    <section>
        <div id="BKNMU">
            <h1>Affiliated With BKNMU</h1>
            <img src="https://www.iaspaper.net/wp-content/uploads/2019/11/BKNMU.jpg" alt="BKNMU">
        </div>
        <div id="BKNMU_div">
            <br>
            <a target="_Blank" href="https://www.bknmu.edu.in/"><input type="button" value="Click Here to Know More About BKNMU" id="BknmuBtn"></a>
        </div>
    </section>
    <hr>

    <section>
     <div id="photo-Gallary">
        <h1>Photo Gallary</h1>
        <marquee behavior="scrolling" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="9">
        <?php
    $path    = 'Images/Home/Photo_Gallary/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Home/Photo_Gallary/<?php echo $file?>">
<?php
}
?>
        </marquee>    
    </div>
    </section>
    <hr>

    <section>
        <div id="Video-Gallary">
            <center>
            <h1>Video Gallary</h1>
            <iframe src="https://www.youtube.com/embed/Wnz7dkWCgUA"></iframe>
            &nbsp;
            <iframe src="https://www.youtube.com/embed/n5zU4txCaVs"></iframe>
            </center>
        </div>    
    </section>
    <hr>

    <section>
        <div id="Principal">
        <center>
            <img src="https://www.veravaleducationsociety.org/images/principal/ravalsir.jpg" alt="Principal's images">
            <marquee direction="left" scrollamount="6" height="40" width="200">
            <h4>Principal : DR. Jigar Raval sir</h4>
            </marquee>
        </center>
        </div>
    </section>
    <hr>

</main>

<footer>
    <div id="Quick-Links">
        <h1>Quick Links</h1>
        <a target="_blank" href="https://www.bknmu.edu.in"><img src="https://bknmu.gipl.net/images/logo.png" alt="bknmu" style="background-color: transparent;"></a>
        <a target="_blank" href="https://www.veravaleducationsociety.org/index.php"><img src="https://www.veravaleducationsociety.org/images/banner1.png" alt="veravaleducationsociety" style="background-color: transparent;"></a>
        &nbsp;&nbsp;
        <a target="_blank" href="https://www.ugc.ac.in/"><img src="https://www.ugc.ac.in/img/ugc_logo.png" alt="ugc_logo"></a>
    </div>
    <br>
    <div id="Contact">
        <center>
        <strong><span>Available @</span>&nbsp;Phone: 02876-246144</strong>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a href="https://www.youtube.com/channel/UC-81pH34mh1PNSgynAGskzQ/videos?view=0&sort=p&flow=grid" class="fa fa-youtube"></a>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a href="https://www.facebook.com/Kmsavjani-collage-585457021515265/" class="fa fa-facebook"></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    </center>
        </div>
        <div id="headerNav">
            <a href="#header"><img src="Images/Header&Footer/Up-Arrow.png" alt=""></a>
            <strong id="top">Top</strong>
            </div>
         <center>
<h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> Savjani College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>
