<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$empid = $_REQUEST['Emp_id'];
$response = [];
$sql = "SELECT userpayslip.selectstaff, userpayslip.netsalary,userpayslip.basic,userpayslip.da,userpayslip.hra,userpayslip.conveyance,userpayslip.allowance
,userpayslip.medicalallowance,userpayslip.others,userpayslip.tds,userpayslip.esi,userpayslip.pf, userpayslip.leave1,
userpayslip.proftax, userpayslip.labwelfare, userpayslip.fund, userpayslip.otherdeducation, userpayslip.total,userpayslip.empemail
,userpayslip.empjoindate,userpayslip.empdesignation,userpayslip.emprole
FROM userpayslip WHERE userpayslip.uid='$uid' and userpayslip.empid='$empid'";

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
  $row = mysqli_fetch_array($result);

  $response['selectstaff']     = $row['selectstaff'];
  $response['netsalary']     = $row['netsalary'];
  $response['basic']   = $row['basic'];
  $response['da']   = $row['da'];

  $response['hra']       = $row['hra'];
  $response['conveyance'] =  $row['conveyance'];
  $response['allowance']= $row['allowance'];

  $response['medicalallowance']       = $row['medicalallowance'];
  $response['others']     = $row['others'];

  $response['tds']       = $row['tds'];
  $response['esi'] =  $row['esi'];
  $response['pf']= $row['pf'];

  $response['leave1']       = $row['leave1'];
  $response['proftax'] =  $row['proftax'];
  $response['labwelfare']= $row['labwelfare'];
  $response['fund']       = $row['fund'];
  $response['otherdeducation'] =  $row['otherdeducation'];
  $response['total']= $row['total'];

  $response['empemail']       = $row['empemail'];
  $response['empjoindate'] =  $row['empjoindate'];
  $response['empdesignation']= $row['empdesignation'];
  $response['emprole']       = $row['emprole'];

}
exit(json_encode($response));
 ?>
