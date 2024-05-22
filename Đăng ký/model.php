<?php
class UserModel
{
	private $conn;

	public function __construct($db)
	{
		$this->conn = $db;
	}

	public function registerUser($email, $hashed_password)
	{
		$sql = "INSERT INTO TaiKhoan (Email, MatKhau) VALUES (?, ?)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param("ss", $email, $hashed_password);

		if ($stmt->execute()) {
			return true;
		} else {
			return $stmt->error;
		}
	}
}
