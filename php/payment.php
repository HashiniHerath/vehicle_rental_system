<?php

$cusname = $_POST["fname"];
$cusmail = $_POST["email"];
$cusadrs = $_POST["address"];
$cuscity = $_POST["city"];
$cusstate = $_POST["state"];
$cuszip = $_POST["zipcode"];
$crdname = $_POST["cname"];
$crdno = $_POST["cnumber"];
$crdmonth = $_POST["expmonth"];
$crdyear = $_POST["expyear"];
$crdcvv = $_POST["cvv"];

$con = mysqli_connect("localhost", "root", "", "paymentMS");

if($con){
	echo "Successfully Conected";
}
else{
	echo "Connection Failed";
}

$res = mysqli_query($con, "insert into payment values('$cusname', '$cusmail', '$cusadrs', '$cuscity', '$cusstate', '$cuszip', '$crdname', '$crdno', '$crdmonth', '$crdyear', '$crdcvv')");

if($con){
	echo "Successfully Saved";
}
else{
	echo "Save Failed";
}

?>

