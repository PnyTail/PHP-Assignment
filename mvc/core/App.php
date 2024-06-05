<?php
class App
{
	protected $controller = "Home";
	protected $action = "index";
	protected $params = [];
	function __construct()
	{
		$array = $this->urlProcess();
		// print_r($array);

		//CONTROLLER
		if ($array != Null) {
			if (file_exists("./mvc/controllers/" . $array[0] . ".php")) {
				$this->controller = $array[0];
			}
			unset($array[0]);
		}
		require_once "./mvc/controllers/" . ucfirst($this->controller) . ".php";
		$this->controller = new $this->controller;

		//ACTION
		if (isset($array[1])) {
			if (method_exists($this->controller, $array[1])) {
				$this->action = $array[1];
			}
			unset($array[1]);
		}

		//PARAMS
		$this->params = $array ? array_values($array) : [];
		call_user_func_array([$this->controller, $this->action], $this->params);
	}



	function urlProcess()
	{
		if (isset($_GET['url'])) {
			return explode("/", filter_var(trim($_GET['url'], "/")));
		}
	}
}
