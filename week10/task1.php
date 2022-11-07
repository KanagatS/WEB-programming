<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LAB 9, Task 1</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
        echo '<h1 id="text">Page has not been updated yet</h1>';
    } else {
        $_SESSION['count']++;
    ?>
        <h1 id="text">Refresh count: <?php echo $_SESSION['count']; ?></h1>
    <?php
    }
    // session_destroy(); // Deleting all varibales
    ?>
</body>

</html>