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
					$rid=$_SESSION['uid'];
					$query="Select stu_sem from student where stu_usn='$rid'"; //Retrieve the semester of the student
					$result=mysql_query($query);
					while($row=mysql_fetch_assoc($result))
					{
						$sem=$row['stu_sem'];
					}
					if($sem==7 || $sem==8)
					{?>
						<center><h4><b>Click <a href="../student_placements/index.php">continue</a> if you wish to proceed to the Placement Department.</b></h4></center>
					<?php }
					else
					{
						echo '<center><h3>You are not a final year student. You cannot register for placements.</h3></center>';
					}
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