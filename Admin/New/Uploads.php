
<?php
session_start();

$messag="";

/*$host="localhost";
$user="root";
$password="";
$conn=mysqli_connect($host,$user,$password);
$dbname="myroject_db";
mysqli_select_db($dbname,$conn) or die (mysql_error("Database Not Connected"));
*/
    
if(isset($_POST['SAVE']))
{
  echo "<pre>"; print_r($_POST); echo "</pre>";
  

  $upload_desc = $_POST['upload_desc'];
   $upload_type = $_POST['upload_type'];
    $section=$_POST['section'];
    $class= $_POST['class'];   
    $submit_date = date('Y-m-d');

    $F_name = $_FILES['Hfile']['name'];
    $F_tmp = $_FILES['Hfile']['tmp_name'];
    $homewrokFile = "Homework/".time().$F_name;
    move_uploaded_file($F_tmp,$homewrokFile);
    $date=time();
    $session="2020-2021";
	$messag="";
	
	$conn=mysqli_connect('localhost','root','') or die("enable to connect".mysqli_error($conn));
mysqli_select_db($conn,'myroject_db') or die("can't select database".mysqli_error($conn));
echo   "insert into uploads(class,section,upload_type,upload_desc,file,date,session)values('$class','$section','$upload_type','$upload_desc','$homewrokFile','$date','$session')";

	$q="insert into uploads(class,section,upload_type,upload_desc,file,date,session)values('$class','$section','$upload_type','$upload_desc','$homewrokFile','$date','$session')";
				$rs=mysqli_query($conn,$q);
				if($rs>0)
				{
					 $messag= "Uploades Successfully";
					header('location:Uploads.php');
				}else
				{				echo "Enable to insert record";  }
	/*
   $query = mysqli_query("SELECT * FROM  uploads WHERE class='".$class."' AND section='".$section."' AND file='".$homewrokFile."' AND   session='".$session."'") or die(mysqli_error());
    if(mysqli_num_rows($query) >0)
    { 
    echo '<script language="javascript">';
    echo 'alert("Homework Already Exist")';
       echo '</script>';
  }else
  {
    
      mysqli_query("INSERT INTO uploads (`class`,`section`, `upload_type`, `upload_desc`, `file` `date`,`session`) 
      VALUES ('".$class."','".$section."','".$upload_type."','".$upload_desc."','".$homewrokFile."','".$date."','".$session."')") or die(mysqli_error());
      $last_id = mysqli_insert_id();
      if(is_numeric($last_id))
      {
        echo '<script language="javascript">';
        echo 'alert("Upload Homework Successfully")';
        echo '</script>';
      }else{
      
        echo '<script language="javascript">';
        echo 'alert("something went wrong try again")';
        echo '</script>';
      }
  
  }  */

}


  
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <style>
           .h {
    font-family: 'Ubuntu',Helvetica,Arial,sans-serif;
    font-size: 2.1em;
    left: 0;
    font-weight: 700;
    margin-top: 22px;
    color: #2A4076;
    text-shadow: 0 1px 0 #b2a98f, 0 0 0 rgba(0, 0, 0, 0), 0 6px 2px rgba(0,0,0,0.1), 0 25px 30px rgba(0,0,0,0.1);
}
       </style> 
    </head>
<body>
     <div class="container" style="height:400px;">
        <center><h3 class="h">ADMIN PANEL</h3></center>

        <h3>Upload<span style="font-size:large;position:relative;left:10px">Practice Sheets / Syllabus / Homework / Exam Datesheet</span></h3>
        <h2 style="color:red:"><?php echo $messag;  ?> </h2>
<div class="box">
              <div class="box-header">
                      

   <div class="panel-body">

 
<div class="tab-content">

             <div class="tab-pane active in" id="profile">                          
       <table align="center" class="table table-bordered table-striped responsive" style="font-size: 13px;width: 60%;">
        <form name="form1" method="post" action="#" method="POST" enctype="multipart/form-data"/>
        <input type="hidden" name="hdnCmd" value="ADD">
        <tr>
      <td>Upload Type :</td>
      <td><select name="upload_type" id="upload_type" size="1" required>
        <option value="">-- Please Select --</option>
                    <option value="Practice Sheets">Practice Sheets</option>
                    <option value="Syllabus">Syllabus</option>
          <option value="Homework">Homework</option>
          <option value="Datesheet">Exam Datesheet</option>
          <option value="HealthReport">Academic Calendar</option>
                </select>
            </td>
        </tr>
        <tr>
      <td><label>Upload Description :</label></td>
      <td><input type="text" name="upload_desc" required="required" style="width:400px;"></td>
    </tr>
    <tr>
        <td>Class:</td>
        <td>
        <select name="class" required>
           <option value="">-- Please Select --</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        </td>
        </tr>
      <tr>
        <td>Section:</td>
        <td>
      <select name="section">
         <option value="">-- Please Select --</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
       </select>
        </td>
        </tr>
        <tr>
            <td>Upload Files :</td><td><input type="file" name="Hfile"  id="Hfile" /> <span style="color:red;">File Size Not Larger Than 1MB.</span>
            <div class="clear"></div>
      <div id="error2" style="font-size: 14; color: red; font-weight: 600"></div></td>
        </tr>
      <tr><th colspan="2"><center><input type="submit" value="Submit" id="check"   name="SAVE" onclick="return doFormSubmit()"/>
    <input type="reset" name="reset" value="Clear All" /></center></th></tr>
   </form>
  </table>                                      
               </div>
           </div>
       </div> 
   </div> 
</div>      

    </div>
    <hr>
  <div style="clear:both;"></div>
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-6 text-left">
                    <strong><span class="glyphicon glyphicon-facetime-video"></span> Add New Video</strong>
                </div>   
            </div>
        </div>
        <div class="panel-body">
                    <form id="add-videos" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <div class="col-sm-3">
                    <label class="control-label col-sm-2" style="text-align:left">Class</label>
                        <select name="class" class="form-control" style="z-index:1000;">
                            <option value="">--</option><option value="I">I</option><option value="II">II</option><option value="III">III</option><option value="IV">IV</option><option value="V">V</option><option value="VI">VI</option><option value="VII">VII</option><option value="VIII">VIII</option><option value="IX">IX</option><option value="X">X</option>              </select>
            </div>
                <div class="col-sm-3">
                <label class="control-label col-sm-5" for="caption" style="text-align:left">Enter Caption</label>
                    <input type="text" class="form-control" name="caption" id="caption" placeholder="Caption" required="">
                </div>
                <div class="col-sm-3">
                <label class="control-label col-sm-2" for="url" style="text-align:left">URL</label>
                    <input type="text" class="form-control" name="url" id="url" placeholder="URL" required="">
                </div>
                <div class="col-sm-3">
                <label class="control-label col-sm-2" for="url" style="text-align:left">Video</label>
                    <input type="file" class="form-control" name="video" id="video" placeholder="video" required="">
                </div>
            </div>
        </form></div>
        <div class="panel-footer">
            <center>
                <button type="submit" name="submit" value="AddVideo" class="btn btn-primary btn-md">Submit  </button>
                <button type="reset" class="btn btn-danger btn-md">Reset</button>
            </center>
        </div><!--.panel-footer-->
         
    </div>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	//alert("Jquery");
  $("#check").click(function()
  {
	alert("Submited Successfully");  
  });
});
	  
	  
	  
	  </script>