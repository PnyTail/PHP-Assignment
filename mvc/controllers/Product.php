<?php
class Product  extends Controller

{
	function index()
	{
		$this->view("product", [
			"PageTitle" => "Product",
			"PageDetail" => "product",
			"Color" => "red",
			"ProductList" => $this->model("ProductModel")->GetAllProduct()
		]);
	}
}
