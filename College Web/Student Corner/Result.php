<?php
include "../php files/db_connection.php";
session_start();
if (empty($_SESSION['Username'] ||$_SESSION['Password']) || $_SESSION['Login_type'] != 'Student') {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: ../Login/Login.php'));
    }
//Input fields validation
if(isset($_POST['Logout'])){
    session_destroy();
    header( 'location: ../Login/Login.php');
}
if(isset($_POST['Change_Password'])){
    $_SESSION['Username'];
    header( 'location: Change Password.php');
}

if(isset($_POST['Change_Email'])){
    $_SESSION['Login_type'] = 'Student';
    $_SESSION['Username'];
    header( 'location: Change Email.php');
}
$Class = "";
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
    <link rel="stylesheet" href="../CSS Files/Study Materials.css">
    <link rel="stylesheet" href="../CSS Files/Admin_Welcome.css">
    <link rel="stylesheet" href="../CSS Files/Student_Welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .disclaimer{
            display: none;
        }
        input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
        .Study_Material{
            width: 99.6%;
        }
        .Study_Material a{
            font-size: 92.4%;
            overflow-y: hidden;        
        }
        legend{
            text-align: center;
            font-size: 29px;
            color: white;
            border-radius: 19.9px;
        }
        .Info{
            Font-Size: 15.9px;
            Height: 24.9px;
            Width: 240px;
        }
        .S1M{
            Height: 19.9px;
            Width: 29px;
            text-align: center;
        }
.S2M{
            Height: 19.9px;
            Width: 29px;
            text-align: center;
        }
.S3M{
            Height: 19.9px;
            Width: 29px;
            text-align: center;
        }
.S4M{
            Height: 19.9px;
            Width: 29px;
            text-align: center;
        }
.S5M{
            Height: 19.9px;
            Width: 29px;
            text-align: center;
        }
.S6M{
            Height: 19.9px;
            Width: 29px;
            text-align: center;
        }
.S7M{
            Height: 19.9px;
            Width: 29px;
            text-align: center;
        }
.S8M{
            Height: 19.9px;
            Width: 29px;
            text-align: center;
        }
        .Subjects{
            Height: 19.9px;
            Width: 261px;
        }
       .ObtMarks{
           font-size: 15.5px;
           Height: 19.9px;
           width: 195px;
       }
       .Percentage{
           font-size: 15.5px;
           Height: 19.9px;
           width: 195px;
       }
  .CGPA{
           font-size: 15.5px;
           Height: 19.9px;
           width: 195px;
       }
   .Result{
       width: 159px;
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
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Student Corner</h1></center>
<div class="navbar">
    <a href="Welcome_User.php">HOME</a>
    <a href="Study Materials.php">Study-Material</a>
    <a href="Result.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Result</a>
    <a href="Announcements.php">Announcements</a>
</div>
</section>

<main>
    <br>
  <div style="background: skyblue; border-radius: 29px;">
    <?php
  $Spuid = $_SESSION['Username'];
    if(isset($Spuid)){
$sql = "SELECT Course, Semester FROM `Student Registration` WHERE SPU_ID = '$Spuid'";
    $result = mysqli_query($conn, $sql);
    while($Match = $result -> fetch_assoc()){
        $Course = $Match['Course'];
        $Semester = $Match['Semester'];
    }
    $sql2 = "SELECT *FROM `Results` WHERE SPU_ID = '$Spuid'";
    $result = mysqli_query($conn, $sql2);
    while($Match = $result -> fetch_assoc()){
        $Name = $Match['Name'];
        $Class = $Match['Class'];
        $Passing = $Match['PassingMarks'];
        // $Passing = 28;
        if($Match['Class'] == 'BCA-1' || $Match['Class'] == 'BCA-2' || $Match['Class'] == 'BCA-3' || $Match['Class'] == 'BCA-4'){
            
            $S1 = $Match['S1'];
            $S2 = $Match['S2'];
            $S3 = $Match['S3'];
            $S4 = $Match['S4'];
            $S1M = $Match['S1M'];
            $S2M = $Match['S2M'];
            $S3M = $Match['S3M'];
            $S4M = $Match['S4M'];
            $Total = $Match['TOTAL'];
            $Obtained = $Match['OBTAINED'];
           ?>
           <form><center>
               <input type="Text" value="SPUID : <?php echo $Spuid; ?>" class="Info" readonly>
               <input type="text" value="Name : <?php echo $Name; ?>" class="Info" readonly>
               <input type="text" value="Course : <?php echo $Course; ?>" class="Info" readonly>
               <input type="text" value="Exam's Semester : <?php echo $Semester ?>";
              class="Info"  readonly>
               <h2 style='color: Blue;'><?php echo $Course.' '.$Semester.'  ';?>RESULT</h2>
               <input type="text" value="<?php echo $S1;?>" class="Subjects" readonly>
               <input type="text" value="<?php echo $S1M; ?>" class="S1M" readonly>
 <input type="text" value="<?php echo $S2;?>" class="Subjects" readonly>
               <input type="text" value="<?php echo $S2M; ?>" class="S2M" readonly>
 <input type="text" value="<?php echo $S3;?>" class="Subjects" 
 readonly>
               <input type="text" value="<?php echo $S3M; ?>" class="S3M" readonly>
 <input type="text" value="<?php echo $S4;?>" class="Subjects" readonly>
               <input type="text" value="<?php echo $S4M; ?>" class="S4M" readonly><br><br>
               <input type="text" value="<?php echo 'Obtained Marks: '.$Obtained.'/'.$Total;?>"  class ="ObtMarks" readonly>
<input type="text" value="<?php echo 'Percentage : '.round(($Obtained/4),2); ?>" class="Percentage" readonly>
<input type="text" value="<?php echo 'CGPA : '.round(($Obtained/4)/9.5, 1); ?>" class="CGPA" readonly>
           </center>
           </form>
  <?php }
        if($Match['Class'] == 'BCA-5' || $Match['Class'] == 'BCA-6'){
            
            $S1 = $Match['S1'];
            $S2 = $Match['S2'];
            $S3 = $Match['S3'];
            $S1M = $Match['S1M'];
            $S2M = $Match['S2M'];
            $S3M = $Match['S3M'];
            $Total = $Match['TOTAL'];
            $Obtained = $Match['OBTAINED'];
           ?>
           <form><center>
               <input type="Text" value="SPUID : <?php echo $Spuid; ?>" class="Info" readonly>
               <input type="text" value="Name : <?php echo $Name; ?>" class="Info" readonly>
               <input type="text" value="Course : <?php echo $Course; ?>" class="Info" readonly>
               <input type="text" value="Exam's Semester : <?php echo $Semester ?>";
              class="Info"  readonly>
               <h2 style='color: Blue;'><?php echo $Course.' '.$Semester.'  ';?>RESULT</h2>
               <input type="text" value="<?php echo $S1;?>" class="Subjects" readonly>
               <input type="text" value="<?php echo $S1M; ?>" class="S1M" readonly>
 <input type="text" value="<?php echo $S2;?>" class="Subjects" 
 readonly>
               <input type="text" value="<?php echo $S2M; ?>" class="S2M" readonly>
 <input type="text" value="<?php echo $S3;?>" class="Subjects" readonly>
               <input type="text" value="<?php echo $S3M; ?>" class="S3M" readonly><br><br>
               <input type="text" value="<?php echo 'Obtained Marks: '.$Obtained.'/'.$Total;?>"  class ="ObtMarks" readonly>
<input type="text" value="<?php echo 'Percentage : '.round(($Obtained/3),2); ?>" class= "Percentage" readonly>
<input type="text" value="<?php echo 'CGPA : '.round(($Obtained/3)/9.5, 1); ?>" class="CGPA" readonly>
           </center>
           </form>
  <?php }
  
        if($Match['Class'] == 'BBA-1' || $Match['Class'] == 'BBA-2' || $Match['Class'] == 'BBA-3' || $Match['Class'] == 'BBA-4' || $Match['Class'] == 'BBA-5' || $Match['Class'] == 'BBA-6'){
            
 $S1 = $Match['S1'];
            $S2 = $Match['S2'];
            $S3 = $Match['S3'];
            $S4 = $Match['S4'];
$S5 = $Match['S5'];
            $S6 = $Match['S6'];
            $S7 = $Match['S7'];
            $S8 = $Match['S8'];
            $S1M = $Match['S1M'];
            $S2M = $Match['S2M'];
            $S3M = $Match['S3M'];
            $S4M = $Match['S4M'];
$S5M = $Match['S5M'];
            $S6M = $Match['S6M'];
            $S7M = $Match['S7M'];
            $S8M = $Match['S8M'];
            $Total = $Match['TOTAL'];
            $Obtained = $Match['OBTAINED'];
           ?>
           <form><center>
               <input type="Text" value="SPUID : <?php echo $Spuid; ?>" class="Info" readonly>
               <input type="text" value="Name : <?php echo $Name; ?>" class="Info" readonly>
               <input type="text" value="Course : <?php echo $Course; ?>" class="Info" readonly>
               <input type="text" value="Exam's Semester : <?php echo $Semester ?>";
              class="Info" readonly>
               <h2 style='color: Blue;'><?php echo $Course.' '.$Semester.'  ';?>RESULT</h2>
               <input type="text" value="<?php echo $S1;?>" class="Subjects" readonly>
               <input type="text" value="<?php echo $S1M; ?>" class="S1M" readonly>
 <input type="text" value="<?php echo $S2;?>" class="Subjects" 
 readonly>
               <input type="text" value="<?php echo $S2M; ?>" class="S2M" readonly>
 <input type="text" value="<?php echo $S3;?>" class="Subjects" 
 readonly>
               <input type="text" value="<?php echo $S3M; ?>" class="S3M" readonly>
 <input type="text" value="<?php echo $S4;?>" class="Subjects" readonly>
               <input type="text" value="<?php echo $S4M; ?>" class="S4M" readonly>
 <input type="text" value="<?php echo $S5;?>"class="Subjects" readonly>
               <input type="text" value="<?php echo $S5M; ?>" class="S5M" readonly>
 <input type="text" value="<?php echo $S6;?>" class="Subjects" readonly>
               <input type="text" value="<?php echo $S6M; ?>" class="S6M" readonly>
 <input type="text" value="<?php echo $S7;?>" class="Subjects" readonly>
               <input type="text" value="<?php echo $S7M; ?>" class="S7M" readonly>
 <input type="text" value="<?php echo $S8;?>" class="Subjects" readonly>
               <input type="text" value="<?php echo $S8M; ?>" class="S8M" readonly><br><br>
               <input type="text" value="<?php echo 'Obtained Marks: '.$Obtained.'/'.$Total;?>"  class ="ObtMarks" readonly>
<input type="text" value="<?php echo 'Percentage : '.round(($Obtained/8),2); ?>"  class="Percentage" readonly>
<input type="text" value="<?php echo 'CGPA : '.round(($Obtained/8)/9.5, 1); ?>" readonly>
           </center>
           </form>
  <?php } 
  
        if($Match['Class'] == 'B.com-1' || $Match['Class'] == 'B.com-2' || $Match['Class'] == 'B.com-3' || $Match['Class'] == 'B.com-4' || $Match['Class'] == 'B.com-5' || $Match['Class'] == 'B.com-6'){
            
            $S1 = $Match['S1'];
            $S2 = $Match['S2'];
            $S3 = $Match['S3'];
            $S4 = $Match['S4'];
$S5 = $Match['S5'];
            $S6 = $Match['S6'];
            $S7 = $Match['S7'];
            $S8 = $Match['S8'];
            $S1M = $Match['S1M'];
            $S2M = $Match['S2M'];
            $S3M = $Match['S3M'];
            $S4M = $Match['S4M'];
$S5M = $Match['S5M'];
            $S6M = $Match['S6M'];
            $S7M = $Match['S7M'];
            $S8M = $Match['S8M'];
            $Total = $Match['TOTAL'];
            $Obtained = $Match['OBTAINED'];
           ?>
           <form><center>
               <input type="Text" value="SPUID : <?php echo $Spuid; ?>" class="Info" readonly>
               <input type="text" value="Name : <?php echo $Name; ?>" class="Info" readonly>
               <input type="text" value="Course : <?php echo $Course; ?>" class="Info" readonly>
               <input type="text" value="Exam's Semester : <?php echo $Semester ?>";
               class="Info" readonly>
               <h2 style='color: Blue;'><?php echo $Course.' '.$Semester.'  ';?>RESULT</h2>
               <input type="text" value="<?php echo $S1;?>" class="Subjects" readonly>
               <input type="text" value="<?php echo $S1M; ?>" class="S1M" readonly>
 <input type="text" value="<?php echo $S2;?>"class="Subjects" readonly>
               <input type="text" value="<?php echo $S2M; ?>" class="S2M" readonly>
 <input type="text" value="<?php echo $S3;?>" class="Subjects" readonly>
               <input type="text" value="<?php echo $S3M; ?>" class="S3M" readonly>
 <input type="text" value="<?php echo $S4;?>"class="Subjects" readonly>
               <input type="text" value="<?php echo $S4M; ?>" class="S4M" readonly>
 <input type="text" value="<?php echo $S5;?>"class="Subjects" readonly>
               <input type="text" value="<?php echo $S5M; ?>" class="S5M" readonly>
 <input type="text" value="<?php echo $S6;?>"class="Subjects" readonly>
               <input type="text" value="<?php echo $S6M; ?>" class="S6M" readonly>
 <input type="text" value="<?php echo $S7;?>"class="Subjects" readonly>
               <input type="text" value="<?php echo $S7M; ?>" class="S7M" readonly>
 <input type="text" value="<?php echo $S8;?>"class="Subjects" readonly>
               <input type="text" value="<?php echo $S8M; ?>" class="S8M" readonly><br><br>
               <input type="text" value="<?php echo 'Obtained Marks: '.$Obtained.'/'.$Total;?>"  class ="ObtMarks" readonly>
<input type="text" value="<?php echo 'Percentage : '.round(($Obtained/8),2); ?>" class="Percentage" readonly>
<input type="text" value="<?php echo 'CGPA : '.round(($Obtained/8)/9.5, 1); ?>"  class="CGPA" readonly>
           </center>
           </form>
  <?php }
  }?>
  <center>
      <p>
  <?php 
  if(($Class == 'BCA-1' || $Class == 'BCA-2' || $Class == 'BCA-3' || $Class == 'BCA-4') and $S1M >= $Passing and $S2M >= $Passing and $S3M >= $Passing and $S4M >= $Passing){?>
      <form>
          <input style='color: white; background-color: green; text-align: center; font-size: 19.9px; font-weight: bolder;' type="text" value="Status : PASS" class="Result" readonly>
      </form>
  <?php }else{
      if($Class == 'BCA-1' || $Class == 'BCA-2' || $Class == 'BCA-3' || $Class == 'BCA-4'){?>
      <form>
          <input style='color: white; background-color: red; text-align: center; font-size: 19.9px; font-weight: bolder;' type="text" value="Status : FAIL" class="Result" readonly>
  <?php }
  }
  if(($Class == 'BCA-5' || $Class == 'BCA-6') and $S1M >= $Passing and $S2M > $Passing and $S3M >= $Passing){?>
      <form>
          <input style='color: white; background-color: green; text-align: center; font-size: 19.9px; font-weight: bolder;' type="text" value="Status : PASS" class="Result" readonly>
      </form>
 <?php }else{
     if($Class == 'BCA-5' || $Class == 'BCA-6'){?>
      <form>
          <input style='color: white; background-color: red; text-align: center; font-size: 19.9px; font-weight: bolder;' type="text" value="Status : FAIL" class="Result" readonly>
      </form>
 <?php }
 }
  if(($Class == 'BBA-1' || $Class == 'BBA-2' || $Class == 'BBA-3' || $Class == 'BBA-4' || $Class == 'BBA-5' || $Class == 'BBA-6') and $S1M >= $Passing and $S2M >= $Passing and $S3M >= $Passing and $S4M >= $Passing and
$S5M >= $Passing and $S6M >= $Passing and $S7M >= $Passing and $S8M >= $Passing
  ){?>
      <form>
          <input style='color: white; background-color: green; text-align: center; font-size: 19.9px; font-weight: bolder;' type="text" value="Status : PASS" class="Result" readonly>
      </form>
 <?php }else{
 if($Class == 'BBA-1' || $Class == 'BBA-2' || $Class == 'BBA-3' || $Class == 'BBA-4' || $Class == 'BBA-5' || $Class == 'BBA-6'){ ?>
      <form>
          <input style='color: white; background-color: red; text-align: center; font-size: 19.9px; font-weight: bolder;' type="text" value="Status : FAIL" class="Result" readonly>
      </form>
 <?php }
 }
  if(($Class == 'B.com-1' || $Class == 'B.com-2' || $Class == 'B.com-3' || $Class == 'B.com-4' || $Class == 'B.com-5' || $Class == 'B.com-6') and $S1M >= $Passing and $S2M >= $Passing and $S3M >= $Passing and $S4M >= $Passing
  and $S5M >= $Passing and $S6M >= $Passing and $S7M >= $Passing and $S8M >= $Passing
  ){?>
      <form>
          <input style='color: white; background-color: green; text-align: center; font-size: 19.9px; font-weight: bolder;' type="text" value="Status : PASS" class="Result" readonly>
      </form>
  <?php }else{
  if($Class == 'B.com-1' || $Class == 'B.com-2' || $Class == 'B.com-3' || $Class == 'B.com-4' || $Class == 'B.com-5' || $Class == 'B.com-6'){?>
      <form>
          <input style='color: white; background-color: red; text-align: center; font-size: 19.9px; font-weight: bolder;' type="text" value="Status : FAIL" class="Result" readonly>
      </form>
      <?php }
  }
 }
  ?>
  <style>
  <?php if($S1M > $Passing){?>
  .S1M{
      color: white;
      background-color: green;
  }
  <?php }
  else{?>
  .S1M{
      color: white;
      background-color: red;
  }
  <?php }?>
  </style>
  
  <style>
  <?php
  if($S2M > $Passing){?>
  .S2M{
      color: white;
      background-color: green;
  }
  <?php }
  else{?>
  .S2M{
      color: white;
      background-color: red;
  }
  <?php }?>
  </style>
  
  <style>
  <?php
  if($S3M > $Passing){?>
  .S3M{
      color: white;
      background-color: green;
  }
  <?php }
  else{?>
  .S3M{
      color: white;
      background-color: red;
  }
  <?php }?>
  </style>
  
  <style>
  <?php
  if($S4M > $Passing){?>
  .S4M{
      color: white;
      background-color: green;
  }
  <?php }
  else{?>
  .S4M{
      color: white;
      background-color: red;
  }
  <?php }?>
  </style>
  
  <style>
  <?php
  if($S5M > $Passing){?>
  .S5M{
      color: white;
      background-color: green;
  }
  <?php }
  else{?>
  .S5M{
      color: white;
      background-color: red;
  }
  <?php }?>
  </style>
  
  <style>
  <?php
  if($S6M > $Passing){?>
  .S6M{
      color: white;
      background-color: green;
  }
  <?php }
  else{?>
  .S6M{
      color: white;
      background-color: red;
  }
  <?php }?>
  </style>
  
  <style>
  <?php
  if($S7M > $Passing){?>
  .S7M{
      color: white;
      background-color: green;
  }
  <?php }
  else{?>
  .S7M{
      color: white;
      background-color: red;
  }
  <?php }?>
  </style>
  
  <style>
  <?php
  if($S8M > $Passing){?>
  .S8M{
      color: white;
      background-color: green;
  }
  <?php }
  else{?>
  .S8M{
      color: white;
      background-color: red;
  }
  <?php }?>
  </style>
  </div>
</main>

<footer>
         <center>
 <h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> Savjani College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>