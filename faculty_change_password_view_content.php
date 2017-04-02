<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$faculty_id = $_SESSION['uid'];
	
	
?>

<div class="panel-group" id="faculty_home_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#faculty_home_panel" href="#faculty">Faculty Password Change  Page</a>
			</h4>
		</div>
		
		<div id="faculty" class="panel-collapse collapse in">
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="faculty_change_password_view_table.php">
					<div class="form-group">
						<label for="c_pass" class="col-sm-2 control-label">Current Password</label>
						<div class="col-sm-3">
							<input type="password" placeholder="Current Password" class="form-control" name="fac_old_pass"  required />
						</div>
					</div>
					<div class="form-group">
						<label for="n_pass" class="col-sm-2 control-label">New Password</label>
						<div class="col-sm-3">
							<input type="password" placeholder ="New Password" class="form-control" name="fac_new_pass"   required />
						</div>
					</div>
					
					
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-primary" type="submit" value="Submit" />
					
				</form>
			</div>
		</div>
	
	</div>

</div>
