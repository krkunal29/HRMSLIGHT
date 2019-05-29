<?php
include '../db/connection.php';
$Emp_id = $_REQUEST['Emp_id'];
$response = [];
$sql = "SELECT Emp_id,firstname,lastname,username,useremail,userpassword,userphone,
 company,designation,Joiningdate FROM Employyes WHERE Emp_id = '$Emp_id'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
$row = mysqli_fetch_array($result);
$response['Emp_id'] = $row['Emp_id'];
$response['firstname'] = $row['firstname'];
$response['lastname'] = $row['lastname'];
$response['username'] = $row['username'];
$response['useremail'] = $row['useremail'];
$response['Joiningdate'] = $row['Joiningdate'];
$response['userpassword'] = $row['userpassword'];
$response['userphone'] = $row['userphone'];
$response['company'] = $row['company'];
$response['designation'] = $row['designation'];
}
exit(json_encode($response));
?>
