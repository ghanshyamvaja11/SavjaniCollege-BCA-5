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
    <a href="Infrastructure.php" style="color: yellow; background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">Infrastructure</a>
    <a href="Events.php">Events</a>
    <a href="About us.php">About us</a>
    <a href="Downloads.php">Downloads</a>
    <a href="Contact us.php">Contact us</a>
</div>

<main>
    <section>
        <div id="ClassRoom" class="Section">
            <center><h1 class="Section-head">Class Room</h1></center>
    <center>
        <?php
        $count = 0;
        $path    = '../../Images/Infrastructure/Class/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ $count += 1;}
if ($count > 1){
    echo "<marquee>";
foreach($files as $file){ ?>
<img src="../../Images/Infrastructure/Class/<?php echo $file?>" alt="Classroom" class="imgs">
<?php
}
echo "</marquee>";
}
else{
foreach($files as $file){ ?>
<img src="../../Images/Infrastructure/Class/<?php echo $file?>" alt="Classroom" class="imgs">
<?php
}
}
?></center>
    <h4><span id="Name">Shri K.M.K.K.S. Savjani College</span> has modern Ten Lecture Halls (Class Rooms) and two Tutorial Class Rooms with modern audio-visual equipments.  All the class-room / tutorial rooms are equipped with Audio-Visual System and CCTV Cameras with  recording facilities.</h4>
    </div>
    </section>
    <hr>

    <section>
        <div id="Computer-Lab" class="Section">
            <center><h1 class="Section-head">Computer Lab</h1></center>
            <marquee direction="left" Scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">
       <?php
    $path    = '../../Images/Infrastructure/Lab/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Infrastructure/Lab/<?php echo $file?>" alt="lab" class="imgs">
<?php
}
?>
        </marquee>
        <h4>Savjani College provides state of the art desktop computers to all its faculty members and staff. The Institute has <span  class="hl">two computer labs with more than 100 computers</span> connected by a very fast and well-connected local area network (LAN) with <span class="hl">5 MBPS  broadband internet connectivity</span>. The Institute through its campus wide network provides connectivity to its resources such as Library information, printing and file access, Internet and Mail Services. Institute has permitted to the students to use their computers and Internet services in the campus is <span class="hl">equipped with network access points</span> that enable the student to have access to all these resources. However, a student is expected to possess a network enabled PC to gain such access.</h4>
        </div>
    </section>
    <hr>

    <section>
    <div id="Library" class="Section">
        <center><h1 class="Section-head">Library</h1></center>
        <marquee direction="left" scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">
        <?php
    $path    = '../../Images/Infrastructure/Library/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../Images/Infrastructure/Library/<?php echo $file?>" alt="Library" class="imgs">
<?php
}
?>
        </marquee>
    <p><h4>Library is <span class="hl"> in 120 Sq.M. area</span> having a <span class="hl">seating capacity for more than 60 students</span>. In addition to the Reading Facilities in Library Premises, the Institute has <span class="hl">special Reading cubical rooms spread over in 80 Sq.M</span> for the serious reading.  The library supports the teaching and research programmes of the Institute.  <span class="hl">Library has huge collection</span> of text books, reference books and books of general reading, journals, periodicals, multimedia facilities, Working Papers and Fieldwork reports.</h4></p>

        <p><h4>In addition to this, the library is equipped with facilities <span class="hl">such as Multimedia.</span></h4></p>

        <p><strong>(i) Books :</strong>&nbsp;<span class="ss">Currently, <span class="hl">Library houses around 12,000 books</span>; in the disciplines of Management (2200 +) , Computer Applications (2400 +), Cooperation and others 200.</span></p>

        <p><strong>(ii) Multimedia PCs :</strong>&nbsp;<span class="ss">The Institute has <span class="hl"> 4 multimedia PCs in the Library</span> for accessing of online journals and other reading available on various online resources.</span></p>

        <p><strong>Electronic Material:</strong>&nbsp;<span class="ss">The Institute has <span class="hl">more than 100 CDs/DVDs</span> and <span class="hl">50 Video Recordings on various subjects</span> related to Management, Computer Applications. </span></p>
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