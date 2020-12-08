<?php include(".../inc/config.php");
error_reporting(E_ALL);
ini_set('display_error',1);

/*if($_REQUEST['add']=='aa'){
	print_r($_REQUEST);
$email_otp=mysql_real_escape_string($_REQUEST['email_otp']);
$mobile_otp=mysql_real_escape_string($_REQUEST['mobile_otp']);
echo "select * from ".PREFIX."online_prospectus where email_otp='".$email_otp."' and mobile_otp='".$mobile_otp."'";
$sql="select * from ".PREFIX."online_prospectus where email_otp='".$email_otp."' and mobile_otp='".$mobile_otp."'";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
if($count==1){
	echo"hiiiiii";
}
}*/
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
      <li class="active"><a href="index">Home</a></li>
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
				<h5>Sign In Login</h5>
				<b style="color:#f6fc0d; font-size:25px;" id="msg"></b>
					<form id="login" >
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Email Id</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email Id"/>
									
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<button type="submit" id="Login"class="btn btn-primary btn-lg btn-block login-button">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script>
  $('#login').submit(function(event){
	event.preventDefault();
	 var email = $("#email").val();
  var password = $("#password").val();
  if(email==''||password=='')
 {
  alert("Please Fill Email And Password");
  return false;	
 }
else{ 
	$.ajax({
		type:'POST',
		url:'userlogin',
		data:{login:1,email:email,password:password},
		success: function (response) {
			if(jQuery.trim(response)==="User Login successfully")
			{
				window.location="main";
			}
			else{
				$('#msg').html(response);
			}
		}
	});
}
		return false; 
});
		
</script>
	</body>
</html> 