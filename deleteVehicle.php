<?php

include 'connection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `vehicle` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);

//header("location:adminDash.php");

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully vehicle Deleted!!!');
    window.location.href='ManageVehicle.php';
    </script>");

?>