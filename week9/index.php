<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB8</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "LAB8";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // $sql = "CREATE DATABASE LAB8";

    // $sql = "CREATE TABLE users (
    //     user VARCHAR(30) NOT NULL,
    //     pass VARCHAR(30) NOT NULL
    //     )";

    // $sql = "INSERT INTO users (user, pass)
    //         VALUES ('Kanagat', '26102022'), ('Kana', 'qwerty')";

    $user_in = $_REQUEST['user_out'];
    $pass_in = $_REQUEST['pass_out'];

    // Asking for data from table
    $sql = "SELECT * from users WHERE user = $user_in";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "YES";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
</body>

</html>