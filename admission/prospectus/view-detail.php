<?php include("../../inc/config.php");
session_start();
/*if(!isset($_SESSION['uid'])){ header("location: login.php"); }*/

if($_REQUEST['type']=='query'){
 $id=$_REQUEST['id'];

 //echo "select * from ".PREFIX."Prospectus_Registration  where user_id='".$_SESSION['uid']."' and id='".$id."'";
$sql=mysql_query("select * from ".PREFIX."Prospectus_Registration  where user_id='".$_SESSION['uid']."' and id='".$id."'");
$student=mysql_fetch_assoc($sql);
	//$data=$rows;
?>
<!DOCTYPE html>  
<html lang="en">

  <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Website CSS style -->
		     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script type="text/javascript" src="bootstrap.min.js"></script>
		<link href="bootstrap.min.css" rel="stylesheet">
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="custom.css"> 
		<link rel="stylesheet" href="datepicker3.css"> 
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<title><?php  echo $school_name; ?></title>
	</head>

	<body>
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php  echo $school_name?></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="online-prospectus.php">Add Prospectus</a></li>
    </ul>
	 <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['father_name'];?></a></li>
		<li><a href="logout">Logout</a></li>   
   </ul>
	</div>
	</nav>
<br/>
<br/> 

		<div class="container">
		<div class="row  well">
		
			<style>
td, th { border: none; }
</style>
	<script>
	// Change the value of the outputText field
	function getHTTPObject(){
   if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
   else if (window.XMLHttpRequest) return new XMLHttpRequest();
   else {
      alert("Your browser does not support AJAX.");
      return null;
   }
}
function setOutput2(){
    if(httpObject.readyState == 4){
		var response = httpObject.responseText.split('|');
		document.getElementById('fat_name').value = response[0];
		document.getElementById('address').value = response[1];
		document.getElementById('mobile').value = response[2];
		document.getElementById('class').value = response[3];
		document.getElementById('stu_name').value = response[4];
		document.getElementById('mot_name').value = response[6];
		document.getElementById('school1_name').value = response[7];
				document.getElementById('mobile2').value = response[9];
		//document.getElementById('dob').value = response[10];
		$('#submit_action').css('display','block');
	}
}

// Implement business logic
function lookItUp2(){
        httpObject = getHTTPObject();
		if (httpObject != null) { 
        httpObject.open("GET", "inc/data3.php?pros=1&query=Prospectus&rec_no="+document.getElementById('rec_no').value, true);
        httpObject.send(null);
        httpObject.onreadystatechange = setOutput2; 
    }
}

var httpObject = null;
	</script>
	


<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
function preview_image2(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image2');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
function preview_image3(event) 
{
 var reader = new FileReader(); 
 reader.onload = function()
 {
  var output = document.getElementById('output_image3');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script> 
<h3>Prospectus Registration </h3> 
<p style="text-align:right; margin-top:-50px;" ><a href="print"  class="btn btn-info" role="button" target="_blank">[print]</a></p>
<form id="update_detail" onsubmit="myFunction()"  enctype="multipart/form-data">  
<input type="hidden" name="hdnCmd" value="ADD">
<input type="hidden" name="id" value="<?php echo $student['id'] ?>">
<input type="hidden" name="user_id" value="<?php echo $_SESSION['uid'] ?>"> 
<table class="table table-condensed table-striped" style="color: black;">
<tr>
<td ><strong>Candidate Photo:</strong>
<div><img src="<?php  if($student['cand_photo']==''){ echo "img/no-image-found.jpg";} else {echo $student['cand_photo']; } ?>" style="width:151px; height:150px;" id="output_image2"/></div>
</td>
<td> <input type="file"   name="cand_photo"  id="cand_photo"    class="form-control" onchange="preview_image2(event)"> 
<input type="hidden"   name="cand_photo"  id="cand_photo"  value="<?php echo $student['cand_photo']; ?>"  class="form-control" >
</td> 

<td ><strong>Father Photo:</strong>
<div><img src="<?php  if($student['fat_photo']==''){ echo "img/no-image-found.jpg";} else {echo $student['fat_photo']; } ?>" style="width:151px; height:150px;" id="output_image"/></div>
</td>
<td> <input type="file" name="fat_photo" value="<?php echo $student['fat_photo']; ?>" id="fat_photo" onchange="preview_image(event)" class="form-control"> 
<input type="hidden"   name="fat_photo"  id="fat_photo"  value="<?php echo $student['fat_photo']; ?>"  class="form-control" >
</td>

<td > <strong>Mother Photo: </strong>
<div><img  src="<?php  if($student['mot_photo']==''){ echo "img/no-image-found.jpg";} else {echo $student['mot_photo']; } ?>"style="width:151px; height:150px;" id="output_image3"/></div>
</td>
<td> <input type="file" name="mot_photo" value="<?php echo $student['mot_photo']; ?>" id="mot_photo" class="form-control" onchange="preview_image3(event)"> 
<input type="hidden"   name="mot_photo"  id="mot_photo"  value="<?php echo $student['mot_photo']; ?>"  class="form-control" >
</td>
</tr>

<tr>
<td align="right">Session : </td><td>
<select name="session" class="form-control">
		<?php
			$sql33="SELECT * FROM ".PREFIX."session order by id desc limit 1 ";
			$result33=mysql_query($sql33);
			while($rows33=mysql_fetch_array($result33)){
		?>	
		<option value="<?php echo $rows33['session']; ?>" <?php if($rows33['session']==$_SESSION['SESSION']) { echo "selected"; } ?> ><?php echo $rows33['session']; ?></option>
		<?php
			}
		?>	
		</select>

</td>
<td align="right">Class : </td><td><select  class="form-control" name="class" id="class" required>
<option value="">--</option>
<?php
	$sql = "SELECT class FROM ".PREFIX."class_master GROUP BY class ORDER BY id";
	$sql_result = mysql_query ($sql, $conn ) or die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysql_fetch_assoc($sql_result)) {
		echo "<option value='".$row["class"]."'".($row['class']==$student['class'] ? "selected":"").">".$row["class"]."</option>";
	}
?>
</select>


</td>
<!--<td align="right">Section : <select name="sec" id="sec" required >
<?php
	$sql = "SELECT section FROM ".PREFIX."sec_master GROUP BY section ORDER BY id";
	$sql_result = mysql_query ($sql, $conn ) or die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysql_fetch_assoc($sql_result)) {
		echo "<option value='".$row["section"]."'  >".$row["section"]."</option>";
	}
?>
</select>
</td>-->
<td align='right'>Stream : 	 </td><td>
<select name="stream"  class="required form-control"  >
<option value="">--</option>
<?php
	$sql = "SELECT stream FROM ".PREFIX."stream GROUP BY stream ORDER BY id";
	$sql_result = mysql_query ($sql, $conn ) or die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysql_fetch_assoc($sql_result)) {
		echo "<option value='".$row["stream"]."'".($row['stream']==$student['stream']? "selected" :"").">".$row["stream"]."</option>";
	}
?>
</select>
</td>
</tr>
<tr>
<td align="right">Stu. Name : 	</td><td><input type="text" name="stu_name"  class="form-control" id="stu_name" value="<?php echo $student['stu_name']; ?>"  required style="width: 100%;" /></td>
<td align="right">Gender : 	</td><td><select name="gender"  class="required form-control" style="width: 100%;">
<option value="">--</option>
<option value="MALE" <?php if($student['gender']=='MALE'){ echo "selected";}  ?>>MALE</option>
<option value="FEMALE" <?php if($student['gender']=='FEMALE'){ echo "selected";}  ?>>FEMALE</option>
</select></td>
<td align="right">Date of Birth : 	</td><td>
<input type="text" name="dob" class="input_date form-control" data-date-format="dd/mm/yyyy"  value="<?php $dob = date('d/m/Y', strtotime($student['dob'])); if($dob<>'01/01/1970') { echo $dob; }  ?>" readonly />
<?php
$d = date('d/m/Y', strtotime($student['dob']));
if($d<>'01/01/1970') {
$date1 = new DateTime($student['dob']);
$date2 = new DateTime();
$interval = $date1->diff($date2);
echo "<b>Age: " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days </b>"; 
}
?>


</td>
</tr>
<tr>
<td align="right">Place of birth :</td>
<td>
<input type="text" name="p_of_birth" class="required form-control" value="<?php  echo $student['p_of_birth'];?>" style="width: 100%;"></td>

<td align="right">State of Domicile :</td>
<td>
<input type="text" name="st_of_domicile" class="required form-control"  value="<?php echo $student['st_of_domicile'];?>" style="width: 100%;"></td>


<td align="right">Nationality :</td>
<td>
<input type="text" name="nationality" value="<?php  echo $student['nationality'];?>" class="required form-control" style="width: 100%;"></td>
</tr>

<tr>
<td align="right">Physically Challenged :</td>
<td>
<input type="text" name="phy_chal" id="phy_chal"  value="<?php  echo $student['phy_chal'];?>"  class="required form-control" style="width: 100%;" /></td>

<td align="right">Blood Group :</td>
<td>
<select name="bg" class="form-control">
<option value="">-- Group --</option>
<option value="A+" <?php if($student['bg']=='A+'){ echo "selected";} ?>>A+</option>
<option value="A-" <?php if($student['bg']=='A-'){ echo "selected";} ?>>A-</option>
<option value="B+" <?php if($student['bg']=='B+'){ echo "selected";} ?>>B+</option>
<option value="B-" <?php if($student['bg']=='B-'){ echo "selected";} ?>>B-</option>
<option value="AB+" <?php if($student['bg']=='AB+'){ echo "selected";} ?>>AB+</option>
<option value="AB-" <?php if($student['bg']=='AB-'){ echo "selected";} ?>>AB-</option>
<option value="O+" <?php if($student['bg']=='O+'){ echo "selected";} ?>>O+</option>
<option value="O-" <?php if($student['bg']=='O-'){ echo "selected";} ?>>O-</option>
</select>
</td>
<td align="right">Mother Tongue :</td>
<td>
<input type="text" name="lang"    style="width: 80px;"  />&nbsp;
<input type="checkbox" name='only_child' value="YES" <?php if($student['only_child']=='YES') { echo 'checked'; } ?>>&nbsp;Only Child
</td>
</tr>
<tr>
<td colspan=6><strong>FAMILY PROFILE:</strong></td>
</tr>
<tr>
<td align="right">Father Name : 	</td><td><input type="text" name="fat_name"  id="fat_name"  value="<?php echo $student['fat_name']; ?>" class="required form-control" style="width: 100%;" /></td>
<td align="right">Mother Name : 	</td><td><input type="text" name="mot_name"  value="<?php echo $student['mot_name']; ?>" id="mot_name" class="required form-control" style="width: 100%;" /></td>
<td>Registration Date : 	</td><td>
<input type="text" name="do_adm" class="input_date form-control" data-date-format="dd/mm/yyyy"  value="<?php $doa = date('d/m/Y', strtotime($student['do_adm'])); if($doa<>'01/01/1970') { echo $doa; }  ?>"  readonly />

</td>
</tr>
<tr>
<td align="right">Father Occupation : 	</td><td><input type="text" name="fat_occ"  value="<?php echo $student['fat_occu']; ?>" id="fat_occ" style="width: 100%;"   class="form-control" /></td>
<td align="right">Mother Occupation : 	</td><td><input   class="form-control" value="<?php echo $student['mot_occ']; ?>" type="text" name="mot_occ" id="mot_occ" style="width: 100%;"  /></td>

<td align="right">Religion : 	</td><td>
<select name="religion" id="religion"  style="width: 100%;" class="form-control">
<option value="">--</option>
<option value="HINDU" <?php if($student['religion']=='HINDU') { echo 'selected'; } ?>>HINDU</option>
<option value="MUSLIM" <?php if($student['religion']=='MUSLIM') { echo 'selected'; } ?>>MUSLIM</option>
<option value="SIKH" <?php if($student['religion']=='SIKH') { echo 'selected'; } ?>>SIKH</option>
<option value="CHRISTIAN" <?php if($student['religion']=='CHRISTIAN') { echo 'selected'; } ?>>CHRISTIAN</option>
</select>
</td> 
</tr>
<tr>
<td align="right">Annual Income : 	</td><td>
<input type="text" class="form-control" name="fat_income" id="fat_income"  value="<?php  echo $student['fat_income'];?>" style="width: 100%;" />
</td>
<td align="right">Annual Income  : 	</td><td>
<input type="text" class="form-control" name="mot_income" value="<?php echo  $student['mot_income'];?>" id="mot_income" style="width: 100%;" />
</td>

<td align="right">Category : 	</td><td>
<select name="category"  id="category" style="width: 100%;"  class="form-control">
<option value="">--</option>
<option value="GENERAL" <?php if($student['category']=='GENERAL') { echo 'selected'; } ?>>GENERAL</option>
<option value="OBC" <?php if($student['category']=='OBC') { echo 'selected'; } ?>>OBC</option>
<option value="SC" <?php if($student['category']=='SC') { echo 'selected'; } ?>>SC</option>
<option value="ST" <?php if($student['category']=='ST') { echo 'selected'; } ?>>ST</option>
<option value="OTHERS" <?php if($student['category']=='OTHERS') { echo 'selected'; } ?>>OTHERS</option>
</select>
</td>
</tr>
<tr>
<td align="right">Guardian Name : 	</td><td><input class="form-control" type="text" value="<?php echo $student['guard_name']; ?>" name="guard_name" id="guard_name"  class="required" style="width: 100%;" /></td>
<td align="right">Contact No. : 	</td><td><input class="form-control" type="text" name="guard_no" value="<?php echo $student['guard_no']; ?>" id="guard_no" class="required" style="width: 100%;" /></td>
<td align="right">Relation : 	</td><td>
<input type="text" class="form-control" name="guard_relation" value="<?php echo $student['guard_relation']; ?>" id="guard_relation" style="width: 100%;" />
</td>
</tr>
<tr>
<td colspan=6><strong>PERMANENT ADDRESS:</strong></td>
</tr>
<tr>
<td align="right">Address : 	</td><td colspan="3"><input  type="text" value="<?php echo $student['address']; ?>" name="address" id="address"  class="required form-control" style="width:100%;" /></td>
<td align="right">Mobile No. : 	</td><td><input type="text" name="mobile"  value="<?php echo $student['mobile']; ?>" id="mobile"  class="required" style="width: 100px;"  onkeyup="this.value=this.value.replace(/[^\d]/,'')" />&nbsp;&nbsp;&nbsp;<input type="text"  value="<?php echo $student['mobile2']; ?>" onkeyup="this.value=this.value.replace(/[^\d]/,'')" id="mobile2" name="mobile2" style="width: 100px;" /></td>
</tr>
<tr>
<td colspan=6><strong>CORRESPONDANCE ADDRESS:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="same_address">Same As Above</td>
</tr>
<tr>
<td align="right">Address : 	</td><td colspan="3"><input type="text" value="<?php echo $student['address_co']; ?>" name="address_co" id="address_co"   class="required form-control" style="width:100%;" /></td>
<td align="right">Mobile No. : 	</td><td><input type="text" name="mobile_co" id="mobile_co"  onkeyup="this.value=this.value.replace(/[^\d]/,'')" value="<?php echo $student['mobile_co']; ?>" class="required" style="width: 100px;" />&nbsp;&nbsp;&nbsp;<input type="text" id="mobile2_co" value="<?php echo $student['mobile2_co']; ?>" name="mobile2_co" style="width: 100px;"  onkeyup="this.value=this.value.replace(/[^\d]/,'')" /></td>
</tr>
</table>

<table class="table table-striped" style="color: black;">
<tr><td colspan="6"><center><h4>Previous Schooling (most recent school first)</h4></center></td></tr>
<tr style="font-size: 15px;font-weight:bold;">
<td style="width: 15px;"><center>Sr</center></td>
<td style="width: 200px;"><center>School Name & Address</center></td>
<td style="width: 50px;"><center>Class</center></td>
<td style="width: 50px;"><center>Session</center></td>
<td style="width: 50px;" ><center>Curriculum</center></td>
<td style="width: 50px;" ><center>Subjects</center></td>
</tr>
<tr>
<td>1. </td>
<td><input type="text"  class="form-control" name="school1_name" value="<?php  echo $student['school1_name']; ?>" id="school1_name" style="width: 95%;" /></td>
<td><select name="school1_class"  class="form-control">
<option value="">--</option>
<?php
	$sql = "SELECT class FROM ".PREFIX."class_master GROUP BY class ORDER BY id";
	$sql_result = mysql_query ($sql, $conn ) or die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysql_fetch_assoc($sql_result)) {
		echo "<option value='".$row["class"]."'".($row['class']==$student['school1_class']? "selected" : "").">".$row["class"]."</option>"; 
	}
?>
</select></td>
<td><input  class="form-control" type="text" name="school1_session" value="<?php  echo $student['school1_session']; ?>"  id="school1_session" style="width: 95%;" /></td>
<td><center>
<select name="school1_curri"  class="form-control">
<option value="">--</option>
<option value="CBSE" <?php  if($student['school1_curri']=='CBSE'){  echo "selected"; } ?> >CBSE BOARD</option>
<option value="ICSE/ISC" <?php  if($student['school1_curri']=='ICSE/ISC'){  echo "selected"; } ?>>ICSE/ISC BOARD</option>
<option value="UP" <?php  if($student['school1_curri']=='UP'){  echo "selected"; } ?>>UP BOARD</option>
<option value="OTHERS" <?php  if($student['school1_curri']=='OTHERS'){  echo "selected"; } ?>>OTHERS</option>
</select></center>
</td>
<td><center><input  class="form-control" type="text" name="school1_sub" value="<?php  echo $student['school1_sub']; ?>" id="school1_sub" /></center></td>
</tr>
<tr>
<td>2. </td>
<td><input   class="form-control" type="text" name="school2_name" value="<?php  echo $student['school2_name']; ?>" id="school2_name" style="width: 95%;" /></td>
<td><select name="school2_class"  class="form-control">
<option value="">--</option>
<?php
	$sql = "SELECT class FROM ".PREFIX."class_master GROUP BY class ORDER BY id";
	$sql_result = mysql_query ($sql, $conn ) or die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysql_fetch_assoc($sql_result)) {
		echo "<option value='".$row["class"]."'".($row['class']==$student['school2_class']? "selected" :"").">".$row["class"]."</option>";
	}
?>
</select></td>
<td><input type="text"  class="form-control" name="school2_session" value="<?php  echo $student['school2_session']; ?>" id="school2_session" style="width: 95%;" /></td>
<td><center><select name="school2_curri"  class="form-control">
<option value="">--</option>
<option value="CBSE" <?php  if($student['school1_curri']=='CBSE'){  echo "selected"; } ?> >CBSE BOARD</option>
<option value="ICSE/ISC" <?php  if($student['school1_curri']=='ICSE/ISC'){  echo "selected"; } ?>>ICSE/ISC BOARD</option>
<option value="UP" <?php  if($student['school1_curri']=='UP'){  echo "selected"; } ?>>UP BOARD</option>
<option value="OTHERS" <?php  if($student['school1_curri']=='OTHERS'){  echo "selected"; } ?>>OTHERS</option>
</select></center></td>
<td><center><input  class="form-control" type="text" name="school2_sub" value="<?php  echo $student['school2_sub']; ?>" id="school2_sub" /></center></td>
</tr>
<tr>
<td>3. </td>
<td><input type="text"   class="form-control" name="school3_name" value="<?php  echo $student['school3_name']; ?>" id="school3_name" style="width: 95%;" /></td>
<td><select name="school3_class"  class="form-control">
<option value="">--</option>
<?php
	$sql = "SELECT class FROM ".PREFIX."class_master GROUP BY class ORDER BY id";
	$sql_result = mysql_query ($sql, $conn ) or die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysql_fetch_assoc($sql_result)) {
		echo "<option value='".$row["class"]."'".($row['class']==$student['school3_class']? "selected":"")." >".$row["class"]."</option>";
	}
?>
</select></td>
<td><input type="text"   class="form-control" name="school3_session" value="<?php  echo $student['school3_session']; ?>" id="school3_session" style="width: 95%;" /></td>
<td><center><select name="school3_curri"  class="form-control">
<option value="">--</option>
<option value="CBSE" <?php  if($student['school1_curri']=='CBSE'){  echo "selected"; } ?> >CBSE BOARD</option>
<option value="ICSE/ISC" <?php  if($student['school1_curri']=='ICSE/ISC'){  echo "selected"; } ?>>ICSE/ISC BOARD</option>
<option value="UP" <?php  if($student['school1_curri']=='UP'){  echo "selected"; } ?>>UP BOARD</option>
<option value="OTHERS" <?php  if($student['school1_curri']=='OTHERS'){  echo "selected"; } ?>>OTHERS</option>
</select></center></td>
<td><center><input type="text" name="school3_sub"    class="form-control" value="<?php  echo $student['school3_sub']; ?>" id="school3_sub" /></center></td>
</tr>
</table>
 <table class="table">
 <tr>
 <td  valign="top">Transport : </td><td>	
<select name="is_transport" id="is_transport"  class="required form-control">
<option value="NO" <?php if($update['is_transport']=='NO'){ echo "selected"; }?>>NO</option>
<option value="YES" <?php if($update['is_transport']=='YES'){ echo "selected"; }?>>YES</option>
</select>
</td>

<td align="right">
</td><td></td>  
<td align="right">
</td><td></td>  

</tr>
<tr>
<td align="center" colspan="6" ><input class="btn btn-danger"  type="submit" id="submit" name="submit" value="Update Student" />&nbsp;<input class="btn btn-info" type="button" name="reset" value="Reset Form" />

</td>
</tr>
</table>
</form>
<?php } ?>
</div>
</div>
<script src="datepicker.js"></script> 
 <script>
  $('.input_date').datepicker({
	format: 'dd/mm/yyyy',
	endDate: 'd',
	autoclose: true
});
  </script>
<script>
$(document).ready(function(){
    $("#same_address").change(function(){
        if($(this).attr("checked"))
        {
            var address = $("#address").val();
            var mobile = $("#mobile").val();
            var mobile2 = $("#mobile2").val();
			document.getElementById('address_co').value = address;
			document.getElementById('mobile_co').value = mobile;
			document.getElementById('mobile2_co').value = mobile2;
        }
        else
        {
            document.getElementById('address_co').value = "";
			document.getElementById('mobile_co').value = "";
			document.getElementById('mobile2_co').value = "";
        }
    });
});
$('#update_detail').submit(function (e) {
                        var form=this;
                        e.preventDefault();
                        $.ajax({
                            type: 'POST',
                            url: 'update-prospectus',
                            data: new FormData(this),
                            async: false,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function (data) {
								$('#finalmesg').html(data);
								//console.log(data);
								 alert(data);
								 $("#update_detail").reset();
                            }

                        })
                        return false;
                    });
					


</script>
</body>
</html> 