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
    <link rel="stylesheet" href="styles.css">
   
    <!-- <title>Our - Partners</title> -->
    

</head>

<body>
   

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>

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

    <!-- Bnner Section -->
    <section class="banner-section">
        <!--<div class="left-panel">
            <div class="side-menu-nav sidemenu-nav-toggler"><span class="flaticon-interface"></span>More</div>
            <div class="option-box">
                <div class="icon"><span class="flaticon-tracking"></span></div>
                <h4>Track <br> Shipment</h4>
                <div class="order-form-area">
                    <div class="wrapper-box">
                        <h4>Track Your Shipment</h4>
                        <form class="order-form">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Shipment Number *">
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" name="make">
                                    <option value="*">Type of Reference *</option>
                                    <option value=".category-1">Package</option>
                                    <option value=".category-3">Freight</option>
                                    <option value=".category-4">Mail of Innovations</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Track Now</span></button>
                            </div>
                        </form>
                    </div>                        
                </div>
            </div> 
            <div class="option-box">
                <a href="pricing-plan.php">
                    <div class="icon"><span class="flaticon-logistics"></span></div>
                    <h4>Pricing <br> Plan</h4>
                </a>
            </div>
            <div class="option-box">
                <a href="grequest-quote.php">
                    <div class="icon"><span class="flaticon-test"></span></div>
                    <h4>Get A <br>Quote</h4>
                </a>
            </div>
        </div>-->
        <div class="background-text">
            <div data-parallax='{"x": 100}'>
                <!-- <div class="text-1">Jadoo</div> -->
                <!-- <div class="text-2">Jadoo</div> -->
            </div>                
        </div>
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/Slide-home_50.png);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4 >Jadoo Broadband Limited </h4>
                                <!-- <h1>safety & reliable on-time</h1> -->
                                <!-- <div class="text">We denounce with righteous indignation & dislike beguiled</div> -->
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/Home-2.png);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>Your Broadband Patner </h4>
                                <h1>make easy distribution</h1>
                                <div class="text">To take a trivial example which of us ever undertakes laborious.</div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>                               
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/Home3.png);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4></h4>
                                <h1></h1>
                                <div class="text">Right to find fault with a man who chooses to enjoy a pleasure.</div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-nav style-two">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="far fa-angle-left"></i>Prev</span></div>
            <div class="banner-slider-control banner-slider-button-next"><span>Next<i class="far fa-angle-right"></i></span> </div>
        </div>
    </section>
    <!-- End Bnner Section -->

   
    
    
    
    <!-- boostrap -->
    <style>
.zoom {
    
 
}

.zoom:hover {
  transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>




        <!-- Facts Section -->
    <section class="facts-section">
        <div class="auto-container">
            <div class="wrapper-box" style="background-image: url(assets/images/background/bg-4.jpg);">
                <div class="shape">
                    <div class="shape-one"><img src="assets/images/resource/image-4.png" alt=""></div>
                    <div class="shape-two"><img src="assets/images/resource/image-5.png" alt=""></div>
                    <div class="shape-three"><img src="assets/images/resource/image-6.png" alt=""></div>
                    <div class="shape-four"><img src="assets/images/resource/enginner.png" alt=""></div>
                    <div class="shape-five"><img src="assets/images/resource/image-8.png" alt=""></div>
                </div>
                <div class="sec-title text-center light">
                    <div class="sub-title text-center">Why Jadoo </div>
                    <h2>Special<br>For Your</h2>
                </div>
                <div class="outer-box">
                    <div class="row">
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1000" data-stop="2460">0</span>
                                    </div>
                                    <div class="text">Active Home Connection</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/expart.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="200">0</span>
                                    </div>
                                    <div class="text">Expert Employee</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/expart.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="3000">0</span>
                                    </div>
                                    <div class="text">Satisfied Clients</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/branch.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="5">0</span>
                                    </div>
                                    <div class="text">Total Branches</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                         <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="3879">0</span>
                                    </div>
                                    <div class="text">T</div>
                                </div>
                            </div>
                        </div> 
                        <!-- <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="3879">0</span>
                                    </div>
                                    <div class="text">T</div>
                                </div>
                            </div>
                        </div>  -->
                    </div>
                </div>                
            </div>            
        </div>
    </section>

     <!-- Services Section -->
    <!-- serivice from here -->
   <section class="services-section style-two ">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Main Services</div>
                <h3>Moving Internet Services <br> All Over Country</h3>
            </div>
   
        </div>
    </section>


    
      <div class="container pb-5">
          <div class="row ">
              
              <?php
                    
                    
                    while($row=mysqli_fetch_array($services)){
               
               
               ?>
              <div class="col-md-4 zoom">
                   
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" style="height:270px;" src="admin/images/services/<?php echo $row['img']; ?>" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title"><b><a href="single-service.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></b></h5>
                              <p class="card-text"><?php echo $row['short']; ?></p>
                            </div>
                            <div class="card-footer">
                             
                               <div class="link"><a href="single-service.php?id=<?php echo $row['id']; ?>" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                            </div>
                        </div>
                    </div>
                    
              </div>

              <?php  } ?>
          </div>
      </div>
         

      <!-- Projects Section Three -->
      <section class="projects-section-three">
            <div class="auto-container">
                <!--Filter-->
                <div class="filters">
                    <!-- <ul class="filter-tabs filter-btns">
                        <li class="filter active" data-role="button" data-filter=".all">View All </li>
                        <li class="filter" data-role="button" data-filter=".cat-1">Freight Forwarding</li>
                        <li class="filter" data-role="button" data-filter=".cat-2">Transport </li>
                        <li class="filter" data-role="button" data-filter=".cat-3">Materials</li>
                        <li class="filter" data-role="button" data-filter=".cat-4">Warehouse</li>
                        <li class="filter" data-role="button" data-filter=".cat-5">Management</li>
                    </ul> -->
                </div>

                <!--Sortable Galery-->
                <div class="sortable-masonry">

                    <div class="items-container row">
                        <!-- Project Block -->
                        <div class="col-xl-3 col-lg-6 project-block masonry-item all cat-1">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/package/New-Package100mb-500x500.jpg" alt="">
                                    <div class="overlay"><a href="assets/images/package/New-Package100mb-500x500.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-full-size"></span></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">Giga Premium</div>
                                    <h4>For Buy This Checkout Packages</h4>
                                    <div class="link-btn"><a href="portfolio-details.html"><span class="flaticon-up-arrow"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Project Block -->
                        <div class="col-xl-3 col-lg-6 project-block masonry-item all cat-4">
                            <div class="inner-box">
                                <div class="image">
                                <img src="assets/images/package/New-Package10mb-500x500.jpg" alt="">
                                <div class="overlay"><a href="assets/images/package/New-Package10mb-500x500.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-full-size"></span></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">Supper Value</div>
                                    <h4>For Buy This Checkout Packages</h4>
                                    <div class="link-btn"><a href="portfolio-details.html"><span class="flaticon-up-arrow"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Project Block -->
                        <div class="col-xl-3 col-lg-6 project-block masonry-item all cat-1 cat-3">
                            <div class="inner-box">
                                <div class="image">
                                <img src="assets/images/package/New-Package15mb-500x500.jpg" alt="">
                                <div class="overlay"><a href="assets/images/package/New-Package15mb-500x500.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-full-size"></span></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">Economy</div>
                                    <h4>For Buy This Checkout Packages</h4>
                                    <div class="link-btn"><a href="portfolio-details.html"><span class="flaticon-up-arrow"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Project Block -->
                        <div class="col-xl-3 col-lg-6 project-block masonry-item all cat-2 cat-5">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/package/N.jpg" alt="">
                                    <div class="overlay"><a href="assets/images/package/N.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-full-size"></span></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">Speedster</div>
                                    <h4>For Buy This Checkout Packages</h4>
                                    <div class="link-btn"><a href="portfolio-details.html"><span class="flaticon-up-arrow"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Project Block -->
                        <!-- <div class="col-xl-3 col-lg-6 project-block masonry-item all cat-3 cat-2">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/package/New-Package40mb-500x500.jpg" alt="">
                                    <div class="overlay"><a href="assets/images/package/New-Package40mb-500x500.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-full-size"></span></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">Management</div>
                                    <h4>Shipiment Monitoring Technology</h4>
                                    <div class="link-btn"><a href="portfolio-details.html"><span class="flaticon-up-arrow"></span></a></div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Project Block -->
                        <!-- <div class="col-xl-3 col-lg-6 project-block masonry-item all cat-1">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/project-9.jpg" alt="">
                                    <div class="overlay"><a href="assets/images/resource/project-9.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-full-size"></span></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">Freight Forwarding</div>
                                    <h4>Air Fright Forwarding</h4>
                                    <div class="link-btn"><a href="portfolio-details.html"><span class="flaticon-up-arrow"></span></a></div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Project Block -->
                        <!-- <div class="col-xl-3 col-lg-6 project-block masonry-item all cat-4 cat-5">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/project-10.jpg" alt="">
                                    <div class="overlay"><a href="assets/images/resource/project-10.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-full-size"></span></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">Freight Forwarding</div>
                                    <h4>Ocean Cargo Roundtable</h4>
                                    <div class="link-btn"><a href="portfolio-details.html"><span class="flaticon-up-arrow"></span></a></div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Project Block -->
                        <!-- <div class="col-xl-3 col-lg-6 project-block masonry-item all cat-1 cat-5 cat-3">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/project-11.jpg" alt="">
                                    <div class="overlay"><a href="assets/images/resource/project-11.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-full-size"></span></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">Transport, Materials</div>
                                    <h4>Reverse Logistics Regulations</h4>
                                    <div class="link-btn"><a href="portfolio-details.html"><span class="flaticon-up-arrow"></span></a></div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
    


    <!-- About Section -->
    <section class="about-section" style="background-image: url(assets/images/background/bg-1.jpg);">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title"><h2>Jadoo Digital<h2></div>
                        <h4>Providing Reliable Services <br> Since 2008</h4>
                        <div class="text">Jadoo Broadband is the consumer facing latest avatar of Digi Jadoo Broadband Limited that started operation back in 2007 and soon became a major cable TV operator with high quality satellite and cable TV services. Jadoo Broadband is the transformation of the same trust with superior quality. We are committed to build our brand as a symbol of trust, reliability and quality for internet services and bring these service at our customers‘ doorsteps at an affordable price with ensured quality. </div>
                        <a href="about.php" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="flaticon-package"></span></div>
                                <div class="content">
                                    <span><h4>BroadBand</h4></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="flaticon-goal"></span></div>
                                <div class="content">
                                    <span><h4>IP TV</h4></span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1700ms">
                                <div class="icon"><span class="flaticon-binoculars"></span></div>
                                <div class="content">
                                    <span><h4>TV Box</h4></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1900ms">
                                <div class="icon"><span class="flaticon-gold"></span></div>
                                <div class="content">
                                    <span><h4>Retail Internet</h4></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1900ms">
                                <div class="icon"><span class="flaticon-gold"></span></div>
                                <div class="content">
                                    <span><h4>Corporate Internet & Data Connectivity System</h4></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image wow fadeInRight" data-wow-duration="1500ms"><img src="assets/images/resource/1.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work-process Section -->
    <section class="work-process-section">
        <div class="bg" style="background-image: url(assets/images/background/Baground-1.png);"></div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <div class="sub-title text-center">Why Choose US</div>
                <h2>We Aim to Contribute Well to <br> Your Company</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="count">01</div>
                        <div class="icon"><span class="flaticon-shipping"></span></div>
                        <h4>Uninterrupted <br>BroadBand Connection</h4>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInDwon" data-wow-duration="1500ms">
                        <div class="count">02</div>
                        <div class="icon"><span class="flaticon-warehouse"></span></div>
                        <h4>Ip<br>TV</h4>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="count">03</div>
                        <div class="icon"><span class="flaticon-packing-list"></span></div>
                        <h4>Retail <br>Connectivity</h4>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="count">04</div>
                        <div class="icon"><span class="flaticon-delivery-1"></span></div>
                        <h4>24/7<br> Support</h4>
                        
                    </div>
                </div>

              
            </div>
            
            <div class="bottom-text">Simplifying Your BroadBand and IPTV Needs With Personal and professional Approach. <a href="contact.php"> Get In Touch</a></div>
            
            <!-- Partner -->
                 
                 
        </div>
    </section>

    <!-- Whychooseus Section -->
    <!-- <section class="Whychooseus-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Why Choose Us</div>
                <h2>We Aim to Contribute Well to <br>  Your Company</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">01</span><i class="flaticon-shield"></i></div>
                        <div class="content">
                            <h4>Uninterrupted Internet Service</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">02</span><i class="flaticon-delivery"></i></div>
                        <div class="content">
                            <h4>IP TV Service</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">03</span><i class="flaticon-24-hours"></i></div>
                        <div class="content">
                            <h4>Digital TV Services</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">04</span><i class="flaticon-24-hours"></i></div>
                        <div class="content">
                            <h4>24/7 Online Support</h4>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
        <h2 class="text-center font-weight-bold">Our srtgwav sdg</h2>
        <section class="customer-logos slider">
            <div class="slide"><img src="klogo2.png" alt="logo"></div>
            <div class="slide"><img src="partnerimages/2.png" alt="logo"></div>
            <div class="slide"><img src="partnerimages/3.png" alt="logo"></div>
            <div class="slide"><img src="partnerimages/4.png" alt="logo"></div>
            <div class="slide"><img src="partnerimages/5.png" alt="logo"></div>
            <div class="slide"><img src="partnerimages/6.png" alt="logo"></div>
            <div class="slide"><img src="partnerimages/7.png" alt="logo"></div>
            <div class="slide"><img src="partnerimages/8.png" alt="logo"></div>
            <div class="slide"><img src="partnerimages/9.png" alt="logo"></div>
        </section>
    </div>







    </section> -->

    <


    <!-- Industries Covered -->
    <!--<section class="industries-covered" style="background-image: url(assets/images/background/bg-3.jpg);">
        <div class="background-text" data-parallax='{"x": 100}'>industries</div>
        <div class="outer-box side-container">
            <div class="outer-container">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "center": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url(assets/images/resource/image-2.jpg);">
                            </div>
                            <div class="content">
                                <div class="icon"><span class="flaticon-spaceship"></span></div>
                                <h4>Industrial and <br> Aerospace</h4>
                                <div class="text">The wise man therefore always holds in <br> these matters to this principle. </div>
                                <div class="link">
                                    <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url(assets/images/resource/image-4.jpg);">
                            </div>
                            <div class="content">
                                <div class="icon"><span class="flaticon-spaceship"></span></div>
                                <h4>Construction <br> Companies</h4>
                                <div class="text">The wise man therefore always holds in <br> these matters to this principle. </div>
                                <div class="link">
                                    <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url(assets/images/resource/image-5.jpg);">
                            </div> 
                            <div class="content">
                                <div class="icon"><span class="flaticon-box-1"></span></div>
                                <h4>Vehicle <br> Manufacturing</h4>
                                <div class="text">The wise man therefore always holds in <br> these matters to this principle. </div>
                                <div class="link">
                                    <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Pricing Section -->
    <!--<section class="pricing-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Pricing & Plans</div>
                <h2>Our Effective and Affordable <br> Pricing Plans</h2>
            </div>
            <div class="row m-0">
                <div class="col-lg-4 col-md-6 pricing-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="category-wrapper"><div class="category">Basic Plan</div></div>
                        <div class="price">$89.99</div>
                        <div class="time">Per Month</div>
                        <ul class="content">
                            <li>1 Warehouse </li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pricing-block style-two">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" style="background-image: url(assets/images/resource/image-3.jpg);">
                        <div class="category-wrapper"><div class="category">Standard Plan</div></div>
                        <div class="price">$129.99</div>
                        <div class="time">Per Month</div>
                        <ul class="content">
                            <li>1 Warehouse </li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pricing-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="category-wrapper"><div class="category">Advanced Plan</div></div>
                        <div class="price">$149.99</div>
                        <div class="time">Per Month</div>
                        <ul class="content">
                            <li>1 Warehouse </li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Facts Section -->
    <!-- <section class="facts-section">
        <div class="auto-container">
            <div class="wrapper-box" style="background-image: url(assets/images/background/bg-4.jpg);">
                <div class="shape">
                    <div class="shape-one"><img src="assets/images/resource/image-4.png" alt=""></div>
                    <div class="shape-two"><img src="assets/images/resource/image-5.png" alt=""></div>
                    <div class="shape-three"><img src="assets/images/resource/image-6.png" alt=""></div>
                    <div class="shape-four"><img src="assets/images/resource/enginner.png" alt=""></div>
                    <div class="shape-five"><img src="assets/images/resource/image-8.png" alt=""></div>
                </div>
                <div class="sec-title text-center light">
                    <div class="sub-title text-center">Interesting Facts</div>
                    <h2>The Numbers Speak for <br> themselves</h2>
                </div>
                <div class="outer-box">
                    <div class="row"> -->
                        <!--Column-->
                        <!-- <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1000" data-stop="2460">0</span>
                                    </div>
                                    <div class="text">Active Home Connection</div>
                                </div>
                            </div>
                        </div> -->
                        <!--Column-->
                        <!-- <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/expart.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="200">0</span>
                                    </div>
                                    <div class="text">Expert Employee</div>
                                </div>
                            </div>
                        </div> -->
                        <!--Column-->
                        <!-- <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/expart.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="3000">0</span>
                                    </div>
                                    <div class="text">Satisfied Clients</div>
                                </div>
                            </div>
                        </div> -->
                        <!--Column-->
                        <!-- <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="5">0</span>
                                    </div>
                                    <div class="text">Total Branches</div>
                                </div>
                            </div>
                        </div> -->
                        <!--Column-->
                        <!-- <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="3879">0</span>
                                    </div>
                                    <div class="text">T</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>            
        </div>
    </section> -->

    <!-- Testimonials Section -->

  



    <!-- News Section -->
    <!--<section class="news-section">
        <div class="auto-container">
            <div class="sec-top row m-0 justify-content-md-between align-items-center">
                <div class="sec-title">
                    <div class="sub-title">News & Updates</div>
                    <h2>Latest From Our Blog Post</h2>
                </div>
                <div class="link">
                    <a href="blog.php" class="readmore-link"><i class="flaticon-up-arrow"></i>Read All News</a>
                </div>
            </div>
            <div class="row">
                <?php  
                    while($row=mysqli_fetch_array($blog)){

                ?>
                <div class="news-block-one col-lg-4">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-details.php?id=<?php echo $row['id']; ?>"><img src="admin/images/blog/<?php echo $row['img']; ?>" alt=""></a>
                            <div class="date"><?php echo $row['date']; ?></div>
                        </div>
                        <div class="lower-content">
                            <div class="category"><i class="fas fa-folder"></i><?php echo $row['category']; ?></div>
                            <h3><a href="blog-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
                            <div class="text"><?php 
                            $ddesc = $row['descrip']; 
                        echo $dec = substr($ddesc,0,180);
                        ?>...</div>
                            <div class="link">
                                <a href="blog-details.php?id=<?php echo $row['id']; ?>" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                            </div>
                        </div>
                     
                    </div>
                </div>
        <?php } ?>
            </div>
        </div>
    </section> -->

    <!-- Map Section -->
   <section class="map-section">
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.59300852957!2d90.4166668149829!3d23.83306738454865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c777b4e77375%3A0xdf1e2f31e1e2d918!2z4Kac4Ka-4Kam4KeBIOCmoeCmv-CmnOCmv-Cmn-CmvuCmsg!5e0!3m2!1sbn!2sbd!4v1649054681235!5m2!1sbn!2sbd" width="1900" height="400"  style="border:0;" allowfullscreen="none" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section> -->

    <!-- Branches Section -->
   <!-- <section class="branches-section">
        <div class="auto-container">
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "4" }}}'>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Hoxton - HO</h4>
                    <div class="text"> Boat House, 152/21 City Road,
                    Hoxton, N1 6NG, UK.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Melbourne</h4>
                    <div class="text"> 46 Yarra Boulevard, 2nd Cross,
                        Victoria 3010, AUS.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Houston</h4>
                    <div class="text"> 3333 Raleigh Street, Houston,
                        TX 77021, USA.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>New Delhi</h4>
                    <div class="text">11/8, Shantipath, Chanakyapuri,
                        New Delhi 110049, IND.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Hoxton - HO</h4>
                    <div class="text"> Boat House, 152/21 City Road,
                    Hoxton, N1 6NG, UK.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Melbourne</h4>
                    <div class="text"> 46 Yarra Boulevard, 2nd Cross,
                        Victoria 3010, AUS.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Houston</h4>
                    <div class="text"> 3333 Raleigh Street, Houston,
                        TX 77021, USA.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>New Delhi</h4>
                    <div class="text">11/8, Shantipath, Chanakyapuri,
                        New Delhi 110049, IND.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
            </div>
        </div>        
    </section> -->


<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "107225500865050");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v13.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

   

    <?php include "footer.php"; ?>

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

