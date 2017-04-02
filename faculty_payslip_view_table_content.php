<?php
	include_once 'db_connect.php';
	include_once 'db_queries.php';
	
	$faculty_id = $_SESSION['uid'];
	
	$date = $_POST['payslip_list'];

	
	$query_pay = 'SELECT sal_fac_slip_no , sal_fac_tot_amt , sal_fac_tax , sal_fac_ppf , sal_fac_oth , sal_fac_take_home FROM sal_fac WHERE sal_fac_id = \''.$faculty_id.'\' and sal_fac_month_year= \''.$date.'\' ;';
    
		$query_name = 'SELECT fac_name,fac_bank_name,fac_bank_account_no from faculty WHERE fac_id = \''.$faculty_id.'\' ;';
	
    $result1 = mysql_query($query_name);
	
		 while($row = mysql_fetch_array($result1)) {
		 	$facname = $row['fac_name'];
		$bankname = $row['fac_bank_name'];
		$accno = $row['fac_bank_account_no'];
			
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
<div class="panel-group" id="faculty_home_panel">
	
	<div class="panel panel-default">
		
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#faculty_home_panel" href="#faculty">Faculty Payslip Page</a>
			</h4>
		</div>
		
		<div id="faculty" class="panel-collapse collapse in">
			<div class="panel-body">
				<?php
	$result = mysql_query($query_pay);
	?>
	<center><h3><?php echo $date;?>&nbsp;&nbsp;payslip</h3></center>
	
	<table id="dat" class="table table-hover" width="486" height="135" border="3" class="table table-striped"> 
     	
     <?php
	 while($row = mysql_fetch_array($result)) {
	 	
		$slipno = $row['sal_fac_slip_no'];
		$tot = $row['sal_fac_tot_amt'];
		$tax = $row['sal_fac_tax'];
		$ppf = $row['sal_fac_ppf'];
		$others = $row['sal_fac_oth'];
		$takehome = $row['sal_fac_take_home'];
		
	 }		
?>
		<tr>
			<td>Name</td>
			<td><?php echo $facname; ?></td>
		</tr>
		
		<tr>
			<td>Payslip Number</td>
			<td><?php echo $slipno; ?></td>
		</tr>
		<tr>
			<td>Faculty ID</td>
			<td><?php echo $faculty_id; ?></td>
		</tr>
		<tr>
			<td>Bank Name </td>
			<td><?php echo $bankname; ?></td>
		</tr>
		<tr>
			<td>Account Number</td>
			<td><?php echo $accno; ?></td>
		</tr>
		<tr>
			<td>Total Amount</td>
			<td><?php echo $tot; ?></td>
		</tr>
		<tr>
			<td>Tax Deductions</td>
			<td><?php echo $tax; ?></td>
		</tr>
		<tr>
			<td>Provident Fund</td>
			<td><?php echo $ppf; ?></td>
		</tr>
		<tr>
			<td>Other Deductions</td>
			<td><?php echo $others; ?></td>
		</tr>
		<tr>
			<td>Take Home Salary</td>
			<td><?php echo $takehome; ?></td>
		</tr>
		
<?php
	 $today = date("m.d.y");     
?>
		</table><a id="dlink"  style="display:none;"></a>
 <center><input type="button" onclick="tableToExcel('dat', ' Table','Payslip_<?php echo $today ?>.xls')" value="Generate Payslip"></center>

<br><br> 
			</div>
		</div>
	
	</div>

</div>