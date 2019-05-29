<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$empid = $_REQUEST['Emp_id'];
$response = [];
$sql = "SELECT institution,subject,startingdate,completedate,degree,grade FROM usereducationinformation
 WHERE uid  ='$uid' and empid='$empid'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    array_push($response,[
      'institution'=> $row['institution'],
      'subject'=> $row['subject'],
      'startingdate'=> $row['startingdate'],
      'completedate'=> $row['completedate'],
      'degree'=> $row['degree'],
      'grade'=> $row['grade']
    ]);
    }
    exit(json_encode($response));
}
?>
