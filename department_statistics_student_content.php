<?php
	include_once "db_connect.php";
	include_once "db_queries.php";
	
	function round_off($arg) {
		$arg += (10 - ($arg % 10));
		return $arg;
	}
	
	$uid = $_SESSION['uid'];
	
	$stu_max_num_sem = 0;
	$sem[3] = $sem[2] = $sem[1] = $sem[0] = 0;
	$query = $department_statistics_student_sem_1_query.$uid.$department_statistics_student_sem_2_query;
	$result = mysql_query($query);
	while ($row = mysql_fetch_assoc($result)) {
		switch ($row['STU_SEM']) {
			case 1:
			case 2:
				$sem[0] += $row['NO_OF_STU'];
				if ($stu_max_num_sem < $sem[0]) {
					$stu_max_num_sem = $sem[0];
				}
				break;
			
			case 3:
			case 4:
				$sem[1] += $row['NO_OF_STU'];
				if ($stu_max_num_sem < $sem[1]) {
					$stu_max_num_sem = $sem[1];
				}
				break;
				
			case 5:
			case 6:
				$sem[2] += $row['NO_OF_STU'];
				if ($stu_max_num_sem < $sem[2]) {
					$stu_max_num_sem = $sem[2];
				}
				break;
				
			case 7:
			case 8:
				$sem[3] += $row['NO_OF_STU'];
				if ($stu_max_num_sem < $sem[3]) {
					$stu_max_num_sem = $sem[3];
				}
				break;
		}
	}

	$stu_max_num_sem = round_off($stu_max_num_sem) + (int) round_off((int) ($stu_max_num_sem / 10));
	
	$stu_max_num_gender = 0;
	$query = $department_statistics_student_gender_1_query.$uid.$department_statistics_student_gender_2_query;
	$result = mysql_query($query);
	while ($row = mysql_fetch_assoc($result)) {
		$gender[$row['STU_GENDER']] = $row['NO_OF_STU'];
		if ($stu_max_num_gender < $row['NO_OF_STU']) {
			$stu_max_num_gender = $row['NO_OF_STU'];
		}
	}
	$stu_max_num_gender = round_off($stu_max_num_gender) + (int) round_off((int) ($stu_max_num_gender / 10));
?>

<script src='Chart.js'></script>

<div class="panel-group" id="department_statistics_student_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#department_statistics_student_panel" href="#statistics_student_year">Student Statistics by Year</a>
			</h4>
		</div>
		
		<div id="statistics_student_year" class="panel-collapse collapse">
			<div class="panel-body text-center">
				<p>Number of students present in each year</p>
				<canvas id="student_year" width="600" height="400"></canvas>
			</div>
		</div>
	
	</div>
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#department_statistics_student_panel" href="#statistics_student_gender">Student Statistics by Gender</a>
			</h4>
		</div>
		
		<div id="statistics_student_gender" class="panel-collapse collapse">
			<div class="panel-body text-center">
				<p>Number of female and male students</p>
				<canvas id="student_gender" width="600" height="400"></canvas>
			</div>
		</div>
	
	</div>

</div>

<script>
	var  yearData = {
		labels : ["1", "2", "3", "4"],
		datasets : [ 
			{	fillColor : "rgba(0, 0, 150, 0.8)",
				strokeColor : "#ACC26D",
				data : [<?php 
				foreach ($sem as $sem_name => $sem_num) {
					echo $sem_num;
					echo ', ';
				}
				?>]
			} 
		]
	}
	
	var  genderData = {
		labels : ["Female", "Male"],
		datasets : [ 
			{	fillColor : "rgba(0, 0, 150, 0.8)",
				strokeColor : "#ACC26D",
				data : [<?php 
				foreach ($gender as $gender_name => $gender_num) {
					echo $gender_num;
					echo ', ';
				}
				?>]
			} 
		]
	}
	
	var year = document.getElementById("student_year").getContext('2d');
	new Chart(year).Bar(yearData, {
		scaleOverride : true, 
		scaleSteps : 10,
		scaleStepWidth : <?php echo $stu_max_num_sem / 10; ?>,
		scaleStartValue : 0
	});
	
	var gender = document.getElementById("student_gender").getContext('2d');
	new Chart(gender).Bar(genderData, {
		scaleOverride : true, 
		scaleSteps : 10,
		scaleStepWidth : <?php echo $stu_max_num_gender / 10; ?>,
		scaleStartValue : 0
	});
</script>