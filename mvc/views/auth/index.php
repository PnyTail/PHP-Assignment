<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $data['PageTitle'] ?></title>
	<style>
		<?php include_once "style.css" ?>
	</style>
</head>



</html>

<body>
	<nav>
		<ul>
			<li><a href="./Login">Login</a></li>
			<li><a href="./Register">Register</a></li>
		</ul>
	</nav>
	<?php require_once "./mvc/views/detail/" . $data['PageDetail'] . ".php" ?>
