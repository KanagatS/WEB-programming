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
    if ($_REQUEST['email'] == "kana@kbtu.kz" && $_REQUEST['psw'] == "123456") {
        $connect = True;
    } else {
        $connect = False;
    }

    if ($connect) {
    ?>
        <div class="inf_block">
            <h2 style="color: yellowgreen; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em blue;">
                You have successfully logged into your Yandex account.
            </h2>

            <hr />

            <a href="https://music.yandex.kz/home" style="color: blue">
                <h2>Go to account settings</h2>
            </a>
        </div>
    <?php
    } else {
    ?>
        <div class="inf_block">
            <h2 style="color: red">
                Check if you the login and password wrote correctly.
            </h2>

            <hr />

            <a href="main.html" style="color: blue">
                <h2>Try again</h2>
            </a>
        </div>
    <?php
    }
    ?>
</body>

</html>