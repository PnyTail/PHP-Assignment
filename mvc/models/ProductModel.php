<?php
class ProductModel extends Database
{
	public function GetAllProduct()
	{
		$query = "SELECT * FROM tbl_products";
		$result = mysqli_query($this->conn, $query);
		$array = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$array[] = $row;
		}
		return $array;
	}
	public function Tong($n, $m)
	{
		return $n + $m;
	}
}
