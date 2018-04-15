<?php
$servername = "localhost";
$username = "root";
$password = "vineel@203";
$Database = "project";

// Create connection
$conn = new mysqli($servername, $username, $password,$Database);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully\n";

if($stmt = $conn->prepare("select * from event;")){
						$stmt->execute();
                	 	$stmt->bind_result($id,$title,$desc);
                	 	while($stmt->fetch())
                	 	{
                		echo "Hello";
                	 		echo $title;
                	 		echo $desc;
                	 	}
                	 	}
                	 	else
                	 	{
                	 		echo "error has occured!".$stmt->error;
                	 	}
?>
