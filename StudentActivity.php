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
        
        
        
        
        <!-- Css3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="asset/css/animate.css">
        
        <!-- Lightbox CSS -->
        <link rel="stylesheet" type="text/css" href="asset/css/lightbox.css">

        <!-- Sulfur CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">

        <!-- Responsive CSS Style -->
        <script src="asset/js/modernizrr.js"></script>

        <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css" type="text/css">
        
        
        <!--- Inline style -->
        <style>
            .sidebar{
                position: static;
                display: block;
                color: red;
            }
            
        </style>
        

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
                <li><a href="StudentActivity.php?type=TP">T&P</a></li>
                <li><a href="addActivity.php">Add Event</a></li>
                </ul>
            </div>
            <div class="container col-md-9">
                <?php
                		$stmt=NULL;
                		if(isset($_GET['type']))
                		{
                			if($_GET['type'] == 'New')
                			{
	               				$stmt=$conn->prepare("Select * from event Order by event_id DESC");
	               				
                			}
                			else if($_GET['type'] == 'General')
                			{
                				$stmt=$conn->prepare("Select * from event where event_id in (Select event_id from reference where cat_id = (select cat_id from category where cat = \"General\")) Order by event_id DESC");
                			}
                			else if($_GET['type'] == 'Sports')
                			{
                				$stmt=$conn->prepare("Select * from event where event_id in (Select event_id from reference where cat_id = (select cat_id from category where cat = \"Sports\")) Order by event_id DESC");
                			}
                			else if($_GET['type'] == 'Culturals')
                			{
                				$stmt=$conn->prepare("Select * from event where event_id in (Select event_id from reference where cat_id = (select cat_id from category where cat = \"Culturals\")) Order by event_id DESC");
                			}
                			else if($_GET['type'] == 'Culturals')
                			{
                				$stmt=$conn->prepare("Select * from event where event_id in (Select event_id from reference where cat_id = (select cat_id from category where cat = \"Culturals\")) Order by event_id DESC");
                			}
                			else if($_GET['type'] == 'Tech')
                			{
                				$stmt=$conn->prepare("Select * from event where event_id in (Select event_id from reference where cat_id = (select cat_id from category where cat = \"Technical Clubs\")) Order by event_id DESC");
                			}
                			else if($_GET['type'] == 'TP')
                			{
                				$stmt=$conn->prepare("Select * from event where event_id in (Select event_id from reference where cat_id = (select cat_id from category where cat = \"T&P\")) Order by event_id DESC");
                			}
                		}
                		if($stmt!=NULL)
                		{
                			$stmt->execute();
                			$stmt->bind_result($id,$title,$desc);
                			if(!$stmt->fetch())
                			{
                				echo "<center><p><big>~~No Events To show~~</big></p></center>";
                			}
                			else
                			{
                				do
                				{
                					echo"<div class=\"panel panel-info\">".
  											"<div class=\"panel-heading\">".$title."</div>".
  											"<div class=\"panel-body\">".$desc."</div>".
  										"</div>";
                				}while($stmt->fetch());
                			
                			}
                		
                		}
                ?>
            </div>
        </div>
    </div>
        <script src="asset/js/jquery-2.1.3.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        
        
   
        
    
    </body>
</html>
