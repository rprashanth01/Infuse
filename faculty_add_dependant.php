<?php
	include_once 'always_include_start.php';
	include_once 'session_check.php';
	
	include_once 'db_connect.php';
	include_once 'db_queries.php';

	$dep_fac_id = $_SESSION['uid'];
	$dep_name = $_POST['add_dep_name'];
	$dep_relation = $_POST['add_dep_relation'];
	$dep_contact_no = $_POST['add_dep_contact'];
	$dep_email_id = $_POST['add_dep_email'];
	
	$query = 'INSERT INTO DEPENDANT VALUES(\''.$dep_fac_id.'\', \''.$dep_name.'\', \''.$dep_relation.'\', \''.$dep_contact_no.'\', \''.$dep_email_id.'\');';
	
	mysql_query($query);
	
	header('Location: faculty_profile.php');
	
	include_once 'always_include_end.php';
?>