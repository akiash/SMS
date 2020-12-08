<?php include("../inc/config.php");
session_start();
if(!isset($_SESSION['uid'])){ header("location: login.php"); }
$data=array();
$sql=mysql_query("select * from ".PREFIX."prospectus_registration  where user_id='".$_SESSION['uid']."'");
if(mysql_num_rows($sql)>0){
while($rows=mysql_fetch_assoc($sql)){
	$data[]=$rows;
}
}
?>
<!DOCTYPE html>  
<html lang="en">
  <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Website CSS style -->
		     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script type="text/javascript" src="bootstrap.min.js"></script>
		<link href="bootstrap.min.css" rel="stylesheet">
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="custom.css"> 
		<link rel="stylesheet" href="datepicker3.css"> 
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<title><?php  echo $school_name; ?></title>
	</head>

	<body>
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php  echo $school_name?></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="online-prospectus.php">Add Prospectus</a></li>
    </ul>
	 <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['father_name'];?></a></li>
		<li><a href="logout">Logout</a></li>   
   </ul>
	</div>
	</nav>
<br/>
<br/> 

		<div class="container">
		<div class="row" style="background-color:lavenderblush;">
<h3>Prospectus Registration List</h3>
<table class="table">
    <thead>
      <tr>
        <th style="text-align:center">S.NO</th>
        <th style="text-align:center">NAME</th>
        <th style="text-align:center">CLASS</th>
        <th style="text-align:center">STATUS</th>
        <th style="text-align:center">VIEW</th>
      </tr>
    </thead>
    <tbody>
	<?php  foreach($data as $key=>$record) { ?>
      <tr>
        <td style="text-align:center"><?php  echo $key+1; ?></td>
        <td style="text-align:center"><?php  echo $record['stu_name']; ?></td>
        <td style="text-align:center"><?php  echo $record['class']; ?></td>
        <td style="text-align:center"><?php  echo $record['status']; ?></td>
        <td style="text-align:center"><a href="view-detail.php?type=query&id=<?php echo $record['id']; ?>">View</a></td>
      </tr>   
	<?php  }   ?>	
	
    </tbody>
  </table>			



</body>
</html> 