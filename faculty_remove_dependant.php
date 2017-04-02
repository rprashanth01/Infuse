<?php
	include_once 'always_include_start.php';
	include_once 'session_check.php';
	
	include_once 'db_connect.php';
	include_once 'db_queries.php';

	$dep_fac_id = $_SESSION['uid'];
	foreach ($_POST['rem_dep'] as $dep_name) {
		$query = 'DELETE FROM DEPENDANT WHERE DEP_FAC_ID = \''.$dep_fac_id.'\' AND DEP_NAME = \''.$dep_name.'\';';
		mysql_query($query);
	}
	
	header('Location: faculty_profile.php');
	
	include_once 'always_include_end.php';
?>