<div class="panel-group" id="student_home_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#student_home_panel" href="#student">Student Home Page</a>
			</h4>
		</div>
		
		<div id="student" class="panel-collapse collapse in">
			<div class="panel-body">
				<div id="container"><center>
			<?php
				$usn=$_SESSION['uid'];
				$result=mysql_query("SELECT * from student where stu_usn='$usn'");
				while($row=mysql_fetch_assoc($result))
				{
					$name=$row['stu_name'];
					$dept=$row['stu_dept_id'];
				}
				$namefetch=mysql_query("SELECT dept_name from department where dept_id='$dept'");
				while($depname=mysql_fetch_assoc($namefetch))
				{
					$deptname=$depname['dept_name'];
				}
					echo '<h3><b>'.$name.'</h3></b>';
					echo '<h4>'.$deptname.'</h4>';
					echo '<h5>'.$usn.'</h5>';
				
		?>
					</center>
				</div>
			</div>
		</div>
	
	</div>

</div>
