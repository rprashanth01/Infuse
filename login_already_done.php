<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$uid = $_SESSION['uid'];
	$u_type = $_SESSION['u_type'];
	
	if (strcmp($u_type, 'STUDENT') == 0) {
		$query = $login_already_done_student_query.$uid.'\';';
	} elseif (strcmp($u_type, 'ADMIN') == 0) {
		$query = $login_already_done_admin_query.$uid.'\';';
	} elseif (strcmp($u_type, 'FACULTY') == 0) {
		$query = $login_already_done_faculty_query.$uid.'\';';
	} elseif (strcmp($u_type, 'DEPARTMENT') == 0) {
		$query = $login_already_done_dept_query.$uid.'\';';
	}

	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	
	if (strcmp($u_type, 'STUDENT') == 0) {
		$name = $row['STU_NAME'];
	} elseif (strcmp($u_type, 'ADMIN') == 0) {
		$name = $row['FAC_NAME'];
	} elseif (strcmp($u_type, 'FACULTY') == 0) {
		$name = $row['FAC_NAME'];
	} elseif (strcmp($u_type, 'DEPARTMENT') == 0) {
		$name = $row['DEPT_NAME'];
	}
?>

<h3>Welcome!</h3>

<p>
	USER ID: <?php echo $uid ?><br />
	NAME: <?php echo $name ?>
</p>

<a href="login_perform_logout.php"><button type="button" class="btn btn-primary">Logout</button></a>