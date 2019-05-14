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
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form method="post" action="external.php">
	<input placeholder="Username" type="text" name="username"> <br>
	<input placeholder="Password" type="password" name="password"> <br>
	<input placeholder="Submit" type="submit" name="submit">
</form>

	<!-- // $title = "Master Bugs' site";

	// $arrayNumber = array(190, 280, 780, "90", "200");

	// print_r($arrayNumber); 
// for ($i = 0; $i < 10; $i ++){
// 	echo $i . "<br>";


// }

// $todos = array("pray", "eat", "sleep", "play", "study");
// foreach($todos as $todo){
// 	echo $todo . "<br>";
// }

// function calculate(){

// } -->



<!-- <h1><?php echo $title; ?></h1> -->
</body>
</html>