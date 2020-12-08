<?php
include("../inc/config.php");
error_reporting(E_ALL);ini_set('display_error',1);
session_start();
if(isset($_REQUEST['Add'])){ 
unset($_REQUEST['Add']);
$student=mysql_real_escape_string($_REQUEST['stu_name']);
$class=mysql_real_escape_string($_REQUEST['class']);
$dob=datestamp($_REQUEST['dob']);
$prev_class=mysql_real_escape_string($_REQUEST['prev_class']);
$user_id=$_SESSION['uid'];
if(empty($student)||empty($class)||empty($dob)||empty($prev_class)){	
echo "Select All field mandatory required ";
exit();
}  
 $insert=mysql_query("insert into ".PREFIX."online_prospectus_student(`user_id`,`student_name`,`class`,`dob`,`prev_class`,`adm_status`,`mode_enq`) 
 VALUES('$user_id','$student','$class','$dob','$prev_class','Prospectus','ONLINE')");
	if($insert){
		echo "Your Registration has been submitted successfully."; 
	}else{
		echo "Error : ".mysql_error(); 
	}
}
?>