<?php
class Home extends Controller
{
	function index()
	{
		$this->view("index", [
			"PageTitle" => "Index",
			"PageDetail" => "dash",
			"Product" => $this->model("ProductModel")->GetAllProduct()
		]);
	}
	function dash()
	{
		$this->view("dash", [
			"PageTitle" => "Dash",
			"PageDetail" => "dash",
		]);
	}
}
