<?php
require_once 'C:/Users/KDY/Desktop/WD19301/MVC/project/app/models/Product.php';

$productModel = new Product();
$products = $productModel->getAll();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Products</title>
</head>

<body>
	<h1>Products</h1>
	<ul>
		<?php foreach ($products as $product) : ?>
			<li><?php echo ($product['name']); ?> - <?php echo ($product['price']); ?></li>
		<?php endforeach; ?>
	</ul>
</body>

</html>
