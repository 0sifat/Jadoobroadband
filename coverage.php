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
    <title>Our Coverage - <?php echo $setting['site_name']; ?></title>
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
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons" async="async"></script>



    <link rel="stylesheet" href="styles.css">

</head>

<body>
  <?php include "header.php"; ?>
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
               <!-- <div class="contact-widget">
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
                </div> -->
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i></span></a></div>
            </div>
        </div>
    </section>
    
    <!--Search Popup-->
    <!-- <div id="search-popup" class="search-popup">
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
    </div> -->

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
                        <h1></h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="coverage.php">Coverage</a></li>
                       
                    </ul>
                </div>                    
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="services-title">
                <div class="title">
                    <h2><span> Our </span> Coverage</h2>
                </div>
            </div>

            <div class="services-box">

                <div class="box">
                    <div class="ser-box">
                        <div class="icon">
                            <img src="img/setting.png">
                        </div>
                        <h4>Banani</h4>
                        <!-- <p>Lorem Ipsum is simply dummy and typesetting industry.</p> -->
                    </div>
                </div>

                <div class="box">
                    <div class="ser-box">
                        <div class="icon">
                            <img src="img/speed.png">
                        </div>
                        <h4>Fast Preformance</h4>
                        <p>Lorem Ipsum is simply dummy and typesetting industry.</p>
                    </div>
                </div>

                <div class="box">
                    <div class="ser-box">
                        <div class="icon">
                            <img src="img/protect.png">
                        </div>
                        <h4>Privacy Protected</h4>
                        <p>Lorem Ipsum is simply dummy and typesetting industry.</p>
                    </div>
                </div>


                <div class="box">
                    <div class="ser-box">
                        <div class="icon">
                            <img src="img/backup.png">
                        </div>
                        <h4>Monthly Backup</h4>
                        <p>Lorem Ipsum is simply dummy and typesetting industry.</p>
                    </div>
                </div>

                <div class="box">
                    <div class="ser-box">
                        <div class="icon">
                            <img src="img/freessl.png">
                        </div>
                        <h4>Free SSL Certificate</h4>
                        <p>Lorem Ipsum is simply dummy and typesetting industry.</p>
                    </div>
                </div>

                <div class="box">
                    <div class="ser-box">
                        <div class="icon">
                            <img src="img/database.png">
                        </div>
                        <h4>Unlimited Database</h4>
                        <p>Lorem Ipsum is simply dummy and typesetting industry.</p>
                    </div>
                </div>

                <div class="box">
                    <div class="ser-box">
                        <div class="icon">
                            <img src="img/database.png">
                        </div>
                        <h4>Unlimited Database</h4>
                        <p>Lorem Ipsum is simply dummy and typesetting industry.</p>
                    </div>
                </div>

                <div class="box">
                    <div class="ser-box">
                        <div class="icon">
                            <img src="img/database.png">
                        </div>
                        <h4>Unlimited Database</h4>
                        <p>Lorem Ipsum is simply dummy and typesetting industry.</p>
                    </div>
                </div>

                <div class="box">
                    <div class="ser-box">
                        <div class="icon">
                            <img src="img/database.png">
                        </div>
                        <h4>Unlimited Database</h4>
                        <p>Lorem Ipsum is simply dummy and typesetting industry.</p>
                    </div>
                </div>

                <div class="box">
                    <div class="ser-box">
                        <div class="icon">
                            <img src="img/database.png">
                        </div>
                        <h4>Unlimited Database</h4>
                        <p>Lorem Ipsum is simply dummy and typesetting industry.</p>
                    </div>
                </div>

                <div class="box">
                    <div class="ser-box">
                        <div class="icon">
                            <img src="img/database.png">
                        </div>
                        <h4>Unlimited Database</h4>
                        <p>Lorem Ipsum is simply dummy and typesetting industry.</p>
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