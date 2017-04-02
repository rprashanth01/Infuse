<?php
	include_once 'always_include_start.php';
	include_once 'session_check.php';
	$usn=$_SESSION['uid'];
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
		$query="UPDATE student set stu_skills='".mysql_real_escape_string($_POST['skills'])."',
									stu_certifications='".mysql_real_escape_string($_POST['certifications'])."',
									stu_projects='".mysql_real_escape_string($_POST['projects'])."',
									stu_conferences='".mysql_real_escape_string($_POST['conferences'])."',
									stu_interests='".mysql_real_escape_string($_POST['interests'])."',
									stu_awards='".mysql_real_escape_string($_POST['awards'])."'
									where stu_usn='$usn'";
		$result=mysql_query($query);
		if($result)
		{
			echo "<center><b>Profile successfully updated</b></center><br />";
		}
		else
		{
			echo mysql_error();
		}	
		?>
		</div>

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