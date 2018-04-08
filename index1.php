<!DOCTYPE html>
<?php
    session_start();

?>
<html lang="en">
<head>
  <title>signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src = "script.js"></script>
</head>
<body>

<div class="container">
  <h2>Signup</h2>
  <form action="" method="post">
      <div clas = "form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name = "first_name">
      </div>
      <div clas = "form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" id="Last_name" placeholder="Enter Last Name" name = "last_name">
      </div>
      <div clas = "form-group">
        <label for="username">username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name = "username">
      </div>
       <div clas = "form-group">
        <label for="entry_number">Entry Number:</label>
        <input type="text" class="form-control" id="entry_number" placeholder="Enter entry_number" name = "entry_number">
      </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div> 
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
      
  </form>
</div>
    
    
    
<?php
    #secho "I'm here";
    if(isset($_POST['submit'])){
        $_SESSION["first_name"] = $_POST['first_name'];
        $_SESSION["last_name"] = $_POST['last_name'];
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["pwd"];
        $_SESSION["entry_number"] =$_POST["entry_number"];
        header('Location:register1.php');
        
    }

?>

</body>
</html>
