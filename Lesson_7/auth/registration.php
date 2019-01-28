<?
include "config.php";
$name = strip_tags($_POST["name"]);
$login = strip_tags($_POST["login"]);
$pass = strip_tags($_POST["pass"]);
$passCod = md5($pass);
$email = strip_tags($_POST["email"]);

$sql = "insert into users (name, login, pass, email) values ('$name','$login', '$passCod', '$email')";

$res = mysqli_query($connect, $sql) or die("Error: ".mysqli_error($connect));

setcookie("name",$name);
setcookie("login",$login);
setcookie("pass",$pass);

header("Location: authorizationPage.php");
?>
