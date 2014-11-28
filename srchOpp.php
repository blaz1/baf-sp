<?php

$conn = new mysqli("mysql.lrk.si", "artac_blaz", "zatlok");
$username = $_GET['username'];

$sql = "SELECT * from artac_blaz_b1.user WHERE username='$username'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
	echo "gut";
}

//$user = $conn->query($sql)->fetch_assoc();

?>