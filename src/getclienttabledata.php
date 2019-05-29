<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$response = [];
$sql = "SELECT firstname,lastname,email,clientid,phoneno,companyname from clients where uid ='$uid'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    array_push($response,[
      'firstname'=> $row['firstname'],
      'lastname'=> $row['lastname'],
      'email'=> $row['email'],
      'clientid'=> $row['clientid'],
      'phoneno'=> $row['phoneno'],
      'companyname'=> $row['companyname']

    ]);
    }
    exit(json_encode($response));
}
?>
