<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$faculty_id = $_SESSION['uid'];
	
	$sub = $_POST['fac_sub_list'];
	$class = $_POST['fac_class_list'];
	$internal=$_POST['internal'];
	$query_test = 'SELECT count(*) FROM timetable WHERE TT_FAC_ID = \''.$faculty_id.'\' and TT_SUB_ID= \''.$sub.'\' and TT_CLASS_ID = \''.$class.'\';';
    $result1 = mysql_query($query_test);
	$row1 = mysql_num_rows($result1) ;

	
    if ($row1==0) {
    	die("You are not handling this class");
    }
	else {
		
		if ( $internal=="internal1") {
			
		$query_marks = 'SELECT regis_internal_1_marks,regis_max_marks,regis_stu_usn from regis_sub_stu where regis_sub_id = \''.$sub.'\' and regis_stu_class = \''.$class.'\' ;';
	    
	    $result = mysql_query($query_marks);
		
		}
	elseif ($internal=="internal2") {
		$query_marks = 'SELECT regis_internal_2_marks,regis_max_marks,regis_stu_usn from regis_sub_stu where regis_sub_id = \''.$sub.'\' and regis_stu_class = \''.$class.'\' ;';
	    $result = mysql_query($query_marks);
	}
	elseif ($internal=="internal3") {
		$query_marks = 'SELECT regis_internal_3_marks,regis_max_marks,regis_stu_usn from regis_sub_stu where regis_sub_id = \''.$sub.'\' and regis_stu_class = \''.$class.'\' ;';
	    $result = mysql_query($query_marks);
	     
	}  
    elseif ($internal=="others") {
    	
		$query_marks = 'SELECT regis_other_cie_marks,regis_stu_usn from regis_sub_stu where regis_sub_id = \''.$sub.'\' and regis_stu_class = \''.$class.'\' ;';
	    $result = mysql_query($query_marks);
	}
	}
	
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
				<form class="form-horizontal" role="form" method="post" action="faculty_marks_upload_table_sfinal.php">
					

	<center><h3><?php echo $sub;?></h3></center>
	<center><h4> <?php echo $internal;?></h4></center>

	
	<table  class="table table-hover" width="486" height="135" border="3" class="table table-striped"> 
     <tr>
     <th>Student USN</th>
     <th>Max Marks</th>
     <th>Marks Obtained</th>
     </tr>	
     <?php
     $i=0;
	 while($row = mysql_fetch_assoc($result) ) {
	 	$usn=array();
		$marks=array();
		if ($internal!="others") {
			$maxmarks = $row['regis_max_marks'];
		}
		else {
			
				$query_marks_cie_other = 'SELECT DISTINCT regis_max_marks from regis_sub_stu where regis_sub_id = \''.$sub.'\' and regis_stu_class = \''.$class.'\' ;';
				
				$result2 = mysql_query($query_marks_cie_other);
				$row2 = mysql_fetch_assoc($result2);
				$row2 = $row2['regis_max_marks'];
				$maxmarks = ( 50 - $row2 ) ;
			}
		
		$usn[$i] = $row['regis_stu_usn'];
		if ($internal=="internal1") {
		$marks[$i] = $row['regis_internal_1_marks'];
		}
		elseif ($internal=="internal2") {
		$marks[$i] = $row['regis_internal_2_marks'];
		}
		elseif ($internal=="internal3") {
		$marks[$i] = $row['regis_internal_3_marks'];
		} 
		elseif ($internal=="others") {
		$marks[$i] = $row['regis_other_cie_marks'];
		}
		//$usn=array();
		//$attended=array();
?>
		<tr>
			<td><?php echo $usn[$i]; ?></td>
		    
		    <td><?php echo $maxmarks; ?></td>
		    <td>	
			<div class="form-group">
						<label for="c_marks" class="col-sm-2 control-label"></label>
						<div class="col-sm-2">
							<input type="text" value="<?php echo $marks[$i]; ?>" class="form-control" name="fac_marks_class_<?php echo $i ?>"  required />
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
						
					
			
							<input type="hidden" value="<?php echo $internal;?>" class="form-control" name="internal"  required />
			
							<input type="hidden" value="<?php echo $i;?>" class="form-control" name="tot_stud"  required />
					
</table>
<input  class="btn btn-primary" type="submit" value="Upload Marks" />
					
				</form>		
			</div>
		</div>
	
	</div>

</div>