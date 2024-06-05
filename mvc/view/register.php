<div class="wrapper">
	<h2>Registration</h2>
	<form action="./Register/store" method="POST" enctype="multipart/form-data">
		<div class="input-box">
			<input type="text" name="username" placeholder="Enter your name" required>
		</div>
		<div class="input-box">
			<input type="email" name="email" placeholder="Enter your email" required>
		</div>
		<div class="input-box">
			<input type="password" name="password" placeholder="Create password" required>
		</div>
		<div class="input-box">
			<input type="file" name="profile_picture" required>
		</div>
		<div class="input-box button">
			<input type="Submit" name="btn-register" value="Register Now">
		</div>
		<div class="text">
			<h3>Already have an account? <a href="./Login">Login now</a></h3>
		</div>
	</form>
	<?php if (isset($data['result'])) { ?>
		<center>
			<h3 style="color: red;"><?php
															if ($data['result'] == "true") {
																echo "Registration Successful";
																echo "<a href='../index'>Đăng nhập đi</a>";
															} else ($data['result'] == "false");
															?></h3>
		</center>
	<?php } ?>
</div>
