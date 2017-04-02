<?php
?>
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dept_nav_bar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
		
	<div class="collapse navbar-collapse" id="dept_nav_bar">
		<ul class="nav navbar-nav">
			<li><a href="department_home_page.php">HOME</a></li>
			
			<li><a href="department_change_designation.php">CHANGE DESIGNATION</a></li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">SUBJECT<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="department_subject_add.php">Add a Subject</a></li>
					<li><a href="department_subject_edit.php">Edit Subject</a></li>
				</ul>
			</li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">TIMETABLE<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="department_timetable_edit.php">Edit Timetable</a></li>
				</ul>
			</li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">STATISTICS<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="department_statistics_student.php">Student Statistics</a></li>
					<li><a href="department_statistics_faculty.php">Faculty Statistics</a></li>
					<li><a href="department_statistics_subject.php">Subject Statistics</a></li>
				</ul>
			</li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">GENERATE<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="department_report_generate.php">Department Report</a></li>
				</ul>
			</li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="contact.php">CONTACT US</a></li>
		</ul>
	</div>
</div>
