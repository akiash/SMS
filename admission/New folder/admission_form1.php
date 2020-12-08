<?php 
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'myroject_db'); 
//include("../inc/config.php");
session_start();
//if(!isset($_SESSION['uid'])){ header("location: login.php"); }
?>
<html lang="en">
  <head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script type="text/javascript" src="prospectus/bootstrap.min.js"></script>
		<link href="prospectus/bootstrap.min.css" rel="stylesheet">
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="prospectus/style.css">
		<link rel="stylesheet" href="prospectus/custom.css"> 
		<link rel="stylesheet" href="prospectus/datepicker3.css"> 
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		</head>
		<body>
		<div class="container">
		<div class="row"style="background-color:#F5F5F5">       
          <div class="col-sm-2">
        
            <img class="logo" src="prospectus/img/rec_logo.png" alt="ccelogo.jpg">
            </div>
          <div class="col-sm-8 mt-3 text-center">
              <p class="h">DGSG PUBLIC SCHOOL, <span style="font-size:small;">Ludhiana</span></p> 
			        
            </div>
            <div class="col-sm-2">
      
            </div>
          </div>
		<div class="row well">
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
Filevalidation();
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
<style>
  @media only screen and (max-width: 720px) {
  body {
    font-size: 10px;
  }
}
.h {
    font-family: 'Ubuntu',Helvetica,Arial,sans-serif;
    font-size: 2.1em;
    left: 0;
    font-weight:700;
	margin-top:22px;
    color: #2A4076;
    text-shadow: 0 1px 0 #b2a98f, 0 0 0 rgba(0, 0, 0, 0), 0 6px 2px rgba(0,0,0,0.1), 0 25px 30px rgba(0,0,0,0.1);
}
.btn {
	  width:60%;
  }
  #loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
	background-color:#000000ba;
}
    #loader {
        display: block;
        position: relative;
        left: 50%;
        top: 50%;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
 
        border: 3px solid transparent;
    border-top-color: #3498db;
	 border-radius: 50%;
        z-index: 1500;
    }
	#loader:before {
    content: "";
    position: absolute;
    top: 5px;
    left: 5px;
    right: 5px;
    bottom: 5px;
    border: 3px solid transparent;
    border-top-color: #e74c3c;
	 border-radius: 50%;
}
#loader:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    border: 3px solid transparent;
    border-top-color: #f9c922;
	 border-radius: 50%;
}
/* copy and paste the animation inside all 3 elements */
/* #loader, #loader:before, #loader:after */
-webkit-animation: spin 1.5s linear infinite;
animation: spin 1.5s linear infinite;
 
/* include this only once */
@-webkit-keyframes spin {
    0%   {
        -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(0deg);  /* IE 9 */
        transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
    }
    100% {
        -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(360deg);  /* IE 9 */
        transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
    }
}
@keyframes spin {
    0%   {
        -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(0deg);  /* IE 9 */
        transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
    }
    100% {
        -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(360deg);  /* IE 9 */
        transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
    }
}
#loader {
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
}
#loader:before {
    -webkit-animation: spin 3s linear infinite;
    animation: spin 3s linear infinite;
}
</style>
<div id="loader-wrapper" style="display:none;">
    <div id="loader"></div>
</div>
<div class="row">
  <div class="col-sm-12 text-center">
<p class="h">Admission Form</p>
</div>
</div>
<!--<div class="row">
<div class="col-sm-2">
<img src="img/rec_logo.png" style="height:96px;">
</div>
<div class="col-sm-8">
<h3 style="color: black;">Prospectus Registration</h3>
</div>
<div class="col-sm-2">
</div>
</div>-->
    <form id="prospectus_registration"  enctype="multipart/form-data"> 
 
       <!-- <input type="hidden" name="hdnCmd" value="ADD">   --> 
        <input type="hidden" name="reg_no" value="<?php echo(rand(10,100)); ?>">
        <!--<input type="hidden" name="s_adm_no" value="<?php echo(rand(10,100)); ?>">-->
       <!-- <input type="hidden" name="rec_no" value="<?php echo(rand(10,100)); ?>">-->
			<div class="row">
				<div class="col-sm-6">
				<strong>Have You Ever Visit the School Campus (Select Yes/No):</strong></div>
				<div class="col-sm-6"><select name="is_visit"><option value="YES">YES</option><option value="NO">NO</option></select></div>
			</div>
			<div class="row">
				<div class="col-sm-12" style="text-align:-webkit-right;">
				<span><img src="img/no-image-found.jpg" class="img-responsive" style="width:151px; height:150px;" id="output_image2"/></span>
				<span><input type="file" style="width:30%"  name="cand_photo"  id="cand_photo" onchange="preview_image2(event)"  class="form-control"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">Session : <select name="session" class="form-control">
					<option value="">Select Class</option>
							<option value="2020-2021" selected>2020-2021</option>
							<option value="2019-2020">2019-2020</option>
							<option value="2018-2019">2018-2019</option>
					</select>
				</div>
				
				<div class="col-md-4">Class : <select name="class" id="class" class="form-control" required>
					<option value="" selected>Select Class</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
				</div>
				
				<div class="col-md-4">Stream : <select name="stream"  id="stream" class="required form-control" >
				<script>
					$('#class').change(function(){
						$('#stream').empty().append('<option  value="">Select Stream</option>');
						var e = $(this).val();
						if(e=='11TH COM'){
						var option = ["COMPUTER", "PHYSICAL ED"];		
						}
						else{
						var option = ["GENERAL"];
						}
						for (var i=0;i<option.length;i++){
					   $('<option/>').val(option[i]).html(option[i]).appendTo('#stream');  
						}
					});
				</script>
				
				<option value="GENERAL" selected="selected">GENERAL</option>
					<option value="SC">SC</option>
					<option value="ST">ST</option>
					<option value="OTHER">OTHER</option>
				</select>

				
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4"> Student Name : <input type="text" class="form-control" name="stu_name" id="stu_name"  required style="width: 100%;" /></div>
					<div class="col-md-4"> Gender : <select name="gender"  class="required form-control" style="width: 100%;" required>
						<option value="">--</option>
						<option value="MALE">MALE</option>
						<option value="FEMALE">FEMALE</option>
					</select>
					</div>
					<div class="col-md-4">Date of Birth : <select name="dd_dob" id="dd_dob" class="required" required>
						<option selected disabled="disabled">dd</option>
						<?php for($i=1; $i<=31; $i++){ ?>
						<option value="<?php  echo $i; ?>"><?php  echo $i; ?></option>
						<?php }?>
						</select>
						<select name="mm_dob" id="mm_dob" class="required" required>
							<option selected disabled="disabled">MM</option>
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
						<select name="yyyy_dob" id="yyyy_dob" class="required" required>
						<option selected disabled="disabled">YY</option>
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
					</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">Student's Watsapp No. : <input class="form-control" type="text" name="mobile2" id="stu_mobile"  class="required" style="width: 100%;" required /><label style="color:red;font-size:9px">* Enter Student's Mobile Number For Online Learning</label>
				</div>
			</div>
			
			<div class="row"><h4><u>FAMILY PROFILE:</u></h4></div>
			<div class="row">
				<div class="col-md-4">Father Name : <input class="form-control" type="text" name="fat_name" id="fat_name"  class="required" style="width: 100%;" required /></div>
				<div class="col-md-4">Mother Name : <input  class="form-control"  type="text" name="mot_name" id="mot_name" class="required" style="width: 100%;" /></div>
				<div class="col-md-4">Registration Date : <input type="text" class="form-control"  name="do_adm" class="input_date" data-date-format="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>" readonly /></div>
			</div>
			
			<div class="row">
				<div class="col-md-4">Father Occupation : <input  class="form-control"  type="text" name="fat_occ" id="fat_occ" style="width: 100%;" /></div>
				<div class="col-md-4">Mother Occupation : <input  class="form-control"  type="text" name="mot_occ" id="mot_occ" style="width: 100%;"  /></div>
				<div class="col-md-4">Religion : <select name="religion" id="religion"  style="width: 100%;" class="form-control" >
					<option value="">--</option>
					<option value="HINDU">HINDU</option>
					<option value="MUSLIM">MUSLIM</option>
					<option value="SIKH">SIKH</option>
					<option value="CHRISTIAN">CHRISTIAN</option>
					</select>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">Father's Annual Income : <input type="text" name="fat_income" class="form-control"  id="fat_income" style="width: 100%;" /></div>
				<div class="col-md-4">Mother's Annual Income : <input type="text" name="mot_income" class="form-control"  id="mot_income" style="width: 100%;" /></div>
				<div class="col-md-4">Category : <select name="category"  id="category" class="form-control"  style="width: 100%;" >
					<option value="">--</option>
					<option value="GENERAL">GENERAL</option>
					<option value="OBC">OBC</option>
					<option value="SC">SC</option>
					<option value="ST">ST</option>
					<option value="OTHERS">OTHERS</option>
					</select>
				</div>
			</div>
			<div class="row"><h4><u>GUARDIAN PROFILE:</u></h4></div>
			
			<div class="row">
				<div class="col-md-4">Guardian Name : <input class="form-control"  type="text" name="guard_name" id="guard_name"  class="required" style="width: 100%;" /></div>
				<div class="col-md-4">Contact No. : <input class="form-control"  type="text" name="guard_no" id="guard_no" class="required" style="width: 100%;" /></div>
				<div class="col-md-4">Relation : <input type="text" name="guard_relation" class="form-control"  id="guard_relation" style="width: 100%;" /></div>
			</div>
			<div class="row"><h4><u>PERMANENT ADDRESS:</u></h4></div>
			
			<div class="row">
				<div class="col-md-6">Address : <input  class="form-control" type="text" name="address" id="address" value="" class="required" style="width:100%;" required /></div>
			   <div class="col-md-6">Mobile No. : <input type="text" name="mobile" id="mobile"  class="form-control" onkeyup="this.value=this.value.replace(/[^\d]/,'')" value="<?php //echo $_SESSION['mobile']; ?>" required  /></div>
			</div>
			<div class="row"><h4><u>CORRESPONDANCE ADDRESS:</u></h4>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="same_address">Same As Above</div>
			<div class="row">
				<div class="col-md-6">Corrspondance Address : <input class="form-control"  type="text" name="address_co" id="address_co"  class="required" style="width:100%;" required /></div>
				<div class="col-md-6">Mobile No. : <input type="text" name="mobile_co" id="mobile_co"  onkeyup="this.value=this.value.replace(/[^\d]/,'')" class="form-control" /></div>
			</div>
			<div class="row"><strong><u>Previous Schooling (most recent school first)</u></strong></div>
			<div class="row">
				<div class="col-md-3">School Name & Address : <input type="text" name="school1_name"  class="form-control"  id="school1_name" style="width: 95%;" /></div>
				<div class="col-md-2">Class : <select name="school1_class" class="form-control" >
					<option value="">Select Class</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					</select>
				</div>

				<div class="col-md-2">Session : <input type="text" class="form-control"  name="school1_session" id="school1_session" style="width: 95%;" /></div>
				<div class="col-md-2">Curriculum : <select name="school1_curri" class="form-control" >
					<option value="">--</option>
						<option value="CBSE">CBSE BOARD</option>
						<option value="ICSE/ISC">ICSE/ISC BOARD</option>
						<option value="UP">UP BOARD</option>
						<option value="OTHERS">OTHERS</option>
						</select>
					</div>
				<div class="col-md-3">Subjects : <input class="form-control"  type="text" name="school1_sub" id="school1_sub" /></div>
			</div>
			<div class="row"><div class="col-md-12">Transport : <select name="is_transport" id="is_transport"  class="required form-control" >
				<option value="NO">NO</option>
				<option value="YES">YES</option>
				</select>
				</div>

			</div>
			<br/>
			<div class="row">
				<div class="col-md-6"><input class="btn btn-danger" type="submit" id="submit" name="submit" value="Submit Form" /></div>
				<div class="col-md-6"><input class="btn btn-info" type="button" name="reset" value="Reset Form" /></div>
			</div>
			<div class="row">
			   <p style="color:red" id="finalmesg"></p>
			</div>

    </form>
</div>
</div>
<script src="prospectus/datepicker.js"></script> 
  <script> 
    Filevalidation = () => { 
        const fi = document.getElementById('cand_photo'); 
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (i = 0; i <= fi.files.length - 1; i++) { 
  
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 2048) { 
                    alert( 
                      "File too Big, please select a file less than 2mb"); 
					  document.getElementById('cand_photo').value= null;
					  document.getElementById('output_image2').src= "prospectus/img/no-image-found.jpg";
						
                } else { 
					
                } 
            } 
        } 
    } 
</script> 
<script>
$(document).ready(function(){
    $("#same_address").change(function(){
        if($(this).attr("checked",true))
        {
			 var address = $("#address").val();
            var mobile = $("#mobile").val();
			document.getElementById('address_co').value = address;
			document.getElementById('address_co').readOnly = true;
			document.getElementById('mobile_co').value = mobile;
			document.getElementById('mobile_co').readOnly = true;
        }
        else
        {
            document.getElementById('address_co').value = "";
			document.getElementById('mobile_co').value = "";
        }
    });
});
$('#loader-wrapper').bind('ajaxStart', function(){
    $(this).show();
}).bind('ajaxStop', function(){
    $(this).hide();
});
$('#prospectus_registration').submit(function (e) {
	alert(data);
                        var form=this;
                        e.preventDefault();
                        $.ajax({
                            type: 'POST',
                            url: 'add-prospectus.php',
                            data: new FormData(this),
                            async: false,
                            cache: false,
                            contentType: false,
                            processData: false,
							beforeSend: function(){
							// Show image container
									//$("#loader-wrapper").show();
								},
                            success: function (data) {
								alert(data);
								console.log(data);
							var obj = JSON.parse(data);
							$("#loader-wrapper").hide();
							if(obj.status=='100')
								{
									$('#finalmesg').html("Your Registration has been submitted Successfully");
									alert("Your Registration has been submitted Successfully");
									//document.getElementById('prospectus_registration').reset()
               window.location.href="admission_form.php";
									//window.location.href="prospectus/view-detail.php?page=view-detail&type=query&id="+obj.id;
								}
							else if(obj.status=='101'){
								$('#finalmesg').html("Photo is missing.Please Attach the photo of Student");
								alert("Photo is missing.Please Attach the photo of Student");
							}
							else if(obj.status=='102'){
								$('#finalmesg').html("Photo size is too large.Size must be less than 2MB.");
								alert("Photo size is too large.Size must be less than 2MB.")
							}
							else{
								$('#finalmesg').html("Your Registration has not been submitted");
								alert("Your Registration has not been submitted");
							}
								  
                            }
							
                        })
                        return false;
                    });
					
		
</script>
</body>
</html>