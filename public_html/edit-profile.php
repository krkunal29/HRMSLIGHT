<?php
session_start();
if(isset($_SESSION['id']))
{
include '../db/connection.php';
  $uid = $_SESSION['id'];
  $uname = $_SESSION['uname'];
  $uemail = $_SESSION['uemail'];
  $empid = $_REQUEST['empid'];
  if($empid == ""){
    $empid = $uid;
  }

?>
<!DOCTYPE html>
<html>
   <head>
        <?php include('links.php'); ?>
    </head>
    <body>
        <div class="main-wrapper">
          <?php include('header.php'); ?>
          <?php include('sidebar.php'); ?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Edit Profile</h4>
						</div>
					</div>
					<form id="basicform">
						<div class="card-box">
							<h3 class="card-title">Basic Informations</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="profile-img-wrap">
										<img class="inline-block" src="../assets/img/user.jpg" alt="user">
										<div class="fileupload btn btn-default">
											<span class="btn-text">edit</span>
											<input class="upload" type="file">
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group form-focus">
													<label class="control-label">First Name</label>
													<input type="text" class="form-control floating" id="firstname"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus">
													<label class="control-label">Last Name</label>
													<input type="text" class="form-control floating" id="lastname"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus">
													<label class="control-label">Birth Date</label>
													<div class="cal-icon"><input class="form-control floating datetimepicker" type="text" id="birthdate"></div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus select-focus">
													<label class="control-label">Gendar</label>
													<select class="select form-control floating" id="gender">
														<option value="">Select Gendar</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-box">
							<h3 class="card-title">Contact Informations</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group form-focus">
										<label class="control-label">Address</label>
										<input type="text" class="form-control floating" id="address"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">State</label>
										<input type="text" class="form-control floating" id="state"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Country</label>
										<input type="text" class="form-control floating" id="country"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Pin Code</label>
										<input type="text" class="form-control floating" id="pincode"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Phone Number</label>
										<input type="text" class="form-control floating"  id="contactno"/>
									</div>
								</div>
							</div>
						</div>
            <form>
						<div class="card-box">
							<h3 class="card-title">Education Informations</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Institution</label>
										<input type="text" class="form-control floating" id="institution"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Subject</label>
										<input type="text" class="form-control floating" id="subject"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Starting Date</label>
										<input type="text" class="form-control floating" id="startingdate"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Complete Date</label>
										<input type="text" class="form-control floating" id="completedate"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Degree</label>
										<input type="text" class="form-control floating" id="degree" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Grade</label>
										<input type="text" class="form-control floating" id="grade" />
									</div>
								</div>
							</div>
							<div class="add-more">
								<a class="btn btn-primary" onclick="saveeducationinformationsform();"><i class="fa fa-plus"></i> Add More Institute</a>
							</div>
						</div>
          </form>
          <form>
						<div class="card-box">
							<h3 class="card-title">Experience Informations</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Company Name</label>
										<input type="text" class="form-control floating" id="companyname"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Location</label>
										<input type="text" class="form-control floating" id="location"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Job Position</label>
										<input type="text" class="form-control floating" id="jobposition"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Period From</label>
										<input type="text" class="form-control floating" id="periodfrom"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Period To</label>
										<input type="text" class="form-control floating" id="periodto" />
									</div>
								</div>
							</div>
							<div class="add-more">
								<a class="btn btn-primary" onclick="saveexperienceinformations();"><i class="fa fa-plus"></i> Add More Experience</a>
							</div>
						</div>
            </form>
            <form>
  						<div class="card-box">
  							<h3 class="card-title">Skills Informations</h3>
  							<div class="row">
  								<div class="col-md-6">
  									<div class="form-group form-focus">
  										<label class="control-label">Skills</label>
  										<input type="text" class="form-control floating" id="skills"/>
  									</div>
  								</div>
  							</div>
  							<div class="add-more">
  								<a class="btn btn-primary" onclick="saveskillsinformations();"><i class="fa fa-plus"></i> Add More Experience</a>
  							</div>
  						</div>
              </form>
						<div class="text-center m-t-20">
							<button class="btn btn-primary btn-lg" type="button" onclick="saveprofile();">Save &amp; update</button>
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
		</div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="../assets/js/select2.min.js"></script>
		<script type="text/javascript" src="../assets/js/moment.min.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="../assets/js/app.js"></script>
    <script>
    function saveprofile(){

      var firstname=$("#firstname").val();
      var lastname=$("#lastname").val();
      var birthdate=$("#birthdate").val();
      var gender=$("#gender").val();
      var address=$("#address").val();
      var country=$("#country").val();
      var state=$("#state").val();
      var pincode=$("#pincode").val();
      var contactno=$("#contactno").val();
      $.ajax({
          type: "POST",
          url: "../src/insertsaveprofileinformation.php",
          data: ({
              empid :<?php echo $empid;?>,
              firstname: firstname,
              lastname: lastname,
              birthdate: birthdate,
              gender: gender,
              address: address,
              state:state,
              country: country,
              pincode: pincode,
              contactno: contactno
        }),
          success: function(msg) {
               alert(msg);
          },
          error: function(data, errorThrown) {
              alert('request failed :' + errorThrown);
          }
      });
    }

    function saveeducationinformationsform(){
      var institution=$("#institution").val();
      var subject=$("#subject").val();
      var startingdate=$("#startingdate").val();
      var completedate=$("#completedate").val();
      var degree=$("#degree").val();
      var grade=$("#grade").val();
      if(institution===""||subject===""||startingdate===""||completedate===""||degree===""||grade===""){
        alert("Please Fill All Required Fields");
      }
      else{
      $.ajax({
          type: "POST",
          url: "../src/insertsaveeducationinformationsform.php",
          data: ({
              empid :<?php echo $empid;?>,
              institution: institution,
              subject: subject,
              startingdate: startingdate,
              completedate: completedate,
              degree: degree,
              grade:grade
        }),
          success: function(msg) {
               alert(msg);
               $("#institution").val("");
               $("#subject").val("");
               $("#startingdate").val("");
               $("#completedate").val("");
               $("#degree").val("");
               $("#grade").val("");
          },
          error: function(data, errorThrown) {
              alert('request failed :' + errorThrown);
          }
      });
    }
    }
    function saveexperienceinformations()
    {
      var companyname=$("#companyname").val();
      var location=$("#location").val();
      var jobposition=$("#jobposition").val();
      var periodfrom=$("#periodfrom").val();
      var periodto=$("#periodto").val();
      if(companyname===""||location===""||jobposition===""||periodfrom===""||periodto===""){
        alert("Please Fill All Required Fields");
      }
      else{
      $.ajax({
          type: "POST",
          url: "../src/insertsaveexperienceinformation.php",
          data: ({
              empid :<?php echo $empid;?>,
              companyname: companyname,
              location: location,
              jobposition: jobposition,
              periodfrom: periodfrom,
              periodto: periodto
        }),
          success: function(msg) {
               alert(msg);
               $("#companyname").val("");
               $("#location").val("");
               $("#jobposition").val("");
               $("#periodfrom").val("");
               $("#periodto").val("");
          },
          error: function(data, errorThrown) {
              alert('request failed :' + errorThrown);
          }
      });
    }
    }
    function saveskillsinformations(){
      var skills=$("#skills").val();
      if(skills===""){
       $("#skills").focus();
      }else{
      $.ajax({
        type:"POST",
        url:"../src/saveskillinformation.php",
        data:({
          empid :<?php echo $empid;?>,
          skills:skills
        }),
        success: function(msg) {
             alert(msg);
             $("#skills").val("");
        },
        error: function(data, errorThrown) {
            alert('request failed :' + errorThrown);
        }
      });
    }
    }
    function fetchprofileinfo(){
      $.ajax({
          type: "POST",
          url: "../src/fetchprofileinformation.php",
          data:({empid :<?php echo $empid;?>}),
          success: function(msg) {
               if(msg){
               response = JSON.parse(msg);
               $("#firstname").focus();
               $("#firstname").val(response['firstname']);
               $("#lastname").focus();
               $("#lastname").val(response['lastname']);
               $("#birthdate").focus();
               $("#birthdate").val(response['birthdate']);
               $("#gender").focus();
               $("#gender").append("<option value="+response['gender']+" selected>"+response['gender']+"</option>");
               $("#address").focus();
               $("#address").val(response['address']);
               $("#state").focus();
               $("#state").val(response['state']);
               $("#country").focus();
               $("#country").val(response['country']);
               $("#pincode").focus();
               $("#pincode").val(response['pincode']);
               $("#contactno").focus();
               $("#contactno").val(response['contactno']);
             }
          },
          error: function(data, errorThrown) {
              alert('request failed :' + errorThrown);
          }
      });
    }
    $(document).ready(function(){
        fetchprofileinfo();
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
