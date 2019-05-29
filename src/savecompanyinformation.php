<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$companyname = $_POST['companyname'];
$contactno     = $_POST['contactno'];
$address = $_POST['address'];
$country    = $_POST['country'];
$city = $_POST['city'];
$state     = $_POST['state'];
$postalcode = $_POST['postalcode'];
$email    = $_POST['email'];
$phoneno     = $_POST['phoneno'];
$mobileno     = $_POST['mobileno'];
$fax = $_POST['fax'];
$websiteurl    = $_POST['websiteurl'];
$insertsql = "INSERT INTO companyprofile(uid,companyname,contactno,address,country,
  city,state,postalcode,email,phoneno,mobileno,fax,websiteurl)
VALUES('$uid','$companyname','$contactno','$address','$country','$city','$state'
  ,'$postalcode','$email','$phoneno','$mobileno','$fax','$websiteurl')";

$updatesql = "UPDATE companyprofile set companyname='$companyname',contactno='$contactno',address='$address'
,country='$country',city='$city',state='$state',postalcode='$postalcode',email='$email',
phoneno='$phoneno',mobileno='$mobileno',fax='$fax',websiteurl='$websiteurl'
 where uid='$uid'";
$check_sql = "SELECT id FROM companyprofile WHERE uid = '$uid'";
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
