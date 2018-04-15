<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->




<html lang="en">

    <head>

        <!-- Basic -->
        <title>IITRopar | StudentActivityPortal</title>

        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <meta name="description" content="Sulfur - Responsive HTML5 Template">
        <meta name="author" content="Shahriyar Ahmed">
        <!--- Inline style -->
        <style>
			body {font-family: Arial, Helvetica, sans-serif;}

			input[type=text], select, textarea 
			{
    			width: 100%;
    			padding: 12px;
    			border: 1px solid #ccc;
    			border-radius: 4px;
    			box-sizing: border-box;
    			margin-top: 6px;
    			margin-bottom: 16px;
    			resize: vertical;
			}

			input[type=submit] 
			{
    			background-color: #4CAF50;
    			color: white;
    			padding: 12px 20px;
    			border: none;
    			border-radius: 4px;
    			cursor: pointer;
			}

			input[type=submit]:hover 
			{
    			background-color: #45a049;
			}

			#message
			{
    			border-radius: 5px;
    			background-color: #f2f2f2;
    			padding: 20px;
			}
		</style>
        
        
        
        <!-- Css3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="asset/css/animate.css">
        
        <!-- Lightbox CSS -->
        <link rel="stylesheet" type="text/css" href="asset/css/lightbox.css">

        <!-- Sulfur CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">

        <!-- Responsive CSS Style -->
        <script src="asset/js/modernizrr.js"></script>

        <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css" type="text/css">
        
        
        <!-- Java Script -->
        
        <script type="text/javascript">
			function clicked() 
			{
    			alert('Please Check if all the fields are filled properly!\nClick OK to Submit');
			}
			
			function emptyFileds()
			{
				alert('There are Empty Fields |-_-| \nPlease Try again!');
			}
        </script>

    </head>

    <body>
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
    
        <header class="clearfix">
        
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="index.html">IIT Ropar</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a class="active" href="StudentActivity.html">Student Activity</a>
                            </li>
                            <li>
                                <a href="service.html">Service</a>
                            </li>
                            <li>
                                <a href="portfolio.html">Portfolio</a>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="blog-item.html">Item Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
            </div>
            <!-- End Header Logo & Naviagtion -->
            
        </header>
        
        
        <!-- Start Header Section -->
        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Student Activity Portal</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-sm-3" style="color: red" >
	                <ul>
                <li class="active" ><a href="StudentActivity.php?type=New">New</a></li>
                <li><a href="StudentActivity.php?type=General">General</a></li>
                <li><a href="StudentActivity.php?type=Culturals">Culturals</a></li>
                <li><a href="StudentActivity.php?type=Sports">Sports</a></li>
                <li><a href="StudentActivity.php?type=Tech">Technical Clubs</a></li>
                <li><a href="StudentActivity.php?type=T&P">T&P</a></li>
                <li><a href="addActivity.php">Add Event</a></li>
                </ul>
            </div>
            <div class="container col-md-9">
     			 <!-- Form for Texting-->      	
      			<form action="addActivity.php" method="post" onsubmit="return confirm('Please Check if all the fields are filled properly!');">
	 				<label for="title">Title</label>
    				<input type="text" id="title" name="title" placeholder="Title..">
    				<label for="category">Category</label>
    				<select id="category" name="category">
	      				<option value="General">General</option>
	      				<option value="Sports">Sports</option>
	      				<option value="Culturals">Culturals</option>
	      				<option value="Technical Clubs">Technical Clubs</option>
	      				<option value="T&P">T&P</option>
    				</select>
   		  			<label for="subject">Subject</label>
    				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    				<input type="submit" value="submit" name="submit">
  	  			</form>
            </div>
            <?php
  				 if (isset($_POST['submit'])) 
  				 {  
  				 	$title = $_POST['title'];
  				 	$cat = $_POST['category'];
  				 	$desc = $_POST['subject'];
  				 	if(empty($title) || empty($cat) || empty($desc))
					{
    					echo "<script>emptyFileds()</script>";
					}
					else
					{
						//Insert into event 						
						$stmt=$conn->prepare("INSERT INTO event(title,description) values(?,?)");
						$stmt->bind_param('ss',$title,$desc);
						$stmt->execute();
						//get eventId
						$event_id = $conn->insert_id;
						//get cat_id
						$stmt=$conn->prepare("Select cat_id from category where cat = ?");
						$stmt->bind_param('s',$cat);
						$stmt->execute();
						$stmt->bind_result($cat_id);
						$stmt->fetch();
						//Insert eventId and catId into refernces
						$stmt->prepare("Insert into reference(event_id,cat_id) value(?,?)");
						$stmt->bind_param('ss',$event_id,$cat_id);
						$stmt->execute();
						echo "<script type=\"text/javascript\">location.href = 'StudentActivity.php?type=New';</script>";
					}
   				}
  			?>
        	</div>
    </div>
        <script src="asset/js/jquery-2.1.3.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        
        
   
        
    
    </body>
</html>
