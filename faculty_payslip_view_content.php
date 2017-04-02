<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$faculty_id = $_SESSION['uid'];
	
	$query_date = 'SELECT sal_fac_month_year FROM sal_fac WHERE sal_fac_id = \''.$faculty_id.'\';';

?>

<div class="panel-group" id="faculty_home_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#faculty_home_panel" href="#faculty">Faculty Payslip View Page</a>
			</h4>
		</div>
		
		<div id="faculty" class="panel-collapse collapse in">
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="faculty_payslip_view_table.php">
					
					<div class="form-group">
						<label for="fac_sub_list" class="col-sm-2 control-label">Select the Date</label>
						<div class="col-sm-2">
							<select class="form-control" name="payslip_list" required>
<?php
	$result = mysql_query($query_date);
	while($row = mysql_fetch_assoc($result)) {
		$date = $row['sal_fac_month_year'];
?>
								<option><?php echo $date; ?></option>
<?php	
	}
?>
							</select>
						</div>
					</div>
					
					
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-primary" type="submit" value="Submit" />
					
				</form>
			</div>
		</div>
	
	</div>

</div>
