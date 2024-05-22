<?php

require_once 'C:/Users/KDY/Desktop/WD19301/MVC/project/core/Model.php';

class Product extends Model
{
	public function getAll()
	{
		$result = $this->db->query("SELECT * FROM products");
		if ($result === false) {
			die('Query error: ' . $this->db->error);
		}
		return $result->fetch_all(MYSQLI_ASSOC);
	}
}
