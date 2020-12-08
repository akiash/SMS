<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'myroject_db');

	// REGISTER USER
	if (isset($_REQUEST['submit'])) {
		$reg_no= mysqli_real_escape_string($db, $_REQUEST['reg_no']);
		$status='Enquiry';
		$type = 'Online';
		$is_visit = mysqli_real_escape_string($db, $_REQUEST['is_visit']);
		$session =  mysqli_real_escape_string($db,$_REQUEST['session']);
		$class= mysqli_real_escape_string($db,$_REQUEST['class']);
		$stream= mysqli_real_escape_string($db,$_REQUEST['stream']);
		$stu_name= mysqli_real_escape_string($db,$_REQUEST['stu_name']);
		$gender= mysqli_real_escape_string($db,$_REQUEST['gender']);
		$dd_dob =  mysqli_real_escape_string($db,$_REQUEST['dd_dob']);
	    $mm_dob =  mysqli_real_escape_string($db,$_REQUEST['mm_dob']);
	    $yyyy_dob =  mysqli_real_escape_string($db,$_REQUEST['yyyy_dob']);
	    $dob=$yyyy_dob."-".$mm_dob."-".$dd_dob;
		$mobile2= mysqli_real_escape_string($db,$_REQUEST['mobile2']);
	    $fat_name= mysqli_real_escape_string($db,$_REQUEST['fat_name']);
		$mot_name= mysqli_real_escape_string($db,$_REQUEST['mot_name']);
		$do_adm= mysqli_real_escape_string($db,$_REQUEST['do_adm']);
		$fat_occ= mysqli_real_escape_string($db,$_REQUEST['fat_occ']);
		$mot_occ= mysqli_real_escape_string($db,$_REQUEST['mot_occ']);
    	$religion= mysqli_real_escape_string($db,$_REQUEST['religion']);
		$fat_income= mysqli_real_escape_string($db,$_REQUEST['fat_income']); 
	    $mot_income= mysqli_real_escape_string($db,$_REQUEST['mot_income']);
		$category= mysqli_real_escape_string($db,$_REQUEST['category']);
		$guard_name= mysqli_real_escape_string($db,$_REQUEST['guard_name']);
	    $guard_no= mysqli_real_escape_string($db,$_REQUEST['guard_no']);
		$guard_relation= mysqli_real_escape_string($db,$_REQUEST['guard_relation']);
		$address= mysqli_real_escape_string($db,$_REQUEST['address']);
	    $mobile= mysqli_real_escape_string($db,$_REQUEST['mobile']);
	    $address_co= mysqli_real_escape_string($db,$_REQUEST['address_co']);
	    $mobile_co= mysqli_real_escape_string($db,$_REQUEST['mobile_co']);
		$school1_name= mysqli_real_escape_string($db,$_REQUEST['school1_name']);
	    $school1_class= mysqli_real_escape_string($db,$_REQUEST['school1_class']);
		$school1_session= mysqli_real_escape_string($db,$_REQUEST['school1_session']);
	    $school1_curri= mysqli_real_escape_string($db,$_REQUEST['school1_curri']);
	    $is_transport =  mysqli_real_escape_string($db,$_REQUEST['is_transport']);
	   
		if($_FILES['cand_photo']['size']>2097152){
			 $status1 = "102";
		 }
		else{
			 $cand_photo="pictures/prospectus/".rand(1000,1000000).basename($_FILES['cand_photo']['name']);
			 move_uploaded_file($_FILES["cand_photo"]["tmp_name"],$cand_photo);
			
			$query = "INSERT INTO rses_prospectus_registration(reg_no,status,type,is_visit,session,class,stream,stu_name,gender,dob,mobile2,fat_name,mot_name,do_adm,fat_occ,mot_occ,religion,fat_income,mot_income,category,guard_name,guard_no,guard_relation,address,mobile,address_co,mobile_co,school1_name,school1_class,school1_session,school1_curri,is_transport,cand_photo) Values ('$reg_no','$status','$type','$is_visit','$session','$class','$stream','$stu_name','$gender','$dob','$mobile2','$fat_name','$mot_name','$do_adm','$fat_occ','$mot_occ','$religion','$fat_income','$mot_income','$category','$guard_name','$guard_no','$guard_relation','$address','$mobile','$address_co','$mobile_co','$school1_name','$school1_class','$school1_session','$school1_curri','$is_transport','".$cand_photo."')";
			$rs=mysqli_query($db, $query);
			if($rs>0){
			echo "record inserted";
			header('location: ../admission.php');
		    }else{
			echo "not";
		    }

	
	   
	    }
    }
?>