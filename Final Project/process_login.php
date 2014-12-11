<?php

include('connect.php');

$username = (isset($_POST['username'])) ? $_POST['username'] : FALSE;
$password = (isset($_POST['password'])) ? md5($_POST['password']) : FALSE;

if ($username && $password) {

    $sqlQuery = "SELECT * FROM users WHERE username = '$username'";
    $results = $link->query($sqlQuery);
    $rows = $results->num_rows;

    if ($rows >= 1) {

        while ($row = $results->fetch_assoc()) {

            // Login success
            if ($row['password'] === $password) {

                $_SESSION['username'] = $row['username'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['logged_in'] = TRUE;
                header("Location:index.php");
            } else {
                echo "Incorrect password";
            }

        }

    } else {
        die("User is not authenticated");
    }

} else {
    die("You are missing a username or password");
}


?>