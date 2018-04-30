<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->

<?php
	session_start();
	$pd=NULL;
	if(isset($_SESSION['person_id']))
	{
		$pd=$_SESSION['person_id'];
	}
?>


<html lang="en">

    <head>

        <!-- Basic -->
        <title>IITRopar | StudentActivityPortal</title>

        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <meta name="description" content="Sulfur - Responsive HTML5 Template">
        <meta name="author" content="VineelKumarRaj">
        
        
        
        
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
            
			.wrapper{
				padding-right: 5px;
  				padding-left: -1px; 
			}
			div#status{position:fixed; font-size:24px;}
			div#wrap{width:800px; margin:0px auto;}
			div.newData{height:1000px; background:#09F; margin:10px 0px;}
			
			
			            
        </style>
        
        <!--- Java Script --->
        
        <script>
        
        	var n=0;
        	function setActive(x)
        	{
        		document.getElementsByName(x)[0].setAttribute("class","active");
        	}
        	
        	function addEvents()
        	{
        		if(n==-1) return;
        		var parts = window.location.search.substr(1).split("&");
				var $_GET = {};
				for (var i = 0; i < parts.length; i++) {
    				var temp = parts[i].split("=");
    				$_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
					}
        		var hr = new XMLHttpRequest ();
        		var url = "./phpSA/addEvents.php?type="+$_GET['type'];
        		var vars = "n="+n;
        		n=n+4;
        		hr.open("POST",url,true);
        		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        		hr.onreadystatechange = function (){
        					if(hr.readyState == 4 && hr.status == 200) {
        					var return_data = hr.responseText;
        					var wrap = document.getElementById('scrollX');
        					if(return_data.trim().substr(return_data.length - 5)  === "00000")
        					{
        						wrap.innerHTML+="<center><p><big>~~No Events Left To show~~</big></p></center>";
        						n=-1;
        						return;
        					}
        					wrap.innerHTML+=return_data;
        					}
        				}
        		hr.send(vars);
        		document.getElementById("loading").innerHTML = "Loading...";
        	}
        	
        	function yHandler(){
				var wrap = document.getElementById('scrollX');
				var contentHeight = wrap.offsetHeight;
				var yOffset = window.pageYOffset; 
				var y = yOffset + window.innerHeight;
				var sideBar = document.getElementById('SideBar');
				if(y >= contentHeight){
				// Ajax call to get more dynamic data goes here
					addEvents();
					}
				if( y >=900){
					sideBar.setAttribute("style","position:fixed;");
					sideBar.style.top="40px";
				}
				else if(y<1050)
				{
					sideBar.setAttribute("style","position:static;");
					sideBar.style.top="auto";
				}
				 
				}
			
				window.onscroll = yHandler;
			
        	
        </script>
        

    </head>

    <body>
        <header class="clearfix">
        
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top " >
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
            <div class="overlay" >
                <div class="container">
                    <div class="row" >
                        <div class="col-md-12 " >
                            <h1>Student Activity Portal</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
    <div class="container-fluid" >
        <div class="row">
            <div class="sidebar col-sm-2 verticalLine" style="color: red" ">
	                <ul class="nav nav-sidebar" id = "SideBar">
	            <li><form action="StudentActivity.php" method="POST">
	            		<input type="text" name='Search' placeholder="Search.." style ="width: 170px;">
	            		<div class="wrapper"><button type="submit" name="search" style="text-align: center;">Search</button></div>
	            	</form>
	            </li>
                <li name="New"><a href="StudentActivity.php?type=New">New</a></li>
                <li name="General"><a href="StudentActivity.php?type=General">General</a></li>
                <li name="Culturals"><a href="StudentActivity.php?type=Culturals">Culturals</a></li>
                <li name="Sports"><a href="StudentActivity.php?type=Sports">Sports</a></li>
                <li name="TechClubs"><a href="StudentActivity.php?type=Tech">Technical Clubs</a></li>
                <li name="TP"><a href="StudentActivity.php?type=TP">T&P</a></li>
                <?php
                if($pd!=NULL)
                {
                	require_once('phpSA/db_connect.php');
                	ini_set('display_errors', 'On');
                	$stmt = $conn->prepare('Select * from admins where user_id = ?');
                	$stmt->bind_param('i',$pd);
                	$stmt->execute();
                	$stmt->bind_result($temp);
                	if($stmt->fetch()) echo "<li ><a href=\"addActivity.php\">Add Event</a></li>";
                }
                ?>
                </ul>
            </div>
            <div class="container col-sm-10 " id="scrollX">
            		
 				<script>addEvents();</script>
                <?php
                	if(isset($_POST['Search']) && !empty($_POST['Search']))
                		{
                			require_once('phpSA/db_connect.php');
                			$stmt = NULL;
                			$search = $_POST['Search'];
                			$cmd="Select * from event where title like '%".$search."%'";
                			$stmt=$conn->prepare($cmd);
                			if($stmt!=NULL)
                			{
                				$stmt->execute();
                				$stmt->bind_result($id,$title,$desc,$time);
                				if(!$stmt->fetch())
                				{
                					echo "<center><p><big>~~No Events To show~~</big></p></center>";
                				}
                				else
                				{
                					do
                					{
                						echo"<a href=\"DisplayMessage.php?event_id=".$id."\" class=\"list-group-item\">".
                	    					"<span class=\"glyphicon glyphicon-star-empty\">\"".$title."\"</span>".
											"<span class=\"badge\">".$time."</span>".
											"<div>".
												"<span class=\"text-muted\" style=\"font-size: 11px; text-align:center\">".
												substr($desc,0,100).
												"...</span>".
											"</div>".
											"<span class=\"pull-right\">".
											"</a>";
                					}while($stmt->fetch());
                				
                				}
                			
                			}	
                		}
                
                ?>
                <?php
                	if(isset($_GET['pid']))
                	{
                		require_once('./phpSA/db_connect.php');
                		$event_id=$_GET['pid'];
                		$stmt=$conn->prepare("Delete from event where event_id=?");
                		$stmt->bind_param('i',$event_id);
                		$stmt->execute();
                		echo "<script>javascript:window.location = \"StudentActivity.php?type=New\"</script>";
                		exit;
                	}
                ?>
                <div class="loading"></div>
            </div>
        </div>
    </div>
    
        <script src="asset/js/jquery-2.1.3.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        
        
   
        
    
    </body>
</html>
