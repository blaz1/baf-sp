<?php

$conn = new mysqli("mysql.lrk.si", "artac_blaz", "zatlok");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$email = $_POST['email'];
$pass1 = $_POST['password1'];
$pass2 = $_POST['password2'];

/*echo $user;
echo $email;
echo $pass1;
echo $pass2;*/

$date = date("Y-m-d H:i:s");
$sql = "INSERT INTO artac_blaz_b1.user (username, email, password, creation_time) values ('$user', '$email', '$pass1', '$date')";
if($pass1 === $pass2) {
    $conn->query($sql);
    header('Location: login.php');
}


?>