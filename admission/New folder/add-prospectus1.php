<?php

 
	//include("../inc/config.php");

session_start();
  if($_REQUEST['hdnCmd']=="ADD")
	 
	  
	{
		
		
		
		//echo "<pre>";  print_r($_REQUEST); echo "</pre>";  exit;
		
		$status='Enquiry';
		$type = 'Online';
		$is_visit = $_REQUEST['is_visit'];
		$session1 =  $_REQUEST['session'];
		$class=$_REQUEST['class'];
		$stream= $_REQUEST['stream'];
		$stu_name=$_REQUEST['stu_name'];
		$gender= $_REQUEST['gender'];
		$dd_dob =  $_REQUEST['dd_dob'];
	    $mm_dob =  $_REQUEST['mm_dob'];
	    $yyyy_dob =  $_REQUEST['yyyy_dob'];
	    $dob=$yyyy_dob."-".$mm_dob."-".$dd_dob;
		$mobile2= $_REQUEST['mobile2'];
	    $fat_name= $_REQUEST['fat_name'];
		$mot_name= $_REQUEST['mot_name'];
		$do_adm= $_REQUEST['do_adm'];
		$fat_occ= $_REQUEST['fat_occ'];
		$mot_occ= $_REQUEST['mot_occ'];
    	$religion= $_REQUEST['religion'];
		$fat_income= $_REQUEST['fat_income']; 
	    $mot_income= $_REQUEST['mot_income'];
		$category= $_REQUEST['category'];
		$guard_name= $_REQUEST['guard_name'];
	    $guard_no= $_REQUEST['guard_no'];
		$guard_relation= $_REQUEST['guard_relation'];
		$address= $_REQUEST['address'];
	    $mobile= $_REQUEST['mobile'];
	    $address_co= $_REQUEST['address_co'];
	    $mobile_co= $_REQUEST['mobile_co'];
		$school1_name= $_REQUEST['school1_name'];
	    $school1_class= $_REQUEST['school1_class'];
		$school1_session= $_REQUEST['school1_session'];
	    $school1_curri= $_REQUEST['school1_curri'];
	    $is_transport =  $_REQUEST['is_transport'];
	   
		if($_FILES['cand_photo']['size']>2097152){
			 $status1 = "102";
		 }
		else{
			 $cand_photo="pictures/prospectus/".rand(1000,1000000).basename($_FILES['cand_photo']['name']);
			 move_uploaded_file($_FILES["cand_photo"]["tmp_name"],$cand_photo);
		 
        $sql= "INSERT INTO rses_prospectus_registration(status,type,is_visit,session1,class,stream,stu_name,gender,dob,mobile2,fat_name,mot_name,do_adm,fat_occ,mot_occ,religion,fat_income,mot_income,category,guard_name,guard_no,guard_relation,address,mobile,address_co,mobile_co,school1_name,school1_class,school1_session,school1_curri,is_transport,cand_photo) Values ('$status','$type','$is_visit','$session1','$class','$stream','$stu_name','$gender','$dob','$mobile2','$fat_name','$mot_name','$do_adm','$fat_occ','$mot_occ','$religion','$fat_income','$mot_income','$category','$guard_name','$guard_no','$guard_relation','$address','$mobile','$address_co','$mobile_co','$school1_name','$school1_class','$school1_session','$school1_curri','$is_transport','".$cand_photo."')";  
		 
	    $conn=mysqli_connect('localhost','root','') or die("enable to connect".mysqli_error($conn));
        mysqli_select_db($conn,'myroject_db') or die("can't select database".mysqli_error($conn));		
	    $sql="INSERT INTO rses_prospectus_registration(type,stu_name,fat_income,mot_occ,mot_income,fat_name,fat_occ,mot_name,class,gender,religion,category,address,mobile,mobile2,address_co,mobile_co,guard_name,guard_no,guard_relation,stream,dob,do_adm,school1_name,school1_class,school1_session,school1_curri,is_transport,cand_photo,session,status,is_visit) Values ('$type','$stu_name','$fat_income','$mot_occ','$mot_income','$fat_name','$fat_occ','$mot_name','$class','$gender','$religion','$category','$address','$mobile','$mobile2','$address_co','$mobile_co','$guard_name','$guard_no','$guard_relation','$stream','$dob','$do_adm','$school1_name','$school1_class','$school1_session','$school1_curri','$is_transport','".$cand_photo."', '$session','$status','$is_visit')"; 
		$rs=mysqli_query($conn,$sql);
		if($rs)
		{
				//echo "Admission successfull";
		}else
		{
			
			
		}
		
	}
	
	
 }	