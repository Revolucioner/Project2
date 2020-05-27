<?php require ('includs/functions.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/CSS/css.css">
</head>
<body>
<header><?php include 'includs/header.php';?></header>
    <main>
        <div class="container">
            <div class="box-1">
                <?php
                include 'includs/nav1_inc.php';
                include 'includs/nav2_inc.php';
                ?>
            </div>
            <div class="box-2">
                <?php
                    page();
                ?>
            </div>
        </div>
    </main>
<footer><?php include 'includs/footer.php'; ?></footer>
</body>
</html>