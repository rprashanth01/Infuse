<?php
	include_once 'always_include_start.php';
	
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$query = "select count(*) AS abc from faculty";
	
	$val = mysql_query($query);

	$row = mysql_fetch_assoc($val);
	
	echo $row['abc'];
	
	include_once 'always_include_end.php';
?>