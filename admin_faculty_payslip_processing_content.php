<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	include_once 'print_essentials.php';
?>
<div class="container">
<div class="hidden" id="payslip_report">
	<h3 class="text-center">Pay-slip Report</h3>
	
	<br />
	
	<table class="table">
		<tr>
			<th>Faculty ID</th>
			<th>Net</th>
			<th>Date</th>
			<th>Tax</th>
			<th>PPF</th>
			<th>Others</th>
			<th>Total</th>
		</tr>
<?php

	$query = $admin_faculty_payslip_details_retreival_query;
	
	$result = mysql_query($query);

	while ($row = mysql_fetch_assoc($result)) {
		
		$sal_fac_id = $row['FAC_ID'];
		$sal_fac_tot_amt = $row['FAC_SALARY'];
		
		$sal_fac_month_year = date("Y-m-d");
		
		$sal_fac_tax = $sal_fac_tot_amt * .10;
		$sal_fac_ppf = $sal_fac_tot_amt * .15;
		$sal_fac_oth = 0;
		
		$sal_fac_take_home = $sal_fac_tot_amt - $sal_fac_tax - $sal_fac_ppf - $sal_fac_oth;
		
		$query = $admin_faculty_payslip_processing_query.' (\''.$sal_fac_id.'\', \''.$sal_fac_month_year.'\', \''.$sal_fac_tot_amt.'\', \''.$sal_fac_tax.'\', \''.$sal_fac_ppf.'\', \''.$sal_fac_oth.'\', \''.$sal_fac_take_home.'\');';
	
		mysql_query($query);
?>
		<tr>
			<td><?php echo $sal_fac_id; ?></td>
			<td><?php echo $sal_fac_tot_amt; ?></td>
			<td><?php echo $sal_fac_month_year; ?></td>
			<td><?php echo $sal_fac_tax; ?></td>
			<td><?php echo $sal_fac_ppf; ?></td>
			<td><?php echo $sal_fac_oth; ?></td>
			<td><?php echo $sal_fac_take_home; ?></td>
		</tr>
<?php
	}
?>
	</table>
</div>
</div>

<script type="text/javascript">
	function printReport() {
		var w = window.open();
		w.document.write($("#print_header").html());
		w.document.write($("#payslip_report").html());
		w.document.close();
		javascript:w.print();
		w.close();
		return false;
	}
</script>

<div class="panel-group" id="successful_faculty_payslip_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#successful_faculty_payslip_panel" href="#successful_faculty_payslip">Pay-slips Generated Successfully</a>
			</h4>
		</div>
		
		<div id="successful_faculty_payslip" class="panel-collapse collapse in">
			<div class="panel-body">
				<p>All faculty pay-slips were generated successfully</p>
				
				<form action="javascript:printReport();">
					<button type="submit" class="btn btn-primary">Print Report</button>
				</form>
			</div>
		</div>
	
	</div>

</div>