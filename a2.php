<!DOCTYPE html>
<html>
<head>
	<title>Librarie</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="libra.css">
</head>

<body>
	<h1>Acestea sunt cartile din corpul A1</h1>
  	<!-- <div class="book">
       <p id="titlu"><?php// echo $numec ; ?></p>
       <p id="numea">Autor: <?php// echo $numea; ?></p>
       <p id="numee">Editura <?php// echo $numee; ?>, anul <?php// echo $numean; ?></p>
       <p id="loc">Pozitie in biblioteca: <?php // echo $loc; ?></p>
       <p id="useradd">Userul care a adaugat cartea <?php // echo $useradd; ?></p>
       <p id="datac">Data adaugarii in baza de date: <?php // $datac; ?></p>
     </div>  -->
     <?php
		 $servername = $_SESSION['server'];
		 $username = $_SESSION['usernameh'];
		 $password = $_SESSION['passwordh'];
		 $db = $_SESSION['dtb'];
	    // Create connection
	    $conn = new mysqli($servername, $username, $password,$db);
	    // Check connection
	  if ($conn->connect_error) {
	      die("Connection failed: " . $conn->connect_error);
	  }
	  $p = "A2";
	  $sql = "SELECT * FROM books WHERE postion='$p'";
	            $result = $conn->query($sql);
	           //Berzelius v1.0
	            while($row = mysqli_fetch_assoc($result))
	               {
	                 echo '   <head></head>
	                    <body>  <div>
	                            <p>Id: ' . $row['id'] . '
	                            <p>Titlul cartii: ' . $row['title'] . '</p>
	                            <p>Autorul cartii: ' . $row['autor'] . '</p>
	                            <p>Editura: ' . $row['editura'] . ', anul ' . $row['an'] . '</p>
	                            <p>Pozitie: ' . $row['postion'] . ' (Conform diagramei 12017)</p>
	                            <p>Cartea a fost adaugata de catre: ' . $row['adduser'] . '</p>
	                          </div><br/><br/></body>';
	              }



	$conn->close();
 ?>
</body>
</html>
