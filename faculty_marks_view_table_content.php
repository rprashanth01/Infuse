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
		$query_attendance = 'SELECT regis_stu_usn,regis_max_marks,regis_internal_1_marks,regis_internal_2_marks,regis_internal_3_marks,regis_other_cie_marks from regis_sub_stu where regis_sub_id = \''.$sub.'\' and regis_stu_class = \''.$class.'\' ;';
 	
	}
	  if(isset($_POST['print'])){  ?>
    <img src="icons/print.png" height="20" style="cursor:pointer;" title="Print"  onClick="javascript:printDiv('printablediv')"/>
	<?php
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
				<a data-toggle="collapse" data-parent="#faculty_home_panel" href="#faculty">Faculty Marks View Page</a>
			</h4>
		</div>
		
		<div id="faculty" class="panel-collapse collapse in">
			<div class="panel-body">
				<div id="printablediv">

				</div>
				<?php
	$result = mysql_query($query_attendance);
	?>
	 <div id="printthis">
	 <center><h3><?php echo $sub;?></h3></center>
	 <table id="att" class="table table-hover" width="486" height="135" border="3" class="table table-striped"> 
     <tr>
     <th>Student USN</th>
     <th>Maximum Marks</th>
     <th>Test 1</th>
     <th>Test2</th>
     <th>Test3</th>
     <th>Average</th>
     <th>Other CIE Marks</th>

     </tr>	
     <?php
	 while($row = mysql_fetch_array($result)) {
	 	
		$usn = $row['regis_stu_usn'];
		$max = $row['regis_max_marks'];
		$int1 = $row['regis_internal_1_marks'];
		$int2 = $row['regis_internal_2_marks'];
		$int3 = $row['regis_internal_3_marks'];
		$cie = $row['regis_other_cie_marks'];
		
		if($int1==NULL)
		{
			$int1=0;
		}
		if($int2==NULL)
		{
			$int2=0;
		}
		if($int3==NULL)
		{
			$int3=0;
		}
		if($cie==NULL)
		{
			$cie=0;
		}
		if ($int1 <= $int2 && $int1 <= $int3) //Sum the greatest 2 marks
			{
				$sum = $int2 + $int3;
			} 
			else if ($int2 <= $int1 && $int2 <= $int3) 
			{
				$sum = $int1 + $int3;
			} 
			else
			{ 
				$sum = $int1 + $int2;
			}
			$avg=$sum/2;
?>
		<tr>
			<td><?php echo $usn; ?></td>
			<td><?php echo $max; ?></td>
			<td><?php echo $int1; ?></td>
			<td><?php echo $int2; ?></td>
			<td><?php echo $int3; ?></td>
			<td><?php echo $avg; ?></td>
            <td><?php echo $cie; ?></td>

			
		</tr>	
		
<?php	
	}
	 $today = date("m.d.y");     
?>
		</table><a id="dlink"  style="display:none;"></a>
</div>
 <center><input type="button" onclick="tableToExcel('att', ' Table','Marks_<?php echo $sub?>_<?php echo $today ?>.xls')" value="Export to Excel"></center>
<br><br> 


<center><a href="printpage" onClick="printthis(); return false;">Print this page</a></center>

			</div>
		</div>
	
	</div>

</div>