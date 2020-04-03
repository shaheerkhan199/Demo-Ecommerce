<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<script type="text/javascript" src="js/bootsrtap.min.js"></script>
<link href="fonts/font-awesome.min.css" rel="stylesheet">
</head>

<body id="login">

<div class="fluid-container" id="con">
	<div class="row">
		<div class="container">
			<div class="col-md-3"></div>
			
			<form method="get" action="authenticate.php">
			<div class="col-md-6" id="main"> 
				<!-- Head -->
				<div id="head">
					<h1 align="center" class="text-center"><span class="glyphicon glyphicon-user"></span>&nbspLogin Here</h1>
				</div>

					<!-- Center -->
					<div id="bot" align="center">
						
						<div class="fluid-container" id="welcome">
							<h4>
								Welcome to Ecommerce App Login to continue...
							</h4>
						</div>

						<label>User Name</label>
						<span class="glyphicon glyphicon-lock"></span>
						<input type="text" name="id" autofocus="autofocus"><br>

						<label>Password</label>
						<span class="glyphicon glyphicon-eye-close"></span>
						&nbsp<input type="Password" name="pwd">
					
						<br>
						<input type="submit" value="Login" class="btn btn-primary" >

					</div>

					<!-- Tail -->
					<div id="tail">
						<div class="col-md-6 text-center"><a href="forgotpass.php">Forgot Password</a></div>
						<div class="col-md-6 text-center"><a href="signup.php">Signup</a></div>	
					</div>
			</div>
		</form>
			
			<div class="col-md-3"></div>
		</div>
	</div>
</div>

</body>
</html>

