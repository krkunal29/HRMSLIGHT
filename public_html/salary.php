<?php
session_start();
if(isset($_SESSION['id']))
{
  include '../db/connection.php';
  $uid = $_SESSION['id'];
  $uname = $_SESSION['uname'];
  $uemail = $_SESSION['uemail'];
?>
<!DOCTYPE html>
<html>
<head>
      <?php include('links.php'); ?>
    </head>
    <body>
        <div class="main-wrapper">
            <?php include "header.php"; ?>
            <?php include "sidebar.php"; ?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Employee Salary</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Add Salary</a>
						</div>
					</div>
					<div class="row filter-row">
					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">Employee Name</label>
								<input type="text" class="form-control floating" />
							</div>
					   </div>
					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus select-focus">
								<label class="control-label">Role</label>
								<select class="select floating">
									<option value=""> -- Select -- </option>
									<option value="">Employee</option>
									<option value="1">Manager</option>
								</select>
							</div>
					   </div>
					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus select-focus">
								<label class="control-label">Leave Status</label>
								<select class="select floating">
									<option value=""> -- Select -- </option>
									<option value="0"> Pending </option>
									<option value="1"> Approved </option>
									<option value="2"> Rejected </option>
								</select>
							</div>
					   </div>
					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">From</label>
								<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
							</div>
						</div>
					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">To</label>
								<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
							</div>
						</div>
						<div class="col-sm-3 col-md-2 col-xs-6">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable" id="tbl">
									<thead>
										<tr>
											<th style="width:30%;">Employee</th>
											<th>Employee ID</th>
											<th>Email</th>
											<th>Joining Date</th>
											<th>Role</th>
											<th>Salary</th>
											<th>Payslip</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody id="displayemptbl">

									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<div class="notification-box">
					<div class="msg-sidebar notifications msg-noti">
						<div class="topnav-dropdown-header">
							<span>Messages</span>
						</div>
						<div class="drop-scroll msg-list-scroll">
							<ul class="list-box">
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">R</span>
											</div>
											<div class="list-body">
												<span class="message-author">Richard Miles </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item new-message">
											<div class="list-left">
												<span class="avatar">J</span>
											</div>
											<div class="list-body">
												<span class="message-author">John Doe</span>
												<span class="message-time">1 Aug</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">T</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Tarah Shropshire </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">M</span>
											</div>
											<div class="list-body">
												<span class="message-author">Mike Litorus</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">C</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Catherine Manseau </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">D</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Domenic Houston </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">B</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Buster Wigton </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">R</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Rolland Webber </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">C</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Claire Mapes </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">M</span>
											</div>
											<div class="list-body">
												<span class="message-author">Melita Faucher</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">J</span>
											</div>
											<div class="list-body">
												<span class="message-author">Jeffery Lalor</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">L</span>
											</div>
											<div class="list-body">
												<span class="message-author">Loren Gatlin</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">T</span>
											</div>
											<div class="list-body">
												<span class="message-author">Tarah Shropshire</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="chat.html">See all messages</a>
						</div>
					</div>
				</div>
            </div>
			<div id="add_salary" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add Staff Salary</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Select Staff</label>
											<select class="select" id="selectstaff" onchange="fetchempinfo(this.value);">
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<label>Net Salary</label>
										<input class="form-control" type="text" value="0" id="netsalary">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<h4 class="text-primary">Earnings</h4>
										<div class="form-group">
											<label>Basic</label>
											<input class="form-control" type="text" value="0"  id="basic">
										</div>
										<div class="form-group">
											<label>DA(40%)</label>
											<input class="form-control" type="text" value="0" id="da">
										</div>
										<div class="form-group">
											<label>HRA(15%)</label>
											<input class="form-control" type="text" value="0"  id="hra">
										</div>
										<div class="form-group">
											<label>Conveyance</label>
											<input class="form-control" type="text" value="0" id="conveyance">
										</div>
										<div class="form-group">
											<label>Allowance</label>
											<input class="form-control" type="text" value="0" id="allowance">
										</div>
										<div class="form-group">
											<label>Medical  Allowance</label>
											<input class="form-control" type="text" value="0"  id="medicalallowance">
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text" value="0" id="others">
										</div>
									</div>
									<div class="col-md-6">
										<h4 class="text-primary">Deductions</h4>
										<div class="form-group">
											<label>TDS</label>
											<input class="form-control" type="text" value="0" id="tds">
										</div>
										<div class="form-group">
											<label>ESI</label>
											<input class="form-control" type="text" value="0" id="esi">
										</div>
										<div class="form-group">
											<label>PF</label>
											<input class="form-control" type="text" value="0"  id="pf">
										</div>
										<div class="form-group">
											<label>Leave</label>
											<input class="form-control" type="text" value="0"  id="leave">
										</div>
										<div class="form-group">
											<label>Prof. Tax</label>
											<input class="form-control" type="text" value="0" id="proftax">
										</div>
										<div class="form-group">
											<label>Labour Welfare</label>
											<input class="form-control" type="text" value="0"  id="labwelfare">
										</div>
										<div class="form-group">
											<label>Fund</label>
											<input class="form-control" type="text"  value="0"  id="fund" >
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text"  value="0" id="otherdeducation">
										</div>
									</div>
								</div>
                <input type="hidden" id="empname"/>
                <input type="hidden" id="empid"/>
                <input type="hidden" id="empemail"/>
                <input type="hidden" id="empjoindate"/>
                <input type="hidden" id="empdesignation"/>
                <input type="hidden" id="emprole"/>


								<div class="m-t-20 text-center">
									<button type="button" class="btn btn-primary" onclick="savepayrolldetail();">Create Salary</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="edit_salary" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add Staff Salary</h4>
						</div>
						<div class="modal-body">
							<form id="formpayroll">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Select Staff</label>
											<select class="select" id="eselectstaff">

											</select>
										</div>
									</div>
									<div class="col-md-6">
										<label>Net Salary</label>
										<input class="form-control" type="text" id="enetsalary">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<h4 class="text-primary">Earnings</h4>
										<div class="form-group">
											<label>Basic</label>
											<input class="form-control" type="text" id="ebasic">
										</div>
										<div class="form-group">
											<label>DA(40%)</label>
											<input class="form-control" type="text" id="eda">
										</div>
										<div class="form-group">
											<label>HRA(15%)</label>
											<input class="form-control" type="text" id="ehra">
										</div>
										<div class="form-group">
											<label>Conveyance</label>
											<input class="form-control" type="text" id="econveyance">
										</div>
										<div class="form-group">
											<label>Allowance</label>
											<input class="form-control" type="text" id="eallowance">
										</div>
										<div class="form-group">
											<label>Medical  Allowance</label>
											<input class="form-control" type="text" id="emedicalallowance">
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text" id="eothers">
										</div>
									</div>
									<div class="col-md-6">
										<h4 class="text-primary">Deductions</h4>
										<div class="form-group">
											<label>TDS</label>
											<input class="form-control" type="text" id="etds">
										</div>
										<div class="form-group">
											<label>ESI</label>
											<input class="form-control" type="text" id="eesi">
										</div>
										<div class="form-group">
											<label>PF</label>
											<input class="form-control" type="text" id="epf">
										</div>
										<div class="form-group">
											<label>Leave</label>
											<input class="form-control" type="text" id="eleave">
										</div>
										<div class="form-group">
											<label>Prof. Tax</label>
											<input class="form-control" type="text" id="eproftax">
										</div>
										<div class="form-group">
											<label>Labour Welfare</label>
											<input class="form-control" type="text" id="elabwelfare">
										</div>
										<div class="form-group">
											<label>Fund</label>
											<input class="form-control" type="text" id="efund">
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text" id="eotherdeducation">
										</div>
									</div>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary" type="button" click="editpayrollsalary();">Save & Update</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_salary" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Salary</h4>
						</div>
						<form>
							<div class="modal-body card-box">
								<p>Are you sure want to delete this?</p>
								<div class="m-t-20 text-left">
									<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
									<button type="submit" class="btn btn-danger">Delete</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../assets/js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="../assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="../assets/js/select2.min.js"></script>
		<script type="text/javascript" src="../assets/js/moment.min.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="../assets/js/app.js"></script>
    <script type="text/javascript">
    function fetchempinfo(param){
      var fname = param.split(" ");
      var firstname =fname[0];
      var lastname = fname[1];
      $.ajax({
          type: "POST",
          url: "../src/getemployeeinformationbyname.php",
          data:({
            firstname:firstname,
            lastname:lastname
          }),
      success:function(data){
        response = JSON.parse(data);
        $("#empname").val(firstname+" "+lastname);
        $("#empid").val(response['Emp_id']);
        $("#empemail").val(response['useremail']);
        $("#empjoindate").val(response['Joiningdate']);
        $("#empdesignation").val(response['designation']);
        $("#emprole").val(response['company']);


    },
    error: function(data, errorThrown) {
        alert('request failed :' + errorThrown);
    }
    });
    }
    function selectstaffname()
    {

        $.ajax({
            type: "POST",
            url: "../src/getstaffnamefromemployee.php",
            data:"",
        success:function(data){
         response = JSON.parse(data);
         var count = Object.keys(response).length;
         var explist ="<option value=''>Select Employee Name</option>";
         for (var i = 0; i < count; i++) {
           explist +='<option value="'+response[i]['employeename']+'">'+response[i]['employeename']+'</option>';
         }
        $('#selectstaff').html(explist);
      },
      error: function(data, errorThrown) {
          alert('request failed :' + errorThrown);
      }
      });
    }
    $(document).ready(function(){

        selectstaffname();
        selectemployeetable();
    });
    function editpayrollsalary(){
      alert("edit");
    }
    function selectemployeetable(){
      $.ajax({
          type: "POST",
          url: "../src/fetchemployeetable.php",
          data:"",
          success: function(msg) {

               response = JSON.parse(msg);
               var count = Object.keys(response).length;
               var explist ="";
                for (var i = 0; i < count; i++) {
                     explist +=" <tr>";
                     explist +="<td>";
                     explist +="<a href='profile.php' class='avatar'>"+response[i]['selectstaff'][0]+"</a>";
                     explist +="<h2><a href='profile.php?empid="+response[i]['empid']+"'>"+response[i]['selectstaff']+"<span>"+response[i]['empdesignation']+"</span></a></h2>";
                     explist +="</td>";
                     explist += "<td>FT-000"+response[i]['id']+"</td>";
                     explist += "<td>"+response[i]['empemail']+"</td>";
                     explist +="<td>"+response[i]['empjoindate']+"</td>";
                     explist +="<td>";
                     explist += "<div class='dropdown'>";
                     explist += "<a class='btn btn-white btn-sm rounded dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>Web Designer <i class='caret'></i></a>";
                     explist += "</div></td>";
                     explist += "<td>"+response[i]['total']+"</td>";
                     explist += "<td><a class='btn btn-xs btn-primary' href='salary-view.php?empid="+response[i]['empid']+"'>Generate Slip</a></td>";
                     explist +="<td class='text-right'>";
                     explist += "<div class='dropdown'>";
                     explist += "<a href='#' class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a>";
                     explist +="<ul class='dropdown-menu pull-right'>";
                     explist  += "<li><a href='#' data-toggle='modal' data-target='#edit_salary' title='Edit'><i class='fa fa-pencil m-r-5'></i> Edit</a></li>";
                     explist  += "<li><a href='#' data-toggle='modal' data-target='#delete_salary' title='Delete'><i class='fa fa-trash-o m-r-5'></i> Delete</a></li>";
                     explist  += "</ul></div></td></tr>";

               }

                $('#displayemptbl').html(explist);
                 $('#tbl').datatable();

             },
             error: function(data, errorThrown) {
                 alert('request failed :' + errorThrown);
             }
         });
    }
    function savepayrolldetail(){
      var selectstaff = $("#selectstaff").val();
      var netsalary = $("#netsalary").val();
      var basic = $("#basic").val();
      var da = $("#da").val();
      var hra = $("#hra").val();
      var conveyance = $("#conveyance").val();
      var allowance = $("#allowance").val();
      var medicalallowance = $("#medicalallowance").val();
      var others = $("#others").val();
      var tds = $("#tds").val();
      var esi = $("#esi").val();
      var pf = $("#pf").val();
      var leave = $("#leave").val();
      var proftax = $("#proftax").val();
      var labwelfare = $("#labwelfare").val();
      var fund = $("#fund").val();
      var otherdeducation = $("#otherdeducation").val();
      var empid = $("#empid").val();
      var empemail = $("#empemail").val();
      var empjoindate = $("#empjoindate").val();
      var empdesignation = $("#empdesignation").val();
      var emprole = $("#emprole").val();
      if(netsalary===""||basic===""||da===""||hra===""||conveyance===""||allowance===""||
      medicalallowance===""||others===""||tds===""||esi===""||pf===""||leave===""
      ||proftax===""||labwelfare===""||fund===""||otherdeducation==="")
      {
        alert("Please Fill All Fields");
      }
      else{
           $.ajax({
               type: "POST",
               url: "../src/insertpayroll.php",
               data: ({
                   selectstaff: selectstaff,
                   netsalary: netsalary,
                   basic: basic,
                   da: da,
                   hra:hra,
                   conveyance:conveyance,
                   allowance:allowance,
                   medicalallowance:medicalallowance,
                   others:others,
                   tds:tds,
                   esi:esi,
                   pf:pf,
                   leave:leave,
                   proftax:proftax,
                   labwelfare:labwelfare,
                   fund:fund,
                   otherdeducation:otherdeducation,
                   empid:empid,
                   empemail:empemail,
                   empjoindate:empjoindate,
                   empdesignation:empdesignation,
                   emprole:emprole
             }),
               success: function(msg) {
                 alert(msg);
                    window.location.reload();
               },
               error: function(data, errorThrown) {
                   alert('request failed :' + errorThrown);
               }
           });
         }
    }

    </script>
    </body>
</html>
<?php
 }
 else {
   header("Location:index.php");
 }
 ?>
