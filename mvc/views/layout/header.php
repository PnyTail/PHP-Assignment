<?php
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['username'])) {
	header("Location: ./login"); // Chuyển hướng về trang đăng nhập nếu chưa đăng nhập
	exit();
}
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= $data['PageTitle'] ?></title>
	<style>
		<?php include "style.css";
		?>
	</style>
	<!-- Unicons CSS -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
	<script src="script.js" defer></script>
</head>

<body>
	<div class="header">
		<div class="header__logo">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/FPT_Polytechnic.png/640px-FPT_Polytechnic.png" alt="Logo fpt">
		</div>
		<nav class="navbar">
			<ul class="navbar__menu">
				<li class="navbar__item">
					<a href="./Home" class="navbar__link"><span>Home</span> </a>
				</li>
				<li class="navbar__item">
					<a href="./Product" class="navbar__link"><span>Product</span></a>
				</li>

				<li class="navbar__item">
					<a href="./User" class="navbar__link"><span><?php echo $_SESSION['username'] ?></span></a>
				</li>
				<li class="navbar__item">
					<a href="./User/logout" class="navbar__link"><span>Log Out</span></a>
				</li>
			</ul>
		</nav>
	</div>
