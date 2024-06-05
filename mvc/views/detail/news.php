<body>
	<div class="container">

		<div class="box-product">
			<H2>LIST USERS</H2>

			<div class="product">
				<?php if (!empty($data['User'])) : ?>
					<ul>
						<?php foreach ($data['User'] as $User) : ?>
							<li>
								<?php echo 'ID: ' . $User['id'] . ', Name: ' . $User['name'] . ', Price: ' . $User['price']; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php else : ?>
					<p>No User found.</p>
				<?php endif; ?>
			</div>

		</div>
	</div>
