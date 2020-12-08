<?php 
include('header.php');

?>

			<!-- Bottom header -->
			<div class="template-header-bottom">
				<div class="template-header-bottom-background template-header-bottom-background-img-1 template-header-bottom-background-style-1">
							<div class="template-main">
								<h1>Academic</h1>
								<h6>EVENTS AND HOLIDAYS</h6>
							</div>
						</div>
			</div>
		</div>

		<!-- Content-->
<div class="template-content" style="margin-bottom: 0px;">
	<div class="template-content-section template-padding-bottom-5">
		<!-- Main -->
		<div class="template-content-section template-padding-bottom-5">
			<div class="template-main">
				<!--div class="template-align-center"-->
				<h3>EVENTS & HOLIDAYS</h3>
				<div class="row">
				<div class="col-sm-12">
				
				<div class="template-component-accordion">
				<!-- Header 1 -->
				<?php 
					
				$month_sql = mysql_query("SELECT * FROM tb_month") or die(mysql_error());
				while ($month = mysql_fetch_array($month_sql))
				{ ?>
				<h6><a href="#">Events & Holiday Scheduled in <?php echo $month['month']; ?></a></h6>
				<!-- Content 1 -->
				<ul>
					<p>
						<?php 
						$i = 1;
						$m = $month['sr'];
						$m1 = date('F', strtotime($m));
						$event_sql = mysql_query("SELECT * FROM tb_event_calendar where month = '".$m1."' order by Event_Date asc") or die(mysql_error());
						//echo "ram";
						while ($event_row = mysql_fetch_array($event_sql))
						{ ?>
						<hr>
							<li><h5><?php echo $event_row['Event_Date']; ?></h5></li>
							<li><b><?php echo $event_row['Event_Name']; ?></b></li>
						<hr>
						<?php ++$i;
						}
						 ?>
					</p>
				</ul>

				<?php
				}
				?>

				</div>
			    </div>
			    </div>
		    </div>
		</div>
	</div>
</div>
	<?php include('footer.php');
?>