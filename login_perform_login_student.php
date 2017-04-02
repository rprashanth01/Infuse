<?php
	$query = $login_perform_login_student_query.$prov_uid.'\';';
	$result = mysql_query($query);
	if (mysql_num_rows($result) == 0) {
		header('Location: index.php');
	} else {
		$row = mysql_fetch_assoc($result);
		$actual_pword = $row['STU_PWORD'];
		if ($prov_pword == $actual_pword) {
			$_SESSION['uid'] = $prov_uid;
			$_SESSION['u_type'] = 'STUDENT';
			header('Location: student_home_page.php');
		} else {
			header('Location: index.php');
		}
	}
?>