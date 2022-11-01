<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration completed</title>
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

    $sql = "INSERT INTO Users (email, pswrd) VALUES ('$email', '$pswrd')";

    if (mysqli_query($conn, $sql)) {
        file_put_contents("users.txt", $email . "; " . $pswrd . "\n", FILE_APPEND);
    ?>
        <div class="inf_block">
            <h1 style="color: yellowgreen; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em blue;">
                Registration completed successfully.
            </h1>

            <h2>Please don't forget your data and write it down somewhere.</h2>

            <hr />

            <h2 style="font-style: italic">Email: <?php echo $email; ?></h2>
            <h2 style="font-style: italic">Password: <?php echo $pswrd; ?></h2>

            <hr />

            <a href="main.html" style="color: blue">
                <h2>Go to login page</h2>
            </a>
        </div>
    <?php
    } else {
        echo "Error with SQL request: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
</body>

</html>