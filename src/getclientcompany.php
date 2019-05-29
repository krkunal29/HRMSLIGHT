<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$response = [];
$sql = "SELECT clients.companyname FROM clients WHERE clients.uid  ='$uid'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    array_push($response,[
      'clientname'=> $row['companyname']
    ]);
    }
    exit(json_encode($response));
}
?>
