<?php 

//$conn=mysqli_connect('localhost','root','');
//mysqli_select_db($conn,'myroject_db');

if(isset($_REQUEST['class']))
{
}else{  ?>

<script>
let password = prompt('Please Enter Password');
if(password=='ash')
{
}else
{
    window.location.href = 'video_class.php';
}
</script>

<?php
} ?>

	<?php include('header.php');  
      
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
    background-color: #4267B2;
  color: white;
  padding: 4px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  opacity: 0.9;
}

</style>
	<!-- Bottom header -->
			<div class="template-header-bottom">
				<div class="template-header-bottom-background template-header-bottom-background-img-1 template-header-bottom-background-style-1">
							
						</div>
			</div>	
		
     <!------------------------------------ Content------------------------------------>
			<div class="template-content" style="margin-bottom: 0px;" style="margin-top: 0px;"  >
			<div class="template-main">
								<h1>ONLINE CLASS</h1>
								<h6>Videos Of ONLINE CLASSES</h6>
							</div>
				<div class="template-content-section template-padding-bottom-5">
					<!-- Main -->
					<div class="template-content-section template-padding-bottom-5">
						<div class="template-main">
							<div class="row">
								<span class="col-lg-12 col-md-12 col-sm-12">
									<div class="wpb_wrapper" style="padding-left:30px" style="padding-right:20px">
										<center><p>  <strong>
											<font color="red"> LIVE CLASSES ON DGSG PUBLIC SCHOOL  </font></strong>  </p> </center>					
									</div>
								</span>
							</div>
							
							<!-------------------------------------End Content--------------------------------------------------------->


							<!--<center>
							<form action="#" method="POST">
							<select name="class" onchange="this.form.submit()">
							<option selected value="1"> 1 </option>
							<option selected value="2"> 2 </option>
							<option selected value="3"> 3 </option>
							<option selected value="4"> 4 </option>
							</select>

							<input type="submit" name="search"  value="submit" class="subbtn" disabled>

													<br/>
							</form>
							</center>-->

							<center>
								<form action="#" method="POST">
									<select name="class" onchange="this.form.submit()">

									<option selected> --Select  Class--</option>
										<?php
									$conn=mysqli_connect('localhost','root','');
									mysqli_select_db($conn,'myroject_db');
									$query="SELECT DISTINCT class FROM tb_video where status='1' and session='2020-2021' order by class asc";
									$data=mysqli_query($conn,$query) or die ("enable to query".mysqli_error($conn));

									while($class=mysqli_fetch_array($data)){
										?>
									   

									<option value="<?php echo $class['class']; ?>"><?php echo $class['class']; ?></option>

									<?php    
									}
									?>
									</select>
									<input type="submit" name="search"  value="submit" class="subbtn" disabled>
									<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Class.." title="Type in a class" style="width:20%;border:1px solid">
														<br/>
								</form>
							</center>





								 <!------------------------------------------------Start Video Section---------------------------------->

							<?php 


							$today =  date('Y-m-d');

							$dat = strtotime("-1 day");
							$yesterday =  date('Y-m-d', $dat);

							if(isset($_REQUEST['class']))
							{
									$query="SELECT * FROM tb_video where status='1' and class='".$_REQUEST['class']."' order by id desc";
									$rs=mysqli_query($conn,$query) or die ("enable to query".mysqli_error($conn));
									//$query = mysqli_query("SELECT * FROM tb_video where status='1' and class='".$_REQUEST['class']."' order by id desc") or die(mysql_error());

							}else{

									$query="SELECT * FROM tb_video where status='1'   and date  BETWEEN '".$yesterday."'  AND '".$today."'  order by id desc";
									$rs=mysqli_query($conn,$query) or die ("enable to query".mysqli_error($conn));
									//$query = mysqli_query("SELECT * FROM tb_video where status='1'   and date  BETWEEN '".$yesterday."'  AND '".$today."'  order by id desc") or die(mysql_error());

							} 


							?>

											<?php
										
											$i=0;		
											while($row = mysqli_fetch_array($rs))	
											{						
											?>

												<span class="col-lg-6 col-md-6 col-sm-6" style="padding-left:30px">
													<center><strong><font color="blue">For  <?php echo $row['caption']; ?> </font></strong> </center><br>
													<iframe width="100%" height="315" src="<?php echo $row['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</span> 

											<?php $i++; if($i%2==0 and $i<>0){ echo "<br>"; } 

											 } 


											 ?>
											<!----------------------------------------------------End Video Section----------------------->	
						</div>
								
					</div>
				</div>
				
			</div>					
	<?php include('footer.php');
	?>
	