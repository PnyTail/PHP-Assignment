<?php
class UserModel extends Database
{
	public function GetUserByUserName($username)
	{
		$query = "SELECT * FROM tbl_users WHERE username = '$username'";
		$result = mysqli_query($this->conn, $query);
		$array = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$array[] = $row;
		}
		return $array;
	}

	public function InsertUser($username, $password, $email, $profile_picture)
	{

		$target_dir = "uploads/";
		$target_file = $target_dir . basename($profile_picture["name"]);
		move_uploaded_file($profile_picture["tmp_name"], $target_file);


		$query = "INSERT INTO tbl_users (username, password, email, profile_picture) VALUES ('$username', '$password', '$email', '$target_file')";
		$result = false;
		if (mysqli_query($this->conn, $query)) {
			$result = true;
		}
		return $result;
	}
}
