<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 7 TASKS 1, 2, 3</title>
</head>

<body>
    <!-- EXERCISE 1 -->
    <h2>Task 1</h2>

    <table border="1">
        <?php

        $rows = 9;
        $cols = 9;

        for ($tr = 1; $tr <= $rows; $tr++) {
            echo "<tr>";
            for ($td = 1; $td <= $cols; $td++) {
                if ($tr == 1 || $td == 1) {
                    echo "<th style='font-weight: bold; background-color: yellowgreen;'>", $tr * $td, "</th>";
                } else {
                    echo "<td style='background-color: white;'>", $tr * $td, "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>

    <br /><br /><br />

    <!-- EXERCISE 2 -->
    <h2>Task 2</h2>

    <?php
    $day = 5;

    switch ($day) {
        case 1:; case 2:; case 3:; case 4:; case 5:
            echo "<h2>It's a workday! Go to work!</h2>";
            break;
        case 6:; case 7:
            echo "<h2>It's a weekend! You can chill!</h2>";
            break;
        default:
            echo "<h2>Unknown day! Try again bro!</h2>";
    }
    ?>

    <br /><br /><br />

    <!-- EXERCISE 3 -->
    <h2>Task 3</h2>

    <?php
    $arr = array(rand(-10, 10));

    foreach ($arr as $i) {
        if ($i < 0) {
            echo "Yes";
        } else {
            echo "No";
        }
    }
    ?>
</body>

</html>