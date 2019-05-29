<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$empid = $_REQUEST['empid'];
$institution = $_POST['institution'];
$subject     = $_POST['subject'];
$startingdate = $_POST['startingdate'];
$completedate   = $_POST['completedate'];
$degree = $_POST['degree'];
$grade = $_POST['grade'];
$insertsql = "INSERT INTO usereducationinformation(uid,empid,institution,subject,startingdate,completedate,
  degree,grade)
VALUES('$uid','$empid','$institution','$subject','$startingdate','$completedate','$degree',
  '$grade')";

mysqli_query($con,$insertsql) or die(mysqli_error($con));
echo  "Information Saved Successfully !!!";
?>
