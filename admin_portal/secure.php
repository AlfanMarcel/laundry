<?php
session_start(); 
if(!isset($_SESSION['Admin_Portal'] )) {
	header("location:logout.php");
}
?>