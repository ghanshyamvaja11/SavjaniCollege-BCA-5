<?php
session_start();

if (empty($_SESSION['Username'] && $_SESSION['Password']) || $_SESSION['Login_type'] != 'Faculty') {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: ../Login/Login.php'));
    }
//Input fields validation
if(isset($_POST['Logout'])){
    session_destroy();
    header( 'location: ../Login/Login.php');
}
if(isset($_POST['Change_Password'])){
    $_SESSION['Login_type'];
    $_SESSION['Username'];
    header( 'location: Change Password.php');
}

if(isset($_POST['Change_Email'])){
    $_SESSION['Login_type'];
    $_SESSION['Username'];
    header( 'location: Change Email.php');
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
 <br><input type='Submit' name='Logout' Value='Logout' id='Logout' style="color: white;
    background-color: black; cursor: pointer; border-radius: 15.9px; font-size: 13.4px; font-weight: 400;"> &nbsp; &nbsp; <input type="Submit" name="Change_Password" Value="Change Password" id="Change_Password" style="color: white;
    background-color: black; cursor: pointer; border-radius: 15.9px; font-size: 13.4px; font-weight:  400;"> &nbsp;&nbsp; <input type="Submit" name="Change_Email" Value="Change Email" id="Change Email" style="color: white;
    background-color: black; cursor: pointer; border-radius: 15.9px; font-size: 13.4px; font-weight:  400;">
</form>
</div>
<center><section><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Faculty Desk</h1></section></center>
<div class="navbar">
<a href="Welcome.php">HOME</a>
<a href="Upload_study_Material.php">Upload Study Material</a>
<a href="Remove_study_Material.php">Remove study Material</a>
<a href="Upload Results.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Upload Result</a>
<a href="Remove Results.php">Remove Result</a>
</div>
</section>

<main>
    <hr>
        <center><h2 style='color: white; background-color: red; border-radius: 29px; padding-bottom: 4.2px;'>Upload Result</h2></center>
    <center>
    <form action="" method="POST" enctype="multipart/form-data">
        <center><h4 style="color: green;">try to upload pdf or text file only.</h4></center>
        <div style='background-color: skyblue; display: inline-block; padding: 9px; border-radius: 15px; width: 92%;' id="pathSelection">
        <select name="path" id="path" style='height: 29px;'>
            <option value='' selected>Select Folder</option>
            <option value='../../Results/BCA Sem-1/'>/Results/BCA Sem-1/</option>
            <option value='../../Results/BCA Sem-2/'>/Results/BCA Sem-2/</option>
            <option value='../../Results/BCA Sem-3/'>/Results/BCA Sem-3/</option>
            <option value='../../Results/BCA Sem-4/'>/Results/BCA Sem-4/</option>
            <option value='../../Results/BCA Sem-5/'>/Results/BCA Sem-5/</option>
            <option value='../../Results/BCA Sem-6/'>/Results/BCA Sem-6/</option>
            
            <option value='../../Results/BBA Sem-1/'>/Results/BBA Sem-1/</option>
 <option value='../../Results/BBA Sem-2/'>/Results/BBA Sem-2/</option>
 <option value='../../Results/BBA Sem-3/'>/Results/BBA Sem-3/</option>
 <option value='../../Results/BBA Sem-4/'>/Results/BBA Sem-4/</option>
 <option value='../../Results/BBA Sem-5/'>/Results/BBA Sem-5/</option>
 <option value='../../Results/BBA Sem-6/'>/Results/BBA Sem-6/</option>
            
            <option value='../../Results/B.com Sem-1/'>/Results/B.com Sem-1/</option>
            <option value='../../Results/B.com Sem-2/'>/Results/B.com Sem-2/</option>
            <option value='../../Results/B.com Sem-3/'>/Results/B.com Sem-3/</option>
            <option value='../../Results/B.com Sem-4/'>/Results/B.com Sem-4/</option>
            <option value='../../Results/B.com Sem-5/'>/Results/B.com Sem-5/</option>
            <option value='../../Results/B.com Sem-6/'>/Results/B.com Sem-6/</option
            
        </select>
        <br>
        <input type="file" name="file"><p>
        <input type="submit" value="upload" name="upload" id='upload' onMouseOver="this.style.color='white'" onMouseOver="this.style.background-color='green'">
        </div>
        </center>
        </form>
        
        <!--Send files in specific Folder using PHP-->
        <?php
        if(isset($_POST['upload'])){
             $fileName = $_FILES['file']['name'];
            //BCA Results
            if($_POST['path'] == '../../Results/BCA Sem-1/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/BCA Sem-1/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
else if($_POST['path'] == '../../Results/BCA Sem-2/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/BCA Sem-2/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
}
else if($_POST['path'] == '../../Results/BCA Sem-3/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/BCA Sem-3/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
}
else if($_POST['path'] == '../../Results/BCA Sem-4/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/BCA Sem-4/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
}
else if($_POST['path'] == '../../Results/BCA Sem-5/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/BCA Sem-5/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
}
else if($_POST['path'] == '../../Results/BCA Sem-6/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/BCA Sem-6/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
}
        
        //BBA Results
        if($_POST['path'] == '../../Results/BBA Sem-1/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/BBA Sem-1/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            else if($_POST['path'] == '../../Results/BBA Sem-2/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/BBA Sem-2/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            
            //BBA
            if($_POST['path'] == '../../Results/BBA Sem-3/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/BBA Sem-3/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            if($_POST['path'] == '../../Results/BBA Sem-4/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/BBA Sem-4/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            if($_POST['path'] == '../../Results/BBA Sem-5/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/BBA Sem-5/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
            if($_POST['path'] == '../../Results/BBA Sem-6/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/BBA Sem-6/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
                else{
            echo "<center><h4 style='color: white; background-color: red;'>select atleast one file to upload on server..</h4></center>";
        }
            }
        
        //B.com Results
            if($_POST['path'] == '../../Results/B.com Sem-1/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/B.com Sem-1/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            else if($_POST['path'] == '../../Results/B.com Sem-2/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/B.com Sem-2/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
           else if($_POST['path'] == '../../Results/B.com Sem-3/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/B.com Sem-3/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            else if($_POST['path'] == '../../Results/B.com Sem-4/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/B.com Sem-4/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            else if($_POST['path'] == '../../Results/B.com Sem-5/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/B.com Sem-5/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
            else if($_POST['path'] == '../../Results/B.com Sem-6/'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], '../../Results/B.com Sem-6/'.$fileName)){
            echo "<center><h4 style='color: white; background-color: green;'>file Uploaded Successfully.</h4></center>";
                }
            }
        }
        ?>
<hr>
</main>
  <footer>        
  <center>
         <h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> Savjani College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>