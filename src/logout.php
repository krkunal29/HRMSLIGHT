<?php
session_start();
unset($_SESSION['uemail']);
unset($_SESSION['uname']);
unset($_SESSION['id']);
session_destroy();
header("Location:./");
 ?>
