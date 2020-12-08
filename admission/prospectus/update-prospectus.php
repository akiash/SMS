<?php
 include("../../inc/config.php");
 error_reporting(0); 
 ini_set('display_errors', TRUE); 
 ini_set('display_startup_errors', TRUE);

 
  if($_REQUEST['hdnCmd']=="ADD")
	{
		$user_id=$_REQUEST['user_id'];
		$id=$_REQUEST['id'];
		$status='Prospectus';
		$s_adm_no = $_REQUEST['s_adm_no'];
		$rec_no = $_REQUEST['rec_no'];
		$type = clean($_REQUEST['fee_type']);
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
	$do_adm=clean($_REQUEST['do_adm']);
	 $fat_occ=clean($_REQUEST['fat_occ']);
	 $religion=clean($_REQUEST['religion']);
	 $category=clean($_REQUEST['category']);
	 $school1_name=clean($_REQUEST['school1_name']);
	 $school1_class=clean($_REQUEST['school1_class']);
	 $school1_curri=clean($_REQUEST['school1_curri']);
	 $school1_session=clean($_REQUEST['school1_session']);
	 $school2_name=clean($_REQUEST['school2_name']);
	$school2_class=clean($_REQUEST['school2_class']);
	 $school2_curri=clean($_REQUEST['school2_curri']);
	 $school2_session=clean($_REQUEST['school2_session']);
	 $school3_name=clean($_REQUEST['school3_name']);
	 $school3_class=clean($_REQUEST['school3_class']);
	 $school3_curri=clean($_REQUEST['school3_curri']);
	 $school3_session=clean($_REQUEST['school3_session']);
	 $is_transport = clean($_REQUEST['is_transport']);
	 $route=clean($_REQUEST['route']);
	$stop=clean($_REQUEST['stop']);
	$session = clean($_REQUEST['session']);
	$p_of_birth = clean($_REQUEST['p_of_birth']);
	$st_of_domicile = clean($_REQUEST['st_of_domicile']);
	$nationality = clean($_REQUEST['nationality']);
	$phy_chal = clean($_REQUEST['phy_chal']);
	$bus_fee = clean($_REQUEST['bus_fee']);
	$bg = clean($_REQUEST['bg']);
	$lang = clean($_REQUEST['lang']);
	 $fee_category=clean($_REQUEST['fee_category']);
	  $session = clean($_REQUEST['session']); 
	 if($_FILES['cand_photo']['tmp_name']<>''){
		$cand_photo="pictures/prospectus/".rand(1000,1000000).basename($_FILES['cand_photo']['name']);
		 move_uploaded_file($_FILES["cand_photo"]["tmp_name"],$cand_photo);
	 }
	 else{
		 $cand_photo=$_REQUEST['cand_photo'];
		 

	 }
	 if($_FILES['fat_photo']['tmp_name']<>''){
		$fat_photo="pictures/prospectus/".rand(1000,1000000).basename($_FILES['fat_photo']['name']);
	move_uploaded_file($_FILES["fat_photo"]["tmp_name"],$fat_photo);
	 }
	 else {
	$fat_photo=$_REQUEST['fat_photo'];
	 }
	 
	 if($_FILES['mot_photo']['tmp_name']<>''){
		$mot_photo="pictures/prospectus/".rand(1000,1000000).basename($_FILES['mot_photo']['name']);
	move_uploaded_file($_FILES["mot_photo"]["tmp_name"],$mot_photo);
	 }
	 else{ 
	 $mot_photo=$_REQUEST['mot_photo'];
	}
	$sql=mysql_query("Update  ".PREFIX."Prospectus_Registration set s_adm_no='$s_adm_no',user_id='$user_id',bus_fee='$bus_fee',type='$type',wing='".substr($type, 0, 2)."',stu_name='$stu_name',fat_income='$fat_income' ,p_of_birth='$p_of_birth',st_of_domicile='$st_of_domicile',nationality='$nationality',bg='$bg',phy_chal='$phy_chal',lang='$lang',mot_occ='$mot_occ',mot_income='$mot_income',school1_sub='$school1_sub',school2_sub='$school2_sub',school3_sub='$school3_sub',fat_name='$fat_name',adm_class='$adm_class',fat_occu='$fat_occ',mot_name='$mot_name',class='$class',gender='$gender',religion='$religion',category='$category',address='$address',mobile='$mobile',mobile2='$mobile2',address_co='$address_co',mobile_co='$mobile_co',mobile2_co='$mobile2_co',guard_name='$guard_name',guard_no='$guard_no',guard_relation='$guard_relation',stream='$stream',dob='".datestamp($dob)."',do_adm='".datestamp($do_adm)."',school1_name='$school1_name',school1_class='$school1_class',school1_session='$school1_session',school1_curri='$school1_curri',school2_name='$school2_name',school2_class='$school2_class',school2_session='$school2_session',school2_curri='$school2_curri',school3_name='$school3_name',school3_class='$school3_class',school3_session='$school3_session',school3_curri='$school3_curri',is_transport='$is_transport',cand_photo='".$cand_photo."',mot_photo='".$mot_photo."',fat_photo='".$fat_photo."',session='$session',status='$status' where id='".$id."'");
	if($sql){
		echo "Your query has been Update successfully";
	}
	else {
		echo "Your not update student detail  successfully";
	}
	
 }	