<?php
//retrieve
$username = $_POST['username'];
$password = $_POST['password'];

//encrypt
$hash = hash('sha256', $password);
function createSalt()
{
    $string = md5(uniqid(rand(), true));
    return substr($string, 0, 3);
}
$salt = createSalt();
$hash = hash('sha256', $salt . $hash);

//db
$dbhost = 'localhost';
$dbname = 'fynske_users';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $conn);
//sanitize username
$username = mysql_real_escape_string($username);
$query = "INSERT INTO users ( username, password, salt )
        VALUES ( '$username' , '$hash' , '$salt' );";
mysql_query($query);
mysql_close();
header('Location: login.php');
?>
