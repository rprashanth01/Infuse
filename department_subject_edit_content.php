<?php
	include_once "db_connect.php";
	include_once "db_queries.php";
	
	$uid = $_SESSION['uid'];
?>

<div class="panel-group" id="dept_subject_edit_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#dept_subject_edit_panel" href="#edit_subject">Edit a Subject</a>
			</h4>
		</div>
		
		<div id="edit_subject" class="panel-collapse collapse in">
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="department_subject_edit_processing.php">
					<div class="form-group">
						<label for="subject_id" class="col-sm-2 control-label">ID:</label>
						<div class="col-sm-10">
							<select class="form-control" name="subject_id" required>
								<option></option>
<?php
	$query = $department_subject_edit_option_query.$uid.'\';';
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
		echo '<option value="'.$row['sub_id'].'">'.$row['sub_id'].'</option>';
	}
?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="subject_desc" class="col-sm-2 control-label">Name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="subject_desc" placeholder="Name" pattern="[a-zA-Z0-9 .]{0,50}" title="A Combination of Uppercase Letters, Lowercase Letters, Blank Spaces( ) and Dots(.)" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="subject_credit_lect" class="col-sm-2 control-label">Credit for Lectures:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="subject_credit_lect" placeholder="Name" pattern="[0-9]{1}" title="A Single Digit" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="subject_credit_tut" class="col-sm-2 control-label">Credit for Tutorials:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="subject_credit_tut" placeholder="Name" pattern="[0-9]{1}" title="A Single Digit" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="subject_credit_prac" class="col-sm-2 control-label">Credit for Practicals:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="subject_credit_prac" placeholder="Name" pattern="[0-9]{1}" title="A Single Digit" required />
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	
	</div>

</div>
