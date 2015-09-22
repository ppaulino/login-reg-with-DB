<?php
	session_start();
	require_once('new-connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Successful Login</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div id="container">
		<h1>Successful Login</h1>
		<?php echo "<h2 class='success'>Hello, {$_SESSION['first_name']}!</h2>";?>
		<form action="process.php">
		    <input type="submit" value="Log Off">
		</form>
	</div>
	
</body>
</html>