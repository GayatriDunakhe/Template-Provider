<html>
	<head>
		<title>Form</title>
		<link href="form.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	</head>
	<body data-spy="scroll" data-target=".nevbar" data-offset="50">
		<div id="login-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
			<div class="left-box" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="500">
				<h1>Sign up</h1>
				<form action="insert-data.php" method="POST">
					<input type="text" name="username" placeholder="Username" required>
					<input type="email" name="email" placeholder="Email" required>
					<input type="password" name="password" placeholder="Password" required>
					<center><input type="submit" name="signup" value="Sign up"></center>
				</form>
			</div>
			<div class="right-box" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
				<form action="login-check.php" method="POST">
					<h1>Login</h1>
					<input type="text" name="username" placeholder="Username" required>
					<input type="password" name="password" placeholder="Password" required>
					<center><input type="submit" name="login" value="Login"></center>
				</form>
			</div>
		</div>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
		
	</body>
</html>