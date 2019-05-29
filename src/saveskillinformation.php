<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$empid = $_REQUEST['empid'];
$skills = $_POST['skills'];

$insertsql = "INSERT INTO userskill(uid,empid,skill) values('$uid','$empid','$skills')";
mysqli_query($con,$insertsql) or die(mysqli_error($con));
echo  "Information Saved Successfully !!!";
?>
