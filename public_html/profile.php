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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
  <title>Dashboard - HRMS admin template</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/plugins/morris/morris.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    </head>
    <body>
        <div class="main-wrapper">
          <?php  include "header.php"; ?>
          <?php  include "sidebar.php"; ?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">My Profile</h4>
						</div>

						<div class="col-sm-4 text-right m-b-30">
							<a href="edit-profile.php?empid=<?php echo $empid; ?>" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Edit Profile</a>
						</div>
					</div>
					<div class="card-box">
						<div class="row">
							<div class="col-md-12">
								<div class="profile-view">
									<div class="profile-img-wrap">
										<div class="profile-img">
											<a href="#"><img class="avatar" src="assets/img/user.jpg"  alt=""></a>
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-5">
												<div class="profile-info-left">
													<h3 class="user-name m-t-0 m-b-0"><span id="setusername"></span></h3>
													<small class="text-muted"><span id="setprofession"></span></small>
													<div class="staff-id">Employee ID : <span id="empid"></span></div>
													<div class="staff-msg"><a href="chat.html" class="btn btn-custom">Send Message</a></div>
												</div>
											</div>
											<div class="col-md-7">
												<ul class="personal-info">
													<li>
														<span class="title">Phone:</span>
														<span class="text"><a href="#"><span id="empcontactno"></span></a></span>
													</li>
													<li>
														<span class="title">Email:</span>
														<span class="text"><a href="#"><span id="empemail"></span></a></span>
													</li>
													<li>
														<span class="title">Birthday:</span>
														<span class="text" id="setbdate"></span>
													</li>
													<li>
														<span class="title">Address:</span>
														<span class="text" id="setaddress"></span>
													</li>
													<li>
														<span class="title">Gender:</span>
														<span class="text" id="setgender"></span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="card-box m-b-0">
								<h3 class="card-title">Skills</h3>
								<div class="skills">

								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="card-box">
								<h3 class="card-title">Education Informations</h3>
								<div class="experience-box">
									<ul class="experience-list" id="explist">


									</ul>
								</div>
							</div>
							<div class="card-box m-b-0">
								<h3 class="card-title">Experience</h3>
								<div class="experience-box">
									<ul class="experience-list" id="edulist">

									</ul>
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
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
    <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="../assets/js/app.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        fetchempprofileinfo();
        fetchskills();
        fetchexplist();
        fetchedudetail();
    });
    function fetchedudetail(){
      $.ajax({
        type:"GET",
        url:"../src/fetcheducationdetail.php",
        data:{'Emp_id':'<?php echo $empid;?>'},
        success: function(msg){
          response = JSON.parse(msg);
          var count = Object.keys(response).length;
          var explist ="";
          for (var i = 0; i < count; i++) {
          explist +='<li>';
          explist +='  <div class="experience-user">';
          explist +='    <div class="before-circle"></div>';
          explist +='  </div>';
          explist +='  <div class="experience-content">';
          explist +='    <div class="timeline-content">';
          explist +='    <a href="#/" class="name">'+response[i]['degree']+'</a><br/><a href="#/" class="name">'+response[i]['institution']+'</a>';
          explist +='      <span class="time">'+response[i]['startingdate']+' -'+response[i]['completedate']+'</span>';
          explist +='    </div>';
          explist +='  </div>';
          explist +='</li>';
        }
        $('#edulist').html(explist);
        }
      });
    }
    function fetchexplist(){
      $.ajax({
          type: "POST",
          url: "../src/fetchexperienceinformation.php",
          data:{'Emp_id':'<?php echo $empid;?>'},
          success: function(msg) {
            if(msg){

               response = JSON.parse(msg);
               var count = Object.keys(response).length;
               var explist ="";
               for (var i = 0; i < count; i++) {
                 explist ="<li><div class='experience-user'><div class='before-circle'></div></div>";
                     explist +="<div class='experience-content'><div class='timeline-content'><a href='#/' class='name'>";
                     explist +=""+response[i]['companyname']+"</a>";
                     explist +="<div>"+response[i]['jobposition']+"</div>";
                     explist +="<span class='time'>"+response[i]['periodfrom']+"-"+response[i]['periodto']+"</span>";
                     explist +="</div></div></li>";
               }
               $('#explist').html(explist);
             }
             },
             error: function(data, errorThrown) {
                 alert('request failed :' + errorThrown);
             }
         });
    }
    function fetchskills(){
      $.ajax({
          type: "POST",
          url: "../src/fetchskillinformation.php",
          data:{'Emp_id':'<?php echo $empid;?>'},
          success: function(msg) {
            if(msg){
               response = JSON.parse(msg);
               var count = Object.keys(response).length;
               var skill ="";
               for (var i = 0; i < count; i++) {
                skill += "<span>"+response[i]['skills']+"</span>";
               }
               $('.skills').html(skill);
             }
             },
             error: function(data, errorThrown) {
                 alert('request failed :' + errorThrown);
             }
         });
       }
    function fetchempprofileinfo(){
      $.ajax({
          type: "POST",
          url: "../src/fetchprofileinformation.php",
          data:{'empid':'<?php echo $empid;?>'},
          success: function(msg) {
            // alert(msg);
            if(msg){
               response = JSON.parse(msg);
               $("#empid").html("FT-00<?php echo $empid;?>");
               $("#setusername").html(response['firstname'] +" "+response['lastname']);
               $("#setprofession").html("Web Designer");

               $("#empemail").html("johndoe@example.com");
               $("#setgender").html(response['gender']);
               $("#setaddress").html(response['address']+response['country']+response['pincode']);
               $("#setbdate").html(response['birthdate']);
               $("#empcontactno").html(response['contactno']);
             }
          },
          error: function(data, errorThrown) {
              alert('request failed :' + errorThrown);
          }
      });
    }
    </script>
    </body>
</html>
<?php
 }
 else
 {
   header("Location:index.php");
 }
 ?>
