<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng Ký</title>
	<link rel="stylesheet" href="css.css">
</head>

<body>
	<div class="container2">
		<h2>Đăng Ký Tài Khoản</h2>
		<?php echo $message; ?>
		<form action="register.php" method="post">
			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="Email" required="">
				<label for="name" class="form__label">Email</label>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required="">
				<label for="name" class="form__label">Nhập mật khẩu</label>
			</div>
			<div class="form-group">
				<input type="password" name="confirm_password" class="form-control" placeholder="Nhập lại mật khẩu" required="">
				<label for="name" class="form__label">Nhập lại mật khẩu</label>
			</div>
			<input type="submit" value="Đăng Ký" class="btn btn-primary">
		</form>
		<div class="mt-3">
			<a href="login.php" class="back-link">Quay lại Đăng nhập</a>
		</div>
	</div>
</body>

</html>
