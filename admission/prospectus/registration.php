<?php
include(".../inc/config.php");
error_reporting(E_ALL);//ini_set('display_error',1);
if(isset($_REQUEST['Add'])){ 
unset($_REQUEST['Add']);
$father=mysql_real_escape_string($_REQUEST['fat_name']);
$mobile=mysql_real_escape_string($_REQUEST['mobile']);
$email=mysql_real_escape_string($_REQUEST['email']);
$address1=mysql_real_escape_string($_REQUEST['address1']);
$password=mysql_real_escape_string($_REQUEST['password']);
$repassword=mysql_real_escape_string($_REQUEST['repassword']);
$email_validation="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/";
$mobile_validation="/^[0-9]*$/";
$email_otp = rand(100000,999999);
$mobile_otp = rand(100000,999999);
$date = date("Y-m-d");
if(empty($father)||empty($mobile)||empty($email)||empty($address1)||empty($password)||empty($repassword)){	
echo "Select All field mandatory required ";
exit();
}  
else{
if(!preg_match($mobile_validation,$mobile)){
	echo "Please Enter correct Mobile No.'".$mobile."'";
	exit();
}	  
if(!(strlen($mobile)==10)){
echo "Mobile No. should be 10 digit not valid";
exit();
} 
if(!preg_match($email_validation,$email)){
	echo "Please Enter correct Email '".$email."'";
	exit();
}
if(strlen($password)<9){
	echo "Password is week";
	exit();
}
if(strlen($repassword)<9){
	echo "Confirm Password is week";
	exit();
}
if($password!=$repassword){
	echo "Password is Not Same Enter Correct";
	exit();
}
}
$sql="select * from ".PREFIX."online_prospectus where email='".$email."'  limit 1";
$query=mysql_query($sql);
if(mysql_num_rows($query)>0){
echo "Email and Mobile No. Already Exist";	
}
else{
$password=md5($password);
 $insert=mysql_query("insert into ".PREFIX."online_prospectus(`father_name`,`mobile`,`email`,`password`,`address1`,`email_otp`,`mobile_otp`,`create_date`) 
 VALUES('$father','$mobile','$email','$password','$address1','$email_otp','$mobile_otp','$date')");
	if($insert){
		echo "Your Registration has been submitted successfully."; 
	}else{ 
		echo "Error : ".mysql_error();
	}
/*  email send function */	
ini_set('smtp_port',587); 
$to =$email;    
$subject = "Shiksharthdps Prospectus OTP";  
$message="Shiksharthdps Prospectus OTP \n ".$email_otp."";
$headers = "Parent Feedback<shiksharthadps123@gmail.com>";
mail($to,$subject,$message,$headers);  
//echo "Mail Sent.";
/*  mobile send sms */	
$sql_sms=mysql_query("SELECT * FROM ".PREFIX."smsset where id=1");
$sms_var=mysql_fetch_array($sql_sms);
$url = $sms_var['api_url'];
$api_key = $sms_var['api_key'];
$sender_id = $sms_var['sender_id'];
 $message2 = "Shiksharthdps Prospectus OTP \n".$mobile_otp.""; 
$myvars = 'workingkey='.$api_key.'&sender='.$sender_id.'&to='.$mobile.'&message='.$message2.'';
//echo $myvars;
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
exit;
}
} 
?>