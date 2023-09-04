<?php

include 'connection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `feedback` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);

//header("location:adminDash.php");

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted!!!');
    window.location.href='feedbackManage.php';
    </script>");

?>