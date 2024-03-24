<?php

session_start();
include "serv.php";

if(isset($_POST['username']) && isset($_POST['password'])){

	function validate($data){

		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if(empty($username)){

		header("Location:main.php?error=Username is required!");
		exit();
	}
	elseif(empty($password)){
		header("Location:main.php?error=Password is required!");
		exit();
	}
	else{
		$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) === 1){
			$row = mysqli_fetch_assoc($result);

			if($row['username'] === $username && $row['password'] === $password){

				header("Location:main.php?success= You are Connected!");
				exit();
			}
		}
		else{
			header("Location:main.php?error= Incorrect Username or Password!");
			exit();
		}
	}

}
else{
	header("Location:main.php");
	exit();
}

?>