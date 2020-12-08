<?php 
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'myroject_db'); 

include('header.php');
$upload_type = 'Syllabus';
?>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<div class="template-header-bottom-background template-header-bottom-background-img-1 template-header-bottom-background-style-1">
							
						</div>
			</div>
		</div>
		<!-- Content-->
		<div class="template-content" style="margin-bottom: 0px;">
		<div class="template-main">
								<h1>Academic</h1>
								<h6>SYLLABUS</h6>
							</div>
			<div class="template-content-section template-padding-bottom-5">

				<!-- Main -->
				<div class="template-content-section template-padding-bottom-5">
					<div class="template-main">
						<div class="template-align-center">
									<h3>Syllabus</h3>
								<div class="template-layout">
									<table class="tg" style="width:100%">
										<tr>
											<th class="tg-yw4l">Sr.No</th>
											<th class="tg-yw4l">Description</th>
											<th class="tg-yw4l">Date</th>
											<th class="tg-yw4l">Class</th>
											<th class="tg-yw4l">Section</th>
											<th class="tg-yw4l">Action</th>
										</tr>
										<?php 
										$i = 1;
										$query ="SELECT * FROM uploads where upload_type like '%".$upload_type."%' order by date desc" or die(mysqli_error());
										$rs=mysqli_query($conn,$query);
										while ($row = mysqli_fetch_array($rs))
										{ ?>
            								<tr><td><?php echo $i; ?></td><td><?php echo $row['upload_desc']; ?></td><td><?php echo $row['date']; ?></td><td><?php echo $row['class']; ?></td><td><?php echo $row['section']; ?></td><td><a href="http://localhost/Myproject/Admin/<?php echo $row['file']; ?>" class="btn btn-small" target="_blank"><i class="licon-download"></i>Download</a></td></tr>
																				  
										<?php ++$i;
										}
										 ?>
									</table>
								</div>
							</div>
							</div>
							</div>
							
				

			</div>
		</div>
	<?php include('footer.php');
?>