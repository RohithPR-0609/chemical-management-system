<?php
$email=$_POST['email'];
$password=$_POST['password'];

$conn=mysqli_connect("localhost","root","","scorer") or die("failed:" . mysqli_connect_error());


$sql = "select firstname,lastname from users where email='$email' and password='$password'";
$result=mysqli_query($conn,$sql) or die("failed");
while($row=mysqli_fetch_assoc($result))
{
	$_session["firstname"]=$row['firstname'];
	$_session["lastname"]=$row['lastname'];
}

header('location:/scorer/user_home.php');

	

$conn->close();
?>