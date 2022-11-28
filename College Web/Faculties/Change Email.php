<?php
session_start();
if (empty($_SESSION['Username'] && $_SESSION['Password']) || $_SESSION['Login_type'] != 'Faculties') {        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: ../Login/Login.php'));
    }
    
include "../php files/db_connection.php";
$Username = $_SESSION['Username'];
if(isset($_POST['Reset']))
{
    $Email = $_POST['Email'];
    $Count = 0;
    
    
    //email validation
      if(empty($Email)){
        echo "</center><strong>email : </strong>email is required. </center><br>";
    }
    else{
        //Check is email in well formed?
        if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
            echo "<center><strong style='color: red;'>email format is not valid. </strong></center><br>";
            $Count = 1;
        }
    }
    
    //Check Old And New Email
    //Principal
    $sql = "SELECT Email FROM `Faculties` WHERE Endorsement_No='$Username'";
    
    $check = mysqli_query($conn, $sql);
   if($_SESSION['Login_type'] == 'Faculty')
   {
    while($Match = $check->fetch_assoc())
    {
        if( $Email == $Match['Email']){
        echo "<center><strong style='color: red;'>Enter Different Email. Your Old And New both Emails are same.</strong><br></center>";
        $Count = 1;
}
        }
    }
  
    //Faculty new Email
    if($_SESSION['Login_type'] == 'Faculty' && $Count != 1){
        $sql = "UPDATE `Faculties` SET Email='$Email' WHERE Endorsement_No='$Username'";
        $Result=mysqli_query($conn, $sql);
        if($Result){
        echo "<center><h4 style='color: white; background-color: green;'>";
        echo " Email has been changed Successfully.</h4></center>";
        
        $to = $Email;
        $Subject = "Change Email";
        $Message = "Hii $Username,\nYour Email Has been Changed Successfully.";
       
       //Mail Sent
        mail($to, $Subject, $Message);
        }
        //redirection
         echo "<script>window.location='Welcome.php'</script>";
    }
}
//Close Connection
$conn->close();
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
    <link rel="stylesheet" href="../CSS Files/Create_New_Password.css">
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
            <hr>
        </center>
        </header>
<main>
    <section>
        <p>
        <center>
        <form action="" method="POST">
            <fieldset>
            <legend>Change Email</legend>
<center><img src="../../Images/Login/Logged_in.jpg" style='background-color: white; height: 96px; width: 95px; border-radius: 59px;'><br>
<?php
if($_SESSION['Login_type'] != ("Student" && "Faculty")){
echo "<h4 style='color: white;'>";
echo  $_SESSION['Login_type'];
echo "</h4>";
}
else{
    echo "<h4 style='color: white;'>";
echo  $_SESSION['Username'];
echo "</h4>";
}
?>
</center>
<center>
                <p>
            <input type="Email" name="Email" id="Email" placeholder="Enter New Email *" required style="height: 19.9px; width: 96%"><br></center><br>
            <center><input type="submit" name="Reset" value="Change Email" id="Reset"></center>
            </fieldset>
        </form>
    </section>
<hr>
</main>

  <footer>
         <center>
         <h1 id="copyright">&copy;&nbsp;2022-<script>document.write(new Date().getFullYear())</script> Savjani College and GHANSHYAM VAJA. All Rights Reserved</h1>
        </center>
</footer>
</body>
</html>