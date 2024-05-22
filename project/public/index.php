<?php

require_once '../core/Model.php';
require_once '../core/Controller.php';
require_once '../config/config.php';
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/ProductController.php';
require_once '../app/models/Product.php';

$router = new Router();

$router->add('', function () {
	$controller = new ProductController();
	$controller->index();
});

$router->add('auth/login', function () {
	$controller = new AuthController();
	$controller->login();
});

$router->add('auth/register', function () {
	$controller = new AuthController();
	$controller->register();
});

$router->add('product/index', function () {
	$controller = new ProductController();
	$controller->index();
});


$router->dispatch();
?>
<?php include_once 'header.php'; ?>
<?php include_once 'footer.php'; ?>