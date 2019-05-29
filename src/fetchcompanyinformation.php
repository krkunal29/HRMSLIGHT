<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$response = [];
$sql = "SELECT companyprofile.companyname,companyprofile.contactno,companyprofile.address,companyprofile.country,
companyprofile.city,companyprofile.state,companyprofile.postalcode,companyprofile.email,companyprofile.phoneno,companyprofile.mobileno
,companyprofile.fax,companyprofile.websiteurl FROM companyprofile
 WHERE uid  ='$uid'";

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
  $row = mysqli_fetch_array($result);

  $response['companyname']     = $row['companyname'];
  $response['contactno']     = $row['contactno'];
  $response['address']   = $row['address'];
  $response['country']   = $row['country'];

  $response['city']       = $row['city'];
  $response['state'] =  $row['state'];
  $response['postalcode']= $row['postalcode'];

  $response['email']       = $row['email'];
  $response['phoneno']     = $row['phoneno'];

  $response['mobileno']       = $row['mobileno'];
  $response['fax'] =  $row['fax'];
  $response['websiteurl']= $row['websiteurl'];
}
exit(json_encode($response));
 ?>
