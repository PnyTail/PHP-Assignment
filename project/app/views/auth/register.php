<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
</head>

<body>
	<h1>Register</h1>
	<?php if (isset($error)) : ?>
		<p><?php echo $error; ?></p>
	<?php endif; ?>
	<form method="POST" action="">
		<label for="username">Username:</label>
		<input type="text" id="name" name="name" required>
		<br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<br>
		<button type="submit">Register</button>
	</form>
	<p><a href="login.php">Login</a></p>
</body>

</html>
