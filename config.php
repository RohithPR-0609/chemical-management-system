<?php
	$connection = mysqli_connect('localhost', 'root','') or die ("Failed to connect");
	$db = mysqli_select_db($connection, 'chemicalp') or die ("Failed to connect");
?>