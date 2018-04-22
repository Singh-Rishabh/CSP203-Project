<?php
	session_start();
	$person_id = $_SESSION['person_id'];

	$servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    }

    mysqli_select_db($conn,'library'); 

    $sql = "SELECT * from user_info where person_id = ".$person_id;
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){
    	if($row['is_admin']==0){
    		header("Refresh:0; url=index1.php");
    		session_destroy();
			echo "<script>alert('Access denied not an admin :\)');</script>";
    	}

    }
?>
<html>
	<head>

        <!-- Basic -->
        <title>IIT Ropar | Library</title>

        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Page Description and Author -->
        <meta name="description" content="Sulfur - Responsive HTML5 Template">
        <meta name="author" content="Shahriyar Ahmed">

        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css" type="text/css">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="asset/css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="asset/css/owl.theme.css" type="text/css">
        <link rel="stylesheet" href="asset/css/owl.transitions.css" type="text/css">
        
        <!-- Css3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="asset/css/animate.css">
        
        <!-- Lightbox CSS -->
        <link rel="stylesheet" type="text/css" href="asset/css/lightbox.css">

        <!-- Sulfur CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">

        <!-- Responsive CSS Style -->
        <link rel="stylesheet" type="text/css" href="asset/css/responsive.css">



        <!-- Sulfur JS File -->
        <script src="asset/js/jquery-2.1.3.min.js"></script>
        <script src="asset/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        <script src="asset/js/modernizrr.js"></script>
        <script src="asset/js/owl.carousel.min.js"></script>
        <script src="asset/js/jquery.appear.js"></script>
        <script src="asset/js/jquery.fitvids.js"></script>
        <script src="asset/js/jquery.nicescroll.min.js"></script>
        <script src="asset/js/lightbox.min.js"></script>
        <script src="asset/js/count-to.js"></script>
        <script src="asset/js/styleswitcher.js"></script>
        
        <script src="asset/js/map.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="asset/js/script.js"></script>


    </head>
	<body>
		<form class="navbar-form navbar-left">
			<div class="dropdown">
			  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Search by ** 
			  <span class="caret"></span></button>
			  <ul class="dropdown-menu">
			    <li><a href="?username">username</a></li>
			    <li><a href="?entry_number">UserID</a></li>
			  </ul>
			  <input name="searchusers" type="text" id="searchusers" placeholder="Search users" class="form-control" style="border-color: #ccc;" required>
			  <input type="submit" name ="searchuserBtn"  id="searchuserBtn" class="btn btn-default" value="Search" style="border-color: #ccc; margin-right: 15px;">
			</div>		  	
		</form>

		<?php
			if(isset($_POST['searchuserBtn'])){
				if(isset($_POST['username'])){
					if(isset($_POST['searchusers'])){
						$sql = "SELECT * from user_info where username like '%'".$_POST['searchusers']."'%";
						$result = mysqli_query($conn,$sql);

					}
				}
				else if(isset($_POST['entry_number'])){


				}
			}

		?>
	</body>
</html>