<?php include("../inc/config.php");
session_start();
if(!isset($_SESSION['uid'])){ header("location: login.php"); }
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
<h3 style="color: black;">Prospectus Registration</h3>
<form id="prospectus_registration" onsubmit="myFunction()"  enctype="multipart/form-data">  
<input type="hidden" name="hdnCmd" value="ADD">
<table class="table table-condensed table-striped" style="color: black;">
<tr>
<td ><strong>Candidate Photo:</strong>
<div><img src="img/no-image-found.jpg" style="width:151px; height:150px;" id="output_image2"/></div>
</td>
<td> <input type="file"   name="cand_photo"  id="cand_photo"   class="form-control" onchange="preview_image2(event)"> 
</td>

<td ><strong>Father Photo:</strong>
<div><img src="img/no-image-found.jpg" style="width:151px; height:150px;" id="output_image"/></div>
</td>
<td> <input type="file" name="fat_photo" id="fat_photo" onchange="preview_image(event)" class="form-control"> 
</td>

<td > <strong>Mother Photo: </strong>
<div><img  src="img/no-image-found.jpg"style="width:151px; height:150px;" id="output_image3"/></div>
</td>
<td> <input type="file" name="mot_photo"  id="mot_photo" class="form-control" onchange="preview_image3(event)"> 
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
<td align="right">Class : </td><td><select name="class" id="class" class="form-control" required>
<option value="">--</option>
<?php
	$sql = "SELECT class FROM ".PREFIX."class_master GROUP BY class ORDER BY id";
	$sql_result = mysql_query ($sql, $conn ) or die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysql_fetch_assoc($sql_result)) {
		echo "<option value='".$row["class"]."'>".$row["class"]."</option>";
	}
?>
</select>


</td>

<td align='right'>Stream : 
</td><td>
	
<select name="stream"  class="required form-control" >
<option value="">--</option>
<?php
	$sql = "SELECT stream FROM ".PREFIX."stream GROUP BY stream ORDER BY id";
	$sql_result = mysql_query ($sql, $conn ) or die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysql_fetch_assoc($sql_result)) {
		echo "<option value='".$row["stream"]."'>".$row["stream"]."</option>";
	}
?>
</select>
</td>
</tr>
<tr>
<td align="right">Stu. Name : 	</td><td><input type="text" class="form-control" name="stu_name" id="stu_name"  required style="width: 100%;" /></td>
<td align="right">Gender : 	</td><td><select name="gender"  class="required form-control" style="width: 100%;">
<option value="">--</option>
<option value="MALE">MALE</option>
<option value="FEMALE">FEMALE</option>
</select></td>
<td align="right">Date of Birth : 	</td><td>
<!--<input type="text" name="dob" class="input_date" data-date-format="dd/mm/yyyy" style="width: 100px;" readonly />-->
<select name="dd_dob" id="dd_dob" class="required ">
<option>--</option>
<?php for($i=1; $i<=31; $i++){ ?>
<option value="<?php  echo $i; ?>"><?php  echo $i; ?></option>
<?php }?>
</select>
<select name="mm_dob" id="mm_dob" style="width: 40%;"  class="required ">
<option>--</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select name="yyyy_dob" id="yyyy_dob" class="required">
<option>--</option>
<option>1990</option>
<option>1991</option>
<option>1992</option>
<option>1993</option>
<option>1994</option>
<option>1995</option>
<option>1996</option>
<option>1997</option>
<option>1998</option>
<option>1999</option>
<option>2000</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
</select>

</td>
</tr>


<tr>
<td align="right">Place of birth :</td>
<td>
<input type="text" name="p_of_birth" class="required form-control" style="width: 100%;"></td>

<td align="right">State of Domicile :</td>
<td>
<input type="text" name="st_of_domicile" class="required form-control" ></td>


<td align="right">Nationality :</td>
<td>
<input type="text" name="nationality" class="required form-control"></td>
</tr>

<tr>
<td align="right">Physically Challenged :</td>
<td>
<input type="text" name="phy_chal" id="phy_chal"  class="required form-control" /></td>

<td align="right">Blood Group :</td>
<td>
<select name="bg" class="form-control">
<option value="">-- Group --</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>

</td>


<td align="right">Mother Tongue :</td>
<td>
<input type="text" name="lang"   style="width: 100px;"  />&nbsp;
<input type="checkbox" name='only_child' value="YES">&nbsp;Only Child
</td>
</tr>


<tr>
<td colspan=6><strong>FAMILY PROFILE:</strong></td>
</tr>
<tr>
<td align="right">Father Name : 	</td><td><input class="form-control" type="text" name="fat_name" id="fat_name"  class="required" style="width: 100%;" /></td>
<td align="right">Mother Name : 	</td><td><input  class="form-control"  type="text" name="mot_name" id="mot_name" class="required" style="width: 100%;" /></td>
<td>Registration Date : 	</td><td>
<input type="text" class="form-control"  name="do_adm" class="input_date" data-date-format="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>" readonly />
</td>
</tr>
<tr>
<td align="right">Father Occupation : 	</td><td><input  class="form-control"  type="text" name="fat_occ" id="fat_occ" style="width: 100%;" /></td>
<td align="right">Mother Occupation : 	</td><td><input  class="form-control"  type="text" name="mot_occ" id="mot_occ" style="width: 100%;"  /></td>

<td align="right">Religion : 	</td><td>
<select name="religion" id="religion"  style="width: 100%;" class="form-control" >
<option value="">--</option>
<option value="HINDU">HINDU</option>
<option value="MUSLIM">MUSLIM</option>
<option value="SIKH">SIKH</option>
<option value="CHRISTIAN">CHRISTIAN</option>
</select>
</td> 
</tr>
<tr>
<td align="right">Annual Income : 	</td><td>
<input type="text" name="fat_income" class="form-control"  id="fat_income" style="width: 100%;" />
</td>
<td align="right">Annual Income  : 	</td><td>
<input type="text" name="mot_income" class="form-control"  id="mot_income" style="width: 100%;" />
</td>

<td align="right">Category : 	</td><td>
<select name="category"  id="category" class="form-control"  style="width: 100%;" >
<option value="">--</option>
<option value="GENERAL">GENERAL</option>
<option value="OBC">OBC</option>
<option value="SC">SC</option>
<option value="ST">ST</option>
<option value="OTHERS">OTHERS</option>
</select>
</td>
</tr>
<tr>
<td align="right">Guardian Name : 	</td><td><input class="form-control"  type="text" name="guard_name" id="guard_name"  class="required" style="width: 100%;" /></td>
<td align="right">Contact No. : 	</td><td><input class="form-control"  type="text" name="guard_no" id="guard_no" class="required" style="width: 100%;" /></td>
<td align="right">Relation : 	</td><td>
<input type="text" name="guard_relation" class="form-control"  id="guard_relation" style="width: 100%;" />
</td>
</tr>
<tr>
<td colspan=6><strong>PERMANENT ADDRESS:</strong></td>
</tr>
<tr>
<td align="right">Address : 	</td><td colspan="3"><input  class="form-control" type="text" name="address" id="address"  class="required" style="width:100%;" /></td>
<td align="right">Mobile No. : 	</td><td><input type="text" name="mobile" id="mobile"  class="required" style="width: 100px;"  onkeyup="this.value=this.value.replace(/[^\d]/,'')" />&nbsp;&nbsp;&nbsp;<input type="text"  onkeyup="this.value=this.value.replace(/[^\d]/,'')" id="mobile2" name="mobile2" style="width: 100px;" /></td>
</tr>
<tr>
<td colspan=6><strong>CORRESPONDANCE ADDRESS:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="same_address">Same As Above</td>
</tr>
<tr>
<td align="right">Address : 	</td><td colspan="3"><input class="form-control"  type="text" name="address_co" id="address_co"  class="required" style="width:100%;" /></td>
<td align="right">Mobile No. : 	</td><td><input type="text" name="mobile_co" id="mobile_co"  onkeyup="this.value=this.value.replace(/[^\d]/,'')" class="required" style="width: 100px;" />&nbsp;&nbsp;&nbsp;<input type="text" id="mobile2_co" name="mobile2_co" style="width: 100px;"  onkeyup="this.value=this.value.replace(/[^\d]/,'')" /></td>
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
<td><input type="text" name="school1_name"  class="form-control"  id="school1_name" style="width: 95%;" /></td>
<td><select name="school1_class" class="form-control" >
<option value="">--</option>
<?php
	$sql = "SELECT class FROM ".PREFIX."class_master GROUP BY class ORDER BY id";
	$sql_result = mysql_query ($sql, $conn ) or die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysql_fetch_assoc($sql_result)) {
		echo "<option value='".$row["class"]."'>".$row["class"]."</option>";
	}
?>
</select></td>
<td><input type="text" class="form-control"  name="school1_session" id="school1_session" style="width: 95%;" /></td>
<td><center>
<select name="school1_curri" class="form-control" >
<option value="">--</option>
<option value="CBSE">CBSE BOARD</option>
<option value="ICSE/ISC">ICSE/ISC BOARD</option>
<option value="UP">UP BOARD</option>
<option value="OTHERS">OTHERS</option>
</select></center>
</td>
<td><center><input class="form-control"  type="text" name="school1_sub" id="school1_sub" /></center></td>
</tr>
<tr>
<td>2. </td>
<td><input type="text" class="form-control"  name="school2_name" id="school2_name" style="width: 95%;" /></td>
<td><select name="school2_class" class="form-control" >
<option value="">--</option>
<?php
	$sql = "SELECT class FROM ".PREFIX."class_master GROUP BY class ORDER BY id";
	$sql_result = mysql_query ($sql, $conn ) or die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysql_fetch_assoc($sql_result)) {
		echo "<option value='".$row["class"]."'>".$row["class"]."</option>";
	}
?>
</select></td>
<td><input type="text" class="form-control"  name="school2_session" id="school2_session" style="width: 95%;" /></td>
<td><center><select name="school2_curri" class="form-control" >
<option value="">--</option>
<option value="CBSE">CBSE BOARD</option>
<option value="ICSE/ISC">ICSE/ISC BOARD</option>
<option value="UP">UP BOARD</option>
<option value="OTHERS">OTHERS</option>
</select></center></td>
<td><center><input  class="form-control" type="text" name="school2_sub" id="school2_sub" /></center></td>
</tr>
<tr>
<td>3. </td>
<td><input class="form-control"  type="text" name="school3_name" id="school3_name" style="width: 95%;" /></td>
<td><select name="school3_class" class="form-control" >
<option value="">--</option>
<?php
	$sql = "SELECT class FROM ".PREFIX."class_master GROUP BY class ORDER BY id";
	$sql_result = mysql_query ($sql, $conn ) or die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysql_fetch_assoc($sql_result)) {
		echo "<option value='".$row["class"]."'>".$row["class"]."</option>";
	}
?>
</select></td>
<td><input  class="form-control"  type="text" name="school3_session" id="school3_session" style="width: 95%;" /></td>
<td><center><select name="school3_curri" class="form-control" >
<option value="">--</option>
<option value="CBSE">CBSE BOARD</option>
<option value="ICSE/ISC">ICSE/ISC BOARD</option>
<option value="UP">UP BOARD</option>
<option value="OTHERS">OTHERS</option>
</select></center></td>
<td><center><input class="form-control"  type="text" name="school3_sub" id="school3_sub" /></center></td>
</tr>
</table>
 <table class="table">
 <tr>
 <td  valign="top">Transport : </td><td>	
<select name="is_transport" id="is_transport"  class="required form-control" >
<option value="NO">NO</option>
<option value="YES">YES</option>
</select>
</td>

<td align="right">
</td><td></td>  
<td align="right">
</td><td></td>  

</tr>
<tr>
<td align="center" colspan="6" id="finalmesg"><input  class="btn btn-danger" type="submit" id="submit" name="submit" value="Add Student" />&nbsp;<input class="btn btn-info" type="button" name="reset" value="Reset Form" /></td>
</tr>
</table>
</form>
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
$('#prospectus_registration').submit(function (e) {
                        var form=this;
                        e.preventDefault();
                        $.ajax({
                            type: 'POST',
                            url: 'add-prospectus',
                            data: new FormData(this),
                            async: false,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function (data) {
								$('#finalmesg').html(data);
								console.log(data);
								 alert(data);
								form.reset();
								window.location.href="online-prospectus";
                                
								// console.log(data);  
                            }
							
                        })
                        return false;
                    });
					
		
</script>
</body>
</html> 