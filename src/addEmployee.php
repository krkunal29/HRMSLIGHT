<?php
session_start();
include '../db/connection.php';
$firstname    = $_POST['firstname'];
$uid = $_SESSION['id'];
$lastname     = $_POST['lastname'];
$username     = $_POST['username'];
$useremail    = $_POST['useremail'];
$userpassword = $_POST['userpassword'];
$joiningdate  = $_POST['Joiningdate'];
$userphone    = $_POST['userphone'];
$company      = $_POST['company'];
$designation  = $_POST['designation'];
if(isset($_POST['Emp_id'])){
  $Emp_id = $_POST['Emp_id'];
$check_sql = "SELECT Emp_id FROM Employyes WHERE Emp_id = '$Emp_id'";
$result = mysqli_query($con,$check_sql);
if(mysqli_num_rows($result)>0){
  $sql = "UPDATE Employyes SET firstname = '$firstname',lastname='$lastname',username='$username',useremail='$useremail',userpassword = '$userpassword',
  Joiningdate='$joiningdate',userphone='$userphone',company='$company',designation='$designation' WHERE Emp_id = '$Emp_id'";
  mysqli_query($con,$sql);
  echo "Employee Updated SuccessFully";
}
}
else {
  $sql = "INSERT INTO `Employyes` (`uid`,`firstname`, `lastname`, `username`, `useremail`, `userpassword`, `Joiningdate`, `userphone`, `company`, `designation`)
   VALUES('$uid','$firstname','$lastname','$username','$useremail','$userpassword',
     '$joiningdate','$userphone','$company','$designation')";
     mysqli_query($con,$sql);
     echo "Employee Added Succesfully";
}


 ?>
