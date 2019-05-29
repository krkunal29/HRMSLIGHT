<?php
include '../db/connection.php';
session_start();
$uid = $_SESSION['id'];
$departmentname = $_REQUEST['departmentname'];


$sql ="INSERT INTO departmentList(companyid,departmentname) VALUES ($uid,'$departmentname')";
mysqli_query($con,$sql);

echo "Department Added Successfully";
?>
