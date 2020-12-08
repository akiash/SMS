<html>
<head>
<title></title>
	
    <link href="bt/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="ft/css/font-awesome.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bt/dist/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="header.css">
	
	<script type = "text/javascript" src = "myjs.js"></script>
	<script type = "text/javascript"  language="javascript">

	</script>
	
</head>
<body>
    <div class="cont">
	  <div id="header">
        
		<nav class="navbar"  data-spy="affix" data-offset-top="197">
		
		    <div class="col-md-12" style=" height:70px; margin-top:-10px; box-shadow: 0 0 2px rgba(0,0,0,0.2);">
		        <div class="col-md-4" id="" style=" height:320px">
			             
				</div>
			
			    <div class="col-md-8" style=" height:320px%;">
                    <ul class="nav navbar-nav navbar-right">

					    <li role="none">
     				      	<a role="menuitem" href="index.php" onclick="">
                                <b> <?php  echo $_SESSION['EMAIL']; ?></b>
					        </a>
  				     	</li>
				     	<li role="none">
					        <div class="signupfree">
						        <a class="btn btn-primary signupfree" role="button" href="registration.php" onclick="">
                                    <b> <?php  echo $_SESSION['NAME']; ?> </b>
						        </a>

						    </div>
					    </li>	
						<li role="none">
					        <div class="signupfree">
						        <a class="btn btn-danger signupfree" href="Admission-list.php" role="button" >
                                 Online Admission                             
						        </a>
						    </div>
					    </li>
						
						<li role="none">
					        <div class="signupfree">
						        <button class="btn btn-danger signupfree" role="button" >
                                 LOGOUT                             
						        </button>
						    </div>
					    </li>	
                    </ul>
				</div>
			</div>
			
        </nav>
      </div>
	</div>
</body>
</html><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   $("button").click(function()
   {
         var r = confirm("Are you Sure!");
	  if (r == true) {
		    window.location.href = 'logout.php';

	  } else {
		//alert("sanjay");//txt = "You pressed Cancel!";
	  }
	});
});
</script>













