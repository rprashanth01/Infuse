<?php
	include_once 'always_include_start.php';
	
	if((isset($_POST['uid']) && !empty($_POST['uid'])) && (isset($_POST['pword']) && !empty($_POST['pword'])) ) {
		include_once 'db_connect.php';
		include_once 'db_queries.php';
		
		$prov_uid = strtoupper($_POST['uid']);
		$prov_pword = $_POST['pword'];
		
		if (preg_match('/1MS[0-9]{2}[A-Z]{2}\d{3}/', $prov_uid)) {
			include_once 'login_perform_login_student.php';
		} elseif (preg_match('/FAC[0-9]{3}[A-Z]{2}/', $prov_uid)) {
			include_once 'login_perform_login_faculty.php';
		} elseif (preg_match('/DEPT\d{2}/', $prov_uid)) {
			include_once 'login_perform_login_department.php';
		} else {
			header('Location: index.php');
		}
		
	} else {
		header('Location: index.php');
	}
	
	include_once 'always_include_end.php';
?>