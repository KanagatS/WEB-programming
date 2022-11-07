<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LAB 9, Task 3</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form action="task3_index.php" method="post">
        <div class="block">
            <h2>Email:</h2>
            <input type="email" name="email" required />
        </div>

        <input type="submit" value="Submit" />
    </form>

    <br /><br />

    <a href="task3_test.php">Go to "test.php" file</a>

    <?php
    $_SESSION['email'] = $_REQUEST['email'];
    
    // session_destroy(); // Deleting all varibales
    ?>
</body>

</html>