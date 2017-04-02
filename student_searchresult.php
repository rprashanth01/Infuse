<?php
	include_once 'always_include_start.php';
	include_once 'session_check.php';
?>

<html>
	
	
	<head lang="en">
		
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Student Home Page - MSRIT</title>
		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />	
	
	</head>
	
	
	<body>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<div id="complete_page" class="container">
			
			<header id="page_header">
				<?php include_once 'page_header.php'; ?>
			</header>
			
			<nav class="navbar navbar-inverse" role="navigation">
				<?php include_once 'nav_bar_student.php'; ?>
			</nav>
				
			<section id="content">
			<?php
				include_once 'always_include_start.php';
				include_once 'session_check.php';
				$usn=$_SESSION['uid'];
			?>

<div id="container">
	<?php 	
	if($_POST['searchtext']=='')
	{	
	echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
	echo '<h4><b>No search entry entered</h4></b>';
	echo 'Choose the category by which you wish to search and enter the required field<br /><select class="form-control" name="searchtype">';
	echo '<option value="stu_usn"> USN </option>';
	echo '<option value="stu_name"> Name </option>';
	echo '<option value="stu_skills"> Skills </option>';
	echo '<option value="stu_certifications"> Certifications </option>';
	echo '<option value="stu_projects"> Projects </option>';
	echo '<option value="stu_conferences"> Conferences </option>';
	echo '<option value="stu_interests"> Interests </option>';
	echo '<option value="stu_awards"> Awards </option>';
	echo '</select>';
	echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
	echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
	echo '</form></center>';
	}
	else {
	?>
  <?php
  if($_POST['searchtype']=='stu_usn'){
	$a=$_POST['searchtext'];
	$result=mysql_query("SELECT * from student where stu_usn='$a'");
	if(mysql_num_rows($result)==0)
	{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo '<h4><b>USN does not exist</h4></b>';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select class="form-control" name="searchtype">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center>';
	}else{
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
	echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
	echo 'Choose the category by which you wish to search and enter the required field<br /><select class="form-control" name="searchtype">';
	echo '<option value="stu_usn"> USN </option>';
	echo '<option value="stu_name"> Name </option>';
	echo '<option value="stu_skills"> Skills </option>';
	echo '<option value="stu_certifications"> Certifications </option>';
	echo '<option value="stu_projects"> Projects </option>';
	echo '<option value="stu_conferences"> Conferences </option>';
	echo '<option value="stu_interests"> Interests </option>';
	echo '<option value="stu_awards"> Awards </option>';
	echo '</select><br />';
	echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
	echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
	echo '</form></center><br />';
	echo '<h1 align="center">Student Profile</h1>';
	echo '<table name="Student Profile" border="3" class="table table-striped">';
	echo '<tr><td><b>Name</b></td><td>'.$name.'</td></tr>';
	echo '<tr><td><b>Gender</b></td><td>'.$gender.'</td></tr>';
	echo '<tr><td><b>Department</b></td><td>'.$deptname.'</td></tr>';
	echo '<tr><td><b>Semester</b></td><td>'.$sem.'</td></tr>';
	echo '<tr><td><b>CGPA</b></td><td>'.$cgpa.'</td></tr>';
	echo '<tr><td><b>Skills</b></td><td>'.$skills.'</td></tr>';
	echo '<tr><td><b>Certifications</b></td><td>'.$certifications.'</td></tr>';
	echo '<tr><td><b>Projects</b></td><td>'.$projects.'</td></tr>';
	echo '<tr><td><b>Conferences attended</b></td><td>'.$conferences.'</td></tr>';
	echo '<tr><td><b>Interests</b></td><td>'.$interests.'</td></tr>';
	echo '<tr><td><b>Awards</b></td><td>'.$awards.'</td></tr>';
	echo '</table>';
	}}
	else if($_POST['searchtype']=='stu_name')
	{	
			$a=$_POST['searchtext'];
			$query="SELECT * from student where stu_name like '%$a%'";
			$result=mysql_query($query);
			if(mysql_num_rows($result)==0)
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo '<h4><b>Name does not exist</h4></b>';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center></div>';
			}
			else
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center><br />';
				if(mysql_num_rows($result)>0){
				echo '<table name="Student Profile" border="3" class="table table-striped">';
				echo '<tr><th style="text-align:center"> Student name </th></tr>';
				while($row=mysql_fetch_assoc($result))
				{
					echo '<tr><td align="center">';
						echo $row['stu_usn'].'<h3><a href="student_profilegenerate.php?id=' . $row['stu_usn'] . '">' . $row['stu_name'].'</a></h3>';
					echo '</td></tr>';
				}
				echo '</table>';
				}
			}
	}
	else if($_POST['searchtype']=='stu_skills')
	{	
			$a=$_POST['searchtext'];
			$query="SELECT * from student where stu_skills like '%$a%'";
			$result=mysql_query($query);
			if(mysql_num_rows($result)==0)
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo '<h4><b>Skill does not exist</h4></b>';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center></div>';
			}
			else
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center><br />';
				if(mysql_num_rows($result)>0){
				echo '<table name="Student Profile" border="3" class="table table-striped">';
				echo '<tr><th style="text-align:center"> Student name </th></tr>';
				while($row=mysql_fetch_assoc($result))
				{
					echo '<tr><td align="center">';
						echo $row['stu_usn'].'<h3><a href="student_profilegenerate.php?id=' . $row['stu_usn'] . '">' . $row['stu_name'].'</a></h3>';
					echo '</td></tr>';
				}
				echo '</table>';
				}
			}
	}
	else if($_POST['searchtype']=='stu_certifications')
	{	
			$a=$_POST['searchtext'];
			$query="SELECT * from student where stu_certifications like '%$a%'";
			$result=mysql_query($query);
			if(mysql_num_rows($result)==0)
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo '<h4><b>Certification does not exist</h4></b>';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center></div>';
			}
			else
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center><br />';
				if(mysql_num_rows($result)>0){
				echo '<table name="Student Profile" border="3" class="table table-striped">';
				echo '<tr><th style="text-align:center"> Student name </th></tr>';
				while($row=mysql_fetch_assoc($result))
				{
					echo '<tr><td align="center">';
						echo $row['stu_usn'].'<h3><a href="student_profilegenerate.php?id=' . $row['stu_usn'] . '">' . $row['stu_name'].'</a></h3>';
					echo '</td></tr>';
				}
				echo '</table>';
				}
			}
	}
	else if($_POST['searchtype']=='stu_projects')
	{	
			$a=$_POST['searchtext'];
			$query="SELECT * from student where stu_projects like '%$a%'";
			$result=mysql_query($query);
			if(mysql_num_rows($result)==0)
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo '<h4><b>Project does not exist</h4></b>';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center></div>';
			}
			else
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center><br />';
				if(mysql_num_rows($result)>0){
				echo '<table name="Student Profile" border="3" class="table table-striped">';
				echo '<tr><th style="text-align:center"> Student name </th></tr>';
				while($row=mysql_fetch_assoc($result))
				{
					echo '<tr><td align="center">';
						echo $row['stu_usn'].'<h3><a href="student_profilegenerate.php?id=' . $row['stu_usn'] . '">' . $row['stu_name'].'</a></h3>';
					echo '</td></tr>';
				}
				echo '</table>';
				}
			}
	}
	else if($_POST['searchtype']=='stu_conferences')
	{	
			$a=$_POST['searchtext'];
			$query="SELECT * from student where stu_conferences like '%$a%'";
			$result=mysql_query($query);
			if(mysql_num_rows($result)==0)
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo '<h4><b>Conference does not exist</h4></b>';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center></div>';
			}
			else
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center><br />';
				if(mysql_num_rows($result)>0){
				echo '<table name="Student Profile" border="3" class="table table-striped">';
				echo '<tr><th style="text-align:center"> Student name </th></tr>';
				while($row=mysql_fetch_assoc($result))
				{
					echo '<tr><td align="center">';
						echo $row['stu_usn'].'<h3><a href="student_profilegenerate.php?id=' . $row['stu_usn'] . '">' . $row['stu_name'].'</a></h3>';
					echo '</td></tr>';
				}
				echo '</table>';
				}
			}
	}
	else if($_POST['searchtype']=='stu_interests')
	{	
			$a=$_POST['searchtext'];
			$query="SELECT * from student where stu_interests like '%$a%'";
			$result=mysql_query($query);
			if(mysql_num_rows($result)==0)
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo '<h4><b>Interest does not exist</h4></b>';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center></div>';
			}
			else
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center><br />';
				if(mysql_num_rows($result)>0){
				echo '<table name="Student Profile" border="3" class="table table-striped">';
				echo '<tr><th style="text-align:center"> Student name </th></tr>';
				while($row=mysql_fetch_assoc($result))
				{
					echo '<tr><td align="center">';
						echo $row['stu_usn'].'<h3><a href="student_profilegenerate.php?id=' . $row['stu_usn'] . '">' . $row['stu_name'].'</a></h3>';
					echo '</td></tr>';
				}
				echo '</table>';
				}
			}
	}
	else if($_POST['searchtype']=='stu_awards')
	{	
			$a=$_POST['searchtext'];
			$query="SELECT * from student where stu_awards like '%$a%'";
			$result=mysql_query($query);
			if(mysql_num_rows($result)==0)
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo '<h4><b>Award does not exist</h4></b>';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center></div>';
			}
			else
			{
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo 'Choose the category by which you wish to search and enter the required field<br /><select name="searchtype" class="form-control">';
				echo '<option value="stu_usn"> USN </option>';
				echo '<option value="stu_name"> Name </option>';
				echo '<option value="stu_skills"> Skills </option>';
				echo '<option value="stu_certifications"> Certifications </option>';
				echo '<option value="stu_projects"> Projects </option>';
				echo '<option value="stu_conferences"> Conferences </option>';
				echo '<option value="stu_interests"> Interests </option>';
				echo '<option value="stu_awards"> Awards </option>';
				echo '</select><br />';
				echo '<input type="text" name="searchtext" class="form-control" placeholder="Enter the field to be searched"/><br /><br />';
				echo '<button type="submit" class="btn btn-lg btn-primary" >Submit</button>';
				echo '</form></center><br />';
				if(mysql_num_rows($result)>0){
				echo '<table name="Student Profile" border="3" class="table table-striped">';
				echo '<tr><th style="text-align:center"> Student name </th></tr>';
				while($row=mysql_fetch_assoc($result))
				{
					echo '<tr><td align="center">';
						echo $row['stu_usn'].'<h3><a href="student_profilegenerate.php?id=' . $row['stu_usn'] . '">' . $row['stu_name'].'</a></h3>';
					echo '</td></tr>';
				}
				echo '</table>';
				}
			}
	}
	}
	echo '</div>';
?>
</section>
				
			<footer id="page_footer">
				<?php include_once 'page_footer.php'; ?>
			</footer>
		</div>
		
	</body>

</html>

<?php 
	include_once 'always_include_end.php'; 
?>