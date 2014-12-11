<?php

include ('connect.php');

	$sql = "SELECT * FROM  users";

	$results = $link -> query($sql);
	$rows = $results -> num_rows;

	while ($row = $results -> fetch_assoc()) {
		echo '<div class="friends">';
			echo '<div>' . '<img src="' . $row['image'] . '" class="avatar"/>' . '</div>';
			echo '<div class="user">' . $row['username'] . '</div>';
		echo '</div>';
	}

?>