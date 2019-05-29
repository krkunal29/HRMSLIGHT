<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$sql ="SELECT count(id) from clients WHERE uid='$uid'";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$response = [];
$response['clientid'] = $row[0]+1;
exit(json_encode($response));
?>
