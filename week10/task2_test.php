<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LAB 9, Task 2</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <h1 id="text">Name: <?php echo $_SESSION['name']; ?></h1>
    <h1 id="text">Country: <?php echo $_SESSION['country']; ?></h1>
</body>

</html>