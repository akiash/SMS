
<?php
session_start(); 

$conn=mysqli_Connect('localhost','root','')or die("enable to connect".mysqli_error($conn));
mysqli_select_db($conn,'myroject_db')or die("enable to database".mysqli_error($conn));

$msg="";
if(isset($_REQUEST['submit']))
{
	
	$username=$_REQUEST['email'];
	$pass=$_REQUEST['password'];
	
$q="select * from aki3 where email='$username' and password='$pass'";
$rs=mysqli_query($conn,$q)or die("Enable to execute query ".mysqli_error($conn));

//print_r($rs);
while($data=mysqli_fetch_array($rs)){
	$_SESSION['EMAIL'] = $data['email'];
	$_SESSION['NAME'] = $data['fname'];
	$_SESSION['IMG'] = $data['image'];
}

$x=mysqli_num_rows($rs);
if($x>0){

	echo "<h2>login success</h2>";
	header('location:Uploads.php');
}
else{
	echo "<h2>Invlaid user Name or Password</h2>";
}
}
?>
<html>
<head>
<title></title>
	
    <link href="bt/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="ft/css/font-awesome.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bt/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="login1.css">
</head>



<body>

    <div class="cont">
	<?php include("indexhead.php"); ?>
	    <!-- head -->
       
	    <div class="row"></div>
		<div class="row">
		<div class="col-md-4" style=""></div>
		<div class="col-md-4" id="content" style="height:100px">
		    <div class="page-header">
			    <h1>Sign In</h1>
			</div>
				
			<form action="" method="POST">
			    <div class="form-group">
                    <div class="controls">
                        <label for="email" class="email-label">
                        Email Address</label>
                        <input type="email" id="email" required="" name="email" class="form-control input " autocomplete="new-email" maxlength="128" placeholder="Email Address" value="" wtx-context="DD282BCE-FE69-4BA3-8E33-95BCEF9C2EF3">
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <label for="password" class="password-label">
						Password</label>
                        <div class="form-item-flex-wrap">
                        <input type="password" id="password" required="" name="password" autocomplete="new-password" class="form-control input" maxlength="32" placeholder="Password" wtx-context="4FD82284-DC1D-482A-862A-A3286AEFB98D">
                            <a class="position-button" href="">Forgot password?</a>
                        </div>
                    </div>
                </div>
				
				
                <div class="form-group">
                    <div class="controls">
                        <!--<div class="signin">
                            <a href="" role="button" class="btn btn-primary submit signin user">Sign In</a>
                                    <i class="busy busy24" style="display:none;"></i>
                        </div>-->
						<input type="submit" value="Sign In" name="submit" class="btn btn-primary submit signin user">
                    <div class="forgot">
                        <div class="left ">
                            <label class="checkbox">
                            <input type="checkbox" id="keep_me_signin" name="keep_me_signin" checked="checked">
                            Stay signed in</label>
                        </div>
                        <div class="right">
                        New to LiVE ClaSSrOOm? <a href="">Sign Up Free</a>
					    </div>
                    </div>
                    </div>
                </div>
            </form>
            <div class="form-group">
                <p class="ride-line"><span>or</span></p>
                    <a class="login-btn login-btn-google" href="">
                    Sign in with Google</a>
                    <a class="login-btn login-btn-facebook" href="">
                    Sign in with Facebook</a>
                <div class="">
                </div>
                <p style="text-align: center; color: #747487; font-size: 14px;" class="mgt-xl pdt-md">
                By signing in, I agree to the <a target="_blank" href="">Privacy Policy</a> and
				<a target="_blank" href="">Terms of Service</a>.</p>
            </div>

			</div>
		</div>
		
		<div class="col-md-4" style=""></div>
		
	</div>
</body>
</html>

