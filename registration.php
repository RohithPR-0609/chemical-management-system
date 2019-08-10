<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


$conn=mysqli_connect("localhost","root","","chemicals") or die("failed:" . mysqli_connect_error());



if($password==$cpassword)
	$sql = "INSERT INTO users (firstname, lastname, email,password) VALUES ('$name','$email_id','$password')";
else
{
 header('location:/chemicals/registration.html');
}


if ($conn->query($sql) === TRUE) {
	header('location:/chemicals/index.html');
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>















?>