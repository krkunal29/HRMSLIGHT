<?php
include '../db/connection.php';
session_start();
$uid = $_SESSION['id'];
$projectname = $_REQUEST['projectname'];
$clientcompany = $_REQUEST['clientcompany'];
$startdate = $_REQUEST['startdate'];
$enddate = $_REQUEST['enddate'];
$rate = $_REQUEST['rate'];
$rateinhours = $_REQUEST['rateinhours'];
$priority = $_REQUEST['priority'];
$addprojectleader = $_REQUEST['addprojectleader'];
$addteam = $_REQUEST['addteam'];
$description = $_REQUEST['description'];
$sql ="INSERT INTO createproject(uid,projectname,clientcompany,startdate,enddate,rate,rateinhours,priority,addprojectleader,addteam,description) values
('$uid','$projectname','$clientcompany','$startdate','$enddate','$rate','$rateinhours','$priority','$addprojectleader','$addteam','$description')";
mysqli_query($con,$sql);

echo "Information Saved Successfully";
?>
