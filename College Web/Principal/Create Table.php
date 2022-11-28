<?php
include '../php files/db_connection.php';
// $name = $POST['name']
// $sql = "CREATE TABLE $name(
//     Endorsement_No VARCHAR(51) PRIMARY KEY,
//     Name VARCHAR(59) NOT NULL,
//     Department  VARCHAR(29) NOT NULL,
//     Mobile BIGINT(19) NOT NULL,
//     Email VARCHAR(29) NOT NULL,
//     Password VARCHAR(29) NOT NULL,
//     OTP INT(6) NOT NULL,
//     Secret_Key VARCHAR(59) NOT NULL
//     )";

//     if(mysqli_query($conn, $sql) == TRUE){
//         echo "Table Created Successfully without Any Error.";
//     }

$sql = "SELECT *FROM `Login`";
$check = mysqli_query($conn, $sql);
while($result = $check->fetch_assoc()){
    echo $result['Login_type'];
    echo "&nbsp;";
    echo $result['Password'];
    echo "&nbsp;";
    echo $result['OTP'];
    echo "&nbsp;";
    echo $result['Secret_Key'];
    echo "<p>";
}

$sql = "SELECT *FROM `Student Registration`";
$check = mysqli_query($conn, $sql);
while($result = $check->fetch_assoc()){
    echo $result['SPU_ID'];
    echo $result['Password'];
    echo $result['OTP'];
    echo $result['Secret_Key'];
    echo "<p>";
}

$sql = "SELECT *FROM `Faculties`";
$check = mysqli_query($conn, $sql);
while($result = $check->fetch_assoc()){
    echo $result['Endorsement_No'];
    echo $result['Password'];
    echo $result['OTP'];
    echo $result['Secret_Key'];
}

  mysqli_close($conn);
?>