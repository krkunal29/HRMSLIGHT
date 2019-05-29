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

            <?php include 'header.php'; ?>
            <?php include 'sidebar.php'; ?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-8">
							<h4 class="page-title">Payslip</h4>
						</div>
						<div class="col-sm-4 text-right m-b-30">
							<div class="btn-group btn-group-sm">
								<button class="btn btn-default">CSV</button>
								<button class="btn btn-default">PDF</button>
								<button class="btn btn-default"><i class="fa fa-print fa-lg"></i> Print</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card-box">
								<h4 class="payslip-title">Payslip for the month of September 2017</h4>
								<div class="row">
									<div class="col-md-6 m-b-20">
										<img src="assets/img/logo2.png" class="m-b-20" alt="" style="width: 100px;">
										<ul class="list-unstyled m-b-0">
											<li><span id="companyname"></span></li>
											<li><span id="companyaddress"></span></li>
											<li><span id="companypincode"></span></li>
										</ul>
									</div>
									<div class="col-md-6 m-b-20">
										<div class="invoice-details">
											<h3 class="text-uppercase">Payslip #49029</h3>
											<ul class="list-unstyled">
												<li>Salary Month: <span id="salarymonth"></span></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 m-b-20">
										<ul class="list-unstyled">
											<li><h5 class="m-b-0"><strong><span id="empname"></span></strong></h5></li>
											<li><span id="empdesignation"></span></li>
											<li>Employee ID: FT-00<?php echo $empid; ?></li>
											<li>Joining Date:<span id="joiningdate"></span></li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div>
											<h4 class="m-b-10"><strong>Earnings</strong></h4>
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td><strong>Basic Salary</strong> <span class="pull-right"><span id="basicsalary"></span></span></td>
													</tr>
													<tr>
														<td><strong>House Rent Allowance (H.R.A.)</strong> <span class="pull-right"><span id="houserentallowance"></span></span></td>
													</tr>
													<tr>
														<td><strong>Conveyance</strong> <span class="pull-right" id="conveyance"></span></td>
													</tr>
													<tr>
														<td><strong>Other Allowance</strong> <span class="pull-right" id="others"></span></td>
													</tr>
													<tr>
														<td><strong>Total Earnings</strong> <span class="pull-right"><strong id="totalearning"></strong></span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-sm-6">
										<div>
											<h4 class="m-b-10"><strong>Deductions</strong></h4>
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td><strong>Tax Deducted at Source (T.D.S.)</strong> <span class="pull-right" id="tds"></span></td>
													</tr>
													<tr>
														<td><strong>Provident Fund</strong> <span class="pull-right" id="pf"></span></td>
													</tr>
													<tr>
														<td><strong>ESI</strong> <span class="pull-right" id="esi"></span></td>
													</tr>
													<tr>
														<td><strong>Loan</strong> <span class="pull-right" id="loan"></span></td>
													</tr>
													<tr>
														<td><strong>Total Deductions</strong> <span class="pull-right"><strong id="deduction">$59698</strong></span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-md-12">
										<p><strong>Net Salary: <span id="netsalary"></span></strong> (<span id="netsalaryinwords"></span>)</p>
									</div>
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
    function getcompanyinformation(){
      $.ajax({
        'type':'POST',
        'url':'../src/fetchcompanyinformation.php',
        success:function(msg){
          alert(msg);
          response = JSON.parse(msg);
          $("#companyname").html(response['companyname']);
          $("#companyaddress").html(response['address']+"<br/>"+response['city']+", "+response['state']+", "+response['country']);
          $("#companypincode").html(response['postalcode']);


        }
      });
    }
    function getpayslipdetail(){
      $.ajax({
        'type':'POST',
        'url':'../src/fetchpayslipdetailbyid.php',
        'data':{'Emp_id':'<?php echo $empid;?>'},
        success:function(msg){
          alert(msg);
          response = JSON.parse(msg);
          var otherallowance = parseInt(response['da']) + parseInt(response['others']) + parseInt(response['allowance']) +
          parseInt(response['medicalallowance']);
          var totalearning = otherallowance + parseInt(response['basic']) + parseInt(response['hra']) + parseInt(response['conveyance']);
          $("#empname").html(response['selectstaff']+"<br/>"+response['empemail']);
          $("#empdesignation").html(response['empdesignation']+"<br/>"+response['emprole']);
          $("#joiningdate").html(response['empjoindate']);
          $("#basicsalary").html(response['basic']+"Rs.");
          $("#houserentallowance").html(response['hra']+"Rs.");
          $("#conveyance").html(response['conveyance']+"Rs.");
          $("#others").html(otherallowance+"Rs.");
          $("#totalearning").html(totalearning+"Rs.");
          var otherdeducation = parseInt(response['leave1']) + parseInt(response['proftax']) + parseInt(response['fund']) + parseInt(response['otherdeducation']) + parseInt(response['labwelfare']);
          var totdeduction = otherallowance + parseInt(response['tds'])+ parseInt(response['pf']) + parseInt(response['esi']);
          $("#tds").html(response['tds']+"Rs.");
          $("#pf").html(response['pf']+"Rs.");
          $("#esi").html(response['esi']+"Rs.");
          $("#loan").html(otherdeducation+"Rs.");
          $("#deduction").html(totdeduction+"Rs.");
          $("#netsalary").html(response['total']+"Rs.");
          $("#netsalaryinwords").html("one thousand rupee only");
        }
      });
    }
    $(document).ready(function(){
      getcompanyinformation();
      getpayslipdetail();
    });

    </script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/light/salary-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 May 2018 06:28:54 GMT -->
</html>
<?php
 }
 else {
   header("Location:index.php");
 }
 ?>
