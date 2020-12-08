<?php  

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
</head>
<body>


<?php include("header.php"); ?>
<div class="container">
<center>
  <h1><center> ONLINE ADMISSION LIST </center></h1>
					<br><hr><br>     
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">NAME</th>
        <th scope="col">CLASS</th>
		<th scope="col">REGISTRATION NO.</th>
		<th scope="col">REGISTRATION DATE</th>
		<th scope="col">GENDER</th>
		<th scope="col">DOB</th>
		<th scope="col">Action</td>
      </tr>
    </thead>
    <tbody>
     <?php $q="SELECT * FROM rses_prospectus_registration where session='2020-2021'  order by stu_name  asc ";
								$query=mysqli_query($conn,$q) or die ("enable to query".mysqli_error($conn));					
	                      
								$i=1;					
								while ($row = mysqli_fetch_array($query))

								{ ?>

							<tr>

								<td><?php echo $i;?></td>
                                 
								<td><?php echo $row['stu_name'];?></td>
								<td><?php echo $row['class'];?></td>
								<td><?php echo $row['reg_no'];?></td>
								<td><?php echo $row['do_adm'];?></td>
								<td><?php echo $row['gender'];?></td>
								<td><?php echo $row['dob'];?></td>
                                <td><a href='del.php?delid=$r[0]'>Show Details</a></td>
								<td><a href='update.php?editid=$r[0]'>Edit</a></td></tr>
								
								</tr> <?php 
								$i++; }  ?>
    </tbody>
  </table>
  </center>
</div>

</body>
</html>