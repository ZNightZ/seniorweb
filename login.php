<?php include('dbconfig.php');

	session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->
</head>
<body>
<div class="bgimg">
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="./images/Logo_MFU.png" alt="IMG" style="margin-left: 100px;">
				</div>
				<form class="login100-form validate-form" action ="server.php" method="post">
					<span class="login100-form-title">
					Login 
					</span>
					<div class="wrap-input100" >
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id=loginbtn name ="loginbtn">
							Login
						</button>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn2">
							Login with Gmail
						</button>
					</div>

					<div class="text-center p-t-12">
					<!-- space in login form -->
					</div>
					<!-- space in login form -->
					<div class="text-center p-t-80">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
	// $(document).ready(function(){
  	// 	$("#loginbtn").click(function(){
	// 		alert("something")
	// 	})
	// });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>