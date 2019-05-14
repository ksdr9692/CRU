<?php
require "db.php";

function showData(){
global $connection;
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);

if(!$query){
	die('query failed' . mysqli_error());
}
while($row = mysqli_fetch_assoc($result)){
	$id = $row['id'];
    $name = $row['username'];
    $text = "{$id} - {$name}";
    echo "<option value='{$id}'>{$text}<php/option>";
					}

}


?>