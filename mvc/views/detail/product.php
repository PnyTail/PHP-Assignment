<body>
	<style>
	.container {
		width: 1028px;
		margin: 0 auto;
		padding: 20px;
	}

	.product {
		width: 200px;
		border: 1px solid;
	}

	.product img {
		width: 100%;
		height: 70%;
	}

	.box-product {
		width: 100%;
		display: flex;
		justify-content: space-between;

	}
	</style>
	<div class="container">
		<H2>LIST PRODUCT</H2>
		<div class="box-product">
			<?php foreach ($data['ProductList'] as $key => $value) : ?>
			<div class="product">
				<?php
						echo '<span>ID: ' . $value['id'] .'</span>';
						echo '<br>Name: ' . $value['name'];
						echo '<img src="./mvc/views/product/upload/'.$value['name'].'.jpg" alt="'.$value['name'].'">';
						echo '<br>Price: ' . $value['price']; ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php
