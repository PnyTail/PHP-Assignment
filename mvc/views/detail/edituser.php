<?php foreach ($data['User'] as $key => $value) : ?>
	<form action="./User/edit" method="post">
		<input type="hidden" name="id" value="<?= $value['id']; ?>">
		<input type="text" name="username" value="<?= $value['username']; ?>" required>
		<input type="password" name="password" value="<?= $value['password']; ?>" required>
		<input type="email" name="email" value="<?= $value['email']; ?>" required>
		<input type="hoten" name="hoten" value="<?= $value['hoten']; ?>" required>
		<input type="diachi" name="diachi" value="<?= $value['diachi']; ?>" required>
	</form>
<?php endforeach; ?>
