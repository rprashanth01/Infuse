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
				echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
				echo '<br /><h4><b>Choose the category by which you wish to search and enter the required field</b></h4><br /><select class="form-control"  name="searchtype">';
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
				$a=$_GET['id'];	
				$result=mysql_query("SELECT * from student where stu_usn='$a'");	
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
				echo '</table></div>';
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