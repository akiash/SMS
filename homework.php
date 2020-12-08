<?php 

include('header.php');

include('config.php');

$upload_type = 'Homework';

?>

<style>
  input[type=text], input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 7px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}
.cancel{
	background-color: #e60000;
}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

</style>



<?PHP   


if(isset($_POST['submit']))
{
	$my_password = $_POST['pwd'];
		if($my_password=="ash")
		{
			
			header('location:index.php');
			//header("Location: http://www.dgsgpublicschool.com/holida_homework.php");
		//	echo $my_password;

		}
		else{
			echo '<script language="javascript">';
			echo 'alert("Incorrect Password")';
			echo '</script>';
		}
}	
?>

	<!-- Bottom header -->

	<div class="template-header-bottom" >

		<div class="template-header-bottom-background template-header-bottom-background-img-1 template-header-bottom-background-style-1">

			

		</div>

	</div>

	

	<!-- Content-->

	<div class="template-content" style="margin-bottom: 0px;" >
	
		<div class="template-content-section template-padding-bottom-5">

			<!-- Main -->

			<div class="template-content-section template-padding-bottom-5">

				<div class="template-main">
				<div class="template-main">

				<h1>Academic</h1>

				<h6>HOLIDAY HOMEWORK</h6>

			</div>


					<div class="template-align-center" style="border:1px solid black; height:100%">
                         <h3><u>Enter Password For Check Your Homework</u></h3>
						<form action="#" method="POST">

  <div class="container">

    <label for="psw"><b>Enter Password</b></label>
    <input type="password" placeholder="Enter Password" onblur="check();" name="pwd" id="psw" required>
        
    
  </div>
<br/>
  <div class="container">
   <!-- <button type="submit" name="submit" id="submit_btn" style="display:none;">Submit</button>
-->
    <button type="submit" name="submit" id="submit_btn">Submit</button>
	 <button type="cancel" class="cancel" name="reset">Cancel</button>

  </div>
</form>

					</div>

				</div>

			</div>

		</div>

	</div>

	

<?php include('footer.php');?>
