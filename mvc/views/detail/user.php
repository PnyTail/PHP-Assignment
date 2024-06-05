<div class="container">
	<h2>INFORMATION</h2>
	<?php if (isset($data['User']) && !empty($data['User'])) : ?>
		<?php foreach ($data['User'] as $key => $value) : ?>
			<form action="./User/edit" method="post">
				<input type="number" name="id" value="<?= $value['id']; ?>">
				<input type="text" name="username" value="<?= $value['username']; ?>" required>
				<input type="password" name="password" value="<?= $value['password']; ?>" required>
				<input type="email" name="email" value="<?= $value['email']; ?>" required>
				<input type="text" name="hoten" value="<?= $value['hoten']; ?>" required>
				<input type="text" name="diachi" value="<?= $value['diachi']; ?>" required>
				<img src="<?= $value['profile_picture']; ?>" alt="Profile Picture" width="100">
				<button type="submit" name="btn-update">UPDATE</button>
			</form>
		<?php endforeach; ?>
	<?php else : ?>
		<p>No user information found.</p>
	<?php endif; ?>
</div>
