<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	include_once 'session_check.php';

	$faculty_id = $_SESSION['uid'];
	
	$query_profile = $faculty_profile_query.$faculty_id.'\';';
	$query_dependant = $faculty_profile_dependant_query.$faculty_id.'\';';
	
	$result_profile = mysql_query($query_profile);	
	$row_profile = mysql_fetch_array($result_profile);
?>
<div class="panel-group" id="faculty_profile_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#faculty_profile_panel" href="#profile_view">Profile</a>
			</h4>
		</div>
		
		<div id="profile_view" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="text-center">
					<img id="dept_ise_hod" src="<?php echo $row_profile['fac_image_path']; ?>" /><br />
					<strong><?php echo $row_profile['fac_name']; ?></strong>
				</div>
				<table class="table table-hover">
					<tr>
						<td><strong>Faculty ID: </strong></td>
						<td><?php echo $row_profile['fac_id'];?></td>
					</tr>
					<tr>
						<td><strong>Designation: </strong></td>
						<td><?php echo $row_profile['fac_desig'];?></td>
					</tr>
					<tr>
						<td><strong>Date of Joining: </strong></td>
						<td><?php echo $row_profile['fac_dept_doj'];?></td>
					</tr>
					<tr>
						<td><strong>Contact No.: </strong></td>
						<td><?php echo $row_profile['fac_contact_no'];?></td>
					</tr>
					<tr>
						<td><strong>E-Mail ID: </strong></td>
						<td><?php echo $row_profile['fac_email_id'];?></td>
					</tr>
					<tr>
						<td><strong>Date of Birth: </strong></td>
						<td><?php echo $row_profile['fac_dob'];?></td>
					</tr>
					<tr>
						<td><strong>Permanent Address: </strong></td>
						<td><?php echo $row_profile['fac_perm_addr'];?></td>
					</tr>
					<tr>
						<td><strong>Current Address: </strong></td>
						<td><?php echo $row_profile['fac_curr_addr'];?></td>
					</tr>
					<tr>
						<td><strong>UG Details: </strong></td>
						<td><?php echo $row_profile['fac_ug'];?></td>
					</tr>
					<tr>
						<td><strong>PG Details: </strong></td>
						<td><?php echo $row_profile['fac_pg'];?></td>
					</tr>
					<tr>
						<td><strong>PhD Details: </strong></td>
						<td><?php echo $row_profile['fac_phd'];?></td>
					</tr>
					<tr>
						<td><strong>Subject of Interest: </strong></td>
						<td><?php echo $row_profile['fac_sub_intr'];?></td>
					</tr>
					<tr>
						<td><strong>Teaching Experience: </strong></td>
						<td><?php echo $row_profile['fac_teach_exp'];?></td>
					</tr>
					<tr>
						<td><strong>Industry Experience: </strong></td>
						<td><?php echo $row_profile['fac_indus_exp'];?></td>
					</tr>
					<tr>
						<td><strong>Other Information:</strong></td>
						<td><?php echo $row_profile['fac_info'];?></td>
					</tr>
				</table>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_info">Edit</button>
			</div>
		</div>
	
	</div>
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#faculty_profile_panel" href="#dependant_view">Dependant</a>
			</h4>
		</div>
		
		<div id="dependant_view" class="panel-collapse collapse">
			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<th>Dependant Name</th>
						<th>Dependant Relationship</th>
						<th>Contact No.</th>
						<th>Email ID</th>
					</tr>
<?php
	$result_dependant = mysql_query($query_dependant);
	while($row_dependant = mysql_fetch_array($result_dependant)) {
?>
					<tr>
						<td><?php echo $row_dependant['dep_name'];?></td>
						<td><?php echo $row_dependant['dep_relation'];?></td>
						<td><?php echo $row_dependant['dep_contact_no'];?></td>
						<td><?php echo $row_dependant['dep_email_id'];?></td>
					</tr>
<?php
	}
?>
				</table>
				
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_dependant">Add Dependant</button>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#remove_dependant">Remove Dependant</button>
				
			</div>
		</div>
	
	</div>

	
	<div class="modal fade" id="edit_info" tabindex="-1" role="dialog" aria-labelledby="edit_profile_label" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="edit_profile_label">Edit Profile</h4>
				</div>
				
				<div class="modal-body">
					<form class="form-horizontal" role="form" method="post" action="faculty_profile_edit.php">
						
						<div class="form-group">
							<label for="faculty_name" class="col-sm-2 control-label">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="fac_name" value="<?php echo $row_profile['fac_name']; ?>" required />
							</div>
						</div>
						
						<div class="form-group">
							<label for="faculty_contact" class="col-sm-2 control-label">Contact No.:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="fac_contact_no" value="<?php echo $row_profile['fac_contact_no']; ?>" required />
							</div>
						</div>
						
						<div class="form-group">
							<label for="faculty_email" class="col-sm-2 control-label">E-mail ID:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="fac_email_id" value="<?php echo $row_profile['fac_email_id']; ?>" required />
							</div>
						</div>
						
						<div class="form-group">
							<label for="faculty_perm_addr" class="col-sm-2 control-label">Permanent Address:</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="fac_perm_addr" required><?php echo $row_profile['fac_perm_addr']; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label for="faculty_curr_addr" class="col-sm-2 control-label">Current Address:</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="fac_curr_addr" required><?php echo $row_profile['fac_curr_addr']; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label for="faculty_desig" class="col-sm-2 control-label">Designation:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="fac_desig" value="<?php echo $row_profile['fac_desig']; ?>" required />
							</div>
						</div>
						
						<div class="form-group">
							<label for="faculty_pg" class="col-sm-2 control-label">PG Details:</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="fac_pg" required><?php echo $row_profile['fac_pg']; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label for="faculty_phd" class="col-sm-2 control-label">PhD Details:</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="fac_phd" required><?php echo $row_profile['fac_phd']; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label for="faculty_teach_exp" class="col-sm-2 control-label">Teaching Experience:</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="fac_teach_exp" required><?php echo $row_profile['fac_teach_exp']; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label for="faculty_sub_intr" class="col-sm-2 control-label">Subject Of Interest:</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="fac_sub_intr" required><?php echo $row_profile['fac_sub_intr']; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label for="faculty_info" class="col-sm-2 control-label">Info:</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="fac_info" required><?php echo $row_profile['fac_info']; ?></textarea>
							</div>
						</div>
						
						<div class="text-right">
							<input class="btn btn-primary" type="submit" value="Update" />
						</div>
						
					</form>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="add_dependant" tabindex="-1" role="dialog" aria-labelledby="add_dep_label" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="add_dep_label">Modal title</h4>
				</div>

				<div class="modal-body">
					<form class="form-horizontal" role="form" method="post" action="faculty_add_dependant.php">
						
						<div class="form-group">
							<label for="add_dep_name" class="col-sm-2 control-label">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="add_dep_name" placeholder="Name" required />
							</div>
						</div>
						
						<div class="form-group">
							<label for="add_dep_relation" class="col-sm-2 control-label">Relationship:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="add_dep_relation" placeholder="Relationship" required />
							</div>
						</div>
						
						<div class="form-group">
							<label for="add_dep_contact" class="col-sm-2 control-label">Contact No.:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="add_dep_contact" placeholder="Contact No." required />
							</div>
						</div>
						
						<div class="form-group">
							<label for="add_dep_email" class="col-sm-2 control-label">E-Mail ID:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="add_dep_email" placeholder="E-Mail ID:" required />
							</div>
						</div>
						
						<div class="text-right">
							<input class="btn btn-primary" type="submit" value="Submit" />
						</div>
					
					</form>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="remove_dependant" tabindex="-1" role="dialog" aria-labelledby="rem_dep_label" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="rem_dep_label">Modal title</h4>
				</div>

				<div class="modal-body">
					<form class="form-horizontal" role="form" method="post" action="faculty_remove_dependant.php">
<?php
	$result_dependant = mysql_query($query_dependant);
	while($row_dependant = mysql_fetch_array($result_dependant)) {
?>
						<div class="form-group">
							<input type="checkbox" name="rem_dep[]" value="<?php echo $row_dependant['dep_name']; ?>" />
							<?php echo $row_dependant['dep_name']; ?>
						</div>
<?php
	}
?>
						<div class="text-right">
							<input class="btn btn-primary" type="submit" value="Remove" />
						</div>
					</form>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
</div>