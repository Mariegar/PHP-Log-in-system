<?php

	$lname="localhost";
	$uname="root";
	$password="";
	$db_name="ers1";

	$conn = mysqli_connect($lname, $uname, $password, $db_name);

	if(!$conn){
		echo "Connection Failed!";
	}
?>