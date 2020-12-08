<?php
include(".../inc/config.php");
error_reporting(E_ALL);
ini_set('display_error',1);
session_start();
if(isset($_POST['login'])){
$email=mysql_real_escape_string($_POST['email']);
$password=md5($_POST['password']);
if(empty($email)||empty($password)){
	echo "Error: Please Fill Email And Password.";
	exit();
}
$sql="select * from ".PREFIX."online_prospectus where email='".$email."' AND password='".$password."'";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
if($count==1){
	while($rows=mysql_fetch_array($query)){
		$_SESSION['uid']=$rows['id'];
		$_SESSION['father_name']=$rows['father_name'];
		$_SESSION['mobile']=$rows['mobile'];
		$_SESSION['email']=$rows['email'];
	}
	echo "User Login successfully";
}
else {
	echo "Error: Invalid Username OR Password."; 
} 
}  
if(isset($_POST['get_Forget'])){
	$email=$_POST['email_id'];
	$email_validation="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/";

	if(empty($email)){
	echo "Select Email Id  required";
	exit();
	}
	else {
	if(!preg_match($email_validation,$email)){
	echo "Please Enter correct Email ".$email."";
	exit();
}
}
$sql=mysql_query("select * from ".PREFIX."online_prospectus where email='$email' Limit 1");
$count=mysql_num_rows($sql);
if($count==1){
	$rows=mysql_fetch_assoc($sql);
	$mobile=$rows['mobile'];
	$password=utf8_decode($rows['password']);
	print_r($password);   
}
else{
	echo "Please Enter correct Email ".$email."";
	
}
}
?>  