<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$fac_id = $_POST['faculty_id'];
	$fac_name = $_POST['faculty_name'];
	$fac_dob = $_POST['faculty_dob'];
	$fac_gender = $_POST['faculty_gender'];
	$fac_caste = $_POST['faculty_caste'];
	$fac_contact_no = $_POST['faculty_contact'];
	$fac_email_id = $_POST['faculty_email'];
	$fac_perm_addr = $_POST['faculty_perm_addr'];
	$fac_curr_addr = $_POST['faculty_curr_addr'];
	$fac_dept_id = $_POST['faculty_dept'];
	$fac_admis_type = $_POST['faculty_doj'];
	$fac_admis_quota = $_POST['faculty_desig'];
	$fac_admis_rank = $_POST['faculty_sal'];
	$fac_image_path = 'photo/department/'.$fac_dept_id.'/faculty/'.$fac_id.'.jpg';
	
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
	$fac_pword = substr( str_shuffle( $chars ), 0, 8 );
	
	$query = $admin_faculty_add_processing_query.'(\''.$fac_id.'\', \''.$fac_pword.'\', \''.$fac_name.'\', \''.$fac_image_path.'\', \''.$fac_gender.'\', \''.$fac_dob.'\', \''.$fac_caste.'\', \''.$fac_contact_no.'\', \''.$fac_email_id.'\', \''.$fac_perm_addr.'\', \''.$fac_curr_addr.'\', \''.$fac_dept_id.'\', \''.$fac_admis_type.'\', \''.$fac_admis_quota.'\', \''.$fac_admis_rank.'\');';

	mysql_query($query) or die($err_4);
?>

<div class="panel-group" id="successful_faculty_add_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#successful_faculty_add_panel" href="#successful_faculty_add">Faculty Successfully Added</a>
			</h4>
		</div>
		
		<div id="successful_faculty_add" class="panel-collapse collapse in">
			<div class="panel-body">
				<p><?php echo $fac_name; ?> was successfully Added!</p>
				<p>Please note, password assigned to faculty is: <?php echo $fac_pword; ?></p>
			</div>
		</div>
	
	</div>

</div>
