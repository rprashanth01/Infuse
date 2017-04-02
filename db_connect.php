<?php
	include_once 'error_values.php';
	include_once 'db_variables.php';
	
	mysql_connect($host, $uname, $pword)or die($err_1);
	mysql_select_db($db) or die($err_2);
?>