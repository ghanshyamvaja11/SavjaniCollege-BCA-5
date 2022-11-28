<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savjani college</title>
    <link rel="icon" type="image/x-icon" href="../../Images/Header&Footer/favicon.jpg">
    <link rel="stylesheet" href="../CSS Files/headerNmenuNfooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        .disclaimer{
            display: none;
        }
        #nb{
            background-color: #ff9933;
            padding: .9%;
        }
        .navbar1{
            text-decoration: none;
            color: white;
            font-size:  95%;
            padding-left: 4px;
            font-weight: bolder;
            padding-right: 4px;
        }
        
        .navbar1:hover{
            color: darkgreen;
            background-color: white;
            border-radius: 29px;
        }
    .imgs{
        background-color: white;
        padding: 9px;
        height: 59.6px;
        width: 59.6px;
        border: .5px solid white;
        border-radius: 29px;
    }
    .imgs:hover{
        border: 5.4px solid lightblue;
    }
    .Text {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}

#Web-Technologies:hover{
    background-color: darkblue;
}
#Programming-Languages:hover{
    background-color: RGB(244,180,0);
}
#Databases:hover{
    background-color: blue;
}
#CMS:hover{
    background-color: green;
}

#Projects:hover{
    background-color: rgb(128, 154, 239);
}
#Contact-Info:hover{
    background-color: lightgreen;
}
#Documentation_Download:hover{
    color: green;
    background-color: white;
}
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
    <a href="/index.php">HOME</a>
    <a href="Courses.php">Courses</a>
    <a href="Student Corner/Welcome.php">Student Corner</a>
    <a href="Infrastructure.php">Infrastructure</a>
    <a href="Events.php">Events</a>
    <a href="About us.php">About us</a>
    <a href="Downloads.php">Downloads</a>
    <a href="Contact us.php">Contact us</a>
</div>

<main>
    <center><h2 style="background-color: blue; color: white; padding-top: 2px; padding-bottom: 4px; border-radius: 29.8px;">Developer Page</h2></center>
    <section style="background-color: black;">
        <div id="nb">
            <center><a href="#Web-Technologies" class="navbar1">Knowledge&skills</a>
            <a href="#Projects" class="navbar1">Projects</a>
            <a href="#Contact-Info" class="navbar1">Contact info</a></center>
        </div>
        <div>
            <br>
            <center>
           <img src="../../Images/Developer/Developer.png" style="height: 227px; width: 191px; display: inline; border: 2px solid white; padding-bottom: 0px;">
          <h3>
  <a href="" class="typewrite" data-period="2000" data-type='[ "Hi, I am  GHANSHYAM VAJA.", "I am BCA Student.", "I am Web Developer."]' style="color: white; font-size: 24.9px; font-weight: 500; text-decoration: none;">
    <span class="wrap"></span>
  </a>
</h3>
<h5 style="color: Gold; font-size: 19.9px;">
  <a href="" class="typewrite" data-period="2000" data-type='[ "I Like to Craft solid and<?php echo ""; ?> Scalable Websites with <?php echo ""; ?>great User Experience."]' style="color: white; font-size: 19.9px; color: gold; font-weight: 500; text-decoration: none;">
    </a>
</h5>
           </center>
        </div>
        <hr>
        <div id="Web-Technologies">
            <h2 style="color: white; background-color: red; padding: 6.9px; border-radius: 19.5px; text-align: center;">Knowledge & Skills</h2>
            <center><h2 style="color: white;">Known Web Technologies</h2>
            <a href="https://html.com/document/" target="_blank"><img src="../../Images/Developer/HTML5.png" class="imgs"></a>
            <a target="_blank" href="https://devdocs.io/css/"><img src="../../Images/Developer/CSS.png" class="imgs"></a>
            <a target="_blank" href="https://www.php.net/manual/en/index.php"><img src="../../Images/Developer/Php.png" class="imgs"></a>
            </center>
        </div>
        <div id="Programming-Languages">
            <center><h2 style="color: white;">Known Programming Languages</h2>
            <a target="_blank" href="https://devdocs.io/c/"><img src="../../Images/Developer/C Language.png" class="imgs"></a>
            <a target="_blank" href="https://m.cplusplus.com/doc/tutorial/"><img src="../../Images/Developer/C++ Language.png" class="imgs"></a>
            <a target="_blank" href="https://docs.oracle.com/javase/tutorial/"><img src="../../Images/Developer/Java Language.png" class="imgs"></a>
            <a target="_blank" href="https://docs.oracle.com/cd/B19306_01/server.102/b14200/toc.htm"><img src="../../Images/Developer/SQL.png" class="imgs"></a>
            </center>
        </div>
        <div id="Databases">
            <center><h2 style="color: white;">Known Databases</h2>
            <a target="_blank" href="https://dev.mysql.com/doc/"><img src="../../Images/Developer/MYSQL.png" class="imgs"></a>
            </center>
        </div>
<div id="CMS">
            <center><h2 style="color: white;">Known CMS</h2>
            <a target="_blank" href="https://codex.wordpress.org/Main_Page"><img src="../../Images/Developer/WordPress.png" class="imgs"></a>
            <a target="_blank" href="https://blogger.com"
            ><img src="../../Images/Developer/Blogger.png" class="imgs"></a></center>
        </div>
        <hr>
        <div id="Projects">
            <center>
                <h2 style="color: white; background-color: red; padding: 6.9px; border-radius: 19.5px;">Projects</h2>
                <h2 style="color: white; background-color: green; display: inline; padding: 6.9px; border-radius: 19.5px;">Php Projects</h2>
    <a href="https://savjani-college.000webhostapp.com"><h4 style="color: yellow; font-size: 19.9px;">This Website</h4></a>
    <a href="../../Developer/KMKKS Documentation.pdf" download><input type="Button" value="Download Documentation" style="Font-Size: 19px; color: white;  Background-color: blue; Height: 29px; Width: 249px; border-radius: 29px;" id="Documentation_Download"></a><p>
    <br>
             <h2 style="color: white; background-color: green; display: inline; padding: 6.9px; border-radius: 19.5px;">
                 C Projects
             </h2>
             <a href="../../Developer/C Projects/
Co-Ordinate And Geometry Calculator.c" download><h4 style="color: yellow; text-decoration: none; font-size: 19.9px;">
1. Co-Ordinate And Geometry Calculator</h4></a>
             <a href="../../Developer/C Projects/
Employees Salary Report.c" download><h4 style="color: yellow; text-decoration: none; font-size: 19.9px;">
2. Employees Salary Report</h4></a>
             <a href="../../Developer/C Projects/Matrix Calculator.c" download><h4 style="color: yellow; text-decoration: none;  font-size: 19.9px;">
3. Matrix Calculator</h4></a>
             <a href="../../Developer/C Projects/
Sequence And Progression Calculator.c" download><h4 style="color: yellow; text-decoration: none;  font-size: 19.9px;">
4. Sequence And Progression Calculator</h4></a>
             <a href="../../Developer/C Projects/
Statistics Calculator.c" download><h4 style="color: yellow; text-decoration: none;  font-size: 19.9px;">
5. Statistics Calculator</h4></a>
<br>
             <h2 style="color: white; background-color: green; display: inline; padding: 6.9px; border-radius: 19.5px;">
                 C++ Projects
             </h2>
             <a href="../../Developer/C++ Projects/
Scientific Calculator.cpp" download><h4 style="color: yellow;  font-size: 19.9px;">Scientific Calculator</h4>
    <a href="../../Developer/C++ Projects/Statistics Calculator.cpp" download><h4 style="color: yellow;  font-size: 19.9px;">Statistics Calculator</h4></a>
    <br>
                 <h2 style="color: white; background-color: green; display: inline; padding: 6.9px; border-radius: 19.5px;">Java Projects
             </h2>
             <a href="../../Developer/Java Projects/
Guess_Number.java" download><h4 style="color: yellow; font-size: 19.9px;">Guess The Number Console Game</h4></a>
    <a href="../../Developer/Java Projects/SnakeNLadderGame.java" download><h4 style="color: yellow; font-size: 19.9px;">Snake And Ladder Console Game</h4></a>
    <br>
    <h2 style="color: white; background-color: green; display: inline; padding: 6.9px; border-radius: 19.5px;">Blogger Website</h2>
    <br><br>
    <h4 style="color: white; background-color: green; display: inline; padding: 6.9px; border-radius: 19.9px;">(Created in BCA Sem-1)</h4>
        
    <a href="https://my-programmingbook.blogspot.com/?m=1"><h4 style="color: yellow; font-size: 19.9px;">My Programming book</h4></a>
    <br>
    </div>
    <hr>
    <br>
    <div id="Contact-Info">
        <center>
     <h2 style="color: white; background-color: red; padding: 6.9px; display: inline; border-radius: 29.9px;">Developer Contact</h2><p>
              <input type="text" style="font-size: 15.9px; font-color: black; background-color: white; height: 29.4px; width: 220.5px;" value="ghanshyamvaja11@gmail.com" readonly>
            </center>
        </div>
    </section>
    <hr>
</main>
<script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
<footer>
        <div id="headerNav">
            <a href="#header"><img src="../../Images/Header&Footer/Up-Arrow.png" alt=""></a>
            <strong id="top">Top</strong>
            </div>
         <center>
        <h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>
