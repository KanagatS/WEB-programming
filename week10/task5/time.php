<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 8</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    $time_passed = $_SERVER['REQUEST_TIME'] - $_SESSION['login_time'];

    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    } else {
        $_SESSION['count']++;
    }
    ?>

    <div class="inf_block">
        <h2 style="color: yellowgreen; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em blue;">
            You have successfully logged into your Yandex account.
        </h2>

        <hr />

        <h2 style="color: orange">
            <?php
            if ($_SESSION['count'] == 0) {
                echo "Last login time: <br />" . $_SESSION['date'];
            } else {
                echo $time_passed . " seconds have passed since the last login";
            }
            ?>
        </h2>

        <hr />

        <a href="https://music.yandex.kz/home" style="color: blue">
            <h2>Go to account settings</h2>
        </a>
    </div>
</body>

</html>