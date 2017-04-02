<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$query = $dept_ise_faculty_query;
	$ise_fac_result = mysql_query($query);

	while ($row = mysql_fetch_array($ise_fac_result)) {
?>

<h4 class="media-heading"><?php echo $row['fac_name']; ?></h4>

<div class="media">
	
	<div class="pull-left">
		<img class="media-object" src="<?php echo $row['fac_image_path']; ?>" alt="Alternative">
	</div>
	
	<div class="media-body">
			
		<p><strong>Faculty ID: </strong><?php echo $row['fac_id'];?></p>
		<p><strong>Designation: </strong><?php echo $row['fac_desig'];?></p>
		<p><strong>Contact No.: </strong><?php echo $row['fac_contact_no'];?></p>
		<p><strong>E-Mail ID: </strong><?php echo $row['fac_email_id'];?></p>
		
		<button class="btn btn-info" data-toggle="modal" data-target="#ise_fac_info_<?php echo $row['fac_id'];?>">More Info</button>
		
	</div>
	
</div>

<hr />

<div class="modal fade" id="ise_fac_info_<?php echo $row['fac_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $row['fac_name']; ?></h4>
			</div>
			
			<div class="modal-body">
				<div class="text-center">
					<img id="dept_ise_hod" src="<?php echo $row['fac_image_path']; ?>" /><br />
					<strong><?php echo $row['fac_name']; ?></strong>
				</div>
				<table class="table table-hover">
					<tr>
						<td><strong>Faculty ID: </strong></td>
						<td><?php echo $row['fac_id'];?></td>
					</tr>
					<tr>
						<td><strong>Designation: </strong></td>
						<td><?php echo $row['fac_desig'];?></td>
					</tr>
					<tr>
						<td><strong>Contact No.: </strong></td>
						<td><?php echo $row['fac_contact_no'];?></td>
					</tr>
					<tr>
						<td><strong>E-Mail ID: </strong></td>
						<td><?php echo $row['fac_email_id'];?></td>
					</tr>
					<tr>
						<td><strong>UG Details: </strong></td>
						<td><?php echo $row['fac_ug'];?></td>
					</tr>
					<tr>
						<td><strong>PG Details: </strong></td>
						<td><?php echo $row['fac_pg'];?></td>
					</tr>
					<tr>
						<td><strong>PhD Details: </strong></td>
						<td><?php echo $row['fac_phd'];?></td>
					</tr>
					<tr>
						<td><strong>Subject of Interest: </strong></td>
						<td><?php echo $row['fac_sub_intr'];?></td>
					</tr>
					<tr>
						<td><strong>Other Information:</strong></td>
						<td><?php echo $row['fac_info'];?></td>
					</tr>
				</table>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
		
	</div>
	
</div>


<?php
	}
?>