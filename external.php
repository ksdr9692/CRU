<?php

if(isset($_POST['submit'])){
	$name = array("Adrian", "Jande", "Loreto", "Khim Shae", "Dan Leuter", "Roy");
	$maximum = 10;
	$minimum = 5;

	$username = $_POST["username"];
	$password = $_POST["password"];

		if(strlen($username) < $minimum ){

			echo "User name has to be longer than 5 characters";
		}

		if(strlen($username) > $maximum ){

			echo "User name has to be shorter than 10 characters";
		}

		if(!in_array($username, $name)){
			echo "Sorry. You are not allowed to log in";
		}

		else {
			echo "Welcome";
		}	// $username = $_POST["username"];
	// $password = $_POST["password"];

	// echo "Hello  " . $username;
	// echo "Your password is  " . $password;
}



?>