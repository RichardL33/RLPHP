<?php

session_start();

session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/normalize.css" />
	<script type="text/javascript" src="assets/js/jquery-1.11.1.js" ></script>
	<script type="text/javascript" src="assets/js/script.js" ></script>
	<title>
		Projecto
	</title>

</head>
<body>
	<header>
		<?php include 'content/header.html'; ?>
	</header>

	<div class="logout_sess">
		<h1>You have successfully logged out</h1><a href="login.php">Click here to login</a>
		</br><a href="register.php">Register</a>
	</div>

	<footer>
		<?php include 'content/footer.html'; ?>
	</footer>
	
</body>
</html>