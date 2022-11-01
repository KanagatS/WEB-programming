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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "LAB8";

    $email = $_REQUEST['email'];
    $pswrd = $_REQUEST['psw'];

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT email, pswrd FROM Users WHERE email = '$email' and pswrd = '$pswrd'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
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
                The database does not contain the login and password you entered. <br /><br />
                Check if you wrote correctly.
            </h2>

            <hr />

            <a href="main.html" style="color: blue">
                <h2>Try again</h2>
            </a>
        </div>
    <?php
    }
    mysqli_close($conn);
    ?>
</body>

</html>