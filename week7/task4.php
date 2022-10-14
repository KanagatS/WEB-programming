<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB7 TASK4</title>
</head>

<body>
    <?php
    $correct_num = 15;
    $num = $_REQUEST['num'];

    if ($correct_num == $num) {
        echo "<h2>Congratz! You won!</h2>";
        echo "<h2><a href='game.html'>Wanna play again ?</a></h2>";
    } else {
        echo "<h2>Ha-ha! You lost!</h2>";
        echo "<h2><a href='game.html'>Try again bro!</a></h2>";
    }
    ?>
</body>

</html>