<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	include_once 'print_essentials.php';
	
	$uid = $_SESSION['uid'];
	
	$query = $department_report_generate_dept_name_query.$uid.'\';';
	$result = mysql_query($query) or die($err_4);
	$row = mysql_fetch_assoc($result);
	
	$dept_name = $row['DEPT_NAME'];
	
?>

<div class="hidden container" id="print_body">
	<div class="text-center">
		<h3><?php echo $dept_name; ?></h3>
		<h4><?php echo $uid; ?></h4>
	</div>
	
	<h4><strong>Vision</strong></h4>
	<?php include 'info/department/dept01/vision.html'; ?>
	
	<h4><strong>Mission</strong></h4>
	<?php include 'info/department/dept01/mission.html'; ?>
	
	<h4><strong>Program Education Objectives</strong></h4>
	<?php include 'info/department/dept01/peo.html'; ?>
	
	<h4><strong>Program Outcomes</strong></h4>
	<?php include 'info/department/dept01/po.html'; ?>
	
	<h4><strong>Faculty</strong></h4>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Contact No.</th>
			<th>E-Mail ID</th>
			<th>Designation</th>
		</tr>
		
<?php
	$query = $department_report_generate_faculty_query.$uid.'\';';
	$result = mysql_query($query) or die($err_4);
	
	while ($row = mysql_fetch_assoc($result)) {
		$id = $row['fac_id'];
		$name = $row['fac_name'];
		$contact = $row['fac_contact_no'];
		$email = $row['fac_email_id'];
		$desig = $row['fac_desig'];
?>
		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $contact; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $desig; ?></td>
		</tr>
<?php
	}
?>

	</table>
	
	<h4><strong>Students</strong></h4>
	<table class="table">
		<tr>
			<th>USN</th>
			<th>Name</th>
			<th>Contact No.</th>
			<th>E-Mail ID</th>
			<th>Semester</th>
		</tr>
		
<?php
	$query = $department_report_generate_student_query.$uid.'\';';
	$result = mysql_query($query) or die($err_4);
	
	while ($row = mysql_fetch_assoc($result)) {
		$usn = $row['stu_usn'];
		$name = $row['stu_name'];
		$contact = $row['stu_contact_no'];
		$email = $row['stu_email_id'];
		$sem = $row['stu_sem'];
?>
		<tr>
			<td><?php echo $usn; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $contact; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $sem; ?></td>
		</tr>
<?php
	}
?>
	</table>
	
	<h4><strong>Subjects</strong></h4>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Credits</th>
		</tr>
		
<?php
	$query = $department_report_generate_subject_query.$uid.'\';';
	$result = mysql_query($query) or die($err_4);
	
	while ($row = mysql_fetch_assoc($result)) {
		$id = $row['sub_id'];
		$name = $row['sub_desc'];
		$lec = $row['sub_cred_lec'];
		$tut = $row['sub_cred_tut'];
		$prac = $row['sub_cred_prac'];
?>
		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $lec; ?>:<?php echo $tut; ?>:<?php echo $prac; ?></td>
		</tr>
<?php
	}
?>
	</table>

</div>

<script type="text/javascript">
	function printReport() {
		var w = window.open();
		w.document.write($("#print_header").html());
		w.document.write($("#print_body").html());
		w.document.close();
		javascript:w.print();
		w.close();
		return false;
	}
</script>

<div class="panel-group" id="department_report_generate_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#department_report_generate_panel" href="#report_generate">Generate Department Report</a>
			</h4>
		</div>
		
		<div id="report_generate" class="panel-collapse collapse in">
			<div class="panel-body">
				<p>A consolidated report of the department will be generated and available for print. Please press the below button to continue.</p>
				
				<form action="javascript:printReport();">
					<button type="submit" class="btn btn-primary">Print Report</button>
				</form>
			</div>
		</div>
	
	</div>

</div>