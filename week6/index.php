<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Yandex Music subscription</title>
    <link rel="stylesheet" href="style_2.css" />
</head>

<body>
    <?php
    function luhnAlgorithm($num)
    {
        $num = preg_replace('/[^\d]/', '', $num);
        $sum = '';

        for ($i = strlen($num) - 1; $i >= 0; --$i) {
            $sum .= $i & 1 ? $num[$i] : $num[$i] * 2;
        }

        return array_sum(str_split($sum)) % 10 === 0;
    }

    $name = $_REQUEST['name'];
    $country = $_REQUEST['country'];
    $cardnumber = $_REQUEST['cardnumber'];
    $cardtype = $_REQUEST['cardtype'];

    if ($name == "" || $country == "" || $cardnumber == "" || !isset($cardtype)) {
    ?>
        <h1>Cmon buddy</h1>
        <p>You filled nothing. Don't joke like that.</p>
        <p><a href="home.html">Try again bro!</a></p>
    <?php
    } elseif ($cardtype == "visa" && $cardnumber[0] != "4") {
    ?>
        <h1>Cmon buddy</h1>
        <p>Visa cards number should start from "4"</p>
        <p><a href="home.html">Try again bro!</a></p>
    <?php
    } elseif ($cardtype == "mastercard" && $cardnumber[0] != "5") {
    ?>
        <h1>Cmon buddy</h1>
        <p>MastedCard cards number should start from "5"</p>
        <p><a href="home.html">Try again bro!</a></p>
    <?php
    } elseif (!luhnAlgorithm($cardnumber)) {
    ?>
        <h1>Cmon buddy</h1>
        <p>You filled card number wrong</p>
        <p><a href="home.html">Try again bro!</a></p>
    <?php
    } else {
    ?>
        <h1>Good news!</h1>

        <p style="font-weight:bold">Your information has been accepted.</p>

        <p>Name: <?php echo $name; ?></p>
        <p>Country: <?php echo $country; ?></p>
        <p>Credit card: <?php echo $cardnumber; ?></p>

        <?php
        file_put_contents("clients.txt", $name . '; ' . $country . '; ' . $cardnumber . '; ' . $cardtype . PHP_EOL, FILE_APPEND);
        ?>

        <p style="font-weight:bold">Here are the list of our previous clients, who had paid for Music: </p>

    <?php
        echo '<pre>' . file_get_contents("clients.txt") . '</pre>';
    }
    ?>
</body>

</html>