<?php

include ('connect.php');

$comment = $_POST['comment'];

$user_id = $_SESSION['user_id'];

$sql = "INSERT INTO comments (user_id, comment) VALUE ('$user_id', '$comment')";

if ($link -> query($sql) === false) {
		echo "Error";
	} else {
		echo "<script>window.location = 'index.php';</script>";
	}

?>