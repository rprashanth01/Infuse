<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$subject_id = $_POST['subject_id'];
	$subject_desc = $_POST['subject_desc'];
	$subject_credit_lect = $_POST['subject_credit_lect'];
	$subject_credit_tut = $_POST['subject_credit_tut'];
	$subject_credit_prac = $_POST['subject_credit_prac'];
	
	$dept_id = $_SESSION['uid'];
	
	$query = $department_subject_delete_query.$subject_id.'\';';
	
	mysql_query($query) or die($err_4);
	
	$query = $department_subject_add_processing_query.'(\''.$subject_id.'\', \''.$dept_id.'\', \''.$subject_desc.'\', \''.$subject_credit_lect.'\', \''.$subject_credit_tut.'\', \''.$subject_credit_prac.'\');';

	mysql_query($query) or die($err_4);
?>

<div class="panel-group" id="successful_subject_edit_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#successful_subject_edit_panel" href="#successful_subject_edit">Subject Successfully Edited</a>
			</h4>
		</div>
		
		<div id="successful_subject_edit" class="panel-collapse collapse in">
			<div class="panel-body">
				<p>Subject <?php echo $subject_desc; ?>(<?php echo $subject_id; ?>) was successfully edited!</p>
			</div>
		</div>
	
	</div>

</div>
	