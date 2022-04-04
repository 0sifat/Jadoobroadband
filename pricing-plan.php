<?php

include "admin/conn.php";

//fetch settings
$settings = mysqli_query($con,"SELECT * FROM settings");
$setting  = mysqli_fetch_array($settings);


// fetch testimonials
$testi = mysqli_query($con,"SELECT * FROM testimonials");

//fetch blog
$blog = mysqli_query($con,"SELECT * FROM blog");


 //fetch services
$services = mysqli_query($con,"SELECT * FROM services ORDER BY id DESC LIMIT 3");



?>





<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from st.ourhtmldemo.com/new/Transida2/pricing-plan.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jan 2021 08:07:34 GMT -->

<head>
<meta charset="utf-8">
<title><?php echo $setting['site_name']; ?> BroadBand adn Internet Services</title>
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
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>

        <?php include "header.php"; ?>

        
            

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="header-upper">
                    <div class="auto-container">
                        <div class="inner-container">
                            <!--Logo-->
                            <div class="logo-box">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="right-column">
                                <!--Nav Box-->
                                <div class="nav-outer">
                                    <!--Mobile Navigation Toggler-->
                                    <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>

                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-md navbar-light">
                                    </nav>
                                </div>
                                <div class="navbar-right-info">
                                    <div class="sign-in"><a href="#"><i class="flaticon-delivery-man-1"></i>Sign In</a></div>
                                    <div class="language">
                                        <span class="icon"><img src="assets/images/resource/flags/de.png" alt=""></span>
                                        <form action="#" class="language-switcher">
                                            <select class="selectpicker">
                                            <option value="1">Eng</option>
                                            <option value="2">Fre</option>
                                            <option value="3">Ita</option>
                                            <option value="4">Spa</option>
                                        </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-remove"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo">
                        <a href="index.html"><img src="assets/images/logo.png" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

            <div class="nav-overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
        </header>
        <!-- End Main Header -->

        <!-- Hidden Sidebar -->
        <section class="hidden-sidebar close-sidebar">
            <div class="wrapper-box">
                <div class="content-wrapper">
                    <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                    <div class="text-widget sidebar-widget">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                        </div>
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
                    <div class="contact-widget">
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-cursor"></span></div>
                            <div class="text">Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</div>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-calling"></span></div>
                            <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61) 324 56 789 & 790</a></div>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-mail"></span></div>
                            <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">supportyou@transida.com</a></div>
                        </div>
                    </div>
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
                    <form method="post" action="http://st.ourhtmldemo.com/new/Transida2/index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/bg-20.jpg);">
            <div class="background-text">
                <div data-parallax='{"x": 100}'>
                    
                </div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="content-wrapper">
                        <div class="title">
                            <h1>Pricing Plan</h1>
                        </div>
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li>Pricing Plan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section class="pricing-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title text-center">Pricing & Plans</div>
                    <h2>Our Effective and Affordable <br> Pricing Plans</h2>
                </div>
                <div class="row m-0">
                    <div class="col-lg-4 col-md-6 pricing-block">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="category-wrapper">
                                <div class="category">Gamer's Choice</div>
                            </div>
                            <div class="price">TK-1200</div>
                            <div class="time">Per Month</div>
                            <ul class="content">
                                <li> 20mbps </li>
                                <!-- <li>Custom Business Rules</li>
                                <li>Real Time Rate Shopping</li>
                                <li>100% Insurance</li>
                                <li>50 Freight Shipments</li> -->
                            </ul>
                            <div class="link-box">
                                <a href="customerreg.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-lg-4 col-md-6 pricing-block style-two">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" style="background-image: url(assets/images/resource/image-3.jpg);">
                            <div class="category-wrapper">
                                <div class="category">Super Value</div>
                            </div>
                            <div class="price">TK-800</div>
                            <div class="time">Per Month</div>
                            <ul class="content">
                                <li>10mbps </li>
                                <!-- <li>Custom Business Rules</li>
                                <li>Real Time Rate Shopping</li>
                                <li>100% Insurance</li>
                                <li>50 Freight Shipments</li> -->
                            </ul>
                            <div class="link-box">
                                <a href="customerreg.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 pricing-block">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="category-wrapper">
                                <div class="category">Ecomomy</div>
                            </div>
                            <div class="price">TK-1000</div>
                            <div class="time">Per Month</div>
                            <ul class="content">
                                <li> 15mbps </li>
                                <!-- <li>Custom Business Rules</li>
                                <li>Real Time Rate Shopping</li>
                                <li>100% Insurance</li>
                                <li>50 Freight Shipments</li> -->
                            </ul>
                            <div class="link-box">
                                <a href="customerreg.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pricing-block">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="category-wrapper">
                                <div class="category">Streaming King</div>
                            </div>
                            <div class="price">TK-1500</div>
                            <div class="time">Per Month</div>
                            <ul class="content">
                                <li> 25mbps </li>
                                <!-- <li>Custom Business Rules</li>
                                <li>Real Time Rate Shopping</li>
                                <li>100% Insurance</li>
                                <li>50 Freight Shipments</li> -->
                            </ul>
                            <div class="link-box">
                                <a href="customerreg.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4 col-md-6 pricing-block style-two">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" style="background-image: url(assets/images/resource/image-3.jpg);">
                            <div class="category-wrapper">
                                <div class="category">Speedster</div>
                            </div>
                            <div class="price">TK-1900</div>
                            <div class="time">Per Month</div>
                            <ul class="content">
                                <li> 30mbps </li>
                                <!-- <li>Custom Business Rules</li>
                                <li>Real Time Rate Shopping</li>
                                <li>100% Insurance</li>
                                <li>50 Freight Shipments</li> -->
                            </ul>
                            <div class="link-box">
                                <a href="customerreg.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                            </div>
                        </div>
                    </div>
                    
                
                    <div class="col-lg-4 col-md-6 pricing-block">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="category-wrapper">
                                <div class="category">Friends & Family</div>
                            </div>
                            <div class="price">TK-2400</div>
                            <div class="time">Per Month</div>
                            <ul class="content">
                                <li> 40mbps </li>
                                <!-- <li>Custom Business Rules</li>
                                <li>Real Time Rate Shopping</li>
                                <li>100% Insurance</li>
                                <li>50 Freight Shipments</li> -->
                            </ul>
                            <div class="link-box">
                                <a href="customerreg.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 pricing-block">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="category-wrapper">
                                <div class="category">Share & Care</div>
                            </div>
                            <div class="price">TK-3500</div>
                            <div class="time">Per Month</div>
                            <ul class="content">
                                <li> 50mbps </li>
                                <!-- <li>Custom Business Rules</li>
                                <li>Real Time Rate Shopping</li>
                                <li>100% Insurance</li>
                                <li>50 Freight Shipments</li> -->
                            </ul>
                            <div class="link-box">
                                <a href="customerreg.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 pricing-block style-two">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" style="background-image: url(assets/images/resource/image-3.jpg);">
                            <div class="category-wrapper">
                                <div class="category">Premium</div>
                            </div>
                            <div class="price">TK-5000</div>
                            <div class="time">Per Month</div>
                            <ul class="content">
                                <li> 75mbps </li>
                                <!-- <li>Custom Business Rules</li>
                                <li>Real Time Rate Shopping</li>
                                <li>100% Insurance</li>
                                <li>50 Freight Shipments</li> -->
                            </ul>
                            <div class="link-box">
                                <a href="customerreg.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 pricing-block">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="category-wrapper">
                                <div class="category">Mega Premium</div>
                            </div>
                            <div class="price">TK-6000</div>
                            <div class="time">Per Month</div>
                            <ul class="content">
                                <li>80mbps </li>
                                <!-- <li>Custom Business Rules</li>
                                <li>Real Time Rate Shopping</li>
                                <li>100% Insurance</li>
                                <li>50 Freight Shipments</li> -->
                            </ul>
                            <div class="link-box">
                                <a href="customerreg.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 pricing-block">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="category-wrapper">
                                <div class="category">Giga Premium</div>
                            </div>
                            <div class="price">TK-8800</div>
                            <div class="time">Per Month</div>
                            <ul class="content">
                                <li>100mbps </li>
                                <!-- <li>Custom Business Rules</li>
                                <li>Real Time Rate Shopping</li>
                                <li>100% Insurance</li>
                                <li>50 Freight Shipments</li> -->
                            </ul>
                            <div class="link-box">
                                <a href="customerreg.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                            </div>
                        </div>
                    </div>
                    
                    






                    
                    
                </div>
            </div>
        </section>

        <!-- Newsletter
        <section class="newsletter-section style-two">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-5">
                        <h3><span class="flaticon-email"></span> Subscribe Our Newsletter <br> & Get Updates.</h3>
                    </div>
                    <div class="col-lg-7">
                        <div class="newsletter-form">
                            <form class="ajax-sub-form" method="post">
                                <div class="form-group">
                                    <i class="far fa-envelope-open"></i>
                                    <input type="email" placeholder="Enter Your Email Address..." id="subscription-email">
                                    <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Subscribe</span></button>
                                    <label class="subscription-label" for="subscription-email"></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <?php include "footer.php"; ?>

    

    </div>
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

<!-- Mirrored from st.ourhtmldemo.com/new/Transida2/pricing-plan.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jan 2021 08:07:34 GMT -->

</html>