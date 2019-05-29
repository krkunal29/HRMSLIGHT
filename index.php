<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>HRMS</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        <div class="main-wrapper">
			<div class="account-page">
				<div class="container">
					<h3 class="account-title">Management</h3>
					<div class="account-box">
						<div class="account-wrapper">
							<div class="account-logo">
								<a href="index.html"><img src="assets/img/logo2.png" alt="Focus Technologies"></a>
							</div>
							<form action="">
								<div class="form-group form-focus">
									<label class="control-label">Username or Email</label>
									<input class="form-control floating" type="text" id="email">
								</div>
								<div class="form-group form-focus">
									<label class="control-label">Password</label>
									<input class="form-control floating" type="password" id="password">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary btn-block account-btn" type="button" onclick="login()">Login</button>
								</div>
                <div class="text-center">
									<a href="register.php">Register For New User?</a>
								</div>
								<div class="text-center">
									<a href="forgot-password.php">Forgot your password?</a>
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
        <script type="text/javascript" src="js/index.js"></script>

    </body>
</html>
