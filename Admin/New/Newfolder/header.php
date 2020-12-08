
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>User Dropdown Header</title>

	<link rel="stylesheet" href="demo.css">
	<link rel="stylesheet" href="header-user-dropdown.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>


</head>

<body>

	<header class="header-user-dropdown">

		<div class="header-limiter">
			<h1><a href="#">Company<span>logo</span></a></h1>

			<nav>
				<a href="Admission-list.php">Online Admission <span class="header-new-feature">new</span></a>
			</nav>


			<div class="header-user-menu">
				<img src="<?php  echo $_SESSION['IMG'];?>" alt="<?php  echo $_SESSION['IMG'];?>"/>

				<ul>
					<li><a href="#">Settings</a></li>
					<li><a href="#" class="highlight" id="lout">Logout</a></li>
				</ul>
			</div>

		</div>

	</header>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

	$(document).ready(function(){

		var userMenu = $('.header-user-dropdown .header-user-menu');

		userMenu.on('touchend', function(e){

			userMenu.addClass('show');

			e.preventDefault();
			e.stopPropagation();

		});

		// This code makes the user dropdown work on mobile devices

		$(document).on('touchend', function(e){

			// If the page is touched anywhere outside the user menu, close it
			userMenu.removeClass('show');

		});

	});

</script>
</html><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   $("#lout").click(function()
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
</body>
</html>

