<?php
$con=mysqli_connect("localhost","root","","test");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * from courses";
$result = mysqli_query($con,$sql);

// Numeric array
//$row = mysqli_fetch_array($result, MYSQLI_NUM);
//printf ("%s (%s)\n", $row[0], $row[1]);

// Associative array
//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//printf ("%s (%s)\n", $row["course_name"], $row["course_desc"]);

// Free result set

//mysqli_close($con);
?>


<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title> Internet Service</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                       
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="package.php">Courses</a></li>
                                                <li><a href="blog.html">Blog</a>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-30">
                                        <a href="contact.html" class="btn header-btn">Login</a>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
    <main>
        <!--? Pricing Card Start -->
        <section class="pricing-card-area section-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <p>Our pricing plan for you</p>
                            <h2>No hidden charges! choose  your plan wisely.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <p>
                                    <?php 
                                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                                    ?></p>
                                <h4>
                                    <?php 
                                    
                                    echo $row["course_name"];
                                    ?>
                                </h4>
                            </div>
                            <div class="card-mid">
                                <h4><?php 
                                    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                    echo $row["price"];
                                    ?> <span>/ mo</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li><?php 
                                    echo $row["course_desc"];
                                    ?>
                                    </li>
                                    <li><?php 
                                    echo $row["course_duration"];
                                    ?></li>
                                    <li><?php 
                                    echo $row["syllabus"];
                                    ?></li>
                                    <li><?php 
                                    echo $row["payment_link"];
                                    ?></li>

                                </ul>
                                <a href="#" class="borders-btn" data-target="#mymodel3" data-toggle="modal">View Packages</a>

                                <div class="modal " id="mymodel3" >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Model try -->
                                                <div class="modal-header">
                                                    <h1 class="text-danger" ><?php echo $row["course_name"];?><br></h1>
                                                    <p>
                                                    <?php 
                                                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                                                    ?>
                                                    </p>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    
                                                </div>

                                                <div class="modal-body">
                                                    <h2 class="text-center text-sucess">About: <br></h2>
                                                    <h3 class="text-center text-secondary" ><?php echo $row["course_desc"];?></h3>
                                                    <h2 class="text-center text-sucess">Duration: <br></h2>
                                                    <h3 class="text-center text-secondary" ><?php echo $row["course_duration"];?></h3>
                                                    <h2 class="text-center text-sucess">Syllabus: <br></h2>
                                                    <h3 class="text-center text-secondary" ><?php echo $row["syllabus"];?></h3>
                                                    <h2 class="text-center text-sucess">Payment Link: <br></h2>
                                                    <h3 class="text-center text-secondary" ><?php echo $row["payment_link"];?></h3>
                                                </div>

                                                <div class="modal-footer">
                                                    <a href="http://mandatorytrendz.com/interndiscount" class="borders-btn text-center">Registor Now </a>    
                                                </div>
                                            <!-- Model try -->        
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <p>
                                    <?php 
                                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                                    ?></p>
                                <h4>
                                    <?php 
                                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                    echo $row["course_name"];
                                    ?>
                                </h4>
                            </div>
                            <div class="card-mid">
                                <h4><?php 
                                    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                    echo $row["price"];
                                    ?> <span>/ mo</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li><?php 
                                    echo $row["course_desc"];
                                    ?>
                                    </li>
                                    <li><?php 
                                    echo $row["course_duration"];
                                    ?></li>
                                    <li><?php 
                                    echo $row["syllabus"];
                                    ?></li>
                                    <li><?php 
                                    echo $row["payment_link"];
                                    ?></li>

                                </ul>
                                <a href="#" class="borders-btn" data-target="#mymodel2" data-toggle="modal">View Packages</a>

                                <div class="modal " id="mymodel2" >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Model try -->
                                                <div class="modal-header">
                                                    <h1 class="text-danger" ><?php echo $row["course_name"];?><br></h1>
                                                    <p>
                                                    <?php 
                                                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                                                    ?>
                                                    </p>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    
                                                </div>

                                                <div class="modal-body">
                                                    <h2 class="text-center text-sucess">About: <br></h2>
                                                    <h3 class="text-center text-secondary" ><?php echo $row["course_desc"];?></h3>
                                                    <h2 class="text-center text-sucess">Duration: <br></h2>
                                                    <h3 class="text-center text-secondary" ><?php echo $row["course_duration"];?></h3>
                                                    <h2 class="text-center text-sucess">Syllabus: <br></h2>
                                                    <h3 class="text-center text-secondary" ><?php echo $row["syllabus"];?></h3>
                                                    <h2 class="text-center text-sucess">Payment Link: <br></h2>
                                                    <h3 class="text-center text-secondary" ><?php echo $row["payment_link"];?></h3>
                                                </div>

                                                <div class="modal-footer">
                                                    <a href="http://mandatorytrendz.com/interndiscount" class="borders-btn text-center">Registor Now </a>    
                                                </div>
                                            <!-- Model try -->        
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <p>
                                    <?php 
                                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                                    ?></p>
                                <h4>
                                    <?php 
                                    
                                    echo $row["course_name"];
                                    ?>
                                </h4>
                            </div>
                            <div class="card-mid">
                                <h4><?php 
                                    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                    echo $row["price"];
                                    ?> <span>/ mo</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li><?php 
                                    echo $row["course_desc"];
                                    ?>
                                    </li>
                                    <li><?php 
                                    echo $row["course_duration"];
                                    ?></li>
                                    <li><?php 
                                    echo $row["syllabus"];
                                    ?></li>
                                    <li><?php 
                                    echo $row["payment_link"];
                                    ?></li>

                                </ul>
                                <a href="#" class="borders-btn" data-target="#mymodel1" data-toggle="modal">View Packages</a>

                                <div class="modal " id="mymodel1" >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Model try -->
                                                        <div class="modal-header">
                                                    <h1 class="text-danger" ><?php echo $row["course_name"];?><br></h1>
                                                    <p>
                                                    <?php 
                                                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                                                    ?>
                                                    </p>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    
                                                </div>

                                                <div class="modal-body">
                                                    <h2 class="text-center text-sucess">About: <br></h2>
                                                    <h3 class="text-center text-secondary" ><?php echo $row["course_desc"];?></h3>
                                                    <h2 class="text-center text-sucess">Duration: <br></h2>
                                                    <h3 class="text-center text-secondary" ><?php echo $row["course_duration"];?></h3>
                                                    <h2 class="text-center text-sucess">Syllabus: <br></h2>
                                                    <h3 class="text-center text-secondary" ><?php echo $row["syllabus"];?></h3>
                                                    <h2 class="text-center text-sucess">Payment Link: <br></h2>
                                                    <h3 class="text-center text-secondary" ><?php echo $row["payment_link"];?></h3>
                                                </div>

                                                <div class="modal-footer">
                                                    <a href="http://mandatorytrendz.com/interndiscount" class="borders-btn text-center">Registor Now </a>    
                                                </div>
                                            <!-- Model try -->        
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>


                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- Pricing Card End -->
        <!-- Latest Offers Start -->
        <div class="latest-wrapper pb-bottom">
            <div class="container">
                <div class="latest-area latest-height  section-bg2" data-background="assets/img/gallery/section_bg01.png">
                    <div class="row  align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-7">
                            <div class="latest-caption">
                                <h2>Registor now</h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-10 ">
                            <div class="latest-subscribe">
                                <form action="#">
                                    <input type="email" placeholder="email">
                                    <button>Registor now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Offers End -->
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.png">
            <div class="container">
                 <!-- Brand Area Start -->
                
                <!-- Brand Area End -->
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.php"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                
                                <div class="footer-number">
                                    <h4><span>+91- </span>7233802258</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Our Support</h4>
                                    <ul>
                                        <li><a href="#">info@mandatorytrendz.com</a></li>
                              
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Origin</h4>
                                    <div class="footer-pera">
                                        <p class="info1">Kanpur,Uttar Pradesh</p>
                                    </div>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    Send
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>