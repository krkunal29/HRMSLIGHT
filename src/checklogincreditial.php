<?php
include '../db/connection.php';
session_start();

$email  =  $_POST['email'];
$password  =  $_POST['password'];
$response = array();
$sql = "SELECT id,email,password,uname From userregistration where  email = '$email' and password = '$password'";
// echo $sql;
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  $row = mysqli_fetch_array($result);
  $email     = $row['email'];
  $uname     = $row['uname'];
  $id     = $row['id'];
  $_SESSION['uemail']   = $email;
  $_SESSION['uname']    = $uname;
  $_SESSION['id']    = $id;
  $response['status']='T';
}
else{
  $response['status']='F';
}
exit(json_encode($response));
?>
