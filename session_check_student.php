<?php
	if (!isset($_SESSION['uid'])) {
		header('Location: index.php');
	}
	
	$u_type = $_SESSION['u_type'];
	
	if (strcmp($u_type, 'STUDENT') != 0) {
		header('Location: index.php');
	}
?>