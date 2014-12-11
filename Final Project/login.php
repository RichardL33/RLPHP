<?php

include ('connect.php');

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

        <form action="process_login.php" method="POST">

                <input type="text" name="username" placeholder="Username"></br>
                <input type="password" name="password" placeholder="Password"></br>
                <input type="submit" value="submit">
        </form>

    </section>

    <footer>
        <?php include 'content/footer.html'; ?>
    </footer>
    
</body>
</html>