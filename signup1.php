<!DOCTYPE html>
<html lang="en">
<head>
	<title>VCET LEAVE FORM</title>
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
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="reset.php" method="post">
					<span class="login100-form-title">
						Velammal College of Engineering and Technology Leave Form
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Name is required">
						<input class="input100" name="name" type="text" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" name="pass" type="Password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-plane" aria-hidden="true"></i>
						</span>
						
					</div>
					
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" href="leave.html" type="Submit" name="submit">
						<br>
						<br>
						<br>
						<a href="index.html" class="login100-form-btn">
							Login
						</a>
					</div>
					<div class="text-center p-t-12">
					</div>
					<div class="text-center p-t-136">
					</div>
					<footer>Copyright©TechwalkZ</footer>
				</form>
			</div>
		
		</div>
			
	</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script type="text/javascript" src="clear.js"></script>
	<script type="text/javascript">
		function submit() {
		var roll=document.getElementById('rollno').value;
		alert(roll);
	}
	</script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	

</body>
</html>