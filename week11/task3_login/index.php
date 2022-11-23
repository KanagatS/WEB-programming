<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task 3</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php
  if ($_REQUEST['email'] == "kana@kbtu.kz" && $_REQUEST['psw'] == "123456") {
    $connect = 1;
  } else {
    $connect = 0;
  }
  ?>

  <div id="good" style="display: none">
    <div class="inf_block">
      <h2 style="
            color: yellowgreen;
            text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em blue;
          ">
        You have successfully logged into your Yandex account.
      </h2>

      <hr />

      <a href="https://music.yandex.kz/home" style="color: blue">
        <h2>Go to account settings</h2>
      </a>
    </div>
  </div>

  <div id="bad" style="display: none">
    <div class="inf_block">
      <h2 style="color: red">
        Check if you the login and password wrote correctly.
      </h2>

      <hr />

      <a href="index.php" style="color: blue">
        <h2>Try again</h2>
      </a>
    </div>
  </div>

  <!-- ========================================================================================== -->

  <h1>
    Welcome to the <br />
    Yandex Music account page
  </h1>

  <hr />

  <p>
    To manage your account and settings, you must log in to your account. If
    you already have an account, you're welcome. But, if you don't have an
    account yet, please click on the "Register" button and create a new one.
  </p>

  <form action="index.php" method="post" style="text-align: center">
    <div class="inf_block">
      <h2 style="font-size: 26px">Please, enter account details :)</h2>

      <hr />

      <input type="email" placeholder="Enter E-mail" name="email" required />

      <hr />

      <input type="password" placeholder="Enter Password" name="psw" required />

      <hr />

      <input id="myBtn" type="submit" value="Log in" onclick="valid()" />
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

  <script>
    var isConnect = "<?php echo $connect; ?>";
    // alert(isConnect);

    function valid() {
      if (connect == 1) {
        document.getElementById("good").style.display = "block";
        document.getElementById("bad").style.display = "none";
      } else {
        document.getElementById("bad").style.display = "block";
        document.getElementById("good").style.display = "none";
      }
    }
  </script>
</body>

</html>