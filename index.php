
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<link rel="stylesheet" href="userlogin.css">
</head>
<body>

	<div class="kotak_login">
	<form action="ceklogin.php" method="POST">
		<p class="font_login">LOGIN</p>
			<label for="username">Username :</label>
			<input type="text" id="username" name="username" class="form_login" required>
			<label for="passsword">Password :</label>
			<input type="Password" name="Password" value="" class="form_login" required>
			<input type="submit" name="submit" class="button_login" value="LOGIN">
			<center>
			<div class="">Don't have an account? <a href="registeruser.php">Sign up</a> </div>
            </center>	
</form>
	</div>
</body>
</html>