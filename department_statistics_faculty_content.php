<?php
	include_once "db_connect.php";
	include_once "db_queries.php";
	
	function round_off($arg) {
		$arg += (10 - ($arg % 10));
		return $arg;
	}
	
	$uid = $_SESSION['uid'];
	
	$fac_max_num_gender = 0;
	$query = $department_statistics_faculty_gender_1_query.$uid.$department_statistics_faculty_gender_2_query;
	$result = mysql_query($query);
	while ($row = mysql_fetch_assoc($result)) {
		$gender[$row['FAC_GENDER']] = $row['NO_OF_FAC'];
		if ($fac_max_num_gender < $row['NO_OF_FAC']) {
			$fac_max_num_gender = $row['NO_OF_FAC'];
		}
	}
	$fac_max_num_gender = round_off($fac_max_num_gender) + (int) round_off((int) ($fac_max_num_gender / 10));
	
	$query = $department_statistics_student_count_query.$uid.'\';';
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	$fac_count = $row['NUM'];
	$query = $department_statistics_faculty_count_query.$uid.'\';';
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	$stu_count = $row['NUM'];
	$max = ($fac_count < $stu_count) ? $stu_count : $fac_count ;
	$max = round_off($max) + (int) round_off((int) ($max / 10));
?>

<script src='Chart.js'></script>

<div class="panel-group" id="department_statistics_faculty_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#department_statistics_faculty_panel" href="#statistics_faculty_gender">Faculty Statistics by Gender</a>
			</h4>
		</div>
		
		<div id="statistics_faculty_gender" class="panel-collapse collapse">
			<div class="panel-body text-center">
				<p>Number of female and male faculty</p>
				<canvas id="faculty_gender" width="600" height="400"></canvas>
			</div>
		</div>
	
	</div>
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#department_statistics_faculty_panel" href="#statistics_faculty_student_ratio">Faculty - Student Ratio</a>
			</h4>
		</div>
		
		<div id="statistics_faculty_student_ratio" class="panel-collapse collapse">
			<div class="panel-body text-center">
				<p>The faculty student ratio</p>
				<canvas id="faculty_student_ratio" width="600" height="400"></canvas>
			</div>
		</div>

	</div>
</div>

<script>
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
	
	var  ratioData = {
		labels : ["Faculty", "Student"],
		datasets : [ 
			{	fillColor : "rgba(0, 0, 150, 0.8)",
				strokeColor : "#ACC26D",
				data : [<?php 
					echo $stu_count.', '.$fac_count;
				?>]
			} 
		]
	}
	
	var gender = document.getElementById("faculty_gender").getContext('2d');
	new Chart(gender).Bar(genderData, {
		scaleOverride : true, 
		scaleSteps : 10,
		scaleStepWidth : <?php echo $fac_max_num_gender / 10; ?>,
		scaleStartValue : 0
	});
	
	var ratio = document.getElementById("faculty_student_ratio").getContext('2d');
	new Chart(ratio).Bar(ratioData, {
		scaleOverride : true, 
		scaleSteps : 10,
		scaleStepWidth : <?php echo $max / 10; ?>,
		scaleStartValue : 0
	});
</script>