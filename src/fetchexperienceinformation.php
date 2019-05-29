<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$empid = $_REQUEST['Emp_id'];
$response = [];
$sql = "SELECT  userexperienceinformation.companyname, userexperienceinformation.location
, userexperienceinformation.jobposition, userexperienceinformation.periodfrom,
userexperienceinformation.periodto
 FROM userexperienceinformation
 WHERE uid  ='$uid' and empid='$empid'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    array_push($response,[
      'companyname'=> $row['companyname'],
      'location'=> $row['location'],
      'jobposition'=> $row['jobposition'],
      'periodfrom'=> $row['periodfrom'],
      'periodto'=> $row['periodto']
    ]);
    }
    exit(json_encode($response));
}
?>
