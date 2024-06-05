<?php
class Register extends Controller
{
	public $ProductModel;
	public $UserModel;

	public function __construct()
	{
		$this->UserModel = $this->model('UserModel');
	}
	public function index()
	{
		$this->view("auth", [
			"PageTitle" => "Register",
			"PageDetail" => "Register"
		]);
	}
	public function store()
	{
		if (isset($_POST['btn-register'])) {
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$profile_picture = $_FILES['profile_picture'];

			$result = $this->model("UserModel")->InsertUser($username, $password, $email, $profile_picture);

			$this->view("register", ["result" => $result ? "true" : "false"]);
		}
	}
}
