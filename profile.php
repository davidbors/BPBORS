<?php
  session_start();
  $globaluser = $_SESSION['username'];
  $users = array("1" => "david" , "2" => "isac");
  $email = array("david" => "davidbors@yahoo.com" , "isac" => "isacbors@yahoo.com");
  $uldtpr = array("david" => "08.02.2017" , "isac" => "08.02.2017");
  echo '<html><head><link rel="stylesheet" href="navbar.css"><link rel="stylesheet" href="dropdown.css"></head><script src="dropdown.js"></script><body><ul>
  <li><a href="biblioteca.php">HOME</a></li>
  <li><a href="librarie.php">LIBRARIE</a></li>
  <li><a href="add.php">ADAUGA O CARTE</a></li>
  <li><a href="rev.php">REVIZUIESTE O CARTE</a></li>
  <div class="dropdown">
  <li  style="float:right"><a class="dropbtn active" href="#" onclick="myFunction()">' . $globaluser . '</a> <div id="myDropdown" class="dropdown-content"><a href="signout.php">Sign Out</a><a href="profile.php">Vizualizeaza-ti profilul</a></div></div></li>
  <li  style="float:right"><a href="help.php">BIBLIOTECA.ORG</a></li>
</ul></body></html>';
  echo "Username: " . $globaluser . "<br/>" . "Email: " . $email[$globaluser] . "<br/>" . "Ultima data de schimbare a parolei: " . $uldtpr[$globaluser];
 ?>
