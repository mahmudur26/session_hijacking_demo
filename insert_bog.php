<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse525";

$con = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];

    $title = mysqli_real_escape_string($con,$_POST['title']);
	$description = mysqli_real_escape_string($con,$_POST['description']);
	mysqli_query($con,"INSERT INTO blog(title,description) VALUES('$title','$description')");
	
    header('blog-form.php');
    exit();
}
?>
