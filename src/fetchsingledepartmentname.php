<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$response = [];
$departmentid = $_REQUEST['departmentid'];
$sql = "SELECT  departmentname FROM departmentList WHERE id=$departmentid and companyid=$uid";

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
  $row = mysqli_fetch_array($result);
  $response['departmentname']     = $row['departmentname'];
}
exit(json_encode($response));
 ?>
