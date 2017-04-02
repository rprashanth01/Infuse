<?php
	$query = $login_perform_login_dept_query.$prov_uid.'\';';
	$result = mysql_query($query);
	if (mysql_num_rows($result) == 0) {
		header('Location: index.php');
	} else {
		$row = mysql_fetch_assoc($result);
		$actual_pword = $row['DEPT_PWORD'];
		if ($prov_pword == $actual_pword) {
			$_SESSION['uid'] = $prov_uid;
			$_SESSION['u_type'] = 'DEPARTMENT';
			header('Location: department_home_page.php');
		} else {
			header('Location: index.php');
		}
	}
?>