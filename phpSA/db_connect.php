<?php
			$servername = "localhost";
			$username = "root";
			$password = "vineel@203";
			$Database = "project";

			$conn = new mysqli($servername, $username, $password,$Database);

			if($conn->connect_error) {
   				 die("Connection failed: " . $conn->connect_error);
			}
			
		?>
