<?php
session_start();
include '../db/connection.php';
$uid = $_SESSION['id'];
$selectstaff = $_POST['selectstaff'];
$netsalary     = $_POST['netsalary'];
$basic = $_POST['basic'];
$da    = $_POST['da'];
$hra = $_POST['hra'];
$conveyance     = $_POST['conveyance'];
$allowance = $_POST['allowance'];
$medicalallowance    = $_POST['medicalallowance'];
$others     = $_POST['others'];
$tds     = $_POST['tds'];
$esi = $_POST['esi'];
$pf    = $_POST['pf'];
$leave    = $_POST['leave'];
$proftax    = $_POST['proftax'];
$labwelfare    = $_POST['labwelfare'];
$fund = $_POST['fund'];
$otherdeducation    = $_POST['otherdeducation'];
$empid    = $_POST['empid'];
$empemail    = $_POST['empemail'];
$empjoindate    = $_POST['empjoindate'];
$empdesignation   = $_POST['empdesignation'];
$emprole = $_POST['emprole'];
$total = $netsalary + $basic + $da + $hra + $conveyance + $allowance + $medicalallowance +
$others - $tds - $esi - $pf - $leave - $proftax - $labwelfare - $fund - $otherdeducation;
$insertsql = "INSERT INTO userpayslip(uid,empid,selectstaff,netsalary,basic,da,
  hra,conveyance,allowance,medicalallowance,others,tds,esi,pf,leave1,proftax,labwelfare
  ,fund,otherdeducation,total,empemail,empjoindate,empdesignation,emprole)
VALUES('$uid','$empid','$selectstaff','$netsalary','$basic','$da','$hra','$conveyance'
  ,'$allowance','$medicalallowance','$others','$tds','$esi','$pf',
  '$leave','$proftax','$labwelfare','$fund','$otherdeducation',
'$total','$empemail','$empjoindate','$empdesignation','$emprole')";
  mysqli_query($con,$insertsql) or die(mysqli_error($con));
  echo  "Information Saved Successfully !!!";
 ?>
