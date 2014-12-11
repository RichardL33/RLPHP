<?php

session_start();

if (isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views'] + 1;
} else {
    $_SESSION['views'] = 0;
}

echo 'Hits: ' .  $_SESSION['views'];

if (!isset($_SESSION['auth'])) {
    $_SESSION['auth'] = FALSE;
}

if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "N/A";
}

echo "<br />Is user auth?: " . ($_SESSION['auth'] ? "Yes" : "No");
echo "<br />Username: " . $_SESSION['username'];


?>