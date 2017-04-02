<?php
	include_once 'always_include_start.php';
	include_once 'session_check.php';
	$usn=$_SESSION['uid'];
?>
<div id="container">
  <h3 align="center">Student Profile</h3>
  <table name="Student Attendance" border="3" class="table table-striped">
  <?php
	$result=mysql_query("SELECT * from student where stu_usn='$usn'");
	while($row=mysql_fetch_assoc($result))
	{
		$name=$row['stu_name'];
		$gender=$row['stu_gender'];
		$sem=$row['stu_sem'];
		$cgpa=$row['stu_cgpa'];
		$skills=$row['stu_skills'];
		$certifications=$row['stu_certifications'];
		$projects=$row['stu_projects'];
		$conferences=$row['stu_conferences'];
		$interests=$row['stu_interests'];
		$awards=$row['stu_awards'];
		$dept=$row['stu_dept_id'];
	}
	$namefetch=mysql_query("SELECT dept_name from department where dept_id='$dept'");
	while($depname=mysql_fetch_assoc($namefetch))
	{
		$deptname=$depname['dept_name'];
	}
	echo '<tr><td align="center"><b>Name</b></td><td align="center">'.$name.'</td></tr>';
	echo '<tr><td align="center"><b>Gender</b></td><td align="center">'.$gender.'</td></tr>';
	echo '<tr><td align="center"><b>Department</b></td><td align="center">'.$deptname.'</td></tr>';
	echo '<tr><td align="center"><b>Semester</b></td><td align="center">'.$sem.'</td></tr>';
	echo '<tr><td align="center"><b>CGPA</b></td><td align="center">'.$cgpa.'</td></tr>';
	echo '<tr><td align="center"><b>Skills</b></td><td align="center">'.$skills.'</td></tr>';
	echo '<tr><td align="center"><b>Certifications</b></td><td align="center">'.$certifications.'</td></tr>';
	echo '<tr><td align="center"><b>Projects</b></td><td align="center">'.$projects.'</td></tr>';
	echo '<tr><td align="center"><b>Conferences attended</b></td><td align="center">'.$conferences.'</td></tr>';
	echo '<tr><td align="center"><b>Interests</b></td><td align="center">'.$interests.'</td></tr>';
	echo '<tr><td align="center"><b>Awards</td></b><td align="center">'.$awards.'</td></tr>';
	echo '</table>';	
	echo '</div></body></html>';
?>
</div>