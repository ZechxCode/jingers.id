<!DOCTYPE html>
<html>

<head>
	<title>Jingers.id</title>
	<link rel="stylesheet" type="text/css" href="assets/css/loginStyle/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body background="assets/css/loginStyle/img/jingBG.png">
	<!-- <img class="wave" src="img/waveEdt.png"> -->
	<div class="container">
		<!-- <div class="img">
			<img src="img/Docc.svg">
		</div> -->
		<div class="login-content">
			<form action="login.php" method="post">
				<a href="../"><img src="assets/css/loginStyle/img/jingLogo.png"></a>
				<!-- <h2 class="title"></h2> -->
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>E-Mail | No HP</h5>
						<input type="email" class="input" name="username">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" class="input" name="password">
					</div>
				</div>
				<div class="sign">
					<a href="../register.html">Sign Up</a>
					<a href="#">Forgot Password?</a>
				</div>

				<input type="submit" class="btn" value="Login">
				<!-- <input type="submit" class="btn" value="Sign In"> -->
			</form>
		</div>
	</div>
	<script type="text/javascript" src="assets/css/loginStyle/js/main.js"></script>
</body>

</html>