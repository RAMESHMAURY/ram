<?php
session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...	
}
$page=$_SESSION['page'];
header($page);
?>
