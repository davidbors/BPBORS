<?php 
	$servername = "localhost";
            $username = "root";
            $password = "root";
            $db = "books";

            $conn = mysqli_connect($servername, $username, $password, $db);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
            	echo "conn succesful!";
            }
            $sql = "CREATE TABLE books
			(
			id int NOT NULL AUTO_INCREMENT,
			title varchar(255) NOT NULL,
			autor varchar(255),
			editura varchar(255),
			an varchar(255),
			postion varchar(255),
			adduser varchar(255),
			data varchar(255),
			PRIMARY KEY (id)
			)";
			if ($conn->query($sql) === TRUE) {
			    echo "Table MyGuests created successfully";
			} else {
			    echo "Error creating table: " . $conn->error;
			}

			$conn->close();
            


 ?>