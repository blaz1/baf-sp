<?php

$conn = new mysqli("mysql.lrk.si", "artac_blaz", "zatlok");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT username, password FROM artac_blaz_b1.user";
//$sql = "SELECT * FROM artac_blaz_b1.user WHERE username=$";
//$result = $conn->query($sql);

//$conn->close();
$betName = $_POST['betName'];
$betDesc = $_POST['betDesc'];
$betStart = $_POST['betStart'];
$betEnd = $_POST['betEnd'];
$betReward = $_POST['betReward'];
$id_user = $_COOKIE['id_user'];
$create_time = date("Y-m-d H:i:s");

$opponents = "";
$i = 1;

//$opp = $_POST['newOpp1'];

while (isset($_POST['newOpp'.$i])) {
	$opponents = $opponents.$_POST['newOpp'.$i].";";
	$i = $i + 1;
}

//echo "pred";
$sql = "INSERT INTO artac_blaz_b1.bets (name, description, create_time, start_time, end_time, reward, opponents, owner_id) values ('$betName', '$betDesc', '$create_time', '$betStart', '$betEnd', '$betReward', '$opponents', '$id_user')";
$conn->query($sql);

//LAST_INSERT_ID()
$rule = "";
$i = 1;

//$opp = $_POST['newOpp1'];
$betId = mysqli_insert_id($conn);
echo $betId;
while (isset($_POST['newRule'.$i])) {
	$rule = $_POST['newRule'.$i];
	$sql = "INSERT INTO artac_blaz_b1.rules (description, bet_id) values ('$rule', '$betId')";
	$conn->query($sql);
	//echo $rule;
	$i = $i + 1;
}
//echo "uspelo";
/*echo "$betName";
echo "$betDesc";
echo "$betStart";
echo "$betEnd";
echo "$betReward";

echo "<br>";
echo $opponents;*/

header('Location: bet-details.php?betid='.$betId);
?>