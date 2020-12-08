<?php include("../inc/config.php");
error_reporting(E_ALL);
ini_set('display_error',1);
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
		<title><?php  echo $school_name?></title>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php  echo $school_name?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="prospectus">Home</a></li>
      <li><a href="login">login</a></li>
      
    </ul>
  </div>
</nav>
<br/>
<br/>
<br/>
<br/>
<br/>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h2 style="color:white">Forget Password.</h2>
				<b style="color:#f6fc0d; font-size:25px;" id="msg"></b>
					<form id="Forget" >
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Email Id</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email_id"  id="email_id"  placeholder="Enter your Email Id"/>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<button type="submit" id="Login"class="btn btn-primary btn-lg btn-block login-button">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script>
  $('#Forget').submit(function(event){
	event.preventDefault();
	 var email_id = $("#email_id").val();
	$.ajax({
		type:'POST',
		url:'userlogin',
		data:{get_Forget:1,email_id:email_id},
			success: function (data) {
			if(jQuery.trim(data)==='Your OTP has been submitted successfully'){
				window.location.href="login"; 
			}
			else { 
			$('#msg').html(data);
			console.log(data);
			}
		}
	});
		return false; 
});
</script> 
	</body>
</html> 