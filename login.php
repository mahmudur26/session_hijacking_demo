<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse525";

$con = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$password = md5($password);
	mysqli_query($con,"INSERT INTO user(name,password) VALUES('$username','$password')");
	
    var_dump('done');
    exit();
}
?>
