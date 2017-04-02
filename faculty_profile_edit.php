<?php
	include_once 'always_include_start.php';
	include_once 'session_check.php';
	
	include_once 'db_connect.php';
	include_once 'db_queries.php';

    $fac_name = $_POST['fac_name'];
    $fac_contact_no = $_POST['fac_contact_no'];
    $fac_email_id = $_POST['fac_email_id'];
    $fac_curr_addr = $_POST['fac_curr_addr'];
    $fac_perm_addr = $_POST['fac_perm_addr'];
    $fac_desig = $_POST['fac_desig'];
    $fac_pg = $_POST['fac_pg'];
    $fac_phd = $_POST['fac_phd'];
    $fac_teach_exp = $_POST['fac_teach_exp'];
    $fac_sub_intr = $_POST['fac_sub_intr'];
    $fac_info = $_POST['fac_info'];
	
	$query = 'UPDATE FACULTY SET FAC_NAME = \''.$fac_name.'\', FAC_CONTACT_NO = '.$fac_contact_no.', FAC_EMAIL_ID = \''.$fac_email_id.'\', FAC_PERM_ADDR = \''.$fac_perm_addr.'\', FAC_CURR_ADDR = \''.$fac_curr_addr;
	$query = $query.'\', FAC_DESIG = \''.$fac_desig.'\', FAC_PG = \''.$fac_pg.'\', FAC_PHD = \''.$fac_phd.'\', FAC_TEACH_EXP = \''.$fac_teach_exp.'\', FAC_SUB_INTR = \''.$fac_sub_intr.'\', FAC_INFO = \''.$fac_info.'\' WHERE FAC_ID = \''.$_SESSION['uid'].'\';';
	
	mysql_query($query);
	
	header('Location: faculty_profile.php');
	
	include_once 'always_include_end.php';
?>