<?php
	include_once 'always_include_start.php';
	include_once 'session_check.php';
	$rid=$_SESSION['uid'];
?>

<div id="container">
  <h3 align="center">Student Attendance</h3>
  <table name="Student Attendance" width="486" height="135" border="3" class="table table-striped">
    <tr>
      <th style="text-align:center">Subject Name</th>
      <th style="text-align:center">Total Classes</th>
      <th style="text-align:center">Attended Classes</th>
      <th style="text-align:center">Percentage</th>
    </tr>
    <?php
	 $attendanceresult= mysql_query("SELECT * FROM `regis_sub_stu` WHERE `regis_stu_usn`='$rid' ORDER BY `regis_sub_id`");
     while($row = mysql_fetch_array($attendanceresult))
  {
    echo'<tr>';
		$a=$row['regis_sub_classes'];
		$b=$row['regis_attendance'];
		$c=($b/$a)*100;
		$d=$row['regis_sub_id'];
		$subname=mysql_query("SELECT sub_desc from subject where sub_id='$d'");
		while($namefetch = mysql_fetch_array($subname))
		{
			$name=$namefetch['sub_desc'];
		}
	?>
      <td align="Center">&nbsp;<?php echo $name; ?></td>
      <td align="Center">&nbsp;<?php echo $row['regis_sub_classes']; ?> </td>
      <td align="Center">&nbsp;<?php echo $row['regis_attendance']; ?> </td>
	  <td align="Center">&nbsp;<?php echo number_format( $c, 2, '.', ''); ?> </td>	  
    </tr>
    <?php
  }
  ?>
  </table>
  <p> &nbsp </p>
  <h3 align="center">Student Marks</h3>
  <table name="Student Attendance" width="486" height="135" border="3" class="table table-striped">
    <tr>
      <th style="text-align:center">Subject</th>
	  <th style="text-align:center">Maximum Marks</th>
      <th style="text-align:center">Test 1</th>
	  <th style="text-align:center">Test 2</th>
	  <th style="text-align:center">Test 3</th>
	  <th style="text-align:center">Average</th>
	  <th style="text-align:center">Other CIE marks</th>
    </tr>
	<?php
	$marksresult=mysql_query("SELECT regis_sub_id,regis_max_marks,regis_internal_1_marks,regis_internal_2_marks,regis_internal_3_marks,regis_other_cie_marks from regis_sub_stu where regis_stu_usn='$rid' ORDER BY regis_sub_id");
	while($row = mysql_fetch_array($marksresult))
	{
		echo '<tr>';
		$id=$row['regis_sub_id'];
		$max=$row['regis_max_marks'];
		$a=$row['regis_internal_1_marks'];
		$b=$row['regis_internal_2_marks'];
		$c=$row['regis_internal_3_marks'];
		$d=$row['regis_other_cie_marks'];
		if($a==NULL)
		{
			$a=0;
		}
		if($b==NULL)
		{
			$b=0;
		}
		if($c==NULL)
		{
			$c=0;
		}
		if($d==NULL)
		{
			$d=0;
		}
		if ($a <= $b && $a <= $c) //Sum the greatest 2 marks
			{
				$sum = $b + $c;
			} 
			else if ($b <= $a && $b <= $c) 
			{
				$sum = $a + $c;
			} 
			else
			{ 
				$sum = $a + $b;
			}
			$avg=$sum/2;
		$subname=mysql_query("SELECT sub_desc from subject where sub_id='$id'");
		while($namefetch = mysql_fetch_array($subname))
		{
			$name=$namefetch['sub_desc'];
		}
		?>
      <td align="Center">&nbsp;<?php echo $name; ?></td>
	  <td align="Center">&nbsp;<?php echo $max; ?></td>
      <td align="Center">&nbsp;<?php echo $a; ?> </td>
      <td align="Center">&nbsp;<?php echo $b; ?> </td>
	  <td align="Center">&nbsp;<?php echo $c; ?> </td>
	  <td align="Center">&nbsp;<?php echo number_format( $avg, 2, '.', ''); ?> </td>	 
	  <td align="Center">&nbsp;<?php echo $d; ?> </td>	  
    </tr>
    <?php
  }
  ?>
	</table>
</div>

