<?php
include("../inc/config.php");
error_reporting(E_ALL);
ini_set('display_error',1);
if(isset($_POST['get_login'])){
$mobile_otp=mysql_real_escape_string($_POST['mobile_otp']);
$email_otp=mysql_real_escape_string($_POST['email_otp']);
if(empty($mobile_otp)||empty($email_otp)){
	echo "Error: Please Fill Mobile OTP And Email OTP.";
exit();
}
$sql="select * from ".PREFIX."online_prospectus where email_otp='".$email_otp."' and mobile_otp='".$mobile_otp."'";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
if($count==1){
	$rows=mysql_fetch_assoc($query);
	$sql1=mysql_query("Update ".PREFIX."online_prospectus set otp_status=1 where id='".$rows['id']."'");
 echo "Your OTP has been submitted successfully";
}
else {
	echo "please enter correct OTP"; 
} 
}   
?>  