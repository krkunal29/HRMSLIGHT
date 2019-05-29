<?php
include '../db/connection.php';
$Emp_id = $_REQUEST['Emp_id'];
$sql = "DELETE FROM Employyes WHERE Emp_id = '$Emp_id'";
mysqli_query($con,$sql);
 ?>
