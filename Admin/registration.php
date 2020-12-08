<html>
<head>
    
    <link href="bt/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="bt/dist/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/3f3b356cdf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="t.css">
	  
	
	
</head>
<body data-gr-c-s-loaded="true"><div style="position:fixed;top:0px;left:0px;width:0;height:0;" id="scrollzipPoint"></div>

    <div class="cont">
	<?php include("indexhead.php"); ?>
    <!-- head -->
        <br><br><br><br><br><br><br><br><br><br>
		<div class="row">
		    <div class="col-12" style="height:5%; padding: 8px 15px; margin-bottom: 20px; list-style: none; background-color: #f5f5f5; border-radius: 4px; box-shadow: 0px 2px 8px 2px rgba(0, 0, 0, 0.12);">
			    <div class="list">
				    <ul>
					    <li style="display:inline-block;"><a href="index.php">Home<b>/</li>
						<li style="display:inline-block;"><a href="#">contact us</li>
					</ul>
				</div>
			
			</div>
		</div>
		
		<div class="row">
		    <div class="col-12" style="background:white; height:15%">
		    <h4 style="font-size:35px; padding-top:30px;"><center>User Regisration Here</center></h4>
		</div>
	    </div>
		
		
		<div class="container py-xl-2 py-lg-2">

		
		<?php
		
	    
		
		if(isset($_REQUEST['submit'])){
			$n=$_REQUEST['uname'];
			$m=$_REQUEST['password'];
			$fn=$_REQUEST['fname'];
			$ln=$_REQUEST['lname'];
			$c=$_REQUEST['email'];
			$o=$_REQUEST['mob'];
			$b=$_REQUEST['gen'];
			$p=$_REQUEST['addr'];
			$f=$_REQUEST['city'];
			$e=$_REQUEST['state'];
			$t=$_REQUEST['country'];
			$s=$_REQUEST['pcode'];
			//$i=$_FILES['img']['name'];
			
			
			if($_FILES['cand_photo']['size']>2097152){
			 $status1 = "102";
			 }
			else{
			 $cand_photo="images/".rand(1000,1000000).basename($_FILES['cand_photo']['name']);
			 move_uploaded_file($_FILES["cand_photo"]["tmp_name"],$cand_photo);
			
			     
		    	//if(move_uploaded_file($_FILES['img']['tmp_name'],"images//$i")){
				$conn=mysqli_connect('localhost','root','') or die("enable to connect".mysqli_error($conn));
	            mysqli_select_db($conn,'myroject_db') or die("can't select database".mysqli_error($conn));
				$q="insert into aki3(uname,password,fname,lname,email,mob,gen,addr,city,state,country,pcode,image)values('$n','$m','$fn','$ln','$c','$o','$b','$p','$f','$e','$t','$s','$cand_photo')";
				$rs=mysqli_query($conn,$q);
				if($rs>0)
					//header('location:index.php');
				    echo "record inserted";
				else
					echo "Enable to insert record";
			}
			
		}
		
	?>
		
		<div class="input" style="color: black; padding-top: 3rem;">
		<form method="post" enctype="multipart/form-data">
		
		<div class="row">
		     
		    <div class="col-md-6 col-sm-6 contact-form1 form-group" >
							<label>User Name</label>
							<input type="text" class="form-control" name="uname" placeholder="" required="">
			</div>
			
			<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" placeholder="" required="">
			</div>
		</div>
		
		<div class="row">
		     
		    <div class="col-md-6 col-sm-6 contact-form1 form-group" >
							<label>First Name</label>
							<input type="text" class="form-control" name="fname" placeholder="" required="">
			</div>
			
			<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label>Last Name</label>
							<input type="text" class="form-control" name="lname" placeholder="" required="">
			</div>
		</div>
		
		
		<div class="row">
		    <div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" placeholder="" required="">
			</div>
			
			<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label>phone No.</label>
							<input type="text" class="form-control" name="mob" placeholder="" required="">
			</div>
		</div>
		
		<div class="row">
		    <div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label>Gender</label>
							<input type="text" class="form-control" name="gen" placeholder="" required="">
			</div>
			
			<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label>Address</label>
							<input type="text" class="form-control" name="addr" placeholder="" required="">
			</div>
		</div>
		
		<div class="row">
		    <div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label>city</label>
							<input type="text" class="form-control" name="city" placeholder="" required="">
			</div>
			
			<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label>state</label>
							<input type="text" class="form-control" name="state" placeholder="" required="">
			</div>
		</div>
		
		<div class="row">
		    <div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label>country</label>
							<input type="text" class="form-control" name="country" placeholder="" required="">
			</div>
			
			<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label>Pincode</label>
							<input type="text" class="form-control" name="pcode" placeholder="" required="">
			</div>
		</div>
		
		<div class="row">
		    <div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label>Image</label>
							<input type="file" class="form-control" name="cand_photo" id="cand_photo" placeholder="" required="">
			</div>	
		</div>
		</div>
		
		<div class="row">
		<div class="contact-form">
			<input type="submit" value="Submit" name="submit" style="webkit-appearance: button; outline: none; padding: 13px 0; border: none; background: #000; font-size: 16px; color: #fff; letter-spacing: 2px; width: 100%; margin-top: 1em; cursor: pointer;">
		</div>
		</div>
		</form>
	    </div>
		
		
		
	</div>

</body>
</html>