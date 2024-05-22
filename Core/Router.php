<?php
class Router
{
	protected $routes = [];

	public function add($route, $callback)
	{
		$this->routes[$route] = $callback;
	}

	public function dispatch()
	{
		$url = $this->parseUrl();
		if (isset($this->routes[$url])) {
			call_user_func($this->routes[$url]);
		} else {
			echo "404 - Page not found";
		}
	}

	private function parseUrl()
	{
		if (isset($_GET['url'])) {
			return rtrim($_GET['url'], '/');
		}
		return '/';
	}
}
