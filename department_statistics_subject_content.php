<?php
	include_once "db_connect.php";
	include_once "db_queries.php";
	
	function round_off($arg) {
		$arg += (10 - ($arg % 10));
		return $arg;
	}
	
	$uid = $_SESSION['uid'];
?>

<script src='Chart.js'></script>

<div class="panel-group" id="department_statistics_subject_panel">

<?php
	$query = $department_subject_statistics_query.$uid.'\';';
	$result = mysql_query($query);	
	
	while ($row = mysql_fetch_assoc($result)) {
?>

	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#department_statistics_subject_panel" href="#statistics_subject_<?php echo $row['sub_id']; ?>"><?php echo $row['sub_id']; ?></a>
			</h4>
		</div>
		
		<div id="statistics_subject_<?php echo $row['sub_id']; ?>" class="panel-collapse collapse">
			<div class="panel-body text-center">
				<p>Grades scored in subject</p>
				<canvas id="subject_<?php echo $row['sub_id']; ?>" width="600" height="400"></canvas>
			</div>
		</div>
	
	</div>
	
<?php
	}
?>

<?php
	$query = $department_subject_statistics_query.$uid.'\';';
	$result = mysql_query($query);	
	
	while ($row = mysql_fetch_assoc($result)) {
		
		$max = 0;
		/*while ($row = mysql_fetch_assoc($result)) {
			$gender[$row['FAC_GENDER']] = $row['NO_OF_FAC'];
			if ($fac_max_num_gender < $row['NO_OF_FAC']) {
				$fac_max_num_gender = $row['NO_OF_FAC'];
			}
		}
		$fac_max_num_gender = round_off($fac_max_num_gender) + (int) round_off((int) ($fac_max_num_gender / 10));*/
		$num_s = $row['sub_prev_num_s'];
		if ($max < $num_s) {
			$max = $num_s;
		}
		$num_a = $row['sub_prev_num_a'];
		if ($max < $num_a) {
			$max = $num_a;
		}
		$num_b = $row['sub_prev_num_b'];
		if ($max < $num_b) {
			$max = $num_b;
		}
		$num_c = $row['sub_prev_num_c'];
		if ($max < $num_c) {
			$max = $num_c;
		}
		$num_f = $row['sub_prev_num_f'];
		if ($max < $num_f) {
			$max = $num_f;
		}
		
		$max = round_off($max) + (int) round_off((int) ($max / 10));
?>
	<script>
		var  subject<?php echo $row['sub_id']; ?>Data = {
			labels : ["S", "A", "B", "C", "F"],
			datasets : [ 
				{	fillColor : "rgba(0, 0, 150, 0.8)",
					strokeColor : "#ACC26D",
					data : [<?php 
						echo $num_s.', '.$num_a.', '.$num_b.', '.$num_c.', '.$num_f;
					?>]
				} 
			]
		}
		
		var sub<?php echo $row['sub_id']; ?> = document.getElementById("subject_<?php echo $row['sub_id']; ?>").getContext('2d');
		new Chart(sub<?php echo $row['sub_id']; ?>).Bar(subject<?php echo $row['sub_id']; ?>Data, {
			scaleOverride : true, 
			scaleSteps : 10,
			scaleStepWidth : <?php echo $max / 10; ?>,
			scaleStartValue : 0
		});
		
	</script>
<?php
	}
?>

</div>