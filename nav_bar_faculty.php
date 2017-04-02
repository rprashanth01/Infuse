<?php
?>
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#faculty_nav_bar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
		
	<div class="collapse navbar-collapse" id="faculty_nav_bar">
		<ul class="nav navbar-nav">
			<li><a href="faculty_home_page.php">HOME</a></li>
			
			<li><a href="faculty_profile.php">PROFILE</a></li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">ATTENDANCE<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="faculty_attendance_view.php">View Attendance</a></li>
					<li><a href="faculty_attendance_upload.php">Upload Attendance</a></li>
				</ul>
			</li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">MARKS<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="faculty_marks_view.php">View Marks</a></li>
					<li><a href="faculty_marks_upload.php">Upload Marks</a></li>
				</ul>
			</li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">MANAGE<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="faculty_payslip_generation.php">Payslip Download</a></li>
					<li><a href="faculty_change_password.php">Change Password</a></li>

				</ul>
			</li>
			
			<li><a href="faculty_timetable.php">TIMETABLE</a></li>
			
			<li><a href="faculty_proctor_portal.php">PROCTOR PORTAL</a></li>
			
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="contact.php">CONTACT US</a></li>
		</ul>
	</div>
</div>
