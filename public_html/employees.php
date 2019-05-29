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
          <?php include 'header.php';?>
          <?php include 'sidebar.php';?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Employee</h4>
						</div>
						<div class="col-xs-8 text-right m-b-20">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
							<div class="view-icons">
								<a href="employees.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
								<a href="employees-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
							</div>
						</div>
					</div>
					<div class="row filter-row">
                           <div class="col-sm-3 col-xs-6">
								<div class="form-group form-focus">
									<label class="control-label">Employee ID</label>
									<input type="text" class="form-control floating" />
								</div>
                           </div>
                           <div class="col-sm-3 col-xs-6">
								<div class="form-group form-focus">
									<label class="control-label">Employee Name</label>
									<input type="text" class="form-control floating" />
								</div>
                           </div>
                           <div class="col-sm-3 col-xs-6">
								<div class="form-group form-focus select-focus">
									<label class="control-label">Designation</label>
									<select class="select floating">
										<option value="">Select Designation</option>
										<option value="">Web Developer</option>
										<option value="1">Web Designer</option>
										<option value="1">Android Developer</option>
										<option value="1">Ios Developer</option>
									</select>
								</div>
                           </div>
                           <div class="col-sm-3 col-xs-6">
                                <a href="#" class="btn btn-success btn-block"> Search </a>
                           </div>
                    </div>
					<div class="row staff-grid-row emp" >

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
			<div id="add_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add Employee</h4>
						</div>
						<div class="modal-body">
							<!-- <form class="m-b-30" id="addEmployee"> -->
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">First Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text" id="firstname" name="firstname" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Last Name</label>
											<input class="form-control" id="lastname" name="lastname" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Username <span class="text-danger">*</span></label>
											<input class="form-control" type="text" id="username" name="username">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Email <span class="text-danger">*</span></label>
											<input class="form-control" type="email" id="useremail" name="useremail" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Password</label>
											<input class="form-control" type="password" id="userpassword" name="userpassword" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Confirm Password</label>
											<input class="form-control" type="password" id="confirmpassword" name="confirmpassword" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Employee ID <span class="text-danger">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Joining Date <span class="text-danger">*</span></label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text" id="Joiningdate" name="Joiningdate"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Phone </label>
											<input class="form-control" type="text" id="userphone" name="userphone" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Company</label>
											<select class="select" required id="company">
												<option value="Global Technologies">Global Technologies</option>
												<option value="Delta Infotech">Delta Infotech</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Designation</label>
											<select class="select" required id="designation">
												<option>Web Developer</option>
												<option>Web Designer</option>
												<option>SEO Analyst</option>
											</select>
										</div>
									</div>
								</div>
								<div class="table-responsive m-t-15">
									<table class="table table-striped custom-table">
										<thead>
											<tr>
												<th>Module Permission</th>
												<th class="text-center">Read</th>
												<th class="text-center">Write</th>
												<th class="text-center">Create</th>
												<th class="text-center">Delete</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Holidays</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="R" class="holidays">
												</td>
												<td class="text-center">
													<input type="checkbox" value="W" class="holidays">
												</td>
												<td class="text-center">
													<input type="checkbox" value="C" class="holidays">
												</td>
												<td class="text-center">
													<input type="checkbox" value="D" class="holidays">
												</td>
											</tr>
											<tr>
												<td>Leave Request</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="R" class="leaves">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="W" class="leaves">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="C" class="leaves">
												</td>
												<td class="text-center">
													<input type="checkbox" value="D" class="leaves">
												</td>
											</tr>
											<tr>
												<td>Clients</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="R" class="Clients">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="W" class="Clients">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="C" class="Clients">
												</td>
												<td class="text-center">
													<input type="checkbox" value="D" class="Clients">
												</td>
											</tr>
											<tr>
												<td>Projects</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="R" class="Projects">
												</td>
												<td class="text-center">
													<input type="checkbox" value="W" class="Projects">
												</td>
												<td class="text-center">
													<input type="checkbox" value="C" class="Projects">
												</td>
												<td class="text-center">
													<input type="checkbox" value="D" class="Projects">
												</td>
											</tr>
											<tr>
												<td>Tasks</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="R" class="Tasks">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox"  value="W" class="Tasks">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox"  value="C" class="Tasks">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox"  value="D" class="Tasks">
												</td>
											</tr>
											<tr>
												<td>Chats</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="R" class="Chats">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="W" class="Chats">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="C" class="Chats">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="D" class="Chats">
												</td>
											</tr>
											<tr>
												<td>Assets</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="R" class="Assets">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="W" class="Assets">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="C" class="Assets">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="D" class="Assets">
												</td>
											</tr>
											<tr>
												<td>Timing Sheets</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="R" class="TimingSheets">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="W" class="TimingSheets">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="C" class="TimingSheets">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox" value="D" class="TimingSheets">
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="m-t-20 text-center">
									<button  type="button" class="btn btn-primary" onclick="addEmploee();">Create Employee</button>
								</div>
							<!-- </form> -->
						</div>
					</div>
				</div>
			</div>
			<div id="edit_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Edit Employee</h4>
						</div>
						<div class="modal-body">
							<form class="m-b-30">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">First Name <span class="text-danger">*</span></label>
											<input class="form-control" value="John" type="text" id="editfirstname">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Last Name</label>
											<input class="form-control" value="Doe" type="text" id="editlastname">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Username <span class="text-danger">*</span></label>
											<input class="form-control" value="johndoe" type="text" id="editusername">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Email <span class="text-danger">*</span></label>
											<input class="form-control" value="johndoe@example.com" type="email" id="edituseremail">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Password</label>
											<input class="form-control" value="johndoe" type="password" id="edituserpassword">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Confirm Password</label>
											<input class="form-control" value="johndoe" type="password" id="editconfirmpassword">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Employee ID <span class="text-danger">*</span></label>
											<input type="text" value="FT-0001" readonly="" class="form-control floating" id="editid">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Joining Date <span class="text-danger">*</span></label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text" id="editJoiningdate"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Phone </label>
											<input class="form-control" value="9876543210" type="text" id="edituserphone">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Company</label>
											<select class="select" id="editcompany">
												<option value="Global Technologies">Global Technologies</option>
												<option value="Delta Infotech">Delta Infotech</option>
												<option value="International Software Inc" selected>International Software Inc</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Designation</label>
											<select class="select" id="editdesignation">
												<option value="Web Developer">Web Developer</option>
												<option value="Web Designer">Web Designer</option>
												<option value="SEO Analyst">SEO Analyst</option>
											</select>
										</div>
									</div>
								</div>
								<div class="table-responsive m-t-15">
									<table class="table table-striped custom-table">
										<thead>
											<tr>
												<th>Module Permission</th>
												<th class="text-center">Read</th>
												<th class="text-center">Write</th>
												<th class="text-center">Create</th>
												<th class="text-center">Delete</th>
												<th class="text-center">Import</th>
												<th class="text-center">Export</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Holidays</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
											<tr>
												<td>Leave Request</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
											<tr>
												<td>Clients</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
											<tr>
												<td>Projects</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
											<tr>
												<td>Tasks</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
											<tr>
												<td>Chats</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
											<tr>
												<td>Assets</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
											<tr>
												<td>Timing Sheets</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary" onclick="updateEmployee();"  type="button">Save Changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Employee</h4>
						</div>
						<form>
							<div class="modal-body card-box">
								<p>Are you sure want to delete this?</p>
								<div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
									<button type="button" class="btn btn-danger" id="deleteEmp">Delete</button>
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
		<script type="text/javascript" src="../assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="../assets/js/select2.min.js"></script>
		<script type="text/javascript" src="../assets/js/moment.min.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="../assets/js/app.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      displayEmployees();
    });
        function displayEmployees(){
          $.ajax({
            url:"../src/displayEmployees.php",
            type:"GET",
            success:function(data){
              response = JSON.parse(data);
              var count = Object.keys(response).length;
              for(var i=0;i<count;i++){
var employee = '<div class="col-md-4 col-sm-4 col-xs-6 col-lg-3"><div class="profile-widget"> <div class="profile-img"><a href="profile.php?empid='+response[i]['Emp_id']+'"><img class="avatar" src="assets/img/u.jpg" alt="'+response[i]['firstname'][0]+'"></a></div><div class="dropdown profile-action"><a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a><ul class="dropdown-menu pull-right"><li><a href="#" onclick="editEmployee('+response[i]['Emp_id']+')" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li><li><a href="#" data-toggle="modal" data-target="#delete_employee" onclick="deleteEmployee('+response[i]['Emp_id']+')"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li></ul></div><h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">'+response[i]['firstname']+''+response[i]['lastname']+'</a></h4><div class="small text-muted">'+response[i]['designation']+'</div></div></div>';
    $(" .emp").append(employee);
              }
            }
          });
        }


        function addEmploee(){
          var firstname       = $('#firstname').val();
          var lastname        = $('#lastname').val();
          var username        = $('#username').val();
          var useremail       = $('#useremail').val();
          var userpassword    = $('#userpassword').val();
          var confirmpassword = $('#confirmpassword').val();
          var Joiningdate     = $('#Joiningdate').val();
          var userphone       = $('#userphone').val();
          var company         = $('#company').val();
          var designation     = $('#designation').val();
          var j= 0;
          var holidays = '';
          $('.holidays:checked').each(function(){
            var values = $(this).val();
            j++;
            if(j===1)
            holidays +=values;
            else
            {
              holidays += ',';
              holidays += values;
            }
          });
          j=0;
          var leaves= '';
          $('.leaves:checked').each(function(){
            var values = $(this).val();
            j++;
            if(j===1)
            leaves +=values;
            else
            {
              leaves += ',';
              leaves += values;
            }
          });

          j=0;
          var Clients= '';
          $('.Clients:checked').each(function(){
            var values = $(this).val();
            j++;
            if(j===1)
            Clients +=values;
            else
            {
              Clients += ',';
              Clients += values;
            }
          });

          j=0;
          var Projects= '';
          $('.Projects:checked').each(function(){
            var values = $(this).val();
            j++;
            if(j===1)
            Projects +=values;
            else
            {
              Projects += ',';
              Projects += values;
            }
          });

          j=0;
          var Tasks= '';
          $('.Tasks:checked').each(function(){
            var values = $(this).val();
            j++;
            if(j===1)
            Tasks +=values;
            else
            {
              Tasks += ',';
              Tasks += values;
            }
          });
          j=0;
          var Chats= '';
          $('.Chats:checked').each(function(){
            var values = $(this).val();
            j++;
            if(j===1)
            Chats +=values;
            else
            {
              Chats += ',';
              Chats += values;
            }
          });
          j=0;
          var Assets= '';
          $('.Assets:checked').each(function(){
            var values = $(this).val();
            j++;
            if(j===1)
            Assets +=values;
            else
            {
              Assets += ',';
              Assets += values;
            }
          });
          j=0;
          var TimingSheets= '';
          $('.TimingSheets:checked').each(function(){
            var values = $(this).val();
            j++;
            if(j===1)
            TimingSheets +=values;
            else
            {
              TimingSheets += ',';
              TimingSheets += values;
            }
          });
          if(userpassword !=confirmpassword){
            alert("Confirm Password Doesn't Match");
          }else {
            $.ajax({
              url:'../src/addEmployee.php',
              method:'POST',
              data:({
                firstname:firstname,
                lastname:lastname,
                useremail:useremail,
                username:username,
                userpassword:userpassword,
                Joiningdate:Joiningdate,
                userphone:userphone,
                company:company,
                designation:designation,

                holidays:holidays,
                leaves:leaves,
                Clients:Clients,
                Projects:Projects,
                Tasks:Tasks,
                Chats:Chats,
                Assets:Assets,
                TimingSheets:TimingSheets
              }),

              beforeSend:function(data){

              },
              success:function(data){
              alert(data);
              }
            });
          }
        }

        function editEmployee(Emp_id){
          $.ajax({
            url:"../src/editEmployee.php",
            type:"POST",
            data:{Emp_id:Emp_id},
            success:function(data){
              response = JSON.parse(data);
              $('#editid').val(response['Emp_id']);
              $('#editfirstname').val(response['firstname']);
              $('#editlastname').val(response['lastname']);
              $('#editusername').val(response['username']);
              $('#edituseremail').val(response['useremail']);
              $('#edituserphone').val(response['userphone']);
              $('#editJoiningdate').val(response['Joiningdate']);
              $('#editcompany').append("<option value="+response['company']+" selected>"+response['company']+"</option>");
              $('#editdesignation').append("<option value="+response['designation']+" selected>"+response['designation']+"</option>");
            }
          });
        }

        function updateEmployee(){
          var firstname       = $('#editfirstname').val();
          var lastname        = $('#editlastname').val();
          var username        = $('#editusername').val();
          var useremail       = $('#edituseremail').val();
          var userpassword    = $('#edituserpassword').val();
          var confirmpassword = $('#editconfirmpassword').val();
          var Joiningdate     = $('#editJoiningdate').val();
          var userphone       = $('#edituserphone').val();
          var company         = $('#editcompany').val();
          var Emp_id          = $('#editid').val();
          var designation     = $('#editdesignation').val();
          if(userpassword !=confirmpassword){
            alert("Confirm Password Doesn't Match");
          }else {
            $.ajax({
              url:'../src/addEmployee.php',
              method:'POST',
              data:({
                Emp_id:Emp_id,
                firstname:firstname,
                lastname:lastname,
                useremail:useremail,
                username:username,
                userpassword:userpassword,
                Joiningdate:Joiningdate,
                userphone:userphone,
                company:company,
                designation:designation
              }),

              beforeSend:function(){
              },
              success:function(data){
              alert(data);
              window.location.reload();
              }
            });
          }
        }

        function deleteEmployee(Emp_id){
          $("#deleteEmp").val(Emp_id);
        }

        $('#deleteEmp').click(function(){
      var Emp_id = $("#deleteEmp").val();
      $.ajax({
        url:"../src/eleteEmployee.php",
        type:"POST",
        data:{Emp_id:Emp_id},
        success:function(data){
          window.location.reload();
        }
      });
    });

    </script>
    </body>
</html>
<?php
 }
 else {
   header("Location:index.php");
 }
 ?>
