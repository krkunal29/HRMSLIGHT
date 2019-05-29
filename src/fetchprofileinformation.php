<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$empid = $_REQUEST['empid'];
$response = [];
$sql = "SELECT userprofile.firstname,userprofile.lastname,userprofile.birthdate,userprofile.gender,
userprofile.address,userprofile.country,userprofile.state,userprofile.pincode,userprofile.contactno FROM userprofile
 WHERE uid  ='$uid' and empid ='$empid'";

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
  $row = mysqli_fetch_array($result);

  $response['firstname']     = strtoupper($row['firstname']);
  $response['lastname']     = strtoupper($row['lastname']);
  $response['birthdate']   = $row['birthdate'];
  $response['gender']   = $row['gender'];

  $response['address']       = $row['address'];
  $response['state'] =  $row['state'];
  $response['country']= $row['country'];

  $response['pincode']       = $row['pincode'];
  $response['contactno']     = $row['contactno'];

}
exit(json_encode($response));
 ?>
