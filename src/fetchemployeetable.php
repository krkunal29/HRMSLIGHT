<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$response = [];
$sql = "SELECT id,selectstaff,empid,empemail,total,empjoindate,empdesignation,emprole FROM userpayslip WHERE uid='$uid'";

if($result = mysqli_query($con,$sql)){
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
      array_push($response,[
        'id' => $row['id'],
        'selectstaff' => $row['selectstaff'],
        'empid'       => $row['empid'],
        'empemail'    => $row['empemail'],
        'total'     => $row['total'],
        'empjoindate'     => $row['empjoindate'],
        'empdesignation' => $row['empdesignation']
      ]);
    }

  }
}
exit(json_encode($response));
 ?>
