
<?php 

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'myroject_db'); 

if(isset($_REQUEST['class']))
{
}else{  ?>
<script>
let password = prompt('Please Enter Password');
if(password=='ash')
{
}else
{
    window.location.href = 'holida_homework.php';
}
</script>

<?php
} ?>


<?php include('header.php');
$upload_type = 'Homework';

?>
<style>
  select{
  width:33.33%;
    margin: 5px 28px 22px 28px;
    display: inline-block;
    height: 32px;
    border-radius: 1px;
	background-color:#eee;
	padding:0px;
}
select:focus {
  background-color: #ddd;
  outline: none;
}
.subbtn{
    background-color: #4CAF50;
  color: white;
  padding: 4px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  opacity: 0.9;
}
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  border:1px solid black;
}

.pagination a.active {
  background-color: #4267B2;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
	<!-- Content-->

	<div class="template-content" style="margin-bottom: 0px;">

		<div class="template-content-section template-padding-bottom-5">
		
		    <!-- Bottom header -->

			<div class="template-header-bottom">

				<div class="template-header-bottom-background template-header-bottom-background-img-1 template-header-bottom-background-style-1">

					<div class="template-main">

						<h1>Academic</h1>

						<h6>HOLIDAY HOMEWORK</h6>

					</div>

				</div>

			</div>

			<!-- Main -->

			<div class="template-content-section template-padding-bottom-5">

				<div class="template-main">

					<div class="template-align-center">

						<h3>Holiday Homework</h3>
							<center>
								<form action="#" method="POST">
									<select name="class">

									<option selected> --Select  Class--</option>
										<?php

									$query="SELECT DISTINCT class FROM uploads where upload_type like '%".$upload_type."%' and session='2020-2021' order by section  asc";
									$data=mysqli_query($conn,$query) or die ("enable to query".mysqli_error($conn));

									while($class=mysqli_fetch_array($data)){
										?>
									   

									<option value="<?php echo $class['class']; ?>"><?php echo $class['class']; ?></option>

									<?php    
									}
									?>
									</select>
									<select name="section" onchange="this.form.submit()">
									<option selected> --Select  Section--</option>
									<?php

									$q="SELECT DISTINCT section FROM uploads where upload_type like '%".$upload_type."%' and session='2020-2021' order by section  asc";
									$rs=mysqli_query($conn,$q) or die ("enable to query".mysqli_error($conn));

									while($r=mysqli_fetch_array($rs)){?>


											<option value="<?php echo $r['section']; ?>"><?php echo $r['section']; ?></option>

										<?PHP	
										
									}
									?>

									</select>
									<input type="submit" name="search"  value="submit" class="subbtn" disabled>
									<br><br>
									<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Class.." title="Type in a class" style="width:20%;border:1px solid">
														<br/>
								</form>
							</center>
							<br><br>
                            <div class="template-layout" style="overflow-x:auto;">

								<table class="tg" style="width:100%" id="myTable">

									<tr>

										<th class="tg-yw4l">Sr.No</th>

										<th class="tg-yw4l">Description</th>

										<th class="tg-yw4l">Date</th>

										<th class="tg-yw4l">Class</th>

										<th class="tg-yw4l">Section</th>

										<th class="tg-yw4l">Action</th>

									</tr>

									<?php 

				

									//========== FOR PAGINATION  ==================//


									 if (isset($_GET['pageno'])) {
												$pageno = $_GET['pageno'];
											} else {
												$pageno = 1;
											}
											$no_of_records_per_page = 10;
											$offset = ($pageno-1) * $no_of_records_per_page;

											$sql="SELECT * FROM uploads where upload_type like '%".$upload_type."%' and session='2020-2021'";
											$total_pages_sql=mysqli_query($conn,$sql) or die ("enable to query".mysqli_error($conn));

										   //$total_pages_sql =mysqli_query("SELECT * FROM uploads where upload_type like '%".$upload_type."%' and session='2020-2021'") or die(mysql_error());
											$total_rows=mysqli_num_rows($total_pages_sql);
											$total_pages = ceil($total_rows / $no_of_records_per_page);


									// =========  END PAGINATON ==================//

									$today =  date('Y-m-d');

									$dat = strtotime("-1 day");
									$yesterday =  date('Y-m-d', $dat);

											$i = ($offset+1);

                                         
										 
									if(isset($_REQUEST['class']))
									{

										//$query = mysqli_query("SELECT * FROM uploads where upload_type like '%".$upload_type."%' and session='2020-2021' and class='".$_REQUEST['class']."' and section='".$_REQUEST['section']."'  order by class,section  asc ") or die(mysql_error());
										
										
									$q="SELECT * FROM uploads where upload_type like '%".$upload_type."%' and session='2020-2021' and class='".$_REQUEST['class']."' and section='".$_REQUEST['section']."'  order by class,section  asc ";
									$query=mysqli_query($conn,$q) or die ("enable to query".mysqli_error($conn));
									}else{

									$q="SELECT * FROM uploads where upload_type like '%".$upload_type."%' and session='2020-2021'  order by class,section  asc ";
									$query=mysqli_query($conn,$q) or die ("enable to query".mysqli_error($conn));
									 
									 
									//$query = mysqli_query("SELECT * FROM uploads where upload_type like '%".$upload_type."%' and session='2020-2021'  order by class,section asc  LIMIT $offset, $no_of_records_per_page ") or die(mysql_error());

									} 


									while ($row = mysqli_fetch_array($query))

									{ ?>

										<tr>

											<td><?php echo $i;?></td>

											<td><?php echo $row['upload_desc'];?></td>

											<td><?php echo $row['date'];?></td>

											<td><?php echo $row['class'];?></td> 

											<td><?php echo $row['section'];?></td>

											<td><a href="http://localhost/Myproject/Admin/<?php echo $row['file'];?>" class="btn btn-small" target="_blank"><i class="licon-download"></i>Download</a></td>

										</tr>

									<?php ++$i; } ?>

								</table>
                              
						    </div>
                      
					</div>
                   
				</div>
				
			</div>
                   

		</div>

	</div>
     
<?php include('footer.php');?>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>