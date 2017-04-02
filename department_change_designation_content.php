<?php
	include_once "db_connect.php";
	include_once "db_queries.php";
	
	$uid = $_SESSION['uid'];
?>

<div class="panel-group" id="dept_home_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#dept_home_panel" href="#change_desig">Change Designation</a>
			</h4>
		</div>
		
		<div id="change_desig" class="panel-collapse collapse in">
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="department_change_designation_processing.php">
					
					<div class="form-group">
						<label for="fac_id" class="col-sm-2 control-label">Faculty ID:</label>
						<div class="col-sm-10">
							<select class="form-control" name="fac_id" required >
								<option></option>
<?php
	$query = $department_desig_faculty_option_query.$uid.'\';';
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
		echo '<option value="'.$row['FAC_ID'].'">'.$row['FAC_ID'].'</option>';
	}
?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="fac_desig" class="col-sm-2 control-label">Designation:</label>
						<div class="col-sm-10">
							<select class="form-control" name="fac_desig" required >
								<option></option>
								<option value="HOD">HOD</option>
								<option value="Professor">Professor</option>
								<option value="Assistant Professor">Assistant Professor</option>
								<option value="Associate Professor">Associate Professor</option>
							</select>
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary">Submit</button>
										
				</form>
			</div>
		</div>
	
	</div>

</div>
