<?php
include 'db_connect.php';
include 'model.php';

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

		$userModel = new UserModel($conn);
		$result = $userModel->registerUser($email, $hashed_password);

		if ($result === true) {
			$message = "<div class='alert alert-success'>Đăng ký thành công</div>";
		} else {
			$message = "<div class='alert alert-danger'>Lỗi: " . $result . "</div>";
		}
	}
}

include 'register_view.php';
