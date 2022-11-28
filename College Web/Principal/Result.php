<?php
session_start();
include "../php files/db_connection.php";

if (empty($_SESSION['Username'] && $_SESSION['Password']) || ($_SESSION['Username'] != 'Principal@kmkks' && $_SESSION['Login_type'] != 'Faculty')) {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: ../Login/Login.php'));
    }
//Input fields validation
if(isset($_POST['Logout'])){
    session_destroy();
    header( 'location: ../Login/Login.php');
}

$Class = $_SESSION['Class'];
// $Username = $_SESSION['Username'];
// $_SESSION['Username'] = $Username;
$_SESSION['Login_type'] = $_SESSION['Login_type'];
$_SESSION['Username'] = $_SESSION['Username'];
$_SESSION['Check'] = "";
$Spuid = $Course = $Semester = "";
$Name = $S1 = $S2 = $S3 = $S4 =$S5 = $S6 = $S7 = $S8 = $S1M = $S2M = $S3M = $S4M = $S5M = $S6M = $S7M = $S8M = 0;
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
        input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
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
<center><h1 style='color: white; background-color: green; border-radius: 29px; padding-bottom: 4.2px;'>Principal Desk</h1></center>
<div class="navbar">
    <a href="Welcome.php">HOME</a>
    <a href="Upload_files.php">Upload Files</a>
    <a href="Manage_files.php">Manage files</a>
    <a href="Post new Announcements.php">Do Announcements</a>
     <a href="Add_Faculties.php">Add Faculties</a>
     <a href="Remove Faculties.php">Remove Faculties</a>
    <a href="Students Data.php">Students data</a>
    <a href="Term Grant.php">Term-Grant</a>
    <a href="Fees Info.php" style="color: white; background-color: red; font-weight: bolder; border: 2px solid white; border-radius: 29.9px;">Recieve Fees</a>
    <a href="Remove Students.php">Remove Students</a>
    <a href="Manage_Queries.php">Manage Queries</a>
</div>
</section>

<main>
    <hr>
        <center><h2 style='color: white; background-color: red; border-radius: 29px; padding-bottom: 4.2px;'>Declare Result</h2></center>
        <center>
        </style>
        <div style='background-color: skyblue; display: inline-block; border-radius: 15px; width: 92%; padding: 9px;'>
        <form action="" method="POST">
            <input type="text" name="Login_type" value="<?php echo $_SESSION['Login_type']; ?>" hidden>
          <input type="text" name="Username" value="<?php echo $_SESSION['Username']; ?>" hidden>
            <input style="height: 29.8px; width: 51%;" type="number" name="SPUID" placeholder="Enter SPUID*" id="SPU_ID" class="SPU_ID"><br id="Br" class="Br"><br id="Br2" class="Br">
        <input type="submit" value="Search" name="Search" id="see" style="font-size: 19.9px; color: black; background-color: white;" class="see Search">
        </form>
        <br id="Br2" class="Br">
        <?php
        $Count = "";
        if(isset($_POST['Search'])){ 
    $Spuid = $_POST['SPUID'];
    $_SESSION['Login_type'] = $_POST['Login_type'];
    $_SESSION['Username'] = $_POST['Username'];
    $sql = "SELECT *FROM `Student Registration` WHERE SPU_ID='$Spuid'";
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        $Course = $Match['Course'];
        $Semester = $Match['Semester'];
    }
    if(($Class == 'BCA-1' and $Course == 'BCA' and $Semester == 'Sem-1') or ($Class == 'BCA-2' and $Course == 'BCA' and $Semester == 'Sem-2') or ($Class == 'BCA-3' and $Course == 'BCA' and $Semester == 'Sem-3') or ($Class == 'BCA-4' and $Course == 'BCA' and $Semester == 'Sem-4') or ($Class == 'BCA-5' and $Course == 'BCA' and $Semester == 'Sem-5') or ($Class == 'BCA-6' and $Course == 'BCA' and $Semester == 'Sem-6') or ($Class == 'BBA-1' and $Course == 'BBA' and $Semester == 'Sem-1') or ($Class == 'BBA-2' and $Course == 'BBA' and $Semester == 'Sem-2') or ($Class == 'BBA-3' and $Course == 'BBA' and $Semester == 'Sem-3') or ($Class == 'BBA-4' and $Course == 'BBA' and $Semester == 'Sem-4') or ($Class == 'BBA-5' and $Course == 'BBA' and $Semester == 'Sem-5') or ($Class == 'BBA-6' and $Course == 'BBA' and $Semester == 'Sem-6') or ($Class == 'B.com-1' and $Course == 'B.com' and $Semester == 'Sem-1') or ($Class == 'B.com-2' and $Course == 'B.com' and $Semester == 'Sem-2') or ($Class == 'B.com-3' and $Course == 'B.com' and $Semester == 'Sem-3') or ($Class == 'B.com-4' and $Course == 'B.com' and $Semester == 'Sem-4') or ($Class == 'B.com-5' and $Course == 'B.com' and $Semester == 'Sem-5') or ($Class == 'B.com-6' and $Course == 'B.com' and $Semester == 'Sem-6')){
            $_SESSION['Check'] == 1;
    ?>
    <style>
        .Br{
            display: none;
        }
        #SPU_ID{
            display: none;
        }
        .Search{
            visibility : hidden;
        }
    </style>
        <?php
    }
}
     if(isset($_SESSION['Check'])){
     if(!empty($_POST['SPUID']) and isset($_POST['Search'])){
         $_SESSION['spuid'] = $_POST['SPUID'];
         $Spuid = $_POST['SPUID'];
    $sql = "SELECT *FROM `Student Registration` WHERE SPU_ID='$Spuid'";
    $check = mysqli_query($conn, $sql);
    while($Match = $check->fetch_assoc())
    {
        if($Spuid == $Match['SPU_ID']){?>
        <div style="display: inline-block; text-align: left; color: white; background-color: blue; padding: 9px; border-radius: 29px;">
            <h4 style="display: inline;">SPU ID : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['SPU_ID']; ?></h5><br>
            <h4 style="display : inline;">Student's Name : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Name']; ?></h5><br>
            <h4 style="display : inline;">Course : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Course']; ?></h5><br>
            <h4 style="display : inline;">Current Semester : </h4><h5 style="display : inline; color: yellow;"><?php echo $Match['Semester']; ?></h5><br>
            </div>
        <?php
        $Count = 1;
        }
    }
        }
        
        if(isset($_POST['Search']) && $Count != 1){
            $Spuid = $_POST['SPUID'];
            $SPUID = "";
$Count2 = '';
$sql = "SELECT *FROM `Student Registration` WHERE SPU_ID='$Spuid'";
$check = mysqli_query($conn, $sql);
while($Match = $check->fetch_assoc())
{
    $SPUID = $Match['SPU_ID'];
    $Course = $Match['Course'];
    $Semester = $Match['Semester'];
}
if(strlen((string)$Spuid) > 10 or strlen((string)$Spuid) < 10){
    echo "<h4 style='color: red;'>SPUID Format is not Valid.</h4>";
}
if($Spuid != $SPUID and strlen((string)$Spuid) == 10){
    echo "<h4 style='color: red;'>Student : $Spuid is not studying in $Class.";
    $Count2 = 1;
    }
if($Count2 == 1){
    echo "<h4 style='color: red;'>Enter Valid SPUID.</h4>";
        $Count2 = 0;
        }
    }
        if(isset($_POST['Search']) && $Count == 1){
        $sql = "SELECT *FROM `Student Registration` WHERE SPU_ID ='$Spuid'";
        $check = mysqli_query($conn, $sql);
        while($Match = $check->fetch_assoc()){
        ?>
        <form action="" method="POST">
        <p>
          <input type="text" name="Login_type" value="<?php echo $_SESSION['Login_type']; ?>" hidden>
          <input type="text" name="Username" value="<?php echo $_SESSION['Username']; ?>" hidden>
            <input type="text" name="Name" style="height: 29.4px; width: 42.9%; text-align: center;" value="<?php echo $Match['Name'];?>" placeholder="<?php echo $Match['Name'];?>" readonly><p>
            <input type="text" name="Course" style="height: 29.4px; width: 21.5%; text-align: center;" placeholder="<?php echo $Match['Course'];?>" readonly>&nbsp;&nbsp;
            <input type="text" name="Class" style="height: 29.4px; width: 21.4%; text-align: center;" placeholder="<?php echo $Match['Semester'];?>" readonly><p>
            <input type="text" name="setClass" value="<?php echo $_SESSION['Class']; ?>" hidden>
            <input type="text" name="TotalMarks" value="<?php echo $_SESSION['TotalMarks']; ?>" hidden>
                <h4 style="font-size: 29px; color: Red;">Enter Marks</h4>
                <?php if($Class == 'BCA-1' or $Class == 'BCA-2' or $Class == 'BCA-3' or $Class == 'BCA-4'){ ?>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject1']; ?>" readonly><input type="Number" name="S1Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px%;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject2']; ?>" readonly><input type="Number" name="S2Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px%;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject3']; ?>" readonly><input type="Number" name="S3Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px%;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject4']; ?>" readonly><input type="Number" name="S4Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px%;" required><p>
            <?php }
            else if($Class == 'BCA-5' or $Class == 'BCA-6'){ ?>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject1']; ?>" readonly><input type="Number" name="S1Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject2']; ?>" readonly><input type="Number" name="S2Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject3']; ?>" readonly><input type="Number" name="S3Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                    <?php }
                    if($Class == 'BBA-1' or $Class == 'BBA-2' or $Class == 'BBA-3' or $Class == 'BBA-4' or $Class == 'BBA-5' or $Class == 'BBA-6'){ 
            ?>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject1']; ?>" readonly><input type="Number" name="S1Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject2']; ?>" readonly><input type="Number" name="S2Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject3']; ?>" readonly><input type="Number" name="S3Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject4']; ?>" readonly><input type="Number" name="S4Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject5']; ?>" readonly><input type="Number" name="S5Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject6']; ?>" readonly><input type="Number" name="S6Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject7']; ?>" readonly><input type="Number" name="S7Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject8']; ?>" readonly><input type="Number" name="S8Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
            <?php }
            if($Class == 'B.com-1' or $Class == 'B.com-2' or $Class == 'B.com-3' or $Class == 'B.com-4' or $Class == 'B.com-5' or $Class == 'B.com-6'){
            ?>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject1']; ?>" readonly><input type="Number" name="S1Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject2']; ?>" readonly><input type="Number" name="S2Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject3']; ?>" readonly><input type="Number" name="S3Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject4']; ?>" readonly><input type="Number" name="S4Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject5']; ?>" readonly><input type="Number" name="S5Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject6']; ?>" readonly><input type="Number" name="S6Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject7']; ?>" readonly><input type="Number" name="S7Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
                <input type="text" style="font-size: 11.9px; height: 19.9px; width: 29.9%; display: inline;" value="<?php echo $_SESSION['subject8']; ?>" readonly><input type="Number" name="S8Marks" placeholder="Enter Marks*" style="Height: 19.9px; width: 86.9px;" required><p>
            <?php } ?>
        <input type="submit" value="Declare" name="Result" id='see' style="font-size: 19.9px; color: black; background-color: white; border-radius: 29px;" class="see">
        <p>
        <?php
        }
        }
        ?>
        </form>
        <form action="" method="POST">
        <?php if(isset($_POST['Result'])){
            $_SESSION['Login_type'] = $_POST['Login_type'];
            $_SESSION['Username'] = $_POST['Username'];
        ?>
        <input type="submit" value="Whole Class Result Declared??" name="WholeClassResultDeclared" id='see' style="font-size: 19.9px; color: white; background-color: green; border-radius: 29px;" class="see">
        <?php } ?>
    </form>
    <?php if(isset($_POST['WholeClassResultDeclared'])){
        unset($_SESSION['spuid']);
        unset($_SESSION['Name']);
        unset($_SESSION['Class']);    
        unset($_SESSION['subject1']);
        unset($_SESSION['subject2']);
        unset($_SESSION['subject3']);
        unset($_SESSION['subject4']);
        unset($_SESSION['subject5']);
        unset($_SESSION['subject6']);
        unset($_SESSION['subject7']);
        unset($_SESSION['subject8']);
        header('location: SelectExam.php');
    } ?>
        </center>
        <p>
        <center>
       <?php
       if($_SERVER['REQUEST_METHOD'] and isset($_POST['Result'])){
           $Spuid = $_SESSION['spuid'];
           $Name = $_POST['Name'];
           $Class = $_SESSION['Class'];
           $S1 = $_SESSION['subject1'];
           $S2 = $_SESSION['subject2'];           
           $S3 = $_SESSION['subject3'];
           if(isset($_POST['subject4'])){
           $S4 = $_SESSION['subject4'];
           }
           if(isset($_POST['subject5'])){
           $S5 = $_SESSION['subject5'];
           $S6 = $_SESSION['subject6'];
           $S7 = $_SESSION['subject7'];
           $S8 = $_SESSION['subject8'];
           }
           $S1M = $_POST['S1Marks'];
           $S2M = $_POST['S2Marks'];
           $S3M = $_POST['S3Marks'];
           if(isset($_POST['S4Marks'])){
           $S4M = $_POST['S4Marks'];
           }
           if(isset($_POST['S5Marks'])){
           $S5M = $_POST['S5Marks'];
           $S6M = $_POST['S6Marks'];
           $S7M = $_POST['S7Marks'];
           $S8M = $_POST['S8Marks'];
           }
           $Obtained = $S1M + $S2M + $S3M + $S4M + $S5M + $S6M + $S7M + $S8M;
        $Total = $_SESSION['TotalMarks'];

        //    echo $Spuid;
        //    echo $Name;
        //    echo $Class;
        //    echo $S1;
        //    echo $S2;
        //    echo $S3;
        //    echo $S4;
        //    echo $S5;
        //    echo $S6;
        //    echo $S7;
        //    echo $S8;
        //    echo $S1M;
        //    echo $S2M;
        //    echo $S3M;
        //    echo $S4M;
        //    echo $S5M;
        //    echo $S6M;
        //    echo $S7M;
        //    echo $S8M;
        //    echo $Total;
        //    echo $Obtained;
        
        if($Class == 'BCA-1' or $Class == 'BCA-2' or $Class == 'BCA-3' or $Class == 'BCA-4'){
        $sql = "INSERT INTO `Results`(SPU_ID, Name, Class, S1, S2, S3, S4, S1M, S2M, S3M, S4M, Total, Obtained) VALUES('$Spuid', '$Name', '$Class', '$S1', '$S2', '$S3', '$S4', '$S1M', '$S2M', '$S3M', '$S4M', '$Total', '$Obtained')";
        if(mysqli_query($conn, $sql)){
            echo "<h4 style='color: white; background: green;'>SPUID : <span style='color: skyblue; font-size: 29px;'>$Spuid</span>`s result is declared.</h4>";
        }
           }
        if($Class == 'BCA-5' or $Class == 'BCA-6'){
            $sql = "INSERT INTO `Results`(SPU_ID, Name, Class, S1, S2, S3, S1M, S2M, S3M, Total, Obtained) VALUES('$Spuid', '$Name', '$Class', '$S1', '$S2', '$S3', '$S1M', '$S2M', '$S3M', '$Total', '$Obtained')";
            if(mysqli_query($conn, $sql)){
                echo "<h4 style='color: white; background: green;'>SPUID : <span style='color: skyblue; font-size: 19.9px;'>$Spuid</span>`s result is declared.</h4>";
            }
           }
           else{
            $sql = "INSERT INTO `Results`(SPU_ID, Name, Class, S1, S2, S3, S4, S5, S6, S7, S8, S1M, S2M, S3M, S4M, S5M, S6M, S7M, S8M, Total, Obtained) VALUES('$Spuid', '$Name', '$Class', '$S1', '$S2', '$S3', '$S4', '$S5', '$S6', '$S7', '$S8', '$S1M', '$S2M', '$S3M','$S4M', '$S5M', '$S6M','$S7M', '$S8M', '$Total', '$Obtained')";
            if(mysqli_query($conn, $sql)){
                echo "<h4 style='color: white; background: green;'>SPUID : <span stlye='color: skyblue; font-size: 19.9px;'>$Spuid</span>`s result is declared.</h4>";
            }
           }
        $sql = "SELECT Course, Semester, Email FROM `Student Registration` WHERE SPU_ID ='$Spuid'";
        $check = mysqli_query($conn, $sql);
        while($Match = $check->fetch_assoc()){
            $Course = $Match['Course'];
            $Class =  $Match['Semester'];
            $to = $Match['Email'];
            $Subject = "Result Declaration";
            $Message = "Hiii ".$Spuid .",\nYour ".$Course." ".$Class." Result is declared";
            mail($to, $Subject, $Message);
        }
    }
}

    ?>
</form>
</div>
<hr>
</main>
  <footer>
  <center>
         <h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> Savjani College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>