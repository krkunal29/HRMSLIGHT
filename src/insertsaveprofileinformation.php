<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$empid = $_REQUEST['empid'];
$firstname = $_POST['firstname'];
$lastname     = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$gender    = $_POST['gender'];
$address = $_POST['address'];
$state     = $_POST['state'];
$country     = $_POST['country'];
$pincode = $_POST['pincode'];
$contactno    = $_POST['contactno'];
$insertsql = "INSERT INTO userprofile(uid,empid,firstname,lastname,birthdate,gender,
  address,country,state,pincode,contactno)
VALUES('$uid','$empid','$firstname','$lastname','$birthdate','$gender','$address',
  '$country','$state','$pincode','$contactno')";

$updatesql = "UPDATE userprofile set firstname='$firstname',lastname='$lastname',birthdate='$birthdate'
,gender='$gender',address='$address',country='$country',state='$state',pincode='$pincode',contactno='$contactno' where uid='$uid' and empid='$empid'";
$check_sql = "SELECT id FROM userprofile WHERE uid = '$uid' and empid='$empid'";
$result = mysqli_query($con,$check_sql) or die(mysqli_error($con)) ;
if(mysqli_num_rows($result)>0){
mysqli_query($con,$updatesql);
echo "Information Updated Successfully !!!";
}
else {
  mysqli_query($con,$insertsql) or die(mysqli_error($con));
  echo  "Information Saved Successfully !!!";
}
 ?>
