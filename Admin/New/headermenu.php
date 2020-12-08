<?php require_once(__DIR__.'/includes/function/SmsFunction.php'); ?>
	<style> .navbar-nav>li>a { font-size: x-small; text-transform: uppercase; font-weight:bold;     padding: 10px 10px 10px; } .navbar-nav>li>ul>li>a { text-transform: none; font-size:14px; } .navbar .nav > li > a { padding: 15px 10px 10px; } .dropdown-menu .divider {  background-color: darkgray;} .HIGHLIGHT-R{color: #3c763d;
    border-color: #3c763d; box-shadow: inset 0 1px 1px rgba(0,0,0,.075); } .HIGHLIGHT-W{color: #3c763d;border-color: #a94442; box-shadow: inset 0 1px 1px rgba(0,0,0,.075); }
    body{
		-webkit-touch-callout: none; /* iOS Safari */
		-webkit-user-select: none;   /* Chrome/Safari/Opera */
		-khtml-user-select: none;    /* Konqueror */
		-moz-user-select: none;      /* Firefox */
		-ms-user-select: none;       /* Internet Explorer/Edge */
		user-select: none;           /* Non-prefixed version, currently supported by any browser */
    }
	</style>

<!------------------------------------->
<div id="pwdModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog"> 
      <div class="modal-body">
          <div class="col-md-6" style="position: relative;left: 30%;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                         <p><strong>UNAUTHORISED SECTION</strong><label class="control-label" id="WP" style="color: #a94442;font-weight:700" for="inputError1"></label><label class="control-label" id="OK" style="color: #3c763d;font-weight:700" for="inputError2"></label></p>
                            <div class="panel-body">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control input-lg" placeholder="Password" name="UNPASSWORD" id="UNPASSWORD" type="password">
                                    </div>
                                    <input class="btn btn-lg btn-primary btn-block" value="SUBMIT" onclick="UNAUT_LOGIN()" type="button" id="UNPER">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
<!------------------------------------->
<nav class="navbar navbar-default navbar-fixed-top" style="border-bottom: solid 2px #0B0B0B;">
      <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo BASEURL;?>index.php"><img src="<?php echo BASEURL;?>img/accretion+.png" style="width: 96px;bottom: 5px;position: relative;"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
       <?php if($_SESSION['permission']=='all' || $_SESSION['permission']=='library'){ ?>
	   <ul class="nav navbar-nav">
          <li class="dropdown">
           <a href="<?php echo BASEURL;?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Student<span class="caret"></span></a>
           <ul class="dropdown-menu">
		   <li class="dropdown-header">New Admission</li>
            <!--<li class="dropdown-header"><a href="<?php echo BASEURL;?>New-Admission.php">New Admission</a></li>-->
			<li class="divider"></li>
            <li><a href="<?php echo BASEURL;?>List-Student.php">Student List</a></li>
            <li><a href="<?php echo BASEURL;?>Search-Student.php">Search Student</a></li>
			<!--<li><a href="<?php echo BASEURL;?>Master-Edit-Student.php">Master Edit</a></li>-->
			<li class="dropdown-header">Master Edit</li>
            <li class="divider"></li>
            <li><a href="<?php echo BASEURL;?>Strength.php">Classwise Strength</a></li>
			<li><a href="<?php echo BASEURL;?>app_login_report.php">App Login List</a></li>
			        <li class="divider"></li>
			  <li><a href="<?php echo BASEURL;?>Group-Create.php" style="color:red">Create Group</a></li>
			 <li class="divider"></li>
            <li><a href="<?php echo BASEURL;?>Student-Detail-Slip.php">View Basic Detail</a></li>
			<!--li><a href="<?php echo BASEURL;?>Download-Excel.php?student_download">Download Excel</a></li-->
		   </ul>
         </li>
		<?php } if($_SESSION['permission']=='all'){ ?>
		<li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="<?php echo BASEURL;?>Staff-New-Register.php">Register Staff</a></li>
            <li><a href="<?php echo BASEURL;?>Staff-List.php">Staff List</a></li>
			<li><a href="<?php echo BASEURL;?>disable_staff_list.php">Disable Staff List</a></li>
            <li><a href="<?php echo BASEURL;?>staff">Manage Shift</a></li>
			<li class="divider"></li>
            <li><a href="<?php echo BASEURL;?>Master-Edit-Staff.php">Master Edit</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo BASEURL;?>Staff-Strength.php">Strength</a></li>
            <li class="divider"></li>
	        <li><a href="<?php echo BASEURL;?>Download-Excel.php?staff_download">Download Excel</a></li>
			</ul>
        </li>
		
		<li class="dropdown">
          <a href="<?php echo BASEURL;?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attendanc<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="<?php echo BASEURL;?>Student-Assign-Attendance.php">Student Attendance</a></li>
			<li><a href="<?php echo BASEURL;?>Student-att-summary.php">Student Attendance Summary</a></li>
			
			<li class="divider"></li>	
            <li><a href="staff/attendence.php">Staff Attendance</a></li>
			<li><a href="<?php echo BASEURL;?>staff/holiday.php">Manage Holidays</a></li>
            <li><a href="<?php echo BASEURL;?>staff/monthly-attendence-report.php">Monthly Staff Attendance Report</a></li>
            <li><a href="<?php echo BASEURL;?>staff/mothly-attendance-summary.php">Monthly Staff Attendance Summary</a></li>
			<li><a href="Staff-Attendance-Summary.php">Staff Attendance Summary</a></li>
			</ul>
        </li>
		
		 <li class="dropdown">
          <a href="<?php echo BASEURL;?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Academic<span class="caret"></span></a>
          <ul class="dropdown-menu">
		   <!--<li><a href="<?php echo BASEURL;?>Academic-Course.php">School Course</a></li>-->
		   <li class="divider"></li>
            <li><a href="<?php echo BASEURL;?>Date-Sheet.php">Datesheet</a></li>
            <li><a href="<?php echo BASEURL;?>Notice.php">Notice</a></li>
			<li><a href="<?php echo BASEURL;?>Uploads.php">Uploads</a></li>
			<li><a href="<?php echo BASEURL;?>daily-homework-uploads.php">Daily Homework Uploads</a></li>
			<li class="divider"></li>	
			<li><a href="<?php echo BASEURL;?>Holiday-Homework.php">Holiday Homework</a></li>
				<li class="divider"></li>
			<li><a href="<?php echo BASEURL;?>Photo-Gallery.php" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Photo Gallery</a></li>
			<li><a href="<?php echo BASEURL;?>School-Jewels.php">School Toppers <span class="label label-danger">NEW</span></a></li>
			<li class="divider"></li>
			<li><a href="<?php echo BASEURL;?>video-master.php">Video Master &nbsp;<span class="label label-danger">NEW</span></a></li>
			<li><a href="<?php echo BASEURL;?>Calender.php">Calendar</a></li>
            <li><a href="<?php echo BASEURL;?>Activity-Cal.php">Activity Calendar</a></li>
			<li><a href="<?php echo BASEURL;?>Duty-Chart.php">Duty Chart</a></li>
			<li><a href="<?php echo BASEURL;?>Holidays-List.php">Holidays List</a></li>
			<li class="divider"></li>
			<li><a href="home-work.php">Homework &nbsp;<span class="label label-danger">NEW</span></a></li>
			</ul>
        </li>
			
		<li class="dropdown">
          <a href="<?php echo BASEURL;?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timetable<span class="caret"></span></a>
           <ul class="dropdown-menu">
              <li><a href="<?php echo BASEURL;?>Timetable-Update.php">Add/Update</a></li>
               <li><a href="<?php echo BASEURL;?>Teacher-Timetable.php">View Teacher's Timetable</a></li>
			  <li><a href="<?php echo BASEURL;?>Daywise-Timetable.php">View Daywise Timetable</a></li>
			  <li><a href="<?php echo BASEURL;?>Assign-Multi-Teacher.php">Multi-Teacher Assign</a></li>
			  <li><a href="<?php echo BASEURL;?>Classwise-Timetable.php">Classwise Timetable</a></li>
			  <li><a href="<?php echo BASEURL;?>Round-Duty.php">Round Duty</a></li>
			  <li><a href="<?php echo BASEURL;?>Substitute-Report.php">Teacher Substitute Report</a></li>
		   </ul>
        </li>
			
           <li class="dropdown">
          <a href="<?php echo BASEURL;?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daily Manager<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo BASEURL;?>Template.php">Template</a></li>
            <li><a href="<?php echo BASEURL;?>Confirmation.php">Confirmation</a></li>
			<li><a href="<?php echo BASEURL;?>Smart-Message.php">Send Smart Message</a></li>
			<li><a href="<?php echo BASEURL;?>Bulk-Messages.php">Send Common Messages</a></li>
			<li><a href="<?php echo BASEURL;?>Staff-Messages.php" style="color:red;">Msg To Staff</a></li>
			<li class="divider"></li>
			<li><a href="<?php echo BASEURL;?>Schedule-Messages.php">Schedule Messages&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo BASEURL;?>img/watch-icon.png" style="width: 20px;"></a> </li>
			<li class="divider"></li>
					<li><a href="<?php echo BASEURL;?>B-day-Messages.php" style="color:green;font-weight: 600;">Send Birthday Messages&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo BASEURL;?>img/_icon_birthdaycake.gif"></a> </li>
			<li class="divider"></li>	
			<li><a href="<?php echo BASEURL;?>Hindi-Messages.php">Send Hindi Messsages</a></li>
			<li><a href="<?php echo BASEURL;?>Absent-Messages.php">Send Absentees Messsages</a></li>
			<li class="divider"></li>
			<li><a href="<?php echo BASEURL;?>Performance-Messages.php" style="color:green;font-weight: 600;">Send Performance Message<img src="<?php echo BASEURL;?>img/report_card_icon_sm.gif" style="width: 22px;"></a></li>
			<li class="divider"></li>
			<li><a  href="<?php echo BASEURL;?>Fees-Defaulter.php" style="padding:1px 20px;color:red;font-weight: 600;">Defaulter Message<img src="<?php echo BASEURL;?>img/Defaulter-icon.jpg" style="width: 22px;float: right;"></a></li>
			<li class="divider"></li>
			 <li><a href="<?php echo BASEURL;?>Group-Message-2.php" style="color:red">Group Message</a></li>
			 <li class="divider"></li>
			<li><a href="<?php echo BASEURL;?>Manage-Report.php">Student Message Report</a></li>
            <li><a href="<?php echo BASEURL;?>Staff-Message-Report.php">Staff Message Report</a></li>
			<li><a href="<?php echo BASEURL;?>Failed-No-Report.php" style="color:red;">Failed SMS No.</a></li>
				<li><a href="<?php echo BASEURL;?>File-Report.php" style="color:red;">File Status</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo BASEURL;?>Bulk-Messages2.php" style="color:red;">Msg To Outer Nos.</a></li>
			</ul>
           </li>
		   
		    <li class="dropdown">
          <a href="<?php echo BASEURL;?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CCE<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo BASEURL;?>Assign-Subjects.php">Subjects</a></li>
            <li><a href="<?php echo BASEURL;?>Assign-Test.php">Assign Test</a></li>
			<li><a href="<?php echo BASEURL;?>">Indicators</a></li>
			<li><a href="<?php echo BASEURL;?>Assign-Subject-Class.php">Assign Subject To Class</a></li>
			<li><a href="<?php echo BASEURL;?>Marks-Feeding.php" style="color:red">Marks Feeding</a></li>
			<li class="divider"></li>	

			<li><a href="<?php echo BASEURL;?>Marks-Status-Testwise.php" style="color:Blue">Marks Status (Testwise)</a></li>
			<li><a href="<?php echo BASEURL;?>Marks-Status-Classwise.php" style="color:Blue">Marks Status (Classwise)</a></li>
			<li class="divider"></li>	
			<li><a href="<?php echo BASEURL;?>Download-Marks.php">Download Marks</a></li>
			</ul>
           </li>
		   
		<li class="dropdown">
        <a href="<?php echo BASEURL;?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Progress Report<span class="caret"></span></a>
         <ul class="dropdown-menu">
            <li><a href="<?php echo BASEURL;?>Reportcard-Generate.php">Generate ReportCard</a></li>
			<li><a href="<?php echo BASEURL;?>Reportcard-Generate-Testwise.php">ReportCard (TESTWISE)</a></li>
			<li><a href="<?php echo BASEURL;?>Reportcard-Generate-Gradewise.php">Reportcard-Generate(Gradewise)</a></li>
            <li><a href="<?php echo BASEURL;?>Greensheet1.php">Greensheet [Testwise]</a></li>
			<li><a href="<?php echo BASEURL;?>Greensheet2.php">Greensheet [Complete]</a></li>
			<li><a href="report-file-configration.php">Report file Configration</a></li> 
			<li><a href="toppers_list.php">Toppers List</a></li>
		</ul>
       </li>
	   
	   <li class="dropdown"><a href="<?php echo BASEURL;?>Library-Dash.php">Library</a>
        <!-- <ul class="dropdown-menu">
    <li><a tabindex="-1" href="<?php echo BASEURL;?>Book-Mas.php" style="color:red;">Book List</a></li>
					   <li><a tabindex="-1" href="<?php echo BASEURL;?>Book-Search.php" style="color:red;">Search Book</a></li>
					  <li><a tabindex="-1" href="<?php echo BASEURL;?>Book-Issue.php" style="color:blue;">Book Circulation</a></li>
					  <li><a tabindex="-1" href="<?php echo BASEURL;?>Book-Borrow.php" style="color:blue;">Book Borrow List</a></li>
					  <li><a tabindex="-1" href="<?php echo BASEURL;?>Book-Demand-List.php" style="color:blue;">Book Demand List</a></li>
					   <li><a tabindex="-1" href="<?php echo BASEURL;?>Book-Inactive-List.php" style="color:blue;">Inactive Book</a></li>
                    </ul>-->
       </li>
	   
	<li class="dropdown">
        <a href="<?php echo BASEURL;?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span></a>
         <ul class="dropdown-menu">
       
			<?php if(!isset($_SESSION['AUT_SESS']) || (trim($_SESSION['AUT_SESS']) == '')) { ?>  
			 <li><a tabindex="-1" href="<?php echo BASEURL;?>#"  data-target="#pwdModal" data-toggle="modal">Extra</a></li>
			<?php } else { ?>
			 <li><a tabindex="-1" href="<?php echo BASEURL;?>Voice-Call.php" >Extra</a></li>
			<?php } ?>
		</ul>
       </li>
   	   <?php } if($_SESSION['permission']=='library'){ ?>
	   <li class="dropdown">
        <a tabindex="-1" href="<?php echo BASEURL;?>Library-Dash.php">Library Master</a></li>
	   <?php } ?>
		</ul>
       </li>  
    </ul>
	  <ul class="nav navbar-nav navbar-right" style="font-size: smaller; text-transform: uppercase; font-weight:bold;">
          <li><a href="<?php echo BASEURL;?>#" ><span class="label label-danger" style="font-size:12px;">SMS CREDITS:- <?php echo round($BALANCE[4]); ?></span></a></li>
          <li class="dropdown">
          <a href="<?php echo BASEURL;?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-lock"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="<?php echo BASEURL;?>Support-Master.php">Admin Support</a></li>
                        <li><a href="<?php echo BASEURL;?>Leave-Request.php">Student Leave Request</a></li>
			<li><a href="<?php echo BASEURL;?>Feedback-App.php">Feedback</a></li>
			<?php 
		$result=mysql_query("select * from admin WHERE username='".$_SESSION['userid']."' limit 1");
		$rows=mysql_fetch_assoc($result);
		if($rows['group']=='ADMIN') { ?>
			<li><a href="add-user.php" style="color:green;">Add/Update User</a></li>
	<?php } ?>
            <li><a href="<?php echo BASEURL;?>#"></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo BASEURL;?>change-password.php" style="color:blue;"><span >Change Password</a></li>
            <li><a href="<?php echo BASEURL;?>logout.php" style="color:red;"><span >Logout</a></li>
          </ul>
        </li>
      </ul>
		  
        </div><!-- /.navbar-collapse -->
    </div>
</nav>