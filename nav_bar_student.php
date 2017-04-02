<?php
?>
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#index_nav_bar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
		
	<div class="collapse navbar-collapse" id="index_nav_bar">
		<ul class="nav navbar-nav">
			<li><a href="student_home_page.php">HOME</a></li>
			<li><a href="marks_attendance_main.php">MARKS & ATTENDANCE</a></li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFILES<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="student_profile_view.php">View Profile</a></li>
					<li><a href="student_editprofile.php">Edit Profile</a></li>
					<li><a href="student_searchprofile.php">Search Profile</a></li>
				</ul>
			</li>
			<li><a href="../student_forum/index.php">STUDENT FORUM</a></li>
			<li><a href="student_placementproceed.php">PLACEMENTS</a></li>
			<li><a href="download.php?filename=resume-UG.docx">RESUME</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="contact.php">CONTACT US</a></li>
		</ul>
	</div>
</div>
