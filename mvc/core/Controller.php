<?php
class Controller
{
	function view($view, $data = [])
	{
		require_once './mvc/views/' . $view . '/index.php';
	}
	function model($model)
	{
		require_once './mvc/models/' . $model . '.php';
		return new $model;
	}
}
