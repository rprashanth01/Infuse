<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$faculty_id = $_SESSION['uid'];
	
	$query_sub = 'SELECT DISTINCT TT_SUB_ID FROM TIMETABLE WHERE TT_FAC_ID = \''.$faculty_id.'\';';
	$query_class = 'SELECT DISTINCT TT_CLASS_ID FROM TIMETABLE WHERE TT_FAC_ID = \''.$faculty_id.'\';';
?>

<div class="panel-group" id="faculty_home_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#faculty_home_panel" href="#faculty">Faculty Marks View Page</a>
			</h4>
		</div>
		
		<div id="faculty" class="panel-collapse collapse in">
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="faculty_marks_view_table.php">
					
					<div class="form-group">
						<label for="fac_sub_list" class="col-sm-2 control-label">Subject ID:</label>
						<div class="col-sm-2">
							<select class="form-control" name="fac_sub_list" required>
<?php
	$result = mysql_query($query_sub);
	while($row = mysql_fetch_assoc($result)) {
		$sub = $row['TT_SUB_ID'];
?>
								<option><?php echo $sub; ?></option>
<?php	
	}
?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="fac_class_list" class="col-sm-2 control-label">Class ID:</label>
						<div class="col-sm-2">
							<select class="form-control" name="fac_class_list" required>
<?php
	$result = mysql_query($query_class);
	while($row = mysql_fetch_assoc($result)) {
		$sub = $row['TT_CLASS_ID'];
?>
								<option><?php echo $sub; ?></option>
<?php	
	}
?>
							</select>
						</div>
					</div>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-primary" type="submit" value="Submit" />
					
				</form>
			</div>
		</div>
	
	</div>

</div>
