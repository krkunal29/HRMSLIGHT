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
            <?php include 'header.php'; ?>
            <?php include 'sidebar.php'; ?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Projects</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i> Create Project</a>
							<div class="view-icons">
								<a href="projects.php" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
								<a href="project-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
							</div>
						</div>
					</div>
					<div class="row filter-row">
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">Project Name</label>
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
									<option value="">Select Role</option>
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
					<div class="row">
						<div class="col-lg-3 col-sm-4">
							<div class="card-box project-box">
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
										<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
									</ul>
								</div>
								<h4 class="project-title"><a href="project-view.html">Food and Drinks</a></h4>
								<small class="block text-ellipsis m-b-15">
									<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
									<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
								</small>
								<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
									typesetting industry. When an unknown printer took a galley of type and
									scrambled it...
								</p>
								<div class="pro-deadline m-b-15">
									<div class="sub-title">
										Deadline:
									</div>
									<div class="text-muted">
										8 Sep 2017
									</div>
								</div>
								<div class="project-members m-b-15">
									<div>Project Leader :</div>
									<ul class="team-members">
										<li>
											<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="../assets/img/user.jpg" alt="Jeffery Lalor"></a>
										</li>
									</ul>
								</div>
								<div class="project-members m-b-15">
									<div>Team :</div>
									<ul class="team-members">
										<li>
											<a href="#" data-toggle="tooltip" title="John Doe"><img src="../assets/img/user.jpg" alt="John Doe"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="Richard Miles"><img src="../assets/img/user.jpg" alt="Richard Miles"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="John Smith"><img src="../assets/img/user.jpg" alt="John Smith"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="Mike Litorus"><img src="../assets/img/user.jpg" alt="Mike Litorus"></a>
										</li>
										<li>
											<a href="#" class="all-users">+15</a>
										</li>
									</ul>
								</div>
								<p class="m-b-5">Progress <span class="text-success pull-right">40%</span></p>
								<div class="progress progress-xs m-b-0">
									<div class="progress-bar progress-bar-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-4">
							<div class="card-box project-box">
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
										<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
									</ul>
								</div>
								<h4 class="project-title"><a href="project-view.html">School Guru</a></h4>
								<small class="block text-ellipsis m-b-15">
									<span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
									<span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
								</small>
								<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
									typesetting industry. When an unknown printer took a galley of type and
									scrambled it...
								</p>
								<div class="pro-deadline m-b-15">
									<div class="sub-title">
										Deadline:
									</div>
									<div class="text-muted">
										8 Sep 2017
									</div>
								</div>
								<div class="project-members m-b-15">
									<div>Project Leader :</div>
									<ul class="team-members">
										<li>
											<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
										</li>
									</ul>
								</div>
								<div class="project-members m-b-15">
									<div>Team :</div>
									<ul class="team-members">
										<li>
											<a href="#" data-toggle="tooltip" title="John Doe"><img src="../assets/img/user.jpg" alt="John Doe"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="Richard Miles"><img src="../assets/img/user.jpg" alt="Richard Miles"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="John Smith"><img src="../assets/img/user.jpg" alt="John Smith"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="Mike Litorus"><img src="../assets/img/user.jpg" alt="Mike Litorus"></a>
										</li>
										<li>
											<a href="#" class="all-users">+15</a>
										</li>
									</ul>
								</div>
								<p class="m-b-5">Progress <span class="text-success pull-right">40%</span></p>
								<div class="progress progress-xs m-b-0">
									<div class="progress-bar progress-bar-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-4">
							<div class="card-box project-box">
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
										<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
									</ul>
								</div>
								<h4 class="project-title"><a href="project-view.html">Penabook</a></h4>
								<small class="block text-ellipsis m-b-15">
									<span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
									<span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
								</small>
								<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
									typesetting industry. When an unknown printer took a galley of type and
									scrambled it...
								</p>
								<div class="pro-deadline m-b-15">
									<div class="sub-title">
										Deadline:
									</div>
									<div class="text-muted">
										8 Sep 2017
									</div>
								</div>
								<div class="project-members m-b-15">
									<div>Project Leader :</div>
									<ul class="team-members">
										<li>
											<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
										</li>
									</ul>
								</div>
								<div class="project-members m-b-15">
									<div>Team :</div>
									<ul class="team-members">
										<li>
											<a href="#" data-toggle="tooltip" title="John Doe"><img src="../assets/img/user.jpg" alt="John Doe"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="Richard Miles"><img src="../assets/img/user.jpg" alt="Richard Miles"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="John Smith"><img src="../assets/img/user.jpg" alt="John Smith"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="Mike Litorus"><img src="../assets/img/user.jpg" alt="Mike Litorus"></a>
										</li>
										<li>
											<a href="#" class="all-users">+15</a>
										</li>
									</ul>
								</div>
								<p class="m-b-5">Progress <span class="text-success pull-right">40%</span></p>
								<div class="progress progress-xs m-b-0">
									<div class="progress-bar progress-bar-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-4">
							<div class="card-box project-box">
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
										<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
									</ul>
								</div>
								<h4 class="project-title"><a href="project-view.html">Harvey Clinic</a></h4>
								<small class="block text-ellipsis m-b-15">
									<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
									<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
								</small>
								<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
									typesetting industry. When an unknown printer took a galley of type and
									scrambled it...
								</p>
								<div class="pro-deadline m-b-15">
									<div class="sub-title">
										Deadline:
									</div>
									<div class="text-muted">
										8 Sep 2017
									</div>
								</div>
								<div class="project-members m-b-15">
									<div>Project Leader :</div>
									<ul class="team-members">
										<li>
											<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="../assets/img/user.jpg" alt="Jeffery Lalor"></a>
										</li>
									</ul>
								</div>
								<div class="project-members m-b-15">
									<div>Team :</div>
									<ul class="team-members">
										<li>
											<a href="#" data-toggle="tooltip" title="John Doe"><img src="../assets/img/user.jpg" alt="John Doe"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="Richard Miles"><img src="../assets/img/user.jpg" alt="Richard Miles"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="John Smith"><img src="../assets/img/user.jpg" alt="John Smith"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="Mike Litorus"><img src="../assets/img/user.jpg" alt="Mike Litorus"></a>
										</li>
										<li>
											<a href="#" class="all-users">+15</a>
										</li>
									</ul>
								</div>
								<p class="m-b-5">Progress <span class="text-success pull-right">40%</span></p>
								<div class="progress progress-xs m-b-0">
									<div class="progress-bar progress-bar-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
								</div>
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
			<div id="create_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Create Project</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Project Name</label>
											<input class="form-control" type="text" id="projectname">
										</div>
									</div>
									<!-- <div class="col-md-6">
										<div class="form-group form-focus select-focus">
											<label>Client</label>
											<select class="select floating" id="clientcompany">
												<option>Global Technologies</option>
												<option>Delta Infotech</option>
											</select>

										</div>
									</div> -->
                  <div class="col-sm-6 col-xs-6">
                    <label class="control-label">Client Name</label>
                    <div class="form-group form-focus select-focus">
                      <label class="control-label">Client</label>
                      <select class="select floating" id="clientcompany">
                        <option value="">Select Role</option>
                        <!-- <option value="">Web Developer</option>
                        <option value="1">Web Designer</option>
                        <option value="1">Android Developer</option>
                        <option value="1">Ios Developer</option> -->
                      </select>
                    </div>
                  </div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Start Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker"
                        id="startdate" type="text"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>End Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker"
                        id="enddate" type="text"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label>Rate</label>
											<input placeholder="$50" class="form-control" id="rate" type="text">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>&nbsp;</label>
											<select class="select floating" id="rateinhours">
												<option value="Hourly">Hourly</option>
												<option value="Fixed">Fixed</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Priority</label>
											<select class="select floating" id="priority">
												<option value="High">High</option>
												<option value="Medium">Medium</option>
												<option value="Low">Low</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Project Leader</label>
											<input class="form-control" type="text" id="addprojectleader" onchange="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Team Leader</label>
											<div class="project-members">
												<a href="#" data-toggle="tooltip" title="Jeffery Lalor">
													<img src="../assets/img/user.jpg" class="avatar" alt="Jeffery Lalor" height="20" width="20">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Team</label>
											<input class="form-control" type="text" id="addteam">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Team Members</label>
											<div class="project-members">
												<a href="#" data-toggle="tooltip" title="John Doe">
													<img src="../assets/img/user.jpg" class="avatar" alt="John Doe" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="Richard Miles">
													<img src="../assets/img/user.jpg" class="avatar" alt="Richard Miles" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="John Smith">
													<img src="../assets/img/user.jpg" class="avatar" alt="John Smith" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="Mike Litorus">
													<img src="../assets/img/user.jpg" class="avatar" alt="Mike Litorus" height="20" width="20">
												</a>
												<span class="all-team">+2</span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea rows="4" cols="5" id="description" class="form-control summernote" placeholder="Enter your message here"></textarea>
								</div>
								<div class="form-group">
									<label>Upload Files</label>
									<input class="form-control" type="file" id="uploadfile">
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary" onclick="createproject()">Create Project</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="edit_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Edit Project</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Project Name</label>
											<input class="form-control" value="School Guru" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Client</label>
											<select class="select">
												<option>Global Technologies</option>
												<option>Delta Infotech</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Start Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>End Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" style="" type="text"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label>Rate</label>
											<input placeholder="$50" class="form-control" value="$5000" type="text">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>&nbsp;</label>
											<select class="select">
												<option>Hourly</option>
												<option selected>Fixed</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Priority</label>
											<select class="select">
												<option selected>High</option>
												<option>Medium</option>
												<option>Low</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Project Leader</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Team Leader</label>
											<div class="project-members">
												<a href="#" data-toggle="tooltip" title="Jeffery Lalor">
													<img src="assets/img/user.jpg" class="avatar" alt="Jeffery Lalor" height="20" width="20">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Team</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Team Members</label>
											<div class="project-members">
												<a href="#" data-toggle="tooltip" title="John Doe">
													<img src="../assets/img/user.jpg" class="avatar" alt="John Doe" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="Richard Miles">
													<img src="../assets/img/user.jpg" class="avatar" alt="Richard Miles" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="John Smith">
													<img src="../assets/img/user.jpg" class="avatar" alt="John Smith" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="Mike Litorus">
													<img src="../assets/img/user.jpg" class="avatar" alt="Mike Litorus" height="20" width="20">
												</a>
												<span class="all-team">+2</span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea rows="4" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
								</div>
								<div class="form-group">
									<label>Upload Files</label>
									<input class="form-control" type="file">
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Save Changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Project</h4>
						</div>
						<div class="modal-body card-box">
							<p>Are you sure want to delete this?</p>
							<div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
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
		<script type="text/javascript" src="../assets/plugins/summernote/dist/summernote.min.js"></script>
    <script>
		$(document).ready(function(){

			$('.summernote').summernote({
				height: 200,                 // set editor height
				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: false                 // set focus to editable area after initializing summernote
			});
     getclientcompany();
		});
    function getclientcompany(){
      $.ajax({
        type:'POST',
        url:'../src/getclientcompany.php',
        success:function(msg){
          // alert(msg);
          response = JSON.parse(msg);
          var clientlist ="<option value=''>Select Client Name</option>";
          var count = Object.keys(response).length;
          for(var i=0;i<count;i++){
             clientlist +='<option value="'+response[i]['clientname']+'">'+response[i]['clientname']+'</option>';
          }
          $("#clientcompany").html(clientlist);
        }
      });
    }
    function createproject(){
      var projectname = $("#projectname").val();
      var clientcompany = $("#clientcompany").val();
      var startdate = $("#startdate").val();
      var enddate = $("#enddate").val();
      var rate = $("#rate").val();
      var rateinhours = $("#rateinhours").val();
      var priority = $("#priority").val();
      var addprojectleader = $("#addprojectleader").val();
      var addteam = $("#addteam").val();
      var description = $("#description").val();
      $.ajax({
        type:'POST',
        url:'../src/insertprojectinfo.php',
        data:({
          projectname:projectname,
          clientcompany:clientcompany,
          startdate:startdate,
          enddate:enddate,
          rate:rate,
          rateinhours:rateinhours,
          priority:priority,
          addprojectleader:addprojectleader,
          addteam:addteam,
          description:description
        }),
        success:function(msg){
          alert(msg);
          window.location.reload();
        }
      });
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
