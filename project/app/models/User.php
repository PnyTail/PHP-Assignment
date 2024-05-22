<?php
class User extends Model
{
	public function authenticate($name, $password)
	{
		$result = $this->db->prepare("SELECT * FROM users WHERE name = ?");
		$result->bind_param('s', $name);
		$result->execute();
		$result = $result->get_result()->fetch_assoc();
		if ($result && password_verify($password, $result['password'])) {
			return true;
		}
		return false;
	}

	public function register($name, $password)
	{
		$result = $this->db->prepare("INSERT INTO users (name, password) VALUES (?, ?)");
		$result->bind_param('ss', $name, $password);
		return $result->execute();
	}
}
