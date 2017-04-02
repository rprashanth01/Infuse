<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$faculty_id = $_SESSION['uid'];
	
	$sub = $_POST['fac_sub_list'];
	$class = $_POST['fac_class_list'];
	$tot=$_POST['fac_tot_class'];
	
	$query_test = 'SELECT count(*) FROM timetable WHERE TT_FAC_ID = \''.$faculty_id.'\' and TT_SUB_ID= \''.$sub.'\' and TT_CLASS_ID = \''.$class.'\';';
    $result1 = mysql_query($query_test);
	$row1 = mysql_num_rows($result1) ;
		
	
    if ($row1==0) {
    	die("You are not handling this class");
    }
	else {
		$query_attendance = 'SELECT regis_stu_usn,regis_attendance from regis_sub_stu where regis_sub_id = \''.$sub.'\' and regis_stu_class = \''.$class.'\' ;';
 	
	}
	
?>

<div class="panel-group" id="faculty_home_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#faculty_home_panel" href="#faculty">Faculty Attendance Upload Page</a>
			</h4>
		</div>
		
		<div id="faculty" class="panel-collapse collapse in">
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="faculty_attendance_upload_table_2.php">
					
				<?php
	$result = mysql_query($query_attendance);
	?>
	<center><h3><?php echo $sub;?></h3></center>
	<center><h4>Total Classes : <?php echo $tot;?></h4></center>

	
	<table  class="table table-hover" width="486" height="135" border="3" class="table table-striped"> 
     <tr>
     <th>Student USN</th>
     <th>Attended Classes</th>
     </tr>	
     <?php
     $i=0;
	 while($row = mysql_fetch_array($result)) {
	 	$usn=array();
		$attended=array();
		$usn[$i] = $row['regis_stu_usn'];
		$attended[$i] = $row['regis_attendance'];
		//$usn=array();
		//$attended=array();
?>
		<tr>
			<td><?php echo $usn[$i]; ?></td>
		    <td>
			<div class="form-group">
						<label for="c_pass" class="col-sm-2 control-label"></label>
						<div class="col-sm-2">
							<input type="text" value="<?php echo $attended[$i]; ?>" class="form-control" name="fac_att_class_<?php echo $i ?>"  required />
						</div>
					
					</div>
					
					</td>
			
		</tr>	
		
							<input type="hidden" value="<?php echo $usn[$i]; ?>" class="form-control" name="stu_usn_<?php echo $i ?>"  required />
		
<?php	
	$i=$i+1;
	 }
	     
?>
			
							<input type="hidden" value="<?php echo $sub;?>" class="form-control" name="sub"  required />
						
					
			
							<input type="hidden" value="<?php echo $tot;?>" class="form-control" name="tot"  required />
			
							<input type="hidden" value="<?php echo $i;?>" class="form-control" name="tot_stud"  required />
					
</table>
<input  class="btn btn-primary" type="submit" value="Upload Attendance" />
					
				</form>		
			</div>
		</div>
	
	</div>

</div>