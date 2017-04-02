<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$stu_usn = $_POST['student_usn'];
	$stu_name = $_POST['student_name'];
	$stu_dob = $_POST['student_dob'];
	$stu_gender = $_POST['student_gender'];
	$stu_caste = $_POST['student_caste'];
	$stu_contact_no = $_POST['student_contact'];
	$stu_email_id = $_POST['student_email'];
	$stu_perm_addr = $_POST['student_perm_addr'];
	$stu_curr_addr = $_POST['student_curr_addr'];
	$stu_dept_id = $_POST['student_dept'];
	$stu_admis_type = $_POST['student_admis_type'];
	$stu_admis_quota = $_POST['student_admis_quota'];
	$stu_admis_rank = $_POST['student_admis_rank'];
	
	$gua_name = $_POST['guardian_name'];
	$gua_relation = $_POST['guardian_relation'];
	$gua_contact_no = $_POST['guardian_contact'];
	$gua_email_id = $_POST['guardian_email'];
	$gua_annual_income = $_POST['guardian_income'];
	$gua_occupation = $_POST['guardian_occupation'];
	
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
	$stu_pword = substr( str_shuffle( $chars ), 0, 8 );
	
	$query = $admin_student_add_processing_query.'(\''.$stu_usn.'\', \''.$stu_pword.'\', \''.$stu_name.'\', \''.$stu_gender.'\', \''.$stu_dob.'\', \''.$stu_caste.'\', \''.$stu_contact_no.'\', \''.$stu_email_id.'\', \''.$stu_perm_addr.'\', \''.$stu_curr_addr.'\', \''.$stu_dept_id.'\', \''.$stu_admis_type.'\', \''.$stu_admis_quota.'\', \''.$stu_admis_rank.'\');';
	mysql_query($query) or die($err_4);
	
	$query = $admin_student_add_guardian_query.'(\''.$stu_usn.'\', \''.$gua_name.'\', \''.$gua_relation.'\', \''.$gua_contact_no.'\', \''.$gua_email_id.'\', \''.$gua_annual_income.'\', \''.$gua_occupation.'\');';
	mysql_query($query) or die($err_4);
?>

<div class="panel-group" id="successful_student_add_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#successful_student_add_panel" href="#successful_student_add">Student Successfully Added</a>
			</h4>
		</div>
		
		<div id="successful_student_add" class="panel-collapse collapse in">
			<div class="panel-body">
				<p><?php echo $stu_name; ?> was successfully Added!</p>
				<p>Please note, password assigned to student is: <?php echo $stu_pword; ?></p>
			</div>
		</div>
	
	</div>

</div>
