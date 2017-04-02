<?php
	if (isset($_SESSION['uid'])) {
		$u_type = $_SESSION['u_type'];
		if (strcmp($u_type, 'STUDENT') == 0) {
			include_once 'nav_bar_student.php';
		} elseif (strcmp($u_type, 'ADMIN') == 0) {
			include_once 'nav_bar_admin.php';
		} elseif (strcmp($u_type, 'FACULTY') == 0) {
			include_once 'nav_bar_faculty.php';
		} elseif (strcmp($u_type, 'DEPARTMENT') == 0) {
			include_once 'nav_bar_dept.php';
		}
	} else {
		include_once 'nav_bar_index.php';
	}
?>