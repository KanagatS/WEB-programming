<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "LAB8";

$email = $_REQUEST['email'];
$pswrd = $_REQUEST['psw'];

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT email, pswrd FROM Users WHERE email = '$email' and pswrd = '$pswrd'";

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    $_SESSION["login"] = "1";
    header("location:index.html");
} else {
    header("location:login.php?err=1");
}

mysqli_close($conn);
