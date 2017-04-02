<?php
?>
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#admin_nav_bar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
		
	<div class="collapse navbar-collapse" id="admin_nav_bar">
		<ul class="nav navbar-nav">
			<li><a href="admin_home_page.php">HOME</a></li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">STUDENT<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="admin_student_add.php">Add a Student</a></li>
					<li><a href="admin_student_fee.php">Student Fee Payment</a></li>
				</ul>
			</li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">FACULTY<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="admin_faculty_add.php">Add a Faculty</a></li>
					<li><a href="admin_faculty_payslip.php">Faculty Pay-slip Generation</a></li>
				</ul>
			</li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">DEPARTMENT<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="admin_department_add.php">Add Department</a></li>
				</ul>
			</li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">STATISTICS<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="admin_statistics_student.php">Student Statistics</a></li>
					<li><a href="admin_statistics_faculty.php">Faculty Statistics</a></li>
				</ul>
			</li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="contact.php">CONTACT US</a></li>
		</ul>
	</div>
</div>
