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

			<?php
			$query="SELECT * from student where stu_usn='$usn'";
			$result=mysql_query($query);
			while($row=mysql_fetch_assoc($result))
			{
				$skills=$row['stu_skills'];
				$certifications=$row['stu_certifications'];
				$projects=$row['stu_projects'];
				$conferences=$row['stu_conferences'];
				$interests=$row['stu_interests'];
				$awards=$row['stu_awards'];
			}
			?>
			<div id="container">
			<center><form role="form" action="student_edit.php" method="post">
			<h3>Edit Your Profile</h3><br />
			<div class="form-group">
				<label for="skills" class="col-sm-4 control-label"><h4>Skills and endorsements</h4></label>
				<div class="col-sm-8">
					<textarea name="skills" class="form-control" rows="3"><?php echo $skills; ?></textarea><br />
				</div>
			</div>
			<div class="form-group">
				<label for="skills" class="col-sm-4 control-label"><h4>Certifications</h4></label>
				<div class="col-sm-8">
					<textarea name="certifications" class="form-control" rows="3"><?php echo $certifications; ?></textarea><br />
				</div>
			</div>
			<div class="form-group">
				<label for="skills" class="col-sm-4 control-label"><h4>Projects</h4></label>
				<div class="col-sm-8">
					<textarea name="projects" class="form-control" rows="3"><?php echo $projects; ?></textarea><br />
				</div>
			</div>
			<div class="form-group">
				<label for="skills" class="col-sm-4 control-label"><h4>Conferences</h4></label>
				<div class="col-sm-8">
					<textarea name="conferences" class="form-control" rows="3"><?php echo $conferences; ?></textarea><br />
				</div>
			</div>
			<div class="form-group">
				<label for="skills" class="col-sm-4 control-label"><h4>Interests</h4></label>
				<div class="col-sm-8">
					<textarea name="interests" class="form-control" rows="3"><?php echo $interests; ?></textarea><br />
				</div>
			</div>	
			<div class="form-group">
				<label for="skills" class="col-sm-4 control-label"><h4>Awards</h4></label>
				<div class="col-sm-8">
					<textarea name="awards" class="form-control" rows="3"><?php echo $awards; ?></textarea><br />
				</div>
			</div>	
			
			<br /><br />
			 <button type="submit" class="btn btn-lg btn-primary" >Submit</button>
			</form></center>
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