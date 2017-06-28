<!DOCTYPE html>
<?php
  session_start();
  $superuser1 = "David";
  if($_SESSION['username']!= $superuser1)
  header("location: biblioteca.php");
  else echo "Buna, " . $_SESSION['username'];
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>LOG</title>
  </head>
  <body>
    <h1>05.02.2017</h1>
    <p>A fost introdus sistemul <a href="def.php">Defender</a> de log out.</p>
    <p>A fost creat sistemul <a href="adds.php">Add</a> de adaugare a unei carti.</p>
    <p>A fost introdus sistemul de cautare dupa titlu <a href="kc.php">KC 1.0</a> al unei carti din database. (Update programat: termen limita 09.04.17)</p>
    <p>EOF()</p>
    <h1>06.02.2017</h1>
    <p>A fost schimbat sistemul de cautare <a href="kc.php">KC 1.0</a> cu sistemul de cautare <a href="berzelius.php">Berzelius 1</a>, un sistem mai performant, care poate afisa mai multe carti cu acelasi nume.</p>
    <p>A fost inlocuit database-ul.</p>
    <p>Inceperea lucrului la prima diagrama. (Termen limita 08.02.2017)</p>
    <p>EOF()</p>
  </body>
</html>
