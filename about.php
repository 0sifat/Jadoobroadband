<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>About Us - <?php echo $setting['site_name']; ?></title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
   
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
  

  
    <!-- End Main Header -->
<?php include "header.php"; ?>
    <!-- Hidden Sidebar -->

    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                    <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresees the pain.</div>
                </div>
                <!-- PDF Widget -->
                <div class="pdf-widget sidebar-widget">
                    <div class="row">
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                    </div>                            
                </div>
                <!-- Contact Widget -->
           
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
            </div>
        </div>
    </section>
    
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://st.ourhtmldemo.com/new/Transida2/index.php">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-20.jpg);">
        <!--<div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div> -->
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>About Company</h1>
                    </div>
                   <!--<ul class="bread-crumb style-two">
                        <li class="active"><a href="about.php">About Company <i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="history.php">Our History <i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="team.php">Leadership Team<i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="global-networks.php">Global Network <i class="flaticon-up-arrow"></i></a></li>
                    </ul> -->
                </div>                    
            </div>
        </div>
    </section>

    <!-- Who we are -->
    <section class="who-we-are-section">
        <div class="top-content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sec-title mb-30">
                            <div class="sub-title">Company</div>
                            <h3>Provide a <br> Reliable Services <br> Since 2008 </h3>
                        </div>
                        <div class="experience-year">
                            <div class="icon"><i class="flaticon-package-1"></i></div>
                            <div class="content">
                                <h3>14 <span>+ Years</span></h3>
                                <h5>Experience BroadBand Services</h5>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-8">
                        <div class="image mb-30"><img src="assets/images/resource/ISP_license.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overview">
            <div class="auto-container">
                <div class="wrapper-box">
                    <h2>Digital System Corporation has been operating in the all over the country now, for over 14 years and are part <br>  of a reliable, global integrated network.</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text">
                                <p>Jadoo Broadband is the consumer facing latest avatar of Digi Jadoo Broadband Limited that started operation back in 2007 and soon became a major cable TV operator with high quality satellite and cable TV services. </p>
                                <p>Jadoo Broadband is the transformation of the same trust with superior quality. We are committed to build our brand as a symbol of trust, reliability and quality for internet services and bring these service at our customers‘ doorsteps at an affordable price with ensured quality. </p>
                            </div>
                            <div class="author-info wow fadeInUp" data-wow-duration="1500ms">
                                <!--<div class="video-btn">
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image video-fancybox"><i class="flaticon-play-arrow"></i></a>
                                </div>-->
                                <div class="signature"><img src="assets/images/sign.PNG" alt=""></div>
                                <div>
                                    <div class="author-title">kunal deshmukhya </div>
                                    <div class="designation">CEO Jadoo Digital BroadBand</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row m-10">
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="2460">0</span><span>+</span>
                                            </div>
                                            <h4>Home <br> Connection</h4>
                                            <h5>Total</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="40">0</span><span>+</span>
                                            </div>
                                            <h5>Corporate Client</h5>
                                            <div class="icon"><span class="flaticon-airplane"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon"><span class="flaticon-cargo-ship-1"></span></div>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="40">0</span><span>+</span>
                                            </div>
                                            <h5>Distributer</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="100">0</span><span>+</span>
                                            </div>
                                            <h5>Re-Seller</h5>
                                            <div class="icon"><span class="flaticon-box-1"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Whychooseus section four -->
   <!-- <section class="whychooseus-section-four" style="background-image: url(assets/images/background/bg-23.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <div class="sub-title">Why Choose Us</div>
                <h2> Reasons Why to Choose Our <br> Freight Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-shield"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>Trasparent Pricing</h4>
                     
                        <div class="count">01</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-delivery"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>On - Time Delivery</h4>
                        
                        <div class="count">02</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-box"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>Real Time Tracking</h4>
                     
                        <div class="count">03</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-24-hours"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>24/7 Online Support</h4>
                       
                        <div class="count">04</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Statement -->
    <section class="statement-section pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image"><img src="assets/images/resource/image-35.jpg" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="content">  
                        <div class="badge"><img src="assets/images/resource/Logo-200x200.png" alt=""></div>
                        <!-- Tab panes -->
                        <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Core Philosophy</h2>
                                    </div>
                                    <div class="text"><ul>
                                        <li>Our Philosophy is to build trust and work closely with our partners in order to <br> provide our subscribers with high speed Uninteraption <br>Internet Facility and other interactive Value Added Services (VAS) at their convenience. </li>
                                        <li>To continually improve our business processes.</li>
                                        <li>To contribute to the growth of society as we grow the company’s business.</li>
                                    </ul></div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Vision </h2>
                                    </div>
                                    <div class="text">To be the most-preferred, converged entertainment and connectivity brand in Bangladesh.</div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Mission</h2>
                                    </div>
                                    <div class="text">Build a platfrom for our products and services that define a new standard for covaraged entertainment and connectivity through utilized the best-in-class international standard equipment & technology, through retaining the best telent & human resources, and through optimizing global best-practices & operating procedure.</div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Company Value</h2>
                                    </div>
                                    <div class="text"> 
                                        <li>Transparency- (Openness, Clarity)/ motto: be open be care full</li>
                                        <li>Teamwork- (Unity, Tohetherness)/ moto : to be united, be together</li>
                                        <li>Integrity- (Honesty, Dedication)/ motto: be Honest be Dedicated</li>
                                        <li>Optimism- (Positivity, Happyness)/ motto: be positive be happy</li>

                                       
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                                    <h4><i class="flaticon-up-arrow"></i>Mission</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Vision</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Value</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-four-area" data-toggle="tab" href="#tab-four" role="tab" aria-controls="tab-four" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Va1lue</h4>
                                </a>
                            </li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

   
   


    <!--Main Footer-->
   <?php include "footer.php"; ?>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>


</body>


</html>













