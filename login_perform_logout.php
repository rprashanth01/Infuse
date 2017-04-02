<?php
	include_once 'always_include_start.php';
	
	session_destroy();
	header('Location: index.php');
	
	include_once 'always_include_end.php';
?>