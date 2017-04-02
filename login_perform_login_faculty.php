<?php
	$query = $login_perform_login_admin_1_query.$prov_uid.$login_perform_login_admin_2_query;
	$result = mysql_query($query);
	if (mysql_num_rows($result) == 0) {
		$query = $login_perform_login_faculty_query.$prov_uid.'\';';
		$result = mysql_query($query);
		if (mysql_num_rows($result) == 0) {
			header('Location: index.php');
		} else {
			$row = mysql_fetch_assoc($result);
			$actual_pword = $row['FAC_PWORD'];
			if ($prov_pword == $actual_pword) {
				$_SESSION['uid'] = $prov_uid;
				$_SESSION['u_type'] = 'FACULTY';
				header('Location: faculty_home_page.php');
			} else {
				header('Location: index.php');
			}
		}
	} else {
		$row = mysql_fetch_assoc($result);
		$actual_pword = $row['FAC_PWORD'];
		if ($prov_pword == $actual_pword) {
			$_SESSION['uid'] = $prov_uid;
			$_SESSION['u_type'] = 'ADMIN';
			header('Location: admin_home_page.php');
		} else {
			header('Location: index.php');
		}
	}
?>