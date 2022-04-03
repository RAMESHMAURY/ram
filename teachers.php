<?php

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...




	
}

print($_SESSION['username']);

?>