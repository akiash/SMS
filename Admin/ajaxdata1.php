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
  $id=$_GET['shw_id']; $q="SELECT * FROM rses_prospectus_registration where session='2020-2021' and id='$id' order by stu_name  asc ";
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
								$cand_photo = $row['cand_photo'];
								
								}

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

<br><br>
	<form action="#" id="mydata">
        <aside class="right-side">
		    <section class="content">
			    <div class="row">
				<?php  if($_GET['shw_id']){  ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b><i class="fa fa-user">&nbsp;</i>Personal Information</b>
				    </div>
					
					<div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" style="font-size: 16px;">

                                <tbody><tr class="info">
                                    <td style="width: 300px">
                                        <img id="cand_photo" src="../admission/<?php echo $cand_photo; ?>" alt="User Image" class="form-control" style="height: 178px; width: 160px">

                                    </td>
                                    <td style="width: 86%">
                                        <table class="table table-striped table-bordered table-hover">


                                            <tbody><tr>
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Registration NO:</b>
                                                </td>
                                                <td id="txtName"><?php echo $reg_no;?></td>
                                                <td>
                                                    <b class="tRow">Student's Name :</b>
                                                </td>
                                                <td id="txtFather"><?php echo $name;?></td>
												<td>
                                                    <b class="tRow">Class :</b>
                                                </td>
                                                <td id="txtFather"><?php echo $class;?></td>
                                                
                                            </tr>



                                            <tr class="info">
											    <td>
                                                    <b class="tRow">Stream :</b>
                                                </td>
                                                <td id="txtMother"><?php echo $stream;?></td>
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Gender :</b>
                                                </td>
                                                <td id="txtGender"><?php echo $gender; ?></td>
                                                <td>
                                                    <b class="tRow">DOB :</b>
                                                </td>
                                                <td id="txtCategory"><?php echo $dob; ?></td>
                                                
											</tr>
												


                                            <tr>
												<td>
                                                    <b class="tRow">Session:</b>
                                                </td>
                                                <td id="txtDob"><?php echo $session; ?></td>
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Student NO. :</b>
                                                </td>
                                                <td id="txtBloodGroup"><?php echo $stu_waps; ?></td>
                                                
                                            </tr>
											
											<tr class="info">
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Mother's Name :</b>
                                                </td>
                                                <td id="mot_name">Mrs.<?php echo $mot_name; ?></td>
                                                <td>
                                                    <b class="tRow">Father's Name :</b>
                                                </td>
                                                <td id="Fat_name">Mr.<?php echo $fat_name; ?></td>
                                                <td>
                                                    <b class="tRow">Registration Date :</b>
                                                </td>
                                                <td id="reg_date"><?php echo $do_adm; ?></td>

                                            </tr>
											
											<tr>
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Mother's occupation:</b>
                                                </td>
                                                <td id="mot_occ"><?php echo $mot_occ; ?></td>
                                                <td>
                                                    <b class="tRow">Father's Occupation :</b>
                                                </td>
                                                <td id="fat_occ"><?php echo $fat_occ; ?></td>
                                                <td>
                                                    <b class="tRow">Religion :</b>
                                                </td>
                                                <td id="religion"><?php echo $religion; ?></td>

                                            </tr>
											
											<tr class="info">
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Guard Name :</b>
                                                </td>
                                                <td id="guard_name"><?php echo $guard_name; ?></td>
                                                <td>
                                                    <b class="tRow">Guard NO:</b>
                                                </td>
                                                <td id="guard_no"><?php echo $guard_no; ?></td>
                                                <td>
                                                    <b class="tRow">Guard relation :</b>
                                                </td>
                                                <td id="guard_relation"><?php echo $guard_relation; ?></td>

                                            </tr>
											
											<tr>
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Address:</b>
                                                </td>
                                                <td id="address"><?php echo $address; ?></td>
                                                <td>
                                                    <b class="tRow">Mobile No. :</b>
                                                </td>
                                                <td id="mobile"><?php echo $mobile; ?></td>
                                                <td>
                                                    <b class="tRow">Correspondance Add & NO:</b>
                                                </td>
                                                <td id="address_co"><?php echo $address_co && $mobile_co; ?></td>

                                            </tr>
											
											<tr class="info">
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Prev. School :</b>
                                                </td>
                                                <td id="school1_name"><?php echo $school1_name; ?></td>
                                                <td>
                                                    <b class="tRow">Class :</b>
                                                </td>
                                                <td id="school1_class"><?php echo $school1_class; ?></td>
                                                <td>
                                                    <b class="tRow">Board :</b>
                                                </td>
                                                <td id="school1_curri"><?php echo $school1_curri; ?></td>

                                            </tr>
											</tbody>
                                        </table>
                                    </td>
                                </tbody>
							</table>
                        </div>

                    </div>
			    </div><?php }  ?>
			</section>
		</aside>	
	</form>
</body>
</html>