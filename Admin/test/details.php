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
mysqli_select_db($conn,'myroject_db'); 

if(isset($_REQUEST['shwlid'])){
		$id=$_REQUEST['shwid'];
		$q="select * from rses_prospectus_registration where id=$id";
	    mysqli_query($conn,$q)or die("Enable to execute ".mysqli_error($conn));
	}
 ?>

<html>
<head>
<title></title>
	
    <link href="bt/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="ft/css/font-awesome.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bt/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="">
	
</head>
<style>
body {
	
	margin:auto 0px;
	
}
</style>

<body style="margin:auto 0px;">

    <div class="cont">
	<?php include("header.php"); ?>
	    <!-- head -->
	<br><br>
	
     <form action="/Web_StudentAcademic/Cyborg_StudentExamApply?id=Exam%20Apply" method="post" wtx-context="7859BD0D-4E51-41FE-8289-B5C2CDCC886D">
        <aside class="right-side">
		    <section class="content">
			    <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b><i class="fa fa-user">&nbsp;</i>Personal Information</b>
				    </div>
					
					<div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" style="font-size: 16px;">

                                <tbody><tr class="info">
                                    <td style="width: 300px">
                                        <img id="ImgEmp" src="" alt="User Image" class="form-control" style="height: 178px; width: 160px">

                                    </td>
                                    <td style="width: 86%">
                                        <table class="table table-striped table-bordered table-hover">


                                            <tbody><tr>
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Student's Name :</b>
                                                </td>
                                                <td id="txtName">ANKIT SONKAR</td>
                                                <td>
                                                    <b class="tRow">Father's Name :</b>
                                                </td>
                                                <td id="txtFather">DESRAJ SONKAR</td>
                                                <td>
                                                    <b class="tRow">Mother's Name :</b>
                                                </td>
                                                <td id="txtMother" runat="server">JASO SONKAR</td>
                                            </tr>



                                            <tr class="info">
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Gender :</b>
                                                </td>
                                                <td id="txtGender">Male</td>
                                                <td>
                                                    <b class="tRow">Category :</b>
                                                </td>
                                                <td id="txtCategory">SC</td>
                                                <td>
                                                    <b class="tRow">DOB :</b>
                                                </td>
                                                <td id="txtDob">15/05/1996</td>

                                            </tr>

                                            <tr>
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Blood Group:</b>
                                                </td>
                                                <td id="txtBloodGroup">N/A</td>
                                                <td>
                                                    <b class="tRow">Mobile No. :</b>
                                                </td>
                                                <td id="txtMobNo">7302227773</td>
                                                <td>
                                                    <b class="tRow">Email ID :</b>
                                                </td>
                                                <td id="txtEmail">ankitsonker001@yahoo.com</td>

                                            </tr>
											
											<tr class="info">
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Gender :</b>
                                                </td>
                                                <td id="txtGender">Male</td>
                                                <td>
                                                    <b class="tRow">Category :</b>
                                                </td>
                                                <td id="txtCategory">SC</td>
                                                <td>
                                                    <b class="tRow">DOB :</b>
                                                </td>
                                                <td id="txtDob">15/05/1996</td>

                                            </tr>
											
											<tr>
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Blood Group:</b>
                                                </td>
                                                <td id="txtBloodGroup">N/A</td>
                                                <td>
                                                    <b class="tRow">Mobile No. :</b>
                                                </td>
                                                <td id="txtMobNo">7302227773</td>
                                                <td>
                                                    <b class="tRow">Email ID :</b>
                                                </td>
                                                <td id="txtEmail">ankitsonker001@yahoo.com</td>

                                            </tr>
											
											<tr class="info">
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Gender :</b>
                                                </td>
                                                <td id="txtGender">Male</td>
                                                <td>
                                                    <b class="tRow">Category :</b>
                                                </td>
                                                <td id="txtCategory">SC</td>
                                                <td>
                                                    <b class="tRow">DOB :</b>
                                                </td>
                                                <td id="txtDob">15/05/1996</td>

                                            </tr>
											
											<tr>
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Blood Group:</b>
                                                </td>
                                                <td id="txtBloodGroup">N/A</td>
                                                <td>
                                                    <b class="tRow">Mobile No. :</b>
                                                </td>
                                                <td id="txtMobNo">7302227773</td>
                                                <td>
                                                    <b class="tRow">Email ID :</b>
                                                </td>
                                                <td id="txtEmail">ankitsonker001@yahoo.com</td>

                                            </tr>
											
											<tr class="info">
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Gender :</b>
                                                </td>
                                                <td id="txtGender">Male</td>
                                                <td>
                                                    <b class="tRow">Category :</b>
                                                </td>
                                                <td id="txtCategory">SC</td>
                                                <td>
                                                    <b class="tRow">DOB :</b>
                                                </td>
                                                <td id="txtDob">15/05/1996</td>

                                            </tr>
											
											<tr>
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Blood Group:</b>
                                                </td>
                                                <td id="txtBloodGroup">N/A</td>
                                                <td>
                                                    <b class="tRow">Mobile No. :</b>
                                                </td>
                                                <td id="txtMobNo">7302227773</td>
                                                <td>
                                                    <b class="tRow">Email ID :</b>
                                                </td>
                                                <td id="txtEmail">ankitsonker001@yahoo.com</td>

                                            </tr>
											
											<tr class="info">
                                                <td style="font-size: 90%;">
                                                    <b class="tRow">Gender :</b>
                                                </td>
                                                <td id="txtGender">Male</td>
                                                <td>
                                                    <b class="tRow">Category :</b>
                                                </td>
                                                <td id="txtCategory">SC</td>
                                                <td>
                                                    <b class="tRow">DOB :</b>
                                                </td>
                                                <td id="txtDob">15/05/1996</td>

                                            </tr>


                                        </tbody></table>
                                    </td>

                                </tr>





                            </tbody></table>
                        </div>

                    </div>
			    </div>
			</section>
		</aside>	
	</form>
   
	 
		
		
    </div>
</body>
</html>