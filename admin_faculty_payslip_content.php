<?php
	include_once "db_connect.php";
	include_once "db_queries.php";
?>

<div class="panel-group" id="faculty_payslip_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#faculty_payslip_panel" href="#faculty_payslip">Faculty Details</a>
			</h4>
		</div>
		
		<div id="faculty_payslip" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="text-center">
					<p class="bg-danger">Be aware that the query you are about to run will generate the pay-slips for all registered faculty.</p>
				</div>
				<form class="form-horizontal" role="form" method="post" action="admin_faculty_payslip_processing.php">
					<button type="submit" class="btn btn-primary">Run Payslip Generation</button>
				</form>
				
			</div>
		</div>
	
	</div>

</div>
