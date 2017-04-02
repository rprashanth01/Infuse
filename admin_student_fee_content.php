<?php
	include_once "db_connect.php";
	include_once "db_queries.php";
?>

<div class="panel-group" id="student_fee_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#student_fee_panel" href="#student_fee">Fee Payment Details</a>
			</h4>
		</div>
		
		<div id="student_fee" class="panel-collapse collapse in">
			<div class="panel-body">
				
				<form class="form-horizontal" role="form" method="post" action="admin_student_fee_processing.php">
					
					<div class="form-group">
						<label for="student_fee_id" class="col-sm-2 control-label">Fees Receipt No.:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="student_fee_id" placeholder="Fees Receipt No." pattern="[0-9]{4,10}" title="4 - 10 digit long" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_usn" class="col-sm-2 control-label">USN:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="student_usn" placeholder="USN" pattern="1[mM][sS][0-9]{2}[a-zA-Z]{2}[0-9]{3}" title="Enter Valid USN" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_concession" class="col-sm-2 control-label">Eligible for concession?</label>
						<div class="col-sm-10">
							<select class="form-control" name="student_concession" required >
								<option></option>
								<option value="1">Yes</option>
								<option value="0">No</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_year" class="col-sm-2 control-label">Year:</label>
						<div class="col-sm-10">
							<select class="form-control" name="student_year" required>
								<option></option>
								<option value="1">First year</option>
								<option value="2">Second year</option>
								<option value="3">Third year</option>
								<option value="4">Fourth year</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_amount_paid" class="col-sm-2 control-label">Amount Paid (INR):</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="student_amount_paid" placeholder="Amount Paid (INR)" pattern="[0-9]{1,8}\.[0-9]{2}" title="1 - 8 Digits followed by a Decimal Point (.) and then followed by 2 Digits" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_dd" class="col-sm-2 control-label">DD Number:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="student_dd" placeholder="DD Number" pattern="[0-9]{2,10}" title="2 - 10 Digit Code" required />
						</div>
					</div>
					
					<div class="form-group">
						<label for="student_bank" class="col-sm-2 control-label">Bank Name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="student_bank" placeholder="Bank Name" required />
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary">Submit</button>
									
				</form>
				
			</div>
		</div>
	
	</div>

</div>
