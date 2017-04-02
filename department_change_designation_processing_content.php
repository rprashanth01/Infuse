<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$fac_id = $_POST['fac_id'];
	$fac_desig = $_POST['fac_desig'];
	
	$query = $department_change_desig_query.$fac_desig.'\' WHERE FAC_ID = \''.$fac_id.'\';';

	mysql_query($query) or die($err_4);
?>

<div class="panel-group" id="successful_change_desig_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#successful_change_desig_panel" href="#successful_change_desig">Designation Successfully Changed</a>
			</h4>
		</div>
		
		<div id="successful_change_desig" class="panel-collapse collapse in">
			<div class="panel-body">
				<p>The designation of <?php echo $fac_id; ?> was successfully changed to <?php echo $fac_desig; ?>!</p>
			</div>
		</div>
	
	</div>

</div>