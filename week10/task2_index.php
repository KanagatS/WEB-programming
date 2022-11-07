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
    <form action="task2_index.php" method="post">
        <div class="block">
            <h2>Name:</h2>
            <input type="text" name="name" required />
        </div>

        <div class="block">
            <h2>Country:</h2>
            <select name="country" required>
                <option value="">(Select country)</option>
                <option>Kazakhstan</option>
                <option>Russia</option>
                <option>Ukrain</option>
                <option>Kyrgyzstan</option>
                <option>Belarus</option>
            </select>
        </div>

        <input type="submit" value="Submit" />
    </form>

    <br /><br />

    <a href="task2_test.php">Go to "test.php" file</a>

    <?php
    $_SESSION['name'] = $_REQUEST['name'];
    $_SESSION['country'] = $_REQUEST['country'];

    // session_destroy(); // Deleting all varibales
    ?>
</body>

</html>