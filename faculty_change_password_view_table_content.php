<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$faculty_id = $_SESSION['uid'];
	
	$old = $_POST['fac_old_pass'];
	$new = $_POST['fac_new_pass'];
	
	$query_pass = 'SELECT fac_pword AS pass FROM faculty WHERE fac_id = \''.$faculty_id.'\' ;';
    $result = mysql_query($query_pass);
			 while($row = mysql_fetch_array($result)) {
	
	            $oldpass = $row['pass'];
	
			 }
		

	
?>


<div class="panel-group" id="faculty_home_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#faculty_home_panel" href="#faculty">Faculty Marks View Page</a>
			</h4>
		</div>
		
		<div id="faculty" class="panel-collapse collapse in">
			<div class="panel-body">
				<?php
				
    if ($old!=$oldpass) {
    	echo "<center><h3>Plese Enter Your Current Password Correctly</h3></center>";
    }
	else {
	$query_change = 'update faculty set fac_pword = \''.$new.'\'  WHERE fac_id = \''.$faculty_id.'\' ;';
		    mysql_query($query_change);
		
    	echo "<center><h3>Password Successfully Changed</h3></center>";

	}
	?>
	
			</div>
		</div>
	
	</div>

</div>