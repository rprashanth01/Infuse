<?php
	include_once 'always_include_start.php';
?>

<html>
	
	
	<head lang="en">
		
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>MSRIT</title>
		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />	
	
	</head>
	
	
	<body>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<div id="complete_page" class="container">
			
			<header id="page_header">
				<?php include_once 'page_header.php'; ?>
			</header>
			
			<nav class="navbar navbar-inverse" role="navigation">
				<?php include_once 'nav_bar.php'; ?>
			</nav>
				
			<section id="content">
				<?php
					echo '<center><h3>Time Table</h3></center>';
					$a=$_SESSION['uid'];
					echo '<table name="Student Attendance" width="486" height="135" border="3" class="table table-striped">';
					echo  '<tr>';
					echo  '<th> </th>';
					echo  '<th style="text-align:center">1</th>';
					echo  '<th style="text-align:center">2</th>';
					echo  '<th style="text-align:center">3</th>';
					echo  '<th style="text-align:center">4</th>';
					echo  '<th style="text-align:center">5</th>';
					echo  '<th style="text-align:center">6</th>';
					echo  '<th style="text-align:center"">7</th>';
					echo   '</tr>';
					echo '<tr><td align="center"><b>Monday</b>';
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='1' and tt_day='mon'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='2' and tt_day='mon'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='3' and tt_day='mon'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='4' and tt_day='mon'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='5' and tt_day='mon'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='6' and tt_day='mon'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='7' and tt_day='mon'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}										
					echo '<tr><td align="center"><b>Tuesday</b>';
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='1' and tt_day='tue'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='2' and tt_day='tue'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='3' and tt_day='tue'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='4' and tt_day='tue'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='5' and tt_day='tue'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='6' and tt_day='tue'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='7' and tt_day='tue'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					echo '</tr>';
					echo '<tr><td align="center"><b>Wednesday</b>';
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='1' and tt_day='wed'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='2' and tt_day='wed'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='3' and tt_day='wed'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='4' and tt_day='wed'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='5' and tt_day='wed'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='6' and tt_day='wed'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='7' and tt_day='wed'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					echo '</tr>';
					echo '<tr><td align="center"><b>Thursday</b>';
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='1' and tt_day='thu'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='2' and tt_day='thu'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='3' and tt_day='thu'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='4' and tt_day='thu'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='5' and tt_day='thu'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='6' and tt_day='thu'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='7' and tt_day='thu'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					echo '</tr>';
					echo '<tr><td align="center"><b>Friday</b>';
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='1' and tt_day='fri'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='2' and tt_day='fri'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='3' and tt_day='fri'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='4' and tt_day='fri'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='5' and tt_day='fri'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='6' and tt_day='fri'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='7' and tt_day='fri'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					echo '</tr>';
					echo '<tr><td align="center"><b>Saturday</b>';
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='1' and tt_day='sat'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='2' and tt_day='sat'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='3' and tt_day='sat'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='4' and tt_day='sat'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='5' and tt_day='sat'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='6' and tt_day='sat'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					$query="select * from timetable where tt_fac_id='$a' and tt_period_no='7' and tt_day='sat'";
					$result=mysql_query($query);
					if(mysql_num_rows($result)>0)
					{
						while($row=mysql_fetch_array($result))
						{	
							echo'<td align="center">'.$row['tt_class_id'].'</td>';
						}
					}
					else
					{
						echo'<td align="center">-</td>';
					}
					echo '</tr></table>';
				?>
			</section>
				
			<footer id="page_footer">
				<?php include_once 'page_footer.php'; ?>
			</footer>
		</div>
		
	</body>

</html>

<?php 
	include_once 'always_include_end.php'; 
?>