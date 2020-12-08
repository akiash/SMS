<?php
    $conn=mysqli_connect('localhost','root','') or die("enable to connect".mysqli_error($conn));
	mysqli_select_db($conn,'myroject_db') or die("can't select database".mysqli_error($conn));
	
	$id=$_REQUEST['delid'];
	$a="delete from rses_prospectus_registration where id=$id";
	$rs=mysqli_query($conn,$a);
	if($rs>0){
		echo "Record Deleted Successfully";
	header('location:ajaxmain.php');}
	else{
	echo "<h2>Enable to delete</h2>";}
?>