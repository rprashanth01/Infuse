<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$faculty_id = $_SESSION['uid'];
	
	$sub = $_POST['fac_sub_list'];
	$class = $_POST['fac_class_list'];
	
	$query_test = 'SELECT count(*) FROM timetable WHERE TT_FAC_ID = \''.$faculty_id.'\' and TT_SUB_ID= \''.$sub.'\' and TT_CLASS_ID = \''.$class.'\';';
    $result1 = mysql_query($query_test);
	$row1 = mysql_num_rows($result1) ;
		
	
    if ($row1==0) {
    	die("You are not handling this class");
    }
	else {
		$query_attendance = 'SELECT regis_stu_usn,regis_sub_classes,regis_attendance from regis_sub_stu where regis_sub_id = \''.$sub.'\' and regis_stu_class = \''.$class.'\' ;';
 	
	}
	
?>

<script type="text/javascript">
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name,filename) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}

            document.getElementById("dlink").href = uri + base64(format(template, ctx));
            document.getElementById("dlink").download = filename;
            document.getElementById("dlink").click();
}
})()
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script type="text/javascript">

function printthis()

{

 var w = window.open('', '', 'width=800,height=600,resizeable,scrollbars');

 w.document.write($("#printthis").html());

 w.document.close(); // needed for chrome and safari

 javascript:w.print();

 w.close();

 return false;

}

</script>

<div class="panel-group" id="faculty_home_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#faculty_home_panel" href="#faculty">Faculty Attendance Page</a>
			</h4>
		</div>
		
		<div id="faculty" class="panel-collapse collapse in">
			<div class="panel-body">
				<?php
	$result = mysql_query($query_attendance);
	?>
	<center><h3><?php echo $sub;?></h3></center>
	 <div id="printthis">
     <table id="att" class="table table-hover" width="486" height="135" border="3" class="table table-striped"> 
     <tr>
     <th>Student USN</th>
     <th>Total Classes</th>
     <th>Attended Classes</th>
     <th>Percentage</th>
     </tr>	
     <?php
	 while($row = mysql_fetch_array($result)) {
	 	
		$usn = $row['regis_stu_usn'];
		$total = $row['regis_sub_classes'];
		$attended = $row['regis_attendance'];
		$percentage = ($attended/$total)*100;
?>
		<tr>
			<td><?php echo $usn; ?></td>
			<td><?php echo $total; ?></td>
			<td><?php echo $attended; ?></td>
			<td><?php echo $percentage; ?></td>
		</tr>	
		
<?php	
	}
	 $today = date("m.d.y");     
?>
		</table>
		</div>
		<a id="dlink"  style="display:none;"></a>
 <center><input type="button" onclick="tableToExcel('att', ' Table','Attendance_<?php echo $sub?>_<?php echo $today ?>.xls')" value="Export to Excel"></center>
<br><br>
<center><a href="printpage" onClick="printthis(); return false;">Print this page</a></center>

 
			</div>
		</div>
	
	</div>

</div>