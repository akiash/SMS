	<?php include('header.php');
	?>
			<!-- Bottom header -->
			<div class="template-header-bottom">
				<div class="template-header-bottom-background template-header-bottom-background-img-1 template-header-bottom-background-style-1">
							<div class="template-main">
								<h1>SCHOOL GALLERY</h1>
								<h6>Pictures Of School Events</h6>
							</div>
			    </div>
			</div>
		</div>
<link rel="stylesheet" type="text/css" href="gallery/resources/UberGallery.css" />
<link rel="stylesheet" type="text/css" href="gallery/resources/colorbox/1/colorbox.css" />
		<!-- Content-->
		<div class="template-content" style="margin-bottom: 0px;">
			<div class="template-content-section template-padding-bottom-5">

				<!-- Main -->
				<div class="template-content-section template-padding-bottom-5">
					<div class="template-main">
						<div class="template-align-center">
									
								<div class="template-layout">
								<?php 
$folderlist = array();
$somePath = "gallery/gallery-images";
$directories = glob($somePath . '/*' , GLOB_ONLYDIR);
$n=0;			
if(isset($_REQUEST['folder']) and $_REQUEST['folder']<>'') {
ini_set('memory_limit',-1);
	echo "<a href='gallery.php'> < < < GO BACK TO GALLERY</a>";
			$folder=  "gallery/gallery-images/".$_REQUEST['folder']; 
			echo "<h3 class='cursive text-center'>".strtoupper($_REQUEST['folder'])."</h3>";	
include_once('gallery/resources/UberGallery.php');
$gallery = UberGallery::init()->createGallery($folder); 				
				
}	else {
	

foreach($directories as $folder)
{ 
	echo"<a href='gallery.php?folder=".str_replace("gallery/gallery-images/", "",  $folder)."'>
	<div class='col-md-3 text-center' style='margin-bottom:25px;' >";
	if ($handle = opendir($folder)) {

    while (false !== ($entry = readdir($handle))) {

        if (strpos($entry, 'jpg') !== false or strpos($entry, 'JPG') !== false  ) {

            $image = $entry;
        }
    }
	echo "<img src='".$folder."/cover.jpg'  style='width:200px;height:200px; border: 2px solid black;box-shadow: 4px 4px 12px grey;' /><br/><br/>";
	
	echo "<h3 class='cursive'>".ucwords(str_replace("gallery/gallery-images/", "", $folder))."</h3>";
	echo "</div></a>";
    closedir($handle);
}

$n++;
if($n % 4 == 0) {
	echo "</div><div class='row'></div>";
}

}
}			
?>
								
								</div>
							</div>
						
							</div>
							</div>
			</div>
		</div>
		
		<link rel="stylesheet" href="style/lightbox.css">
<script src="script/lightbox.min.js" type="text/javascript"></script>
<script>
var lightbox = new Lightbox();
lightbox.load();
</script>


<script>
$(function() {
    $('.pop').on('click', function() {
        $('.imagepreview').attr('src', $(this).find('img').attr('src'));
        $('#imagemodal').modal('show');   
    });     
});
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- end of #widgets -->
	<?php include('footer.php');
	?>