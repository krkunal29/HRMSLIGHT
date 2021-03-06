<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Register - HRMS admin template</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        <div class="main-wrapper">
			<div class="account-page">
				<div class="container">
					<h3 class="account-title">Management Login</h3>
					<div class="account-box">
						<div class="account-wrapper">
							<div class="account-logo">
								<a href="index.html"><img src="assets/img/logo2.png" alt="Focus Technologies"></a>
							</div>
							<form action="" id="useregform">
                <div class="form-group form-focus" style="margin-bottom:0px;">
                  <div id="errormsg"></div>
                </div>
								<div class="form-group form-focus">
									<label class="control-label">Name <font color="red">*</font></label>
									<input class="form-control floating" type="text" id="username" required/>
								</div>
								<div class="form-group form-focus">
									<label class="control-label">Email <font color="red">*</font></label>
									<input class="form-control floating" type="email" id="email" required/>
								</div>
                <div class="form-group form-focus">
									<label class="control-label">Contact No <font color="red">*</font></label>
									<input class="form-control floating" type="text" id="contactno" required/>
								</div>
								<div class="form-group form-focus">
									<label class="control-label">Password <font color="red">*</font></label>
									<input class="form-control floating" type="password" id="password" required/>
								</div>
								<div class="form-group form-focus">
									<label class="control-label">Repeat Password <font color="red">*</font></label>
									<input class="form-control floating" type="password" id="repeatpassword">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary btn-block account-btn" type="button" onclick="register();">Register</button>
								</div>
								<div class="text-center">
									<a href="./">Already have an account?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/app.js"></script>
        <script>
          function register(){
            var uname=$("#username").val();
            var contactno=$("#contactno").val();
            var email=$("#email").val();
            var password=$("#password").val();
            var repeatpassword=$("#repeatpassword").val();
            if(uname==="" || contactno===""|| email==="" || password ==="" ){
              $("#errormsg").html("<font color='red'>Please Fill Required Field</font>");
            }
            else{
              $("#errormsg").html("");
              var form = document.getElementById("useregform");
              form.reset();
              $.ajax({
                  type: "POST",
                  url: "insertregisterinformation.php",
                  data: ({
                      uname: uname,
                      email: email,
                      password: password,
                      contactno: contactno
                }),
                  success: function(msg) {
                       alert("User Register Successfully");
                       window.location.href="./";
                  },
                  error: function(data, errorThrown) {
                      alert('request failed :' + errorThrown);
                  }
              });
            }

          }
        </script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/light/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 May 2018 06:29:03 GMT -->
</html>
