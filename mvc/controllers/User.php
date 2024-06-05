<?php
class User extends Controller
{
	public function index()
	{
		$userData = $this->model("UserModel")->GetUserByUserName($_SESSION['username']);
		$this->view("user", [
			"PageTitle" => "Information",
			"PageDetail" => "user",
			"User" => $userData
		]);
	}

	public function edit()
	{
		if (isset($_POST['btn-update'])) {
			$username = $_POST['username'];
			$email = $_POST['email'];
			$hoten = $_POST['hoten'];
			$diachi = $_POST['diachi'];
			$password = $_POST['password'];
			$id = $_POST['id'];
			if ($username != $_SESSION['username']) {
				$_SESSION['username'] = $username;
			}

			$result = $this->model("UserModel")->UpdateUser($id, $username, $password, $email, $hoten, $diachi);

			header('location: ../User');
		}
	}

	public function LogOut()
	{
		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}

		session_unset();
		session_destroy();

		header("Location: ../login");
		exit();
	}
}
