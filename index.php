<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div id="container">
		<h1>Login and Registration</h1>
<?php
		if(isset($_SESSION['errors'])) {
			foreach ($_SESSION['errors'] as $error) {
				echo "<p class='error'>{$error}</p>";
			}
			unset($_SESSION['errors']);
		}
		if(isset($_SESSION['success_message'])) {
			echo "<p class='success'>{$_SESSION['success_message']}</p>";
			unset($_SESSION['success_message']);
		}
?>
		<h2>Register</h2>
		<form action="process.php" method="post">
			<input type="hidden" name="action" value="register">
			<label>First Name: </label><input type="text" name="first_name">
			<label>Last Name: </label><input type="text" name="last_name">
			<label>Email Address: </label><input type="text" name="email">
			<label>Password: </label><input type="password" name="password">
			<label>Confirm Password: </label><input type="password" name="confirm_password">
			<input type="submit" value="Register">
		</form>
		<h2>Login</h2>
		<form action="process.php" method="post">
			<input type="hidden" name="action" value="login">
			<label>Email Address: </label><input type="text" name="email">
			<label>Password: </label><input type="password" name="password">
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>