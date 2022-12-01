<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Nazwa użytkownika albo email już istnieje'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Udało się zarejestrować'); </script>";
    }
    else{
      echo
      "<script> alert('Hasło się nie zgadza'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet"  href="registration.css">
    <meta charset="utf-8">
    <title>Rejestracja</title>
  </head>
  <body>
    <center>
    <h2  class="tabelka">Rejestracja</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label class="tabelka" for="name">Imię:</label>
      <input type="text" name="name" id = "name" required value=""> <br>
      <label class="tabelka" for="username">Nazwa użytkownika:</label>
      <input type="text" name="username" id = "username" required value=""> <br>
      <label class="tabelka" for="email">Email:</label>
      <input type="email" name="email" id = "email" required value=""> <br>
      <label class="tabelka" for="password">Hasło:</label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <label class="tabelka" for="confirmpassword">Potwierdź Hasło:</label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
      <button class="tabelka" type="submit" name="submit">Zarejestruj</button>
    </form>
    <br>
    <a href="login.php">Zaloguj się</a>
    <br>
    <img src="freeze.gif">
    <br>
    <center>
  </body>
</html>