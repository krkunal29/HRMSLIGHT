<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$empid = $_REQUEST['empid'];
$companyname = $_POST['companyname'];
$location     = $_POST['location'];
$jobposition = $_POST['jobposition'];
$periodfrom   = $_POST['periodfrom'];
$periodto = $_POST['periodto'];
$insertsql = "INSERT INTO userexperienceinformation(uid,empid,companyname,location,jobposition
  ,periodfrom,periodto)
VALUES('$uid','$empid','$companyname','$location','$jobposition','$periodfrom','$periodto')";

mysqli_query($con,$insertsql) or die(mysqli_error($con));
echo  "Information Saved Successfully !!!";
?>
