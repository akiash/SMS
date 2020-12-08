<?PHP
session_start();


if (isset($_SESSION['EMAIL']))
{
    //Do stuff
}else
{

  header('location:index.php');

}
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'myroject_db');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
	    function loadData(){
			var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4)
				{
                document.getElementById("mydata").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "ajaxdata.php", true);
        xmlhttp.send();
		} 
		
  
  </script>
</head>
<body>
<?php include("header.php"); ?>
<div class="container">
	
    <div class="we" id="mydata">
	<a name="bt" value="Load Data" onclick="loadData()" style="background:red"><center>CLICK HERE TO GET ADMISSION LIST......</center></a>
	</div>

</div>
</body>
</html>