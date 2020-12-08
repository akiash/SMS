	<?php include('header.php'); 
      
?>
	
	<!-- Bottom header -->
			<div class="template-header-bottom">
				<div class="template-header-bottom-background template-header-bottom-background-img-1 template-header-bottom-background-style-1">
							
						</div>
			</div>	
			</div>
     <!------------------------------------ Content------------------------------------>
<div class="template-content" style="margin-bottom: 0px;" style="margin-top: 0px;"  >
<div class="template-main">
								<h1>VIDEO GALLERY</h1>
								<h6>Videos Of School Events</h6>
							</div>
	<div class="template-content-section template-padding-bottom-5">
		<!-- Main -->
		<div class="template-content-section template-padding-bottom-5">
			<div class="template-main">
				<div class="row">
					<span class="col-lg-12 col-md-12 col-sm-12">
						<div class="wpb_wrapper" style="padding-left:30px" style="padding-right:20px">
							<p> BHASHA SANGAM <strong>DGSG Public School</strong> celebrate the diversity of Indian culture, the unique feature of
							our country, The  Bhasha Sangam initiative under the Ek Bharat Shreshtha Bharat ushers schools & educational
							institutions to provide multilingual exposure to students in India languages listed under schedule 8 of constitution
							of India. DGSG Public school took part in this event and different languages have been introduced in assembly time.  </p>						
						</div>
					</span>
				</div>
	<!-------------------------------------End Content--------------------------------------------------------->
	 <!------------------------------------------------Start Video Section---------------------------------->
				<?php
				$conn=mysqli_connect('localhost','root','');
				mysqli_select_db($conn,'myroject_db'); 
			    $q="SELECT * FROM tb_youtube_video where status='1' order by id desc ";
								$query=mysqli_query($conn,$q) or die ("enable to query".mysqli_error($conn));					
	                      
								$i=1;					
								while ($row = mysqli_fetch_array($query))

								{ 				
				?>
					<span class="col-lg-6 col-md-6 col-sm-6" style="padding-left:30px">
					    <h4>TITLE: <?php echo $row['title']; ?></h4>
						<iframe width="560" height="315" src="<?php echo $row['link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</span>  
				<?php $i++; if($i%2==0 and $i<>0){ echo "<br>"; }  } ?>
				<!----------------------------------------------------End Video Section----------------------->	
			</div>
		</div>
	</div>
</div>				
	<?php include('footer.php');
	?>
	