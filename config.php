<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'myroject_db'); 
$q="select * from uploads";
$rs=mysqli_query($conn,$q) or die ("enable to query".mysqli_error($conn));

while($r=mysqli_fetch_array($rs)){
		
		echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td><img src='images//$r[3]' height='50' width='50'></td><td><a href='del.php?delid=$r[0]'>delete</a> &nbsp;</td><td><a href='update.php?editid=$r[0]'>Edit</a></td></tr>";
	}



/*--$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myroject_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "";
} catch(PDOException $e) {
  echo " " . $e->getMessage();
}



*/
?>   