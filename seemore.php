<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="biblioteca.css">
	<title>Detalii carte</title>
</head>
<?php 
	session_start();
    $user = $_SESSION['username'];
    echo "Buna, " . $user . "! Ai cautat cartea " . $_SESSION['srcglobal'] . ". Buna alegere! Uite toate datele despre cartea " . $_SESSION['srcglobal'] . " stocate in baza de date! Berzelius fie cu tine, " . $user . " !" ;
    $search = $_SESSION['srcglobal'];
    $servername = "localhost";
            $username = "root";
            $password = "root";
            $db = "books";

            $conn = mysqli_connect($servername, $username, $password, $db);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM books WHERE title='$search'";
            $result = $conn->query($sql);
           //Berzelius v1.0
            while($row = mysqli_fetch_assoc($result))
               {
                 echo '   <head><link rel="stylesheet" href="biblioteca.css"></head>
                    <body>  <div class="book" id="id1">
                            <p id="titlu">Titlul cartii: ' . $row['title'] . '</p>
                            <p id="numea">Autorul cartii: ' . $row['autor'] . '</p>
                            <p id="numee">Editura: ' . $row['editura'] . ', anul ' . $row['an'] . '</p>
                            <p id="loc">Pozitie: ' . $row['postion'] . ' (Conform diagramei 12017)</p>
                            <p id="useradd">Cartea a fost adaugata de catre: ' . $row['adduser'] . '</p>
                            <a href="seemore.php" id="seemore"><p id="seemore">Vezi detalii</p></a>
                          </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></body>';
              }
               //Berzelius v 1.0 stop 
 ?>
<body>

</body>
</html>