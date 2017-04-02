<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$dept_id = $_POST['department_id'];
	$dept_name = $_POST['department_name'];
	$dept_desc = $_POST['department_desc'];
	$dept_year_started = $_POST['department_start_date'];
	
	$query = $admin_department_add_processing_query.'(\''.$dept_id.'\', \''.$dept_name.'\', \''.$dept_desc.'\', \''.$dept_year_started.'\');';

	mysql_query($query) or die($err_4);
?>

<div class="panel-group" id="successful_department_add_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#successful_department_add_panel" href="#successful_department_add">Department Successfully Added</a>
			</h4>
		</div>
		
		<div id="successful_department_add" class="panel-collapse collapse in">
			<div class="panel-body">
				<p>Department of <?php echo $dept_name; ?> was successfully Added!</p>
			</div>
		</div>
	
	</div>

</div>
	