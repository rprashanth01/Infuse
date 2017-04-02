<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$tt_day = $_POST['tt_day'];
	$tt_period_no = $_POST['tt_period_no'];
	$tt_fac_id = $_POST['tt_fac_id'];
	$tt_class_id = $_POST['tt_class_id'];
	$tt_sub_id = $_POST['tt_sub_id'];
	
	$query = $department_timetable_check_query.$tt_day.'\' AND TT_PERIOD_NO = \''.$tt_period_no.'\' AND TT_CLASS_ID = \''.$tt_class_id.'\';';
	$result = mysql_query($query) or die($err_4);
	
	if (mysql_num_rows($result) != 0) {
		$query = $department_timetable_delete_query.$tt_day.'\' AND TT_PERIOD_NO = \''.$tt_period_no.'\' AND TT_CLASS_ID = \''.$tt_class_id.'\';';
		mysql_query($query) or die($err_4);
	}
	
	$query = $department_timetable_add_query.'(\''.$tt_day.'\', \''.$tt_period_no.'\', \''.$tt_fac_id.'\', \''.$tt_class_id.'\', \''.$tt_sub_id.'\');';
	mysql_query($query) or die($err_4);
?>

<div class="panel-group" id="successful_timetable_edit_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#successful_timetable_edit_panel" href="#successful_timetable_edit">Timetable Successfully Edited</a>
			</h4>
		</div>
		
		<div id="successful_timetable_edit" class="panel-collapse collapse in">
			<div class="panel-body">
				<p>Timetable was successfully edited!</p>
			</div>
		</div>
	
	</div>

</div>
	