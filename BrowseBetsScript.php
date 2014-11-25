<?php

$servername = "mysql.lrk.si";
$username = "artac_blaz";
$password = "zatlok";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT username, password FROM artac_blaz_b1.user";
//$sql = "SELECT * FROM artac_blaz_b1.user WHERE username=$";
//$result = $conn->query($sql);

//$conn->close();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM artac_blaz_b1.user WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            //echo $result;
            if (isset($_POST['rememberme'])) {
                /* Set cookie to last 1 year */
                setcookie('username', $_POST['username'], time()+60*60*24*365, '/');
                setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/');
            
            } else {
                /* Cookie expires when browser closes */
                setcookie('username', $_POST['username'], false, '/');
                setcookie('password', md5($_POST['password']), false, '/');
            }
            header('Location: index.php');
            //echo "ja";
        } else {
            header('Location: error-login.php');
        }

}
?>