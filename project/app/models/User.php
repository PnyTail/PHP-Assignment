<?php
class User extends Model
{

	public function register($name, $password)
	{
		$result = $this->db->prepare("INSERT INTO users (name, password) VALUES (?, ?)");
		$result->bind_param('ss', $name, $password);
		return $result->execute();
	}
}
