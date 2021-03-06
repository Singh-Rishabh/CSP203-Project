<!doctype html>
<?php
    @ob_start();
    session_start();
            
?>
<html lang="en">

    <head>

        <!-- Basic -->
        <title>Web Portal | Home</title>

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


        <script src="asset/js/modernizrr.js"></script>


    </head>

    <body>
    
        <header class="clearfix">
        
            <!-- Start Top Bar -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar">
                            <div class="row">
                                    
                                <div class="col-md-6">
                                    <!-- Start Contact Info -->
                                    <ul class="contact-details">
                                        <li><a href="#"><i class="fa fa-phone"></i> +91-9592213703</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> support@iitrpr.ac.in</a>
                                        </li> 
                                    </ul>
                                    <!-- End Contact Info -->
                                </div><!-- .col-md-6 -->
                                
                                <div class="col-md-6">
                                </div><!-- .col-md-6 -->
                            </div>
                                
                                
                        </div>
                    </div>                        

                </div><!-- .row -->
            </div><!-- .container -->
            <!-- End Top Bar -->
        
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="index.html"><img src="img/iitrprlogo.jpg" style="max-height: 40px;max-width: 40px; margin-top: -10px;"></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="#about-section">About Us</a>
                            </li>
                            <li>
                                <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";

                                    // Create connection
                                    $co = new mysqli($servername, $username, $password);

                                    // Check connection
                                    if ($co->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    mysqli_select_db($co,'library');
                                    if (isset($_SESSION['userID1']) && !empty($_SESSION['userID1'])){
                                         $sql1 = "SELECT is_admin FRom user_info Where person_id = ".$_SESSION['person_id'];
                                        $result1 = mysqli_query($co, $sql1);
                                        if (mysqli_num_rows($result1)){
                                            $row = mysqli_fetch_assoc($result1);
                                            if ($row['is_admin'] == 1){
                                                echo "<a href='adminLib.php'>Library Management System</a>";
                                            }else{
                                                echo "<a href='userLib.php'>Library Management System</a>";
                                            }
                                        }
                                    }else{
                                        echo "<a href='portfolio.php'>Library Management System</a>";
                                    }
                                ?>
                            </li>
                            <li>
                                <a href="StudentActivity.php">Student Activities</a>
                            </li>
                            <li>
                                <a href="blogpage.html">Blog</a>
<!--
                                <ul class="dropdown">
                                    <li>
                                        <a href="blog-item.html">Item Page</a>
                                    </li>
                                </ul>
-->
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
        <div class="banner">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Welcome To <span>IIT Ropar</span></h1>
                        <p>In the land of Rivers</p>
                        <a href="http://www.iitrpr.ac.in/" target="_blank" class="page-scroll btn">Goto official Site</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
        
        
        <!-- Start About Us Section -->
    <section id="about-section" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>About Us</h2>
                    </div>                        
                </div>
            </div>
            <div class="row">
               <div class="col-md-5">
                   <div class="about-img">
                       <img src="img/iitrpr.jpg" class="img-responsive" alt="About images">
                       <div class="head-text">
                           <p>IIT Ropar Campus.</p>
                           <span>Director, Sarit K. Das</span>
                       </div>
                   </div>
               </div>
               <div class="col-md-7">
                   <div class="about-text">
                       <p>Indian Institute of Technology, Ropar is one of the eight new IITs set up by the Ministry of Human Resource Development (MHRD), Government of India, to expand the reach and enhance the quality of technical education in the country. This institute is committed to providing state-of-the-art technical education in a variety of fields and also for facilitating transmission of knowledge in keeping with latest developments in pedagogy. These two areas of focus will enable students to gain exposure to recent trends in their chosen domains of study and gain practical experience through a wide variety of activities the institute facilitates in its own campus and arranges for in collaboration with industry and other institutes. At present, the institute offers Bachelor of Technology (B. Tech.) programme in the following disciplines: </p>
                           <div class="about-list">
                               <ul>
                                   <li><i class="fa fa-check-square"></i>Chemical Engineering.</li>
                                   <li><i class="fa fa-check-square"></i>Civil Engineering.</li>
                                   <li><i class="fa fa-check-square"></i>Computer Science and Engineering.</li>
                                   <li><i class="fa fa-check-square"></i>Electrical Engineering.</li>
                                   <li><i class="fa fa-check-square"></i>Mechanical Engineering.</li>
                               </ul>
                           </div>
                       <p>
                           This programme is spread over a period of eight semesters. Institute also offers M.Tech programme in the following disciplines: CBME, Computer Science and Engineering, Electrical Engineering, and Mechanical Engineering. Institute also offers M.Sc programme in the following disciplines : Physcis,Chemistry and Maths. Institute also offers M.S(R) programme in the following disciplines : Computer Science and Engineering amd Electrical Engineering.  In addition, the institute now offers doctoral programme in following disciplines.
Engineering: Chemical Engineering,Civil Engineering,Computer Science and Engineering, Electrical Engineering, Mechanical Engineering and Metallurgical and Materials Engineering.
Science : Chemistry, Physics and Mathematics
Humanities and Social Sciences
Biomedical Engineering</p>
                       <p>IIT Ropar community has undertaken an important exercise of developing the Mission, Vision and Strategic Plan for the coming years. The exercise was carried out in active consultation with Indian Institute of Management Calcutta who have got technical expertise in this area. A participative bottom up approach was followed in formulating the Mission, Vision and Strategic Plan. Inputs from the entire IIT Ropar fraternity, MHRD, Board of Governors, Alumni and Industries were considered in the process. Finally we have arrived at the following Motto, Mission and Vision statements for our institute.</p>
                   </div>
                   
<!--
                   <div class="about-list">
                       <h4>Some important Feature</h4>
                       <ul>
                           <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</li>
                           <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing adipiscing.</li>
                           <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan.</li>
                           <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                           <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</li>
                           <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                       </ul>
                       
                   </div>
-->
                   
               </div>

            </div>
        </div>  
    </section>
        
        
        <!-- Start Call to Action Section -->
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow zoomIn" data-wow-duration="2s" data-wow-delay="300ms">
                    <p><i class="fa">Motto:</i> धियो यो नः प्रचोदयात्   (Deploy our intellect on the right path)</p><p>Mission: To foster a transformative learning environment and a culture of excellence enabling creation of knowledge and development of socially responsible, enterprising leaders contributing significantly to national progress and humanity.</p><p>Vision: To be a trendsetter among the technology universities born in this millennium.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to Action Section -->
        
        
        
        
        <!-- Start Team Member Section -->
    <section id="team-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>Our Team</h2>
<!--                        <p>Helps in the project</p>-->
                    </div>                        
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                    <div class="team-member">
                        <img src="img/rishabh.jpg" class="img-responsive" alt="Rishabh Singh">
                        <div class="team-details">
                            <h4>Rishabh Singh</h4>
                            <p>Email: 2016csb1054@iitrpr.ac.in</p>
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100006159451113" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                    <div class="team-member">
                        <img src="img/sunny.jpg" class="img-responsive" alt="Mattela Nithish">
                        <div class="team-details">
                            <h4>Mattela Nithish</h4>
                            <p>Email: 2016csb1042@iitrpr.ac.in</p>
                            <ul>
                                <li><a href="https://www.facebook.com/mattela.nithish" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">
                    <div class="team-member">
                        <img src="img/vineel.jpg" class="img-responsive" alt="vineel">
                        <div class="team-details">
                            <h4>Vineel Kr. Raj</h4>
                            <p>Email: 2016csb1062@iitrpr.ac.in</p>
                            <ul>
                                <li><a href="https://www.facebook.com/vineel.vineel" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1200ms">
                    <div class="team-member">
                        <img src="img/jagadeesh.jpg" class="img-responsive" alt="jagadeesh">
                        <div class="team-details">
                            <h4>Jagadeesh</h4>
                            <p>Email: 2016csb1035@iitrpr.ac.in</p>
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100012359010240" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
            </div>
        </div>
    </section>
    <!-- End Team Member Section -->
        
        
        
        <!-- Start Testimonial Section -->
        <section id="testimonial-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-item">
                                <h4>Works:</h4>
                                <p>Front end of the home page and all the Part of user side of the Library page.</p>
                                <img src="img/rishabh.jpg" alt="Rishabh Singh">
                                <h5>Rishabh Singh</h5>
                                <div class="desgnation">Entry No. : 2016csb1054</div>
                            </div>
                            <div class="testimonial-item">
                                <h4>Works:</h4>
                                <p>All the parts of the admin side of Library page and the Sign up pages.</p>
                                <img src="img/sunny.jpg" alt="Mattela Nithish">
                                <h5>Mattela Nithish</h5>
                                <div class="desgnation">Entry No. : 2016csb1042</div>
                            </div>
                            <div class="testimonial-item">
                                <h4>Works:</h4>
                                <p>Front End and back End of the Student Activities Page.</p>
                                <img src="img/vineel.jpg" alt="Vinnel Kr. Raj">
                                <h5>Vineel Kr. Raj</h5>
                                <div class="desgnation">Entry No. : 2016csb1062</div>
                            </div>
                            <div class="testimonial-item">
                                <h4>Works:</h4>
                                <p>Front end and backend of the Blog Page.</p>
                                <img src="img/jagadeesh.jpg" alt="Jagadeesh">
                                <h5>Jagadeesh</h5>
                                <div class="desgnation">Entry No. : 2016csb1035</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        
        <!-- Start Footer Section -->
        <section id="footer-section" class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Address</span>
                            </h3>
                        </div>
                        
                        <div class="footer-address">
                            <ul>
                                <li class="footer-contact"><i class="fa fa-home"></i>IIT Roapr Nangal Road, Punjab</li>
                                <li class="footer-contact"><i class="fa fa-envelope"></i><a href="#">support@iitrpr.ac.in</a></li>
                                <li class="footer-contact"><i class="fa fa-phone"></i>+91-9592213703</li>
                                <li class="footer-contact"><i class="fa fa-globe"></i><a href="http://www.iitrpr.ac.in/" target="_blank">http://www.iitrpr.ac.in/</a></li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3 -->
                    
                    
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Latest Tweet</span>
                            </h3>
                        </div>
                        
                        <div class="latest-tweet">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-twitter fa-2x media-object"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">About 15 days ago</h4>
                                    <p>xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz</p>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-3 -->
                    
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Stay With us</span>
                            </h3>
                        </div>
                        <div class="subscription">
                            <p>Some Text Some Text Some Text Some Text Some Text Some Text Some Text</p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your E-mail" id="name" required data-validation-required-message="Please enter your name.">
                                <input type="submit" class="btn btn-primary" value="Subscribe">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Images</span>
                            </h3>
                        </div>
                        
                        <div class="flickr-widget">
                            <ul class="flickr-list">
                                <li>
                                    <a href="img/iitrprlogo.jpg" data-lightbox="picture-1">
                                        <img src="img/iitrprlogo.jpg" alt="logo" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="img/iitrpr.jpg" data-lightbox="picture-2">
                                        <img src="img/iitrpr.jpg" alt="IITrpr" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="img/rishabh.jpg" data-lightbox="picture-3">
                                        <img src="img/rishabh.jpg" alt="Rishabh" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="img/sunny.jpg" data-lightbox="picture-4">
                                        <img src="img/sunny.jpg" alt="Nithish" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="img/jagadeesh.jpg" data-lightbox="picture-5">
                                        <img src="img/jagadeesh.jpg" alt="" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="img/vineel.jpg" data-lightbox="picture-6">
                                        <img src="img/vineel.jpg" alt="" class="img-responsive">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3 -->
                </div><!--/.row -->
            </div><!-- /.container -->
        </section>
        <!-- End Footer Section -->
        
        
        <!-- Start CCopyright Section -->
        <div id="copyright-section" class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="copyright">
                            Copyright © 2014. All Rights Reserved.Design and Developed by <a href="http://www.themefisher.com">Themefisher</a>
                        </div>
                    </div>
                    
                </div><!--/.row -->
            </div><!-- /.container -->
        </div>
        <!-- End CCopyright Section -->
        
        
        
       <!-- Sulfur JS File -->
        <script src="asset/js/jquery-2.1.3.min.js"></script>
        <script src="asset/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
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
        
    
    </body>
</html>