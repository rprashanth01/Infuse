<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$faculty_id = $_SESSION['uid'];
	
	$marks=array();
	$usn=array();
	$internal = $_POST['internal'];
    $sub=$_POST['sub'];
	$tot_stud=$_POST['tot_stud'];
	
	
    for($i=0;$i<$tot_stud;$i++) {
    		$marks = $_POST['fac_marks_class_'.$i];
		    $usn = $_POST['stu_usn_'.$i];
			if ($internal="internal1") {
    			$query_update = 'update regis_sub_stu set regis_internal_1_marks = \''.$marks.'\' ,   WHERE regis_stu_usn = \''.$usn.'\' and regis_sub_id = \''.$sub.'\';';
		 	}
			elseif ($internal="internal2") {
		    	$query_update = 'update regis_sub_stu set regis_internal_2_marks = \''.$marks.'\' ,   WHERE regis_stu_usn = \''.$usn.'\' and regis_sub_id = \''.$sub.'\';';
		
    		}
			elseif ($internal="internal3") {
		    	$query_update = 'update regis_sub_stu set regis_internal_3_marks = \''.$marks.'\' ,   WHERE regis_stu_usn = \''.$usn.'\' and regis_sub_id = \''.$sub.'\';';
		
    		}
			elseif ($internal="others") {
		    	$query_update = 'update regis_sub_stu set regis_other_cie_marks = \''.$marks.'\' ,   WHERE regis_stu_usn = \''.$usn.'\' and regis_sub_id = \''.$sub.'\';';
		
    		}
     mysql_query($query_update);
	
?>

<div class="panel-group" id="faculty_home_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#faculty_home_panel" href="#faculty">Faculty Marks Upload Page</a>
			</h4>
		</div>
		
		<div id="faculty" class="panel-collapse collapse in">
			<div class="panel-body">
				
				<center><h4>Update Successful</h4></center>
				<br />
					
		</div>
	
	</div>

</div>

</div>	
<br />