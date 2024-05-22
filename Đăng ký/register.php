<?php
include 'db_connect.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirm_password'];

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$message = "<div class='alert alert-danger'>Email không hợp lệ</div>";
	} elseif (strlen($password) < 8) {
		$message = "<div class='alert alert-danger'>Mật khẩu phải có ít nhất 8 ký tự</div>";
	} elseif ($password !== $confirmPassword) {
		$message = "<div class='alert alert-danger'>Mật khẩu nhập lại không khớp</div>";
	} else {
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO TaiKhoan (Email, MatKhau) VALUES (?, ?)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $email, $hashed_password);

		if ($stmt->execute()) {
			$message = "<div class='alert alert-success'>Đăng ký thành công</div>";
		} else {
			$message = "<div class='alert alert-danger'>Lỗi: " . $stmt->error . "</div>";
		}
		$stmt->close();
	}
}
?>
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
