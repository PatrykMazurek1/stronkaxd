<?php
require 'config.php';

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "Witam pana  $username";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="utf-8">
    <title>Index</title>
</head>

<body>
    <center>
        <br>
    <a href="logout.php">Wyloguj</a>
    <br>
    <br>
    <img src="pog.png">
    <center>
</body>

</html>