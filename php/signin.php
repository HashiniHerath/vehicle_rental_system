<?php

//bring data from html form

$user=$_POST["username"];
$mail=$_POST["email"];
$phone=$_POST["phone"];
$pass=$_POST["password"];

//create connection


$con=mysqli_connect("localhost","root","","registration");
if($con){
	echo "Successfully Connected";
}else{
	echo "Connection Failed";
}

$res=mysqli_query($con,"insert into register values('$user','$mail','$phone','$pass')");

if($res){
	echo "Successfully Saved ";
}else{
	echo "Save failed";
}


?>	