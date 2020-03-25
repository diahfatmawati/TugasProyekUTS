<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$email = $_POST['email'];
$pass = $_POST['pass'];

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
	die("Connection failed : " .mysqli_connect_error());
	}

$sql = "INSERT INTO login (email, pass) VALUES ('$email', '$pass')";

if (empty($_POST['email'])) {
	header("Location:error.php");
} elseif (empty($_POST['pass'])) {
	header("Location:error.php");
} elseif (mysqli_query($conn, $sql)) {
	header("Location:successfully.php");
} else {
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>