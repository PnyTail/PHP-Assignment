<?php
class Login extends Controller
{
	public function index()
	{
		$this->view("auth", [
			"PageTitle" => "Login",
			"PageDetail" => "login"
		]);
	}
	public function checkLogin()
	{
		if (isset($_POST['btn-login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$user = $this->model('UserModel')->CheckUser($username, $password);
			if ($user) {
				session_start();
				$_SESSION['username'] = $username;
				header('Location: ../index');
			} else {
				// Đăng nhập thất bại
				echo 'Invalid username or password';
				header('Location: ../login');
			}
		}
	}
}
