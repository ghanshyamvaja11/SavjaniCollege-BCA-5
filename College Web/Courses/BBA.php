<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savjani college</title>
    <link rel="icon" type="image/x-icon" href="../../../Images/Header&Footer/favicon.jpg">
    
    <link rel="stylesheet" href="../CSS Files/headerNmenuNfooter.css">
    <link rel="stylesheet" href="../CSS Files/Courses/BBA.css">
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
            <img src="../../../Images/Header&Footer/savjaniclg.png"> 
        </center>
        <div style='background-color: yellow; text-align: center; padding-top: 5px; padding-bottom: 1px;'><a href="../../..Login/Login.php"><img id="Login" src='../../../Images/Login/Login.png'></a></div>
        </header>
<div class="navbar">
    <a href="../../../index.php">HOME</a>
    <a href="../php files/Courses.php" style="color: yellow; background-color: black; font-weight: bolder; border: 2px solid white; border-radius: 29px;">Courses</a>
    <a href="../Student Corner/Welcome.php">Student Corner</a>
    <a href="../php files/Infrastructure.php">Infrastructure</a>
    <a href="../php files/Events.php">Events</a>
    <a href="../php files/About us.php">About us</a>
    <a href="../php files/Downloads.php">Downloads</a>
    <a href="../php files/Contact us.php">Contact us</a>
</div>

<main>
    <section>
        <div id="sec1">
        <center><h1 class="title">About BBA Programme</h1>
        <strong>Bachelor of Business Administration (BBA) <p>
            (A Three Years Full Time Course of Bhakta Kavi Narsinh Mehta University)</strong>
    </center>
    
    <p><h4 class="para">The Bachelor of Business Administration (BBA) degree imparts basic management and business skills to students. These skills form the foundation of their management careers. In today?s competitive economy, a BBA course trains effective leaders of tomorrow and entrepreneurs. Students sometimes follow up a BBA degree with an MBA. Most of them choose to join the workforce straight after BBA.</h4></p>
    <p><h4 class="para">BBA programme is designed for those who aspire for a career in business whether as an entrepreneur or a professional. Both the content and pedagogy have been developed with this objective.</h4></p>
    <p><h4 class="para">The course curriculum of a three year BBA Course is so designed that it provides the students a basic understanding about Management skills and trains them in effective communication skills. The programme also inculcates entrepreneurship skills in students. With this kind of curriculum, students are better poised to explore various opportunities that they have in management profession. The course covers basic business economics, mathematics, accounting, computer fundamentals, management theory and practice, marketing management, knowledge about the country?s economy, human resource management, financial management, business law, communication skills, personality development etc.</h4></p>
    <p><h4 class="para">The BBA Program is 3-year campus-based program designed to enhance the skills and competencies of talented and ambitious young aspirants. During the years of study, the students will obtain a broader perspective on the nuances of managing at a time of great change, and acquire the skills to lead teams and organizations to success in a globalized, competitive business environment.</h4></p>
    <p><h4 class="para"><span class="hl">Electives:</span>  The students have the option to pursue the elective streams in Finance, Marketing, HRM and IT & Systems. Students have the flexibility in choosing their elective streams. The details will be provided in the Student Handbook.</h4></p>
    <p><h4 class="para"><span class="hl">Opportunities:</span>  The BBA course aims at developing a student's intellectual ability, executive personality and managerial skills through an appropriate blending of business and general education. The BBA course assists the student in understanding and developing the unique leadership qualities required for successfully managing business functions, an organizational unit or an enterprise.</h4></p>
    <p><h4 class="para"><span class="hl">Class Timings:</span> Between 12:30 am to 5.00 pm </h4></p>
    </div>
    </section>
    <hr>
    
    <section>
        <div id="sec2">
            <center><h1 class="title">Principal's Message</h1>
            <div id="principal">
<?php
$path = '../../Images/Courses/BBA/Principal/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../../Images/Courses/BBA/Principal/<?php echo $file?>" alt="Principal's images" class="imgs">
<?php
}
?>
            <br>
            <span class="state">Prof.(Dr.)Jigar R. Raval</span>
            </div>
            </center>
            <p><h2 class="wc">Welcome To SAVJANI College, VERAVAL, To Experience The Joy Of Learning!</h2></p>
            <p><h4 class="para">I Wholeheartedly Welcome You To SHRI K.K. & SMT K.K. SAVJANI BBA BCA COLLEGE VERAVAL MANAGED BY VERAVAL EDUCATION SOCIETY-VERAVAL A Temple Of Learning, Dedicated To Providing The Best Educational Opportunities To You Who Aspire For Academic Excellence.</h4></p>
            <p><h4 class="para">Savjani College Stands As A Source Of Knowledge To Its Students And Entrusts Them With The Responsibility To Share What They Have Received With The Society And The World At Large. Thus It Aims At Creating A Better Society In All Respects.</h4></p>
            <p><h4 class="para">Savjani College Running The Regular Undergraduate Programmes In Management And Computer Application Courses Of BBA And BCA Which Provide An Opportunity To The Students To Enhance Their Knowledge And Skills.</h4></p>
            <p><h4 class="para">Since Its Inception In 1998, Savjani College Has Emphasized The Need Of Curricular, Co-Curricular And Extra-Curricular Activities For An All-Inclusive Development Of The Students. To Actualize Them In Real Terms, There Are Various Cells And Committees In The College. Faculty Members Are Entrusted With The Responsibility Of These Units. The Multi-Faceted Activities Planned And Organized By Them Provide An Enriching Experience Which Would Enable The Students To Reach New Heights In Their Professional Life.</h4></p>
            <p><h4 class="para">We Are Fortunate To Be Backed By A Team Of Highly Talented, Dedicated And Committed Faculty Members. With A Very Amiable And Professional Environment, Our Faculty Members Make Substantial Contribution To The Academia Through Quality Teaching, Curriculum Design, Conferences, Etc. They Are Actively Involved In Their Pursuit Of Creating And Disseminating Knowledge Through Teaching, Research And Training.</h4></p>
            <p><h4 class="para">As A Prospective Student In Pursuit Of Knowledge, You Are Welcome To Explore The Options Available At Savjani College, In Veraval. As A Student, You Can Definitely Expect To Have An Enriching Experience That Should Propel You To Make The Best Of The Opportunities Available. As A Parent Of A Student, We Assure You Of A Very Enriching And Productive Time That Your Ward Will Be Spending With Us. As A Business Organization, Seeking Any Information On Our Campus, Our Students, Our Activities, Etc., Feel Free To Contact Us, And We Will Be Pleased To Explore New Ventures Of Mutual Interest</h4></p>
            <p><center><h3>Principal - KMKKS BBA/BCA College Veraval</h3></center></p>
        </div>
    </section>
    <hr>
    
    <section>
        <div id="sec3">
            <center><h1 class="title">HOD's Messaage</h1>
                <div id="hod">
<?php
$path = '../../Images/Courses/BBA/HOD/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../../Images/Courses/BBA/HOD/<?php echo $file?>" alt="HOD's img" class="imgs">
<?php
}
?>
            <br>
            <span class="state">Prof.(Dr.)Bhupendra Chavda</span>
            </div>
            </center>
    
            <p><h2 class="wc">Welcome To SAVJANI College, VERAVAL, To Experience The Joy Of Learning!</h2></p>
            <p><h4 class="para">Welcome Shri.K.M. & Smt. K.K. Savjani Bba/Bca College,Veraval Website. As the H.O.D of the reputable institution I consider it my privilege to pen down my message for our newly launched website of our college. I feel very fortunate to work with many dedicated, committed, caring and innovative staff members, parents and students.</h4></p>
            <p><h4 class="para">Many people consider education as a medium of getting good jobs, living a royal life, earning money and much more. But education does not really mean this. Real meaning comes when one way of thinking gets changed and one starts thinking for the betterment of the society, country and world at large. On the whole education means holistic development of a students not only restricted to the achievements of academics but also helping the students to come up with those inherited knowledge to build a better tomorrow; with a disciplined way of life.</h4></p>
            <p><h4 class="para">At Shri.K.M. & Smt. K.K. Savjani Bba/Bca College,Veraval , we believe that excellence is the way of life. Keeping this in mind we provide the students value based education, opportunities to grow in every sphere of life both in academics and in their personality development. In the field of co- curricular activities, games, and sports our students are paving their way towards great heights.</h4></p>
            <p><h4 class="para">I take this opportunity to thank God Almighty for his benevolence, generous blessings showered upon our institution through various people and events. I would like to express my sincere thanks to Dr.Jigar Raval, the Principal who always guides, gives confidence, inspires and supports me in all that I do. I extend my gratitude to all the staff members for their constant amicable support towards the institution. Finally I want to thank all the students of Shri.K.M. & Smt. K.K. Savjani Bba/Bca College,Veraval for their contribution and important role they play in the College to take the College to a greater height.</h4></p>
            <center><p><h3>HOD - KMKKS
                Savjani BBA/BCA College
                Veraval</h3></p></center>
        </div>
    </section>
    <hr>

    <section>
        <div id="sec4">
            <center><h1 class="title">Faculty Profile</h1></center>
            <center><strong class="sec4-ss">Teaching Staff</strong></center>
            <br>
            <marquee direction="left" scrollamount="9" onmouseover="this.stop()" onmouseout="this.start()">
                <?php
$path = '../../Images/Courses/BBA/Teaching staff/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../../Images/Courses/BBA/Teaching staff/<?php echo $file?>" alt="Teaching staff" class="imgs">
<?php
}
?>
            </marquee>
            <p>
            <center><strong class="sec4-ss">Non-Teaching staff</strong></center>
            <br>
            <marquee direction="left" scrollamount="9" onmouseover="this.stop()" onmouseout="this.start()">
                <?php
$path = '../../Images/Courses/BBA/Non Teaching staff/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){ ?>
<img src="../../../Images/Courses/BBA/Non Teaching staff/<?php echo $file?>" alt="Teaching staff" class="imgs">
<?php
}
?>
            </marquee>
        </div>
    </section>
    <hr>
    
    <section>
        <div id="sec5">
            <center><h1 class="title">Curriculam</h1>
            <h2 id="BKNMU">Bhakta Kavi Narsinh Mehta University
                <br> Bachelor of Business Administration(BBA)</h2>
                <p>
                </center>
                <span id="syllabus">
                    <h2><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/BBA%20SEM-1%20NEW%202018.pdf">BBA SEM-1</a></h2>
                    <h2><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/BBA%20Syllabus%20Sem%20II,%202018%20(New).pdf">BBA SEM-2</a></h2>
                    <h2><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/BBA%20Sem%20III,%20(NEW)%202019.pdf">BBA SEM-3</a></h2>
                    <h2><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/BBA%20Sem%20IV,%20%20%20Effective%20from%20%20November,%202019.pdf">BBA SEM-4</a></h2>
                    <h2><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/BBA%20Sem-V%20(NEW)%202020.pdf">BBA SEM-5</a></h2>
                    <h2><a target="_blank" href="https://www.bknmu.edu.in/uploads/assets/syllabus/BBA%20Sem-VI%20(NEW),%20Dec._2020.pdf">BBA SEM-6</a></h2>
                </span>
        </div>
    </section>
    <hr>
    
    <section>
        <div id="sec6">
            <center><h1 class="title">Alumni</h1></center>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeU6RnpctdUAlFGscnLWmffptwSc2KFOqxT_cunyQ0rg31iRw/viewform?vc=0&c=0&w=1"><input type="button" value="Click Here for Registration"></a>&nbsp;
            <a href="../php files/Alumni.php"><input type="button" value="Alumni's List"></a>
        </div>
    </section>
    <hr>
    
    <section>
        <div id="sec7">
            <center><h1 class="title">Video Lectures</h1></center>
            <a target="_blank" href="https://www.veravaleducationsociety.org/savjaniclg/online_video_list.pdf"><input type="button" value="Click Here to Get Video Playlist"></a>
        </div>
    </section>
    <hr>
</main>

<footer>
    <div id="Quick-Links">
        <h1>Quick Links</h1>
        <a target="_blank" href="https://www.bknmu.edu.in"><img src="../../../Images/Header&Footer/Bknmu.png" alt="bknmu" style="background-color: transparent;"></a>
        <a target="_blank" href="https://www.veravaleducationsociety.org/index.php"><img src="../../../Images/Header&Footer/veravaledu.png" alt="veravaleducationsociety" style="background-color: transparent;"></a>
        &nbsp;&nbsp;
        <a target="_blank" href="https://www.ugc.ac.in/"><img src="../../../Images/Header&Footer/ugc_logo.png" alt="ugc_logo"></a>
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
            <a href="#header" style= "text-decoration:none;"><img src="../../../Images/Header&Footer/Up-Arrow.png" alt="">
            <strong id="top">Top</strong>
            </a>
            </div>
         <center>
        <h1 id="copyright">&copy;&nbsp;2022&nbsp;Savjani College - Veraval and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>