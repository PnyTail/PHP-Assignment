<?php
class AuthController extends Controller
{
	public function login()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$name = $_POST['name'];
			$password = $_POST['password'];
			$user = $this->model('User');
			if ($user->authenticate($name, $password)) {
				header('Location: /product/index.php');
			} else {
				$data['error'] = 'Invalid name or password';
				$this->view('auth/login', $data);
			}
		} else {
			$this->view('auth/login');
		}
	}

	public function register()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$name = $_POST['name'];
			$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
			$user = $this->model('User');
			if ($user->register($name, $password)) {
				// header('Location: auth/login');
				echo	"Thành công";
			} else {
				$data['error'] = 'Registration failed';
				$this->view('auth/register', $data);
			}
		} else {
			$this->view('auth/register');
		}
	}
}
