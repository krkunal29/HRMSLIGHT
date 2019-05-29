<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$firstname = $_POST['firstname'];
$lastname     = $_POST['lastname'];
$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];
$confirmpassword     = $_POST['confirmpassword'];
$clientid = $_POST['clientid'];
$phoneno    = $_POST['phoneno'];
$companyname    = $_POST['companyname'];

$insertsql = "INSERT INTO clients(uid,firstname,lastname,username,email,password,
  confirmpassword,clientid,phoneno,companyname)
VALUES('$uid','$firstname','$lastname','$username','$email','$password','$confirmpassword','$clientid'
  ,'$phoneno','$companyname')";
  mysqli_query($con,$insertsql) or die(mysqli_error($con));
  echo  "Information Saved Successfully !!!";
 ?>
