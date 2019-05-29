<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$response = [];
$departmentid = $_REQUEST['departmentid'];
$sql = "DELETE FROM departmentList WHERE id=$departmentid and companyid=$uid";
$result = mysqli_query($con,$sql);
exit(json_encode($response));
 ?>
