<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab9</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form action="loginprocess.php" method="post" style="text-align: center">
        <div class="inf_block">
            <h2 style="font-size: 26px">Please, enter account details :)</h2>

            <hr />

            <input type="email" placeholder="Enter E-mail" name="email" required />

            <hr />

            <input type="password" placeholder="Enter Password" name="psw" required />

            <hr />

            <input type="submit" value="Log in" />
        </div>

        <br />

        <div class="inf_block">
            <h3>Don't have an account yet ?</h3>

            <a href="registration.html">
                <div class="register_button">
                    <h2 style="margin: 2px">Register</h2>
                </div>
            </a>
        </div>
    </form>
</body>

</html>