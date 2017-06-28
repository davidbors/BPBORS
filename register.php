<?php
  session_start();
  //extrage datele din tabel
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $key = $_POST['key'];

  //auth key trimis prin mail
  $authkey = "thomaseurat";

  //incepe operatiunea
  if(isset($_POST['regibtn'])){
    if($password == $password2 && $key = $authkey){
      $_SESSION['rusername'] = $username;
      $_SESSION['rpassword'] = $password;
      header("location: index.php");
    }else {
      echo "Parolele nu se potrivesc sau cheia de autentificare nu este corecta!";
    }
  }
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>
    <form action="register.php" method="post">
      <table>
        <tr>
          <td><input type="text" name="username" placeholder="Introdu username-ul"></td>
        </tr>
        <tr>
          <td><input type="password" name="password" placeholder="Introdu parola"></td>
        </tr>
        <tr>
          <td><input type="password" name="password2" placeholder="Introdu inca o data parola"></td>
        </tr>
        <tr>
          <td><input type="password" name="key" placeholder="Introdu cheia pe care ai primit-o pe mail!"></td>
        </tr>
        <tr>
          <td><input type="submit" name="regibtn" value="Register"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
