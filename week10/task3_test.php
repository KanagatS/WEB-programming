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
    <form action="task3_test.php" method="post">
        <div class="block">
            <h2>Email:</h2>
            <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" required />
        </div>

        <div class="block">
            <h2>Name:</h2>
            <input type="text" name="name" required />
        </div>

        <div class="block">
            <h2>Password:</h2>
            <input type="password" name="psw" required />
        </div>

        <input type="submit" value="Submit" />
    </form>
</body>

</html>