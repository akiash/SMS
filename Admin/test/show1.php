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


<?php include("header1.php"); ?>
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
		<th scope="col">STREAM</th>
		<th scope="col">GENDER</th>
		<th scope="col">DOB</th>
		<th scope="col">SESSION</th>
		<th scope="col">STUDENT WATSAPP NO.</th>
		<th scope="col">MOTHER's NAME</th>
		<th scope="col">MOTHER's OCCUPATION</th>
		<th scope="col">MOTHER's ANNAUL INCOME</th>
		<th scope="col">FATHER's NAME</th>
		<th scope="col">FATHER's OCCUPATION</th>
		<th scope="col">FATHER's ANNUAL INCOME </th>
		<th scope="col">RELIGION</th>
		<th scope="col">CATEGORY</th>
		<th scope="col">REGISTRATION DATE</th>
		<th scope="col">GUARDIAN's NAME</th>
		<th scope="col">CONTACT NO.</th>
		<th scope="col">RELATION</th>
        <th scope="col">ADDRESS</th>
		<th scope="col">MOBILE NO.</th>
		<th scope="col">CORRES. ADDESS</th>
		<th scope="col">MOBILE NO.</th>
		<th scope="col">SCHOOL NAME & ADDRESS</th>
		<th scope="col">CLASS</th>
		<th scope="col">SESSION</th>
		<th scope="col">CURRICULUM</th>
		<th scope="col">SUBJECT</th>
		<th scope="col">TRANSPORT</th>
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
								<td><?php echo $row['stream'];?></td>
								<td><?php echo $row['gender'];?></td>
								<td><?php echo $row['dob'];?></td>
								<td><?php echo $row['session'];?></td>
                                <td><?php echo $row['mobile2'];?></td> 
								<td><?php echo $row['mot_name'];?></td>
                                <td><?php echo $row['mot_occ'];?></td>
								<td><?php echo $row['mot_income'];?></td> 
                                <td><?php echo $row['fat_name'];?></td>
								<td><?php echo $row['fat_occ'];?></td>
								<td><?php echo $row['fat_income'];?></td>
								<td><?php echo $row['religion'];?></td>
								<td><?php echo $row['category'];?></td>
								<td><?php echo $row['do_adm'];?></td>
								<td><?php echo $row['guard_name'];?></td>
								<td><?php echo $row['guard_no'];?></td>
								<td><?php echo $row['guard_relation'];?></td>
								<td><?php echo $row['address'];?></td>
								<td><?php echo $row['mobile'];?></td>
								<td><?php echo $row['address_co'];?></td>
						        <td><?php echo $row['mobile_co'];?></td>
								<td><?php echo $row['school1_name'];?></td>
								<td><?php echo $row['school1_class'];?></td>
								<td><?php echo $row['school1_session'];?></td>
								<td><?php echo $row['school1_curri'];?></td>
								<td><?php echo $row['school1_sub'];?></td>
								<td><?php echo $row['is_transport'];?></td>
								
								</tr> <?php 
								$i++; }  ?>
    </tbody>
  </table>
  </center>
</div>

</body>
</html>