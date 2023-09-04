<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "rental";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
else{
	//echo "connected";
	//checking connected or not//
}
?>