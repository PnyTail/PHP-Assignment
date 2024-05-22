<?php $Title = "Products" ?>
<?php require_once __DIR__ . "/../layouts/header.php"; ?>

<div class="container">
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($Users as $User) : ?>
			<tr>
				<td><?= $User['id'] ?>ID</td>
				<td><?= $User['name'] ?>NAME</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
