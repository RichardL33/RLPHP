<?php include 'variables.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World!</title>
    <style>
    body {
        background-color: #000;
    }
    section {
        text-align: center;
    }
    ul {
        list-style-type: none;
        float: right;
    }
    ul li {
        display: inline;
        padding: 0 1em;
    }
    ul li a {
        text-decoration: none;
        color: #666;
    }
    header {
        background-color: red;
    }
    p {
        color: #FFF;
        text-align: center;
        font-size: 2em;
    }
    footer {
        background-color: red;
        color: #FFF;
        text-align: center;
    }
    img {
        width: 60%;
    }
    form {
        color: #FFF;
    }
    </style>
</head>
<body>

    <header>
        <?php include 'content/header.html'; ?>
    </header>

    <section>
        <?php

        if (isset($_GET['page'])) {
            $page = 'content/' . $_GET['page'] . '.html';

            if (file_exists($page)) {
                include $page;
            } else {
                include 'content/404.html';
            }

        } else {
            include 'content/home.html';
        }


        ?>
    </section>

    <footer>
        <?php include 'content/footer.html'; ?>
    </footer>

</body>
</html>
