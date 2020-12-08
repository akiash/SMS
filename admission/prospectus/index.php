<?php include("../inc/config.php");?>
<!DOCTYPE html>  
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Website CSS style -->
		<link href="bootstrap.min.css" rel="stylesheet">
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="custom.css"> 
		<link rel="stylesheet" href="datepicker3.css"> 
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<title><?php echo $school_name; ?></title>
	</head>
	<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo $school_name; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index">Home</a></li>
      <li><a href="login">login</a></li>
      
    </ul>
  </div>
</nav>
<br/>
<br/>
<br/>
<br/>
		<div class="container">
			<div class="row main">
			<div class="cols-sm-12">
				<div class="main-login main-center">
				<h5>Sign up Prospectus Registration.</h5>
					<b style="color:#f6fc0d; font-size:25px;" id="msg"></b>
					<form id="registration" class="form-horizontal">
						
						<div class="form-group">
							<div class="col-sm-6">
							<label for="name" class="cols-sm-2 control-label">Father Name</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="fat_name" id="fat_name"  placeholder="Enter your Father Name"/>
								</div>
							</div>
							<div class="col-sm-6">
							<label for="name" class="cols-sm-2 control-label">Mobile</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" maxlength="10" name="mobile" id="mobile"  placeholder="Enter your Mobile No."/>
								</div>
							</div>
						</div>

						<div class="form-group">
						<div class="col-sm-6">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
							<div class="col-sm-6">
							<label for="address1" class="cols-sm-2 control-label">Address</label>
							<textarea name="address1" id="address1" class="form-control" placeholder="Enter your Address"  rows=1 cols=2></textarea>
							</div>
						</div>
						
						<div class="form-group">
						<div class="col-sm-6">
							<label for="email" class="cols-sm-2 control-label">Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
							<div class="col-sm-6">
							<label for="address1" class="cols-sm-2 control-label">Confirm Password</label>
						<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
						<input type="password" class="form-control" name="repassword" id="repassword"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<button type="submit" id="Add"class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
					</form>
					<br/>
					<a href="login" class="btn btn-danger btn-lg" role="button" aria-pressed="true">Sing In</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="forget-password" class="btn btn-info btn-lg" role="button" aria-pressed="true">Forget Password</a>
					
				</div>
			</div> 
			</div>
		</div>
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="bootstrap.min.js"></script>
	<script src="datepicker.js"></script> 
 <script>
  $('.input_date2').datepicker({
	format: 'dd/mm/yyyy',
	endDate: 'd',
	autoclose: true
});
  </script>
  <script>
$('#registration').submit(function(event){
	if(confirm('Confirm?')){
	event.preventDefault();
	$.ajax({
		type:'POST',
		url:'registration?Add',
		data:$(this).serialize(),
		success: function (data) {
			if(data=='Your Registration has been submitted successfully.'){
			 window.location="msg_otp.php";
			}
			else{
				$('#msg').html(data);
			}
		}
	});
	}
	else{
		event.preventDefault(); 
		return false; 
	}
});
</script>
	</body>
</html> 