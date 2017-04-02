<?php
	include_once "db_connect.php";
	include_once "db_queries.php";
?>

<div class="panel-group" id="faculty_add_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#faculty_add_panel" href="#faculty_add">Faculty Details</a>
			</h4>
		</div>
		
		<div id="faculty_add" class="panel-collapse collapse in">
			<div class="panel-body">
				
				<form class="form-horizontal" role="form" method="post" action="admin_faculty_add_processing.php">
					
					<div class="form-group">
						<label for="faculty_name" class="col-sm-2 control-label">Name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="faculty_name" placeholder="Name" pattern="[a-zA-Z .]*" title="A Combination of Uppercase Letters, Lowercase Letters, Blank Spaces( ) and Dots(.)" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="faculty_id" class="col-sm-2 control-label">ID:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="faculty_id" placeholder="ID" pattern="[fF][aA][cC][0-9]{3}[a-zA-Z]{2}" title="Enter Valid ID" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="faculty_dob" class="col-sm-2 control-label">Date of Birth:</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" name="faculty_dob" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="faculty_gender" class="col-sm-2 control-label">Gender:</label>
						<div class="col-sm-10">
							<select class="form-control" name="faculty_gender" required >
								<option></option>
								<option value="F">Female</option>
								<option value="M">Male</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="faculty_caste" class="col-sm-2 control-label">Caste:</label>
						<div class="col-sm-10">
							<select class="form-control" name="faculty_caste" required>
								<option></option>
								<option value="GM">GM</option>
								<option value="SC">SC</option>
								<option value="ST">ST</option>
								<option value="OBC">OBC</option>
								<option value="OTH">Others</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="faculty_contact" class="col-sm-2 control-label">Contact Number:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="faculty_contact" placeholder="Contact Number" pattern="[0-9]{10}" title="10 Digit Number" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="faculty_email" class="col-sm-2 control-label">E-Mail ID:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="faculty_email" placeholder="E-Mail ID" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="faculty_perm_addr" class="col-sm-2 control-label">Permanent Address:</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="faculty_perm_addr" placeholder="Permanent Address" rows="4" required></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label for="faculty_curr_addr" class="col-sm-2 control-label">Current Address:</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="faculty_curr_addr" placeholder="Current Address" rows="4" required></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label for="faculty_dept" class="col-sm-2 control-label">Department:</label>
						<div class="col-sm-10">
							<select class="form-control" name="faculty_dept" required>
								<option></option>
<?php
	$query = $admin_faculty_add_dept_option_query;
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
		echo '<option value="'.$row['DEPT_ID'].'">'.$row['DEPT_NAME'].'</option>';
	}
?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="faculty_doj" class="col-sm-2 control-label">Date of Joining:</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" name="faculty_doj" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="faculty_desig" class="col-sm-2 control-label">Designation:</label>
						<div class="col-sm-10">
							<select class="form-control" name="faculty_desig" required>
								<option></option>
								<option>HOD</option>
								<option>Professor</option>
								<option>Associate Professor</option>
								<option>Assistant Professor</option>
								<option>Other</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="faculty_sal" class="col-sm-2 control-label">Salary:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="faculty_sal" placeholder="Salary" pattern="[0-9]{1,8}\.[0-9]{2}" title="1 - 8 Digits followed by a Decimal Point (.) and then followed by 2 Digits" required /> 
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary">Submit</button>
									
				</form>
				
			</div>
		</div>
	
	</div>

</div>
