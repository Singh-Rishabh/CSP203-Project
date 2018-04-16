<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <style>
.form-control:focus{border-color: #5cb85c;  box-shadow: none; -webkit-box-shadow: none;} 
.has-error .form-control:focus{box-shadow: none; -webkit-box-shadow: none;}
</style>
  <title>signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src = "script.js"></script>
</head>
<body>

<div class="container">
  <h2>Signup</h2>
  
    <form  action="" method="post" >
        <div class = "form-group col-sm-8">
          <label for="first_name">First Name:</label>
          <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name = "first_name">
        </div>
        <div class = "form-group col-sm-8">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" id="Last_name" placeholder="Enter Last Name" name = "last_name">
          </div>
        <div class = "form-group col-sm-8">
          <label for="username">username:</label>
          <input type="text" class="form-control" id="username" placeholder="Enter username" name = "username">
        </div>
         <div class = "form-group col-sm-8">
          <label for="entry_number">Entry Number:</label>
          <input type="text" class="form-control" id="entry_number" placeholder="Enter entry_number" name = "entry_number">
        </div>
      <div class="form-group col-sm-8">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div> 
      <div class="form-group col-sm-8">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <div class="form-group col-sm-8">
        <label for="pwd">RePassword:</label>
        <input type="password" class="form-control" id="repwd" placeholder="Enter password again" name="repwd">
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
        $_SESSION["repassword"]=$_POST["repwd"];
        header('Location:register1.php');
    }
?>

</body>
</html>