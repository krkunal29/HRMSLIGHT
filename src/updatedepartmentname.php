<?php
include '../db/connection.php';
session_start();
$uid = $_SESSION['id'];
$departmentname = $_REQUEST['departmentname'];
$departmentid = $_REQUEST['departmentid'];

$sql ="UPDATE departmentList SET departmentname='$departmentname' WHERE id=$departmentid and companyid=$uid";
mysqli_query($con,$sql);

echo "Department Updated Successfully";
?>
