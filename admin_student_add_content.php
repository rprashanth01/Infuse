<?php
	include_once "db_connect.php";
	include_once "db_queries.php";
?>

<div class="panel-group" id="student_add_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#student_add_panel" href="#student_add">Student Details</a>
			</h4>
		</div>
		
		<div id="student_add" class="panel-collapse collapse in">
			<div class="panel-body">
				
				<form class="form-horizontal" role="form" method="post" action="admin_student_add_processing.php">
					
					<h3>Student Details</h3>
					
					<div class="form-group">
						<label for="student_name" class="col-sm-2 control-label">Name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="student_name" placeholder="Name" pattern="[a-zA-Z .]*" title="A Combination of Uppercase Letters, Lowercase Letters, Blank Spaces( ) and Dots(.)" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_usn" class="col-sm-2 control-label">USN:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="student_usn" placeholder="USN" pattern="1[mM][sS][0-9]{2}[a-zA-Z]{2}[0-9]{3}" title="Enter Valid USN" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_dob" class="col-sm-2 control-label">Date of Birth:</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" name="student_dob" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_gender" class="col-sm-2 control-label">Gender:</label>
						<div class="col-sm-10">
							<select class="form-control" name="student_gender" required >
								<option></option>
								<option value="F">Female</option>
								<option value="M">Male</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_caste" class="col-sm-2 control-label">Caste:</label>
						<div class="col-sm-10">
							<select class="form-control" name="student_caste" required>
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
						<label for="student_contact" class="col-sm-2 control-label">Contact Number:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="student_contact" placeholder="Contact Number" pattern="[0-9]{10}" title="10 Digit Number" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_email" class="col-sm-2 control-label">E-Mail ID:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="student_email" placeholder="E-Mail ID" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_perm_addr" class="col-sm-2 control-label">Permanent Address:</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="student_perm_addr" placeholder="Permanent Address" rows="4" required></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_curr_addr" class="col-sm-2 control-label">Current Address:</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="student_curr_addr" placeholder="Current Address" rows="4" required></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_dept" class="col-sm-2 control-label">Department:</label>
						<div class="col-sm-10">
							<select class="form-control" name="student_dept" required>
								<option></option>
<?php
	$query = $admin_student_add_dept_option_query;
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
		echo '<option value="'.$row['DEPT_ID'].'">'.$row['DEPT_NAME'].'</option>';
	}
?>
							</select>
						</div>
					</div>
					
					<br /><h3>Admission Details</h3>
					
					<div class="form-group">
						<label for="student_admis_type" class="col-sm-2 control-label">Admission Type:</label>
						<div class="col-sm-10">
							<select class="form-control" name="student_admis_type" required>
								<option></option>
								<option>CET</option>
								<option>COMEDK</option>
								<option>Management</option>
								<option>Others</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_admis_quota" class="col-sm-2 control-label">Admission Quota:</label>
						<div class="col-sm-10">
							<select class="form-control" name="student_admis_quota" required>
								<option></option>
								<option>GM</option>
								<option>SC</option>
								<option>ST</option>
								<option>OBC</option>
								<option>Others</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_admis_rank" class="col-sm-2 control-label">Rank Secured:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="student_admis_rank" placeholder="Rank Secured (0 if not applicable)" pattern="[0-9]{1,5}" required /> 
						</div>
					</div>
					
					<br /><h3>Guardian Details</h3>
					
					<div class="form-group">
						<label for="guardian_name" class="col-sm-2 control-label">Name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="guardian_name" placeholder="Name" pattern="[a-zA-Z .]*" title="A Combination of Uppercase Letters, Lowercase Letters, Blank Spaces( ) and Dots(.)" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="guardian_relation" class="col-sm-2 control-label">Relationship:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="guardian_relation" placeholder="Relationship" pattern="[a-zA-Z .]*" title="A Combination of Uppercase Letters, Lowercase Letters, Blank Spaces( ) and Dots(.)" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="guardian_contact" class="col-sm-2 control-label">Contact Number:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="guardian_contact" placeholder="Contact Number" pattern="[0-9]{10}" title="10 Digit Number" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="guardian_email" class="col-sm-2 control-label">E-Mail ID:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="guardian_email" placeholder="E-Mail ID" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="guardian_income" class="col-sm-2 control-label">Net Income:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="guardian_income" placeholder="Net Income" pattern="[0-9]{1,8}\.[0-9]{2}" title="1 - 8 Digits followed by a Decimal Point (.) and then followed by 2 Digits" required /> 
						</div>
					</div>
					
					<div class="form-group">
						<label for="guardian_occupation" class="col-sm-2 control-label">Occupation:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="guardian_occupation" placeholder="Occupation" pattern="[a-zA-Z .]*" title="A Combination of Uppercase Letters, Lowercase Letters, Blank Spaces( ) and Dots(.)" required />
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary">Submit</button>
									
				</form>
				
			</div>
		</div>
	
	</div>

</div>
