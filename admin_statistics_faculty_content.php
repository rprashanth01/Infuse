<?php
	include_once "db_connect.php";
	include_once "db_queries.php";
	
	function round_off($arg) {
		$arg += (10 - ($arg % 10));
		return $arg;
	}
	
	$fac_max_num_dept = 0;
	$query = $admin_statistics_faculty_dept_query;
	$result = mysql_query($query);
	while ($row = mysql_fetch_assoc($result)) {
		$dept[$row['FAC_DEPT_ID']] = $row['NO_OF_FAC'];
		if ($fac_max_num_dept < $row['NO_OF_FAC']) {
			$fac_max_num_dept = $row['NO_OF_FAC'];
		}
	}
	$fac_max_num_dept = round_off($fac_max_num_dept) + (int) round_off((int) ($fac_max_num_dept / 10));
	
	$fac_max_num_gender = 0;
	$query = $admin_statistics_faculty_gender_query;
	$result = mysql_query($query);
	while ($row = mysql_fetch_assoc($result)) {
		$gender[$row['FAC_GENDER']] = $row['NO_OF_FAC'];
		if ($fac_max_num_gender < $row['NO_OF_FAC']) {
			$fac_max_num_gender = $row['NO_OF_FAC'];
		}
	}
	$fac_max_num_gender = round_off($fac_max_num_gender) + (int) round_off((int) ($fac_max_num_gender / 10));
?>

<script src='Chart.js'></script>

<div class="panel-group" id="admin_statistics_faculty_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#admin_statistics_faculty_panel" href="#statistics_faculty_department">Faculty Statistics by Department</a>
			</h4>
		</div>
		
		<div id="statistics_faculty_department" class="panel-collapse collapse">
			<div class="panel-body text-center">
				<p>Number of faculty present in each department</p>
				<canvas id="faculty_dept" width="600" height="400"></canvas>
			</div>
		</div>
	
	</div>
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#admin_statistics_faculty_panel" href="#statistics_faculty_gender">Faculty Statistics by Gender</a>
			</h4>
		</div>
		
		<div id="statistics_faculty_gender" class="panel-collapse collapse">
			<div class="panel-body text-center">
				<p>Number of female and male faculty</p>
				<canvas id="faculty_gender" width="600" height="400"></canvas>
			</div>
		</div>
	
	</div>

</div>

<script>
	var  deptData = {
		labels : [<?php 
				foreach ($dept as $dept_name => $dept_num) {
					echo '"'.$dept_name.'"';
					echo ', ';
				}
				?>],
		datasets : [ 
			{	fillColor : "rgba(0, 0, 150, 0.8)",
				strokeColor : "#ACC26D",
				data : [<?php 
				foreach ($dept as $dept_name => $dept_num) {
					echo $dept_num;
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
	
	var dept = document.getElementById("faculty_dept").getContext('2d');
	new Chart(dept).Bar(deptData, {
		scaleOverride : true, 
		scaleSteps : 10,
		scaleStepWidth : <?php echo $fac_max_num_dept / 10; ?>,
		scaleStartValue : 0
	});
	
	var gender = document.getElementById("faculty_gender").getContext('2d');
	new Chart(gender).Bar(genderData, {
		scaleOverride : true, 
		scaleSteps : 10,
		scaleStepWidth : <?php echo $fac_max_num_gender / 10; ?>,
		scaleStartValue : 0
	});
</script>