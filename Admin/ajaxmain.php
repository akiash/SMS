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
mysqli_select_db($conn,'myroject_db'); 
  /*$id=$_GET['shw_id']; $q="SELECT * FROM rses_prospectus_registration where session='2020-2021' and id='$id' order by stu_name  asc ";
								$query=mysqli_query($conn,$q) or die ("enable to query".mysqli_error($conn));					
	                      
								$i=1;					
								while ($row = mysqli_fetch_array($query))

								{ 
								$reg_no = $row[1];
								$name  = $row['stu_name'];
								$class = $row['class'];
								$stream = $row['stream'];
								$gender = $row['gender'];
								$dob = $row['dob'];
								$session = $row[5];
								$stu_waps = $row[12];
								$mot_name = $row[13];
								$fat_name = $row[12];
								$do_adm = $row[14];
								$mot_occ = $row[16];
								$fat_occ = $row[15];
								$religion = $row[17];
								$mot_income = $row[19];
								$fat_income = $row[18];
								$category = $row[20];
								$guard_name = $row[21];
								$guard_no = $row[22];
								$guard_relation = $row[23];
								$address = $row[24];
								$mobile = $row[25];
								$address_co = $row[26];
								$mobile_co = $row[27];
								$school1_name = $row[28];
								$school1_class = $row[29];
								$school1_session = $row[30];
								$school1_curri = $row[31];
								$is_transport = $row[32];
								$cand_photo = $row[33];
								
								}*/

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
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
     
    <!--<input type="button" name="bt" value="Load Data" onclick="loadData()">-->
	<br><br>
    <div class="we" id="mydata">
	    <a name="bt" value="Load Data" onclick="loadData()"><center>CLICK HERE TO GET ADMISSION LIST......</center></a>
	</div> 

</div>
</body>
</html>