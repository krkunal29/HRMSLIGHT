<?php
include '../db/connection.php';
$uname = $_POST['uname'];
$email     = $_POST['email'];
$password = $_POST['password'];
$contactno    = $_POST['contactno'];
$sql = "INSERT INTO userregistration(uname,email,password,contactno) VALUES('$uname','$email','$password','$contactno')";
$result = mysqli_query($con,$sql);
?>
