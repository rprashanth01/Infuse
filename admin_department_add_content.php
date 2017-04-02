<?php
	include_once "db_connect.php";
	include_once "db_queries.php";
?>

<div class="panel-group" id="dept_add_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#dept_add_panel" href="#dept_add">Department Details</a>
			</h4>
		</div>
		
		<div id="dept_add" class="panel-collapse collapse in">
			<div class="panel-body">
				
				<form class="form-horizontal" role="form" method="post" action="admin_department_add_processing.php">
					
					<div class="form-group">
						<label for="department_name" class="col-sm-2 control-label">Name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="department_name" placeholder="Name" pattern="[a-zA-Z .]*" title="A Combination of Uppercase Letters, Lowercase Letters, Blank Spaces( ) and Dots(.)" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="department_id" class="col-sm-2 control-label">ID:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="department_id" placeholder="ID" pattern="[dD][eE][pP][tT][0-9]{2}" title="Enter Valid ID" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="department_start_date" class="col-sm-2 control-label">Start Date:</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" name="department_start_date" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="department_desc" class="col-sm-2 control-label">Description:</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="department_desc" placeholder="Description" rows="4" required></textarea>
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary">Submit</button>
									
				</form>
				
			</div>
		</div>
	
	</div>

</div>
