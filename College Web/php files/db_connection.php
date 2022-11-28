<?php
//Database Connection
$servername = "127.0.0.1:4306";
$username = "root";
$password = "";
$db = "id19039457_kmkks";


$conn = new mysqli($servername, $username, $password, $db);

//Check Connection
if(!$conn){
    die("Connection failed: " . mysqli_connect-error());
}
?>