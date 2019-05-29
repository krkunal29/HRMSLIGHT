<?php
include '../db/connection.php';
$response = [];
$sql = "SELECT Emp_id,firstname,lastname,username,userpassword,useremail,userphone,
Joiningdate,company,designation FROM Employyes";
if($result = mysqli_query($con,$sql)){
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
      array_push($response,[
        'Emp_id'       => $row['Emp_id'],
        'firstname'    => $row['firstname'],
        'lastname'     => $row['lastname'],
        'username'     => $row['username'],
        'userpassword' => $row['userpassword'],
        'useremail'    => $row['useremail'],
        'userphone'    => $row['userphone'],
        'Joiningdate'  => $row['Joiningdate'],
        'company'      => $row['company'],
        'designation'  =>$row['designation']
      ]);
    }

  }
}
exit(json_encode($response));
 ?>
