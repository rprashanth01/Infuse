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
			<h3 align="center">Search Profile</h3>
			<?php
			echo '<center><form class="form-horizontal" method="post" action="student_searchresult.php">';
			echo '<h4><b>Choose the category by which you wish to search and enter the required field</b></h4><br /><select class="form-control"  name="searchtype">';
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
			echo '</form></center></div>';
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