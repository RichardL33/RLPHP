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

	<section class="form">

		<form action="process_register.php" class="reg_form" method="POST">
			    <input type="text" name="image" placeholder="Image URL"> <br/>
			    <input type="text" name="first name" placeholder="First Name"> <br/>
			    <input type="text" name="last name" placeholder="Last Name"> <br/>
		        <input type="text" name="username" placeholder="Username">  <br/> 
			    <input type="text" name="email" placeholder="Email"> <br/>
		        <input type="password" name="password" placeholder="Password"> <br/>
		        <input type="password" name="password_conf" placeholder="Verify Password"></br>
		        <select name="image" id="rollout"><br>
		          <option value="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRsy7qrLUm3H8zLaVOU37UFowcOx07cc5jgA5BiissFvkUiY1dI">Male</option>
		          <option value="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRLR7ojs6ShhoGn_jsxYE30eX5_bt9cZN0_YTUBYwcDs1rLuHw3mQ">Female</option>
		          <option value="http://placekitten.com/g/150/150">Kitten</option>
		        </select></br>
		    <input type="submit" id="reg_btn" value="Register">
		</form>

	</section>

	<footer>
		<?php include 'content/footer.html'; ?>
	</footer>
	
</body>
</html>