<?php 
// kondisi dalam logout
session_start();
session_unset();
session_destroy();
$_SESSION = array();
header("location:login.php");
?>