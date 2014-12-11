<?php

	$sql = "SELECT * FROM comments INNER JOIN users ON comments.user_id = users.id";

	$results = $link -> query($sql);
	$rows = $results -> num_rows;

	while ($row = $results -> fetch_assoc()) {

		echo '<div class="comment_wall">';
		echo '<div class="comments">';
		echo '<div class="avatar">' . '<img src="' . $row['image'] . '" class="avatar"/>' . '</div>';
		echo '<div class="user">' . $row['username'] .'</div>';
		echo '</div>';
		echo '<div class="comments">' . $row['comment'] . '</div>';
		echo '</div>';
		echo '<hr>';

	}


?>