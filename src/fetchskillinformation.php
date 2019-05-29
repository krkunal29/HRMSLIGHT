<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$empid = $_REQUEST['Emp_id'];
$response = [];
$sql = "SELECT userskill.skill FROM userskill
 WHERE uid  ='$uid' and empid='$empid'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    array_push($response,[
      'skills'=> $row['skill']
    ]);
    }
    exit(json_encode($response));
}
?>
