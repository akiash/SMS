<?php
//include_once('config/configure.php');
//include_once('includes/auth.php');
//require_once('includes/function/autoload.php');
//require_once('includes/function/functions.php');

    if(isset($_POST['submit']) && $_POST['submit']=='AddVideo')
    {
    	$uploadOk=1;
    	 $maxsize = 5242880; // 5MB
	    $caption = $_POST['caption'];
	    $url     = $_POST['url'];  
	    $class     = $_POST['class'];   
	  	$today =  date('Y-m-d');
		$sess =   $_SESSION['SESSION'];
	

		 $F_name = $_FILES['video']['name'];
		 $F_tmp = $_FILES['video']['tmp_name'];
		 echo  $video = "video/".$F_name;
		 move_uploaded_file($F_tmp,$video); 
		 $success = header('Location: http://www.xcvate.in/websites/video/transfer.php?video='.$F_name); 
		// header('Location: video-master.php');
		  die;


		  // ==================== NEW  FOR FTP UPLOAD ========================

		  			/*

					$ftp_server = "xcvate.in";
					$ftp_user_name = "xcvatqlv";
					$ftp_user_pass = "Ashish170491!@#2571";
					$ftp_port = "21";
					$destination_file = "/public_html/websites/video/";
					$source_file = $_FILES['video']['tmp_name'];

					// set up basic connection
					$conn_id = ftp_connect($ftp_server,$ftp_port);

					// login with username and password
					$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 
					// ftp passive cmd
					ftp_pasv($conn_id, true);

					// check connection
					if ((!$conn_id) || (!$login_result)) { 


							$msg='<div class="alert alert-success alert-dismissable">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<strong><i class="icon fa fa-check"></i>Success!</strong>
					FTP connection has failed!...<br>Attempted to connect to $ftp_server for user $ftp_user_name..!
					</div>';
			        ?><script type="text/javascript">setInterval(function () {window.location.href="video-master.php"}, 3000);</script><?php


					     exit;

					} else {
					    echo "Connected to $ftp_server, for user $ftp_user_name";
					}

					// upload the file
					$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY); 

					// check upload status
					if (!$upload) { 
					echo "FTP upload has failed!";
					} else {
					echo "Uploaded $source_file to $ftp_server as $destination_file";
					}

					// close the FTP stream 
					ftp_close($conn_id);  */

		  // =================  END ====================================


		$videoFileType = strtolower(pathinfo($F_name,PATHINFO_EXTENSION));
		// Allow certain file formats
		if($videoFileType != "mp4")
		{
			$msg='<div class="alert alert-success alert-dismissable">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<strong><i class="icon fa fa-check"></i>Success!</strong>
					Sorry, only mp4 files are allowed....!
					</div>';
			        ?><script type="text/javascript">setInterval(function () {window.location.href="video-master.php"}, 3000);</script><?php
   
		    
		    $uploadOk = 0;
		}


		// Check if file already exists
		if (file_exists($F_name))
		 {
		 	 $msg='<div class="alert alert-success alert-dismissable">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<strong><i class="icon fa fa-check"></i>Success!</strong>
					Sorry, file already exists...!
					</div>';
			        ?><script type="text/javascript">setInterval(function () {window.location.href="video-master.php"}, 3000);</script><?php

		   
		    $uploadOk = 0;
		}

		if($uploadOk==1)
		{
			if(($_FILES['video']['size'] >= $maxsize) || ($_FILES["video"]["size"] == 0)) 
			{
				$msg='<div class="alert alert-success alert-dismissable">
				<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
				<strong><i class="icon fa fa-check"></i>Success!</strong>
				File too large. File must be less than 5MB...!
				</div>';
		        ?><script type="text/javascript">setInterval(function () {window.location.href="video-master.php"}, 3000);</script><?php

				
			}else
			{

					$res = mysql_query("INSERT INTO `tb_video` SET `caption`='$caption',`url`='$url',`class`='$class',`date`='$today',`session`='$sess',`video`='$video'");
			    if($res)
			    {
				        $msg='<div class="alert alert-success alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<strong><i class="icon fa fa-check"></i>Success!</strong>
						Video added Successfully..!
						</div>';
				        ?><script type="text/javascript">setInterval(function () {window.location.href="video-master.php"}, 3000);</script><?php
			    }   

			}
		}else
		{

			 $msg='<div class="alert alert-success alert-dismissable">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<strong><i class="icon fa fa-check"></i>Success!</strong>
					Sorry, your file was not uploaded...!
					</div>';
			        ?><script type="text/javascript">setInterval(function () {window.location.href="video-master.php"}, 3000);</script><?php	
   

		}

		
	}

	if($_REQUEST['action']=='del')
	{
		$id=$_REQUEST['id'];
		$res2=mysql_query("Delete FROM tb_video WHERE id='".$id."'");
		if($res2){
	        $msg='<div class="alert alert-success alert-dismissable">
			<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
			<strong><i class="icon fa fa-check"></i>Success!</strong>
			Video deleted Successfully..!
			</div>';
	        ?><script type="text/javascript">setInterval(function () {window.location.href="video-master.php"}, 3000);</script><?php
	    }
	}
?>
<?php headContentTop(); ?>
<?php include('headermenu.php'); ?>
<div class="container">
    <h3>Video Master</h3>
	<div class="row">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="row">
					<div class="col-md-6 text-left">
						<strong><span class="glyphicon glyphicon-facetime-video"></span> Add New Video</strong>
					</div>   
				</div>
			</div>
			<div class="panel-body">
			<?php echo $msg;?>
			<form id="add-videos" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
				<div class="col-sm-3">
						<label class="control-label col-sm-2" style="text-align:left">Class</label>
							<select  name="class" class="form-control"  style="z-index:1000;" >
								<option value="">--</option><?php ClassList() ?>
							</select>
				</div>
					<div class="col-sm-3">
					<label class="control-label col-sm-5" for="caption" style="text-align:left">Enter Caption</label>
						<input type="text" class="form-control" name="caption" id="caption" placeholder="Caption" required>
					</div>
					<div class="col-sm-3">
					<label class="control-label col-sm-2" for="url" style="text-align:left">URL</label>
						<input type="text" class="form-control" name="url" id="url" placeholder="URL" required>
					</div>
					<div class="col-sm-3">
					<label class="control-label col-sm-2" for="url" style="text-align:left">Video</label>
						<input type="file" class="form-control" name="video" id="video" placeholder="video" required>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<center>
					<button type="submit" name="submit" value="AddVideo"class="btn btn-primary btn-md">Submit	</button>
					<button type="reset" class="btn btn-danger btn-md">Reset</button>
				</center>
			</div><!--.panel-footer-->
			</form> 
		</div>
		
		<div class="panel-group">
			<div class="panel panel-danger">
				<div class="panel-heading"><strong><span class="glyphicon glyphicon-facetime-video"> LIST VIDEO</strong></div>
				<div class="panel-body">
					<div class="col-sm-12">
						<table id="testTable" class="table table-striped">
							<thead>
								<tr>
									<th style="width:20px;">S.No</td>
									<th style="width:50px;">URL</td>
									<th style="width:50px;">Class</td>
									<th style="width:50px;">Caption</td>
									<th style="width:50px;">Status</td>
									<th style="width:50px;">Action</td>
								</tr>
							</thead>
							<tbody>
							<?php 
							    $i='0';
								$result=mysql_query("select * FROM tb_video ORDER BY id DESC");
								while($rows=mysql_fetch_assoc($result))
								{ $i++;
							?>
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $rows['url'];?></td>
									<td><?php echo $rows['class'];?></td>
									<td><?php echo $rows['caption'];?></td>
									<td>
									<?php if($rows['status']==1){?>
										<button class="btn btn-success btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="Enable"><strong>Enable</strong></button>
                                    <?}else{ ?>	
                                        <button class="btn btn-danger btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="Disable"><strong>Disable</strong></button>
                                    <?php } ?>										
									</td>
									<td><a href="update-video.php?action=update&id=<?php echo $rows['id'];?>" onclick="return confirm('Are you want to sure Update Information');" class="btn btn-info btn-xs" role="button"><span class="glyphicon glyphicon-edit-circle"></span>Edit</a></td>
									
									<td><a href="video-master.php?action=del&id=<?php echo $rows['id']; ?>" onClick="return confirm('Are you want to sure Delete Information');" class="btn btn-danger btn-xs " role="button"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div> 
	</div>
	</div>
	<script>
            $("#fileUploadForm").onclick(function (e) {
                e.preventDefault();
                var action = "requests.php?action=upload";
                $("#uploadingmsg").html("Uploading...");
                var data = new FormData(e.target);
                $.ajax({
                    type: 'POST',
                    url: action,
                    data: data, 
                    /*THIS MUST BE DONE FOR FILE UPLOADING*/
                    contentType: false,
                    processData: false,
                }).done(function (response) {
                    $("#uploadingmsg").html("");
                    $("#json").html(JSON.stringify(response, null, 4));
                    //https://storage.googleapis.com/[BUCKET_NAME]/[OBJECT_NAME]
                    $("#output").html('<a href="https://storage.googleapis.com/' + response.data.bucket + '/' + response.data.name + '"><i>https://storage.googleapis.com/' + response.data.bucket + '/' + response.data.name + '</i></a>');
                    if(response.data.contentType === 'image/jpeg' || response.data.contentType === 'image/jpg' || response.data.contentType === 'image/png') {
                        $("#output").append('<br/><img src="https://storage.googleapis.com/' + response.data.bucket + '/' + response.data.name + '"/>');
                    }
                }).fail(function (data) {
                    //any message
                });
            });  
        </script>
  <?php headContentBottom(); ?>
  <?php include_once('footer.php'); ?>
<?php include('footer.php'); ?>