<?php

$server="localhost";
$db="Login";
$username="root";
$password="";

$conn = mysqli_connect($server,$username,$password,$db);

if(isset($_POST('user')))
	
{
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$sql = "Select * from users where username = '$username' AND passwprd = '$password' limit 1";
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) ==1) {
		echo "Login Successful!!! \t\t:".$username;
		exit();
	}
	else {
		echo "Failed to Login".mysqli_error($conn);
		exit();
	}
	
}

?>

