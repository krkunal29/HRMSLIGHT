<?php
include '../db/connection.php';
session_start();
$response = [];
$uid = $_SESSION['id'];
$firstname = $_POST['firstname'];
$lastname     = $_POST['lastname'];
$sql = "SELECT Emp_id,firstname,lastname,username,userpassword,useremail,userphone,
Joiningdate,company,designation FROM Employyes where uid = '$uid' and firstname ='$firstname' and lastname ='$lastname'";
if($result = mysqli_query($con,$sql)){
  if(mysqli_num_rows($result)>0){
      $row = mysqli_fetch_array($result);
        $response['Emp_id']       = $row['Emp_id'];
        $response['firstname']    = $row['firstname'];
        $response['lastname']     = $row['lastname'];
        $response['username']     = $row['username'];
        $response['userpassword'] = $row['userpassword'];
        $response['useremail']    = $row['useremail'];
        $response['userphone']    = $row['userphone'];
        $response['Joiningdate']  = $row['Joiningdate'];
        $response['company']      = $row['company'];
        $response['designation']  = $row['designation'];

  }
}
exit(json_encode($response));
?>
