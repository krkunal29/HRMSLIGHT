<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$response = [];
$sql ="select Employyes.firstname ,Employyes.lastname FROM Employyes WHERE Employyes.uid  ='$uid'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    array_push($response,[
      'employeename'=> $row['firstname']." ".$row['lastname']
    ]);
    }
    exit(json_encode($response));
}
?>
