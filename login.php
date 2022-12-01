<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE username = '$usernameemail' AND password = '$password'");

    $Count = mysqli_num_rows($result);
    if($Count ==1){
        $_SESSION['username'] = $usernameemail;
        header("Location: index.php");
    }
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet"  href="login.css">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <center>
    <h2 class="tabelka">Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label class="tabelka" for="usernameemail">Nazwa użytkownika lub Email:</label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
      <label class="tabelka" for="password">Hasło:</label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <button class="tabelka" type="submit" name="submit">Zaloguj</button>
    </form>
<br>
<a href="registration.php">Rejestracja</a>
<br>
<img src="freeze.gif">
<br>
<center>
  </body>
</html>