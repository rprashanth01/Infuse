<?php
	if (isset($_SESSION['uid'])) {
		include_once 'login_already_done.php';
	} else {
		include_once 'login_not_done.php';
	}
?>