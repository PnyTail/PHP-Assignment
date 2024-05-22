<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>

<body>
	<h1>Login</h1>
	<?php if (isset($error)) : ?>
		<p><?php echo $error; ?></p>
	<?php endif; ?>
	<form method="POST" action="/auth/login">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<br>
		<button type="submit">Login</button>
	</form>
	<p><a href="register.php">Register</a></p>
</body>

</html>
