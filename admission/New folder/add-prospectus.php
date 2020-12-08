<?php

 
	//include("../inc/config.php");

session_start();
  if($_REQUEST['hdnCmd']=="ADD")
	{
		$user_id=$_SESSION['uid'];
		$status='Enquiry';
		$is_visit = $_REQUEST['is_visit'];
		$s_adm_no = $_REQUEST['s_adm_no'];
		$rec_no = $_REQUEST['rec_no'];
		$type = 'Online';
		$class=clean($_REQUEST['class']);
		$sec=clean($_REQUEST['sec']);
		$form_no=clean($_REQUEST['form_no']);
		$stu_name=clean($_REQUEST['stu_name']);
	  $stu_name_hindi=clean($_REQUEST['stu_name_hindi']);
	  $fat_name=clean($_REQUEST['fat_name']);
		$mot_name=clean($_REQUEST['mot_name']);
		$fat_income=clean($_REQUEST['fat_income']);
		$guard_name=clean($_REQUEST['guard_name']);
	   $guard_no=clean($_REQUEST['guard_no']);
	   $guard_relation=clean($_REQUEST['guard_relation']);
	 $mot_occ=clean($_REQUEST['mot_occ']);
	$mot_income=clean($_REQUEST['mot_income']);
	$house=clean($_REQUEST['house']);
	 $stream=clean($_REQUEST['stream']);
	 $school1_sub=clean($_REQUEST['school1_sub']);
	 $adm_class=clean($_REQUEST['class']);
	 $school2_sub=clean($_REQUEST['school2_sub']);
	 $school3_sub=clean($_REQUEST['school3_sub']);
	 $address=clean($_REQUEST['address']);
	 $mobile=clean($_REQUEST['mobile']);
	 $mobile2=clean($_REQUEST['mobile2']);
	 $address_co=clean($_REQUEST['address_co']);
	 $mobile_co=clean($_REQUEST['mobile_co']);
	 $mobile2_co=clean($_REQUEST['mobile2_co']);
	 $gender=clean($_REQUEST['gender']);
	 $dd_dob = clean($_REQUEST['dd_dob']);
	 $mm_dob = clean($_REQUEST['mm_dob']);
	 $yyyy_dob = clean($_REQUEST['yyyy_dob']);
	$dob=clean($_REQUEST['dob']);
	$dob=$yyyy_dob."-".$mm_dob."-".$dd_dob;
	$do_adm=clean($_REQUEST['do_adm']);
	 $fat_occ=clean($_REQUEST['fat_occ']);
	 $religion=clean($_REQUEST['religion']);
	 $category=clean($_REQUEST['category']);
	 $school1_name=clean($_REQUEST['school1_name']);
	 $school1_class=clean($_REQUEST['school1_class']);
	 $school1_curri=clean($_REQUEST['school1_curri']);
	 $school1_session=clean($_REQUEST['school1_session']);
	 $is_transport = clean($_REQUEST['is_transport']);
	 $route=clean($_REQUEST['route']);
	$stop=clean($_REQUEST['stop']);
	$bus_fee = clean($_REQUEST['bus_fee']);
	$cert1 = clean($_REQUEST['cert1']);
	$cert2 = clean($_REQUEST['cert2']);
	$cert3 = clean($_REQUEST['cert3']);
	$cert4 = clean($_REQUEST['cert4']);
	$cert5 = clean($_REQUEST['cert5']);
	$cert6 = clean($_REQUEST['cert6']);
	$cert7 = clean($_REQUEST['cert7']);
	$cert8 = clean($_REQUEST['cert8']);
	$cert9 = clean($_REQUEST['cert9']);
	$cert10 = clean($_REQUEST['cert10']);
	$cert1_remark = clean($_REQUEST['cert1_remark']);
	$cert2_remark = clean($_REQUEST['cert2_remark']);
	$cert3_remark = clean($_REQUEST['cert3_remark']);
	$cert4_remark = clean($_REQUEST['cert4_remark']);
	$cert5_remark = clean($_REQUEST['cert5_remark']);
	$cert6_remark = clean($_REQUEST['cert6_remark']);
	$cert7_remark = clean($_REQUEST['cert7_remark']);
	$cert8_remark = clean($_REQUEST['cert8_remark']);
	$cert9_remark = clean($_REQUEST['cert9_remark']);
	$cert10_remark = clean($_REQUEST['cert10_remark']);
	$fee_category=clean($_REQUEST['fee_category']);
	$session = clean($_REQUEST['session']); 
	if($_FILES['cand_photo']['size']>2097152){
		 $status1 = "102";
	 }
	else{
		 $cand_photo="pictures/prospectus/".rand(1000,1000000).basename($_FILES['cand_photo']['name']);
		 move_uploaded_file($_FILES["cand_photo"]["tmp_name"],$cand_photo);
		 
		 
//$q="insert into uploads(class,section,upload_type,upload_desc,file,date,session)values('$class','$section','$upload_type','$upload_desc','$homewrokFile','$date','$session')";
				//$rs=mysqli_query($conn
		 $conn=mysqli_connect('localhost','root','') or die("enable to connect".mysqli_error($conn));
         mysqli_select_db($conn,'myroject_db') or die("can't select database".mysqli_error($conn));		
		echo  $q="INSERT INTO rses_prospectus_registration(s_adm_no,user_id,bus_fee,type,wing,stu_name,stu_name_hindi,fat_income,mot_occ,mot_income,school1_sub,school2_sub,school3_sub,fat_name,adm_class,fat_occu,mot_name,class,sec,gender,	religion,category,address,mobile,mobile2,address_co,mobile_co,mobile2_co,guard_name,guard_no,guard_relation,house,stream,dob,do_adm,school1_name,	school1_class,school1_session,school1_curri,cert1,cert2,cert3,cert4,cert5,cert6,cert7,cert8,cert9,cert10,cert1_remark,cert2_remark,cert3_remark,cert4_remark,cert5_remark,cert6_remark,cert7_remark,cert8_remark,cert9_remark,cert10_remark,is_transport,form_no,route,stop,fee_category,cand_photo,session,status,is_visit) Values ('$s_adm_no','$user_id','$bus_fee','$type','".substr($type, 0, 2)."','$stu_name','$stu_name_hindi','$fat_income','$mot_occ','$mot_income','$school1_sub','$school2_sub','$school3_sub','$fat_name','$adm_class','$fat_occ','$mot_name','$class','$sec','$gender','$religion','$category','$address','$mobile','$mobile2','$address_co','$mobile_co','$mobile2_co','$guard_name','$guard_no','$guard_relation','$house','$stream','".datestamp($dob)."','".datestamp($do_adm)."','$school1_name','$school1_class','$school1_session','$school1_curri','".$cert1."','".$cert2."','".$cert3."','".$cert4."','".$cert5."','".$cert6."','".$cert7."','".$cert8."','".$cert9."','".$cert10."','".$cert1_remark."','".$cert2_remark."','".$cert3_remark."','".$cert4_remark."','".$cert5_remark."','".$cert6_remark."','".$cert7_remark."','".$cert8_remark."','".$cert9_remark."','".$cert10_remark."','$is_transport','$form_no','$route','$stop','$fee_category','".$cand_photo."', '$session','$status','$is_visit')";  exit;
		 $rs=mysqli_query($conn,$q);
	if($rs){
		$sql2 = mysqli_query("select LAST_INSERT_ID() as id");
		$student=mysqli_fetch_assoc($sql2);
		$status1 = "100";
	}
	else {
		$status1 = "103";
	}
	}
	$response = array(
						"status" => $status1,
						"id" => $student['id']
						);
	$data = json_encode($response);
	echo $data;
	
 }	