<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Presentation</title>
</head>
<body>

	<form action="form.php" method="post">

		<h2>ERS1</h2>

		<?php

			if(isset($_GET['error'])){ ?>

				<p class="error"><?php echo $_GET['error'] ?></p>

		<?php } ?>

		<?php

			if(isset($_GET['success'])){ ?>

				<p class="success"><?php echo $_GET['success'] ?></p>

		<?php } ?>

		<label>UserName</label>
		<input type="text" name="username" placeholder=" Username..." autocomplete="off">
		<br>
		<label>Password</label>
		<input type="password" name="password" placeholder=" Password..." autocomplete="off">
		<br>
		<button type="submit">LogIn</button>

	</form>

</body>
</html>