<?php include('header.php');

?>
<style>
	body {
    background-color: #FFF;
    color: #333;
     font-family: "Open Sans", Arial, sans-serif; 
    font-size: 14px;
  line-height: 22px;
    margin: 0;
}
	.btn-borders.btn-warning {
    background: transparent;
    border:3px solid #ed9c28;
    color: #ed9c28;
    text-shadow: none;
    padding:5px 11px;
    text-decoration: none;
    font-size: 13px;
}
.btn-borders.btn-warning:hover, .btn-borders.btn-warning:focus {
    background-color: #efa740 !important;
    border-color: #ed9c28 !important;
    color: #FFF;
}
.btn.focus, .btn:focus, .btn:hover {
    color: #333;
    text-decoration: none;
}

div.dataTables_length label {
    float: left;
    text-align: left;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 500;
}
.pull-left {
    float: left !important;
}
.pull-right {
    float: right !important;
}
.table-bordered {
    border: 1px solid #ddd;
}
table.table {
    clear: both;
    margin-bottom: 6px !important;
    max-width: none !important;
     }
div.dataTables_filter label {
    float: right;
}
div.dataTables_length select {
    width: 75px;
}
.tab {
  overflow: hidden;
  
}

/* Style the buttons inside the tab */
.tab a {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab a:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab a.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
 
}
@media (max-width: 479px)
body {
    font-size: 13px;
}
.mr-xs {
    margin-right: 5px !important;
}
.mb-sm {
    margin-bottom: 10px !important;
}
.btn-borders {
    padding: 4px 12px;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
  table.center {
    margin-left:auto; 
    margin-right:auto;
  }

</style>



			<!-- Bottom header -->

			<div class="template-header-bottom">

				<div class="template-header-bottom-background template-header-bottom-background-img-1 template-header-bottom-background-style-1">

							<div class="template-main">

								
							</div>

						</div>

			</div>




		<!-- Content-->

		<div class="template-content" style="margin-bottom: 0px;">

			<div class="template-content-section template-padding-bottom-5">



				<!-- Main -->

				<div class="template-content-section template-padding-bottom-5">

					<div class="template-main">
					<h1>Academic</h1>

								<h6>BOOK LIST</h6>


						<div class="template-align-center">
                       <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <a class="btn btn-borders btn-warning mr-xs mb-sm" target="_blank" href="book list/declaration.jpg">DECLARATION</a>
                            <a class="btn btn-borders btn-warning mr-xs mb-sm" data-toggle="tab" class="tablinks " onclick="openCity(event, 'I')" id="defaultOpen">I</a>
                            <a class="btn btn-borders btn-warning mr-xs mb-sm" data-toggle="tab" class="tablinks " onclick="openCity(event, 'II')">II</a>
                            <a class="btn btn-borders btn-warning mr-xs mb-sm" data-toggle="tab" class="tablinks " onclick="openCity(event, 'III')">III</a>
                            <a class="btn btn-borders btn-warning mr-xs mb-sm" data-toggle="tab" class="tablinks " onclick="openCity(event, 'IV')">IV</a>
                            <a class="btn btn-borders btn-warning mr-xs mb-sm" data-toggle="tab" class="tablinks " onclick="openCity(event, 'V')">V</a>
                            <a class="btn btn-borders btn-warning mr-xs mb-sm" data-toggle="tab" class="tablinks " onclick="openCity(event, 'VI')">VI</a>
                            <a class="btn btn-borders btn-warning mr-xs mb-sm" data-toggle="tab" class="tablinks " onclick="openCity(event, 'VII')">VII</a>
                            <a class="btn btn-borders btn-warning mr-xs mb-sm" data-toggle="tab" class="tablinks " onclick="openCity(event, 'VIII')">VIII</a>
                            <a class="btn btn-borders btn-warning mr-xs mb-sm" data-toggle="tab" class="tablinks " onclick="openCity(event, 'IX')">IX</a>
                            <a class="btn btn-borders btn-warning mr-xs mb-sm" data-toggle="tab" class="tablinks " onclick="openCity(event, 'X')">X</a>
                        </p>
                  </div>
                    </div>
                    <div class="row text-center">
                    	<div class="col-md-7">
                    <div class="tab-content tab-content-nopad">
							<div id="I" class="tabcontent active">
								<h4>CLASS 1</h4>
							<table class="table table-hover table-bordered dataTable no-footer center" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                    <thead>
                        <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="descending" aria-label="
                                Date
                            : activate to sort column ascending" style="width: 117px;">
                                Date
                            </th><th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                Title
                            : activate to sort column ascending" style="width: 330px;">
                                Title
                            </th><th style="text-align: center; width: 133px;" class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                BookList File
                            : activate to sort column ascending">
                                BookList File
                            </th></tr>
                    </thead>
                    <tbody>
                                

                       <tr role="row" class="odd">
                                    <td class="sorting_1">25 Feb,2019</td>
                                    <td>BOOKLIST FOR SESSION 2019-2020</td>

                                    <td style="text-align: center;"><a href="book list/1st.pdf" target="_blank" download="1st.pdf">
                                    	<img src="down.png" borderwidth="0px"></a></td>
                                </tr>
                    </tbody>
                </table>
			</div>


			<div id="II" class="tabcontent">
				<h4>CLASS 2</h4>
			  <table class="table center table-hover table-bordered dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                    <thead>
                        <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="descending" aria-label="
                                Date
                            : activate to sort column ascending" style="width: 117px;">
                                Date
                            </th><th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                Title
                            : activate to sort column ascending" style="width: 330px;">
                                Title
                            </th><th style="text-align: center; width: 133px;" class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                BookList File
                            : activate to sort column ascending">
                                BookList File
                            </th></tr>
                    </thead>
                    <tbody>
                                
                    <tr role="row" class="odd">
                                    <td class="sorting_1">23 Feb,2019</td>
                                    <td>BOOKLIST FOR SESSION 2019-2020</td>

                                    <td style="text-align: center;"><a href="book list/2nd.pdf" target="_blank" download="2nd.pdf"><img src="down.png" borderwidth="0px"></a></td>
                                </tr></tbody>
                </table>							
			</div>


            <div id="III" class="tabcontent">
            	<h4>CLASS 3</h4>
			  <table class="table center table-hover table-bordered dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                    <thead>
                        <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="descending" aria-label="
                                Date
                            : activate to sort column ascending" style="width: 117px;">
                                Date
                            </th><th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                Title
                            : activate to sort column ascending" style="width: 330px;">
                                Title
                            </th><th style="text-align: center; width: 133px;" class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                BookList File
                            : activate to sort column ascending">
                                BookList File
                            </th></tr>
                    </thead>
                    <tbody>
                                
                    <tr role="row" class="odd">
                                    <td class="sorting_1">23 Feb,2019</td>
                                    <td>BOOKLIST FOR SESSION 2019-2020</td>

                                    <td style="text-align: center;"><a href="book list/3rd.pdf" target="_blank" download="3rd.pdf"><img src="down.png" borderwidth="0px"></a></td>
                                </tr></tbody>
                </table>							
							</div>


							<div id="IV" class="tabcontent">
								<h4>CLASS 4</h4>
			  <table class="table center table-hover table-bordered dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                    <thead>
                        <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="descending" aria-label="
                                Date
                            : activate to sort column ascending" style="width: 117px;">
                                Date
                            </th><th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                Title
                            : activate to sort column ascending" style="width: 330px;">
                                Title
                            </th><th style="text-align: center; width: 133px;" class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                BookList File
                            : activate to sort column ascending">
                                BookList File
                            </th></tr>
                    </thead>
                    <tbody>
                                
                    <tr role="row" class="odd">
                                    <td class="sorting_1">23 Feb,2019</td>
                                    <td>BOOKLIST FOR SESSION 2019-2020</td>

                                    <td style="text-align: center;"><a href="book list/4th.pdf" target="_blank" download="4th.pdf"><img src="down.png" borderwidth="0px"></a></td>
                                </tr></tbody>
                </table>							
							</div>


							<div id="V" class="tabcontent">
								<h4>CLASS 5</h4>
			  <table class="table center table-hover table-bordered dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                    <thead>
                        <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="descending" aria-label="
                                Date
                            : activate to sort column ascending" style="width: 117px;">
                                Date
                            </th><th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                Title
                            : activate to sort column ascending" style="width: 330px;">
                                Title
                            </th><th style="text-align: center; width: 133px;" class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                BookList File
                            : activate to sort column ascending">
                                BookList File
                            </th></tr>
                    </thead>
                    <tbody>
                                
                    <tr role="row" class="odd">
                                    <td class="sorting_1">23 Feb,2019</td>
                                    <td>BOOKLIST FOR SESSION 2019-2020</td>

                                    <td style="text-align: center;"><a href="book list/5th.pdf" target="_blank" download="5th.pdf"><img src="down.png" borderwidth="0px"></a></td>
                                </tr></tbody>
                </table>							
							</div>


							<div id="VI" class="tabcontent">
								<h4>CLASS 6</h4>
			  <table class="table center table-hover table-bordered dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                    <thead>
                        <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="descending" aria-label="
                                Date
                            : activate to sort column ascending" style="width: 117px;">
                                Date
                            </th><th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                Title
                            : activate to sort column ascending" style="width: 330px;">
                                Title
                            </th><th style="text-align: center; width: 133px;" class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                BookList File
                            : activate to sort column ascending">
                                BookList File
                            </th></tr>
                    </thead>
                    <tbody>
                                
                    <tr role="row" class="odd">
                                    <td class="sorting_1">23 Feb,2019</td>
                                    <td>BOOKLIST FOR SESSION 2019-2020</td>

                                    <td style="text-align: center;"><a href="book list/6th.pdf" target="_blank" download="6th.pdf"><img src="down.png" borderwidth="0px"></a></td>
                                </tr></tbody>
                </table>							
							</div>


							<div id="VII" class="tabcontent">
								<h4>CLASS 7</h4>
			  <table class="table center table-hover table-bordered dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                    <thead>
                        <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="descending" aria-label="
                                Date
                            : activate to sort column ascending" style="width: 117px;">
                                Date
                            </th><th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                Title
                            : activate to sort column ascending" style="width: 330px;">
                                Title
                            </th><th style="text-align: center; width: 133px;" class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                BookList File
                            : activate to sort column ascending">
                                BookList File
                            </th></tr>
                    </thead>
                    <tbody>
                                
                    <tr role="row" class="odd">
                                    <td class="sorting_1">23 Feb,2019</td>
                                    <td>BOOKLIST FOR SESSION 2019-2020</td>

                                    <td style="text-align: center;"><a href="book list/7th.pdf" target="_blank" download="7th.pdf"><img src="down.png" borderwidth="0px"></a></td>
                                </tr></tbody>
                </table>							
							</div>


							<div id="VIII" class="tabcontent">
								<h4>CLASS 8</h4>
			  <table class="table center table-hover table-bordered dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                    <thead>
                        <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="descending" aria-label="
                                Date
                            : activate to sort column ascending" style="width: 117px;">
                                Date
                            </th><th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                Title
                            : activate to sort column ascending" style="width: 330px;">
                                Title
                            </th><th style="text-align: center; width: 133px;" class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                BookList File
                            : activate to sort column ascending">
                                BookList File
                            </th></tr>
                    </thead>
                    <tbody>
                                
                    <tr role="row" class="odd">
                                    <td class="sorting_1">23 Feb,2019</td>
                                    <td>BOOKLIST FOR SESSION 2019-2020</td>

                                    <td style="text-align: center;"><a href="book list/8th.pdf" target="_blank" download="8th.pdf"><img src="down.png" borderwidth="0px"></a></td>
                                </tr></tbody>
                </table>							
							</div>


							<div id="IX" class="tabcontent">
								<h4>CLASS 9</h4>
			  <table class="table center table-hover table-bordered dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                    <thead>
                        <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="descending" aria-label="
                                Date
                            : activate to sort column ascending" style="width: 117px;">
                                Date
                            </th><th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                Title
                            : activate to sort column ascending" style="width: 330px;">
                                Title
                            </th><th style="text-align: center; width: 133px;" class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                BookList File
                            : activate to sort column ascending">
                                BookList File
                            </th></tr>
                    </thead>
                    <tbody>
                                
                    <tr role="row" class="odd">
                                    <td class="sorting_1">23 Feb,2019</td>
                                    <td>BOOKLIST FOR SESSION 2019-2020</td>

                                    <td style="text-align: center;"><a href="book list/9th.pdf" target="_blank" download="9th.pdf"><img src="down.png" borderwidth="0px"></a></td>
                                </tr></tbody>
                </table>							
							</div>
							<div id="X" class="tabcontent">
								<h4>CLASS 10</h4>
			  <table class="table center table-hover table-bordered dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                    <thead>
                        <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-sort="descending" aria-label="
                                Date
                            : activate to sort column ascending" style="width: 117px;">
                                Date
                            </th><th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                Title
                            : activate to sort column ascending" style="width: 330px;">
                                Title
                            </th><th style="text-align: center; width: 133px;" class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1" colspan="1" aria-label="
                                BookList File
                            : activate to sort column ascending">
                                BookList File
                            </th></tr>
                    </thead>
                    <tbody>
                                
                    <tr role="row" class="odd">
                                    <td class="sorting_1">23 Feb,2019</td>
                                    <td>BOOKLIST FOR SESSION 2019-2020</td>

                                    <td style="text-align: center;"><a href="book list/10th.pdf" target="_blank" download="10th.pdf"><img src="down.png" borderwidth="0px"></a></td>
                                </tr></tbody>
                </table>							
							</div>
							</div>
		</div>
	   <!-- <div class="col-md-3">
		  <img src="fee.png" style="float:right;width:385px;">
		</div> -->
						</div>
                </div>
                
</div>
</div>
			</div>

		</div>
	


	<?php include('footer.php');?>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
