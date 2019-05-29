<?php
include '../db/connection.php';
session_start();
$uid = $_SESSION['id'];
$response = array();
$sql = "SELECT id,departmentname FROM departmentList WHERE companyid=$uid";
// echo $sql;
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    array_push($response,[
      'id'=> $row['id'],
      'departmentname'=> $row['departmentname']
    ]);
    }
    exit(json_encode($response));
}
?>
