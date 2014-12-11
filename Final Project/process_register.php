<?php

include ('connect.php');

$image = (isset($_POST['image'])) ? $_POST['image'] : '';
$username = (isset($_POST['username'])) ? $_POST['username'] : FALSE;
$first_name = (isset($_POST['first_name'])) ? $_POST['first_name'] : FALSE;
$last_name = (isset($_POST['last_name'])) ? $_POST['last_name'] : FALSE;
$email = (isset($_POST['email'])) ? $_POST['email'] : FALSE;
$password = (isset($_POST['password'])) ? md5($_POST['password']) : FALSE;
$password_conf = (isset($_POST['password_conf'])) ? md5($_POST['password_conf']) : FALSE;

if (!$first_name) {
    die("You need to enter your first name");
}

$userSQL = "SELECT * FROM users WHERE username = '$username'";

if ($result = $link->query($userSQL)) {

    if ($password !== $password_conf) {
        die ('Password does not match');
    }

    if ($result->num_rows >= 1) {

        die("You can't register because that username is already");

    } else {

        $sql = "INSERT INTO users (first_name, last_name, image, username, email, password, password_conf) VALUE ('$first_name', '$last_name', '$image','$username', '$email', '$password', '$password_conf')";

        if ($link->query($sql)) {
            $last_inserted_id = $link->insert_id;
            $affected_rows = $link->affected_rows;
        } else {
            die("There was a MySQL Issue");
        }

        echo "Last inserted Id: " . $last_inserted_id;
        echo "<pre>";
        print_r($affected_rows);

    }

}

?>