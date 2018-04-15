<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn,'library');
 


    session_start();
    $firstname = $_SESSION["first_name"];
    $lastname = $_SESSION["last_name"];
    $entry_number = $_SESSION["entry_number"];
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];
    $repassword = $_SESSION["repassword"];
    $username = $_SESSION["username"];
    $person_id = "";
    if($_SESSION["first_name"]=="" || $_SESSION["last_name"]=="" || $_SESSION["username"]=="" || $_SESSION["email"]=="" || $_SESSION["password"]=="" || $_SESSION["entry_number"]==""){
        header("Refresh: 0; url=signup.php");
        echo "<script>alert('Please fill all the credentials in the previous page');</script>";
    }
    else{
        $sql = "SELECT * FROM authenticate where user_name="."'".$_SESSION["username"]."'";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            header("Refresh:0; url=signup.php");
            echo "<script>alert('The username has already been taken');</script>";
        }
        else{
            echo "<br>password is :".$password." repassword is : ".$repassword;
            if($password == $repassword){
                $query = "INSERT INTO user_info (first_name, last_name, entry_number, email) 
          	       	VALUES ('$firstname', '$lastname','$entry_number','$email')";
                echo "<br>".$query."<br>";
                $result = mysqli_query($conn, $query);
                $query = "SELECT person_id from user_info where first_name="."'"   .$firstname. "'".  " and last_name="."'"    .$lastname. "'".  " and entry_number=" ."'".$entry_number. "'"."  and email=".  "'".$email."'";
                echo $query."<br>";
                $result = mysqli_query($conn, $query);
                #echo $result;
                while($row = mysqli_fetch_assoc($result)) {
                    $person_id = $row['person_id'];
                }
                $query = "INSERT INTO authenticate(person_id, user_name, password) VALUES('$person_id','$username','$password')";
                echo $query;
                $result = mysqli_query($conn, $query);
                echo "<script>alert('You have been added :\)');</script>";
            }
            else{
                echo "<script>alert('Please enter the same password in both the fields');</script>";
            }
        }

        
    }

?>