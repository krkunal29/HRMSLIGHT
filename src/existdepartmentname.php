<?php
include '../db/connection.php';
session_start();
$uid = $_SESSION['id'];
$departmentname  =  $_POST['departmentname'];
$response = array();
$sql = "SELECT id FROM departmentList WHERE companyid=$uid and departmentname='$departmentname'";
// echo $sql;
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  $response['status']=true;
}
else{
  $response['status']=false;
}
exit(json_encode($response));
?>
