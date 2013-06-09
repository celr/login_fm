<?php
include 'functions.php';

session_start();
$username = $_POST['username'];
$password = $_POST['password'];
//db
$dbhost = 'localhost';
$dbname = 'fynske_users';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $conn);
$username = mysql_real_escape_string($username);
$query = "SELECT password, salt
        FROM users
        WHERE username = '$username';";
$result = mysql_query($query);
if(mysql_num_rows($result) < 1) //no such user exists
{
    header('Location: login.php');
    die();
}
$userData = mysql_fetch_array($result, MYSQL_ASSOC);
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
if($hash != $userData['password']) //incorrect password
{
    header('Location: login.php');
    die();
}
else
{
    validateUser(); //sets the session data for this user
}

header('Location: welcome.php');

?>
