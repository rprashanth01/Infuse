<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	include_once 'print_essentials.php';
	
	$fees_receipt_no = $_POST['student_fee_id'];
	$fees_stu_usn = $_POST['student_usn'];
	$fees_stu_concession = $_POST['student_concession'];
	$fees_stu_year = $_POST['student_year'];
	$fees_stu_paid = $_POST['student_amount_paid'];
	$fees_stu_dd_num = $_POST['student_dd'];
	$fees_stu_bank_name = $_POST['student_bank'];
	$fees_stu_date_paid = date("Y-m-d");
	
	switch ($fees_stu_year) {
		case 1:
			$fees_year = "First";
			break;
		
		case 2:
			$fees_year = "Second";
			break;
		
		case 3:
			$fees_year = "Third";
			break;
			
		case 4:
			$fees_year = "Fourth";
			break;
	}
	
	
	$query = $admin_student_fee_processing_query.'(\''.$fees_receipt_no.'\', \''.$fees_stu_usn.'\', \''.$fees_stu_concession.'\', \''.$fees_stu_year.'\', \''.$fees_stu_paid.'\', \''.$fees_stu_dd_num.'\', \''.$fees_stu_bank_name.'\', \''.$fees_stu_date_paid.'\');';

	mysql_query($query) or die($err_4);
?>

<script type="text/javascript">
	function printReceipt() {
		var w = window.open();
		w.document.write($("#print_header").html());
		w.document.write($("#fees_receipt").html());
		w.document.close();
		javascript:w.print();
		w.close();
		return false;
	}
</script>

<div class="panel-group" id="successful_student_fee_payment_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#successful_student_fee_payment_panel" href="#successful_student_fee_payment">Fees Successfully Paid</a>
			</h4>
		</div>
		
		<div id="successful_student_fee_payment" class="panel-collapse collapse in">
			<div class="panel-body">
				<div id="fees_receipt">
					<h3 class="text-center">Fees Receipt</h3>
					
					<div class="text-right">
						<p><?php echo $fees_stu_date_paid; ?></p>
					</div>
					
					<br />

					This is an auto generated receipt confirming that the student bearing the USN <u><em><?php echo $fees_stu_usn; ?></em></u>
					has paid the fees for the <u><em><?php echo $fees_year; ?></em></u> year. The amount paid was Rs. <u><em><?php echo $fees_stu_paid; ?></em></u>, 
					through a DD bearing the number <u><em><?php echo $fees_stu_dd_num; ?></em></u> from the bank <u><em><?php echo $fees_stu_bank_name; ?></em></u>.
					
				</div>
				
				<br />
				
				<form action="javascript:printReceipt();">
					<button type="submit" class="btn btn-primary">Print Receipt</button>
				</form>
				
			</div>
		</div>
	
	</div>

</div>