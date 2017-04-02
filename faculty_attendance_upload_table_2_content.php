<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$faculty_id = $_SESSION['uid'];
	
	$attended=array();
	$usn=array();

	
	
	
	$tot=$_POST['tot'];
	$sub=$_POST['sub'];
	$tot_stud=$_POST['tot_stud'];
	
	
    for($i=0;$i<$tot_stud;$i++) {
    		$attended = $_POST['fac_att_class_'.$i];
		if ($attended > $tot) {
			echo "Value entered is greater than Total Classes";
			die();
		}
		    $usn = $_POST['stu_usn_'.$i];
    	$query_update = 'update regis_sub_stu set regis_attendance = \''.$attended.'\' , regis_sub_classes = \''.$tot.'\'  WHERE regis_stu_usn = \''.$usn.'\' and regis_sub_id = \''.$sub.'\';';
		 mysql_query($query_update);
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
				<?php
				mysql_query($query_update);
				?>
				<center><h4>Update Successful</h4></center>
					
			</div>
		</div>
	
	</div>

</div>