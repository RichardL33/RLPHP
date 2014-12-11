<?php

include 'connect.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    die('You must login first! <a href="login.php">Click here to login!</a> <a href="register.php">Register</a>');
}

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

	<section class="form">

		<div class="user_profile">
		    <?php
		        $sqlQuery = "SELECT * FROM users WHERE id = $user_id";

		        $results = $link->query($sqlQuery);
		        $rows = $results->num_rows;

		        if ($rows >= 1) {
		            // Do something

		            while ($row = $results->fetch_assoc()) {
		                echo "<div><img src='". $row['image'] ."'></div>";
		                echo $row['username'];
		            }

		        } else {
		            echo "No results";
		        }

		    ?>
		   </div>

		<div class="comment_box">

			<?php

		    $commentSqlQuery = "SELECT * FROM comments INNER JOIN users ON comments.user_id = users.id WHERE to_user_id = $user_id";

		        $comments_results = $link->query($commentSqlQuery);
		        $comment_rows = $comments_results->num_rows;

		        if ($comment_rows >= 1) {

		            while ($comment_row = $comments_results->fetch_assoc()) {

		            }

		        }

		    ?>

		    <?php
		    	include('comments.php');
		    	include('wall.php');
		    ?>

		</div>

	</section>
	
</body>
</html>
