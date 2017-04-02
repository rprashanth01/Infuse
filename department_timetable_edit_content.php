<?php
	include_once "db_connect.php";
	include_once "db_queries.php";
	
	$uid = $_SESSION['uid'];
?>

<div class="panel-group" id="dept_home_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#dept_home_panel" href="#edit_tt">Department Home Page</a>
			</h4>
		</div>
		
		<div id="edit_tt" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="text-center">
					<p class="bg-danger">Be aware that when you edit the timetable the existing entry gets replaced.</p>
				</div>
				
				<form class="form-horizontal" role="form" method="post" action="department_timetable_edit_processing.php">
					<div class="form-group">
						<label for="tt_day" class="col-sm-2 control-label">Day:</label>
						<div class="col-sm-10">
							<select class="form-control" name="tt_day" required >
								<option></option>
								<option value="MON">Monday</option>
								<option value="TUE">Tuesday</option>
								<option value="WED">Wednesday</option>
								<option value="THU">Thursday</option>
								<option value="FRI">Friday</option>
								<option value="SAT">Saturday</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="tt_period_no" class="col-sm-2 control-label">Period No.:</label>
						<div class="col-sm-10">
							<select class="form-control" name="tt_period_no" required >
								<option></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="tt_fac_id" class="col-sm-2 control-label">Faculty ID:</label>
						<div class="col-sm-10">
							<select class="form-control" name="tt_fac_id" required >
								<option></option>
<?php
	$query = $department_timetable_faculty_option_query.$uid.'\';';
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
		echo '<option value="'.$row['FAC_ID'].'">'.$row['FAC_ID'].'</option>';
	}
?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="tt_class_id" class="col-sm-2 control-label">Class ID:</label>
						<div class="col-sm-10">
							<select class="form-control" name="tt_class_id" required >
								<option></option>
<?php
	$query = $department_timetable_class_option_query.$uid.'\';';
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
		echo '<option value="'.$row['ROOM_ID'].'">'.$row['ROOM_ID'].'</option>';
	}
?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="tt_sub_id" class="col-sm-2 control-label">Subject ID:</label>
						<div class="col-sm-10">
							<select class="form-control" name="tt_sub_id" required >
								<option></option>
<?php
	$query = $department_timetable_subject_option_query.$uid.'\';';
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
		echo '<option value="'.$row['SUB_ID'].'">'.$row['SUB_ID'].'</option>';
	}
?>
							</select>
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary">Submit</button>
										
				</form>
			</div>
		</div>
	
	</div>

</div>
