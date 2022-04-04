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
<html>

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
    <meta charset="utf-8">
    
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="assets/css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="assets/css/regstyle.css" />
</head>

<body>
    <?php include "header.php"; ?>
    <div class="page-content">
        <div class="form-v1-content">
            <div class="wizard-form">
                <form class="form-register" action="#" method="post">
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <h2>
                            <p class="step-icon"><span>01</span></p>
                            <span class="step-text">Peronal Infomation</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">Peronal Infomation</h3>
                                    <p>Please enter your infomation and proceed to the next step so we can build your accounts. </p>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <fieldset>
                                            <legend>First Name</legend>
                                            <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First Name" required>
                                        </fieldset>
                                    </div>
                                    <div class="form-holder">
                                        <fieldset>
                                            <legend>Last Name</legend>
                                            <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last Name" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Your Email</legend>
                                            <input type="text" name="your_email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Phone Number</legend>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="+880-1762638232" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Address</legend>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="House Number,Road,Flat,Area" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <input type="text" class="form-control input-border" id="nid" name="nid" placeholder="NID" required>
                                    </div>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <label class="special-label">Installtion Date:</label>
                                        <select name="month" id="month">
											<option value="MM" disabled selected>MM</option>
											<option value="16">1</option>
											<option value="17">2</option>
											<option value="18">3</option>
											<option value="19">4</option>
											<option value="16">5</option>
											<option value="17">6</option>
											<option value="18">7</option>
											<option value="19">8</option>
											<option value="16">9</option>
											<option value="17">10</option>
											<option value="18">11</option>
											<option value="19">12</option>
											<option value="16">13</option>
											<option value="17">14</option>
											<option value="18">15</option>
											<option value="19">16</option>
											<option value="16">17</option>
											<option value="17">18</option>
											<option value="18">19</option>
											<option value="19">20</option>
											<option value="16">21</option>
											<option value="17">22</option>
											<option value="18">23</option>
											<option value="19">24</option>
											<option value="16">25</option>
											<option value="17">26</option>
											<option value="18">27</option>
											<option value="19">28</option>
											<option value="16">29</option>
											<option value="17">30</option>
											<option value="18">31</option>
											
										</select>
                                        <select name="date" id="date">
											<option value="DD" disabled selected>DD</option>
											
											<option value="Feb">Jan</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
											<option value="Jun">Jun</option>
											<option value="Jul">Jul</option>
											<option value="Aug">Aug</option>
											<option value="Sep">Sep</option>
											<option value="Oct">Oct</option>
											<option value="Nov">Nov</option>
											<option value="Dec">Dev</option>
										</select>
                                        <select name="year" id="year">
											<option value="YYYY" disabled selected>YYYY</option>
											<option value="2017">2022</option>
											<option value="2016">2023</option>
											<option value="2015">2024</option>
											<option value="2014">2025</option>
											<option value="2013">2026</option>
											<option value="2017">2027</option>
											<option value="2016">2028</option>
											<option value="2015">2029</option>
											<option value="2014">2030</option>
											<option value="2013">2031</option>
										</select>
                                    </div>
                                </div>
                                
                            </div>
                        </section>
                        <!-- SECTION 2 -->
                        <h2>
                            <p class="step-icon"><span>02</span></p>
                            <span class="step-text">Package Description</span>
                        </h2>
                        <section>
                            <div class="inner">

                                <div class="wizard-header">
                                    <h3 class="heading">Connect Bank Account</h3>

                                    <p>Please enter your infomation and proceed to the next step so we can build your accounts.</p>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-1">
                                        <select name="cars" id="cars">
											<option value="volvo">Select Your Favorite Package </option>
											<option value="saab">Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
										</select>
                                        <!-- <input type="text" name="find_bank" id="find_bank" placeholder="Find Your Bank" class="form-control" required> -->
                                    </div>
                                </div>
                                <div class="form-row-total">
                                    <!-- <div class="form-row">
				                		<div class="form-holder form-holder-2 form-holder-3">
				                			<input type="radio" class="radio" name="bank-1" id="bank-1" value="bank-1" checked>
				                			<label class="bank-images label-above bank-1-label" for="bank-1">
				                				<img src="images/form-v1-1.png" alt="bank-1">
				                			</label>
											<input type="radio" class="radio" name="bank-2" id="bank-2" value="bank-2">
											<label class="bank-images label-above bank-2-label" for="bank-2">
												<img src="images/form-v1-2.png" alt="bank-2">
											</label>
											<input type="radio" class="radio" name="bank-3" id="bank-3" value="bank-3">
											<label class="bank-images label-above bank-3-label" for="bank-3">
												<img src="images/form-v1-3.png" alt="bank-3">
											</label>
				                		</div>
				                	</div> -->
                                    <!-- <div class="form-row">
				                		<div class="form-holder form-holder-2 form-holder-3">
				                			<input type="radio" class="radio" name="bank-4" id="bank-4" value="bank-4">
				                			<label class="bank-images bank-4-label" for="bank-4">
				                				<img src="images/form-v1-4.png" alt="bank-4">
				                			</label>
											<input type="radio" class="radio" name="bank-5" id="bank-5" value="bank-5">
											<label class="bank-images bank-5-label" for="bank-5">
												<img src="images/form-v1-5.png" alt="bank-5">
											</label>
											<input type="radio" class="radio" name="bank-6" id="bank-6" value="bank-6">
											<label class="bank-images bank-6-label" for="bank-6">
												<img src="images/form-v1-6.png" alt="bank-6">
											</label>
				                		</div>
				                	</div> -->
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 3 -->
                        <h2>
                            <p class="step-icon"><span>03</span></p>
                            <span class="step-text">Set Financial Goals</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">Payment</h3>
                                    <p>Please enter your infomation and proceed to the next step so we can Create an account</p>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <input type="radio" class="radio" name="radio1" id="plan-1" value="plan-1">
                                        <label class="plan-icon plan-1-label" for="plan-1">
		                					<img src="assets/images/form-v1-icon-2.png" alt="pay-1">
			                			</label>
                                        <div class="plan-total">
                                            <span class="plan-title">Bkash.</span>
                                            <p class="plan-text">Pellentesque nec nam aliquam sem et volutpat consequat mauris nunc congue nisi.</p>
                                        </div>
                                        <input type="radio" class="radio" name="radio2" id="plan-2" value="plan-2">
                                        <label class="plan-icon plan-2-label" for="plan-2">
			                					<img src="assets/images/form-v1-icon-2.png" alt="pay-1">
			                			</label>
                                        <div class="plan-total">
                                            <span class="plan-title">Nogod.</span>
                                            <p class="plan-text">Pellentesque nec nam aliquam sem et volutpat consequat mauris nunc congue nisi.</p>
                                        </div>
                                        <input type="radio" class="radio" name="radio3" id="plan-3" value="plan-3" checked>
                                        <label class="plan-icon plan-3-label" for="plan-3">
		                					<img src="assets/images/form-v1-icon-3.png" alt="pay-2">
										</label>
                                        <div class="plan-total">
                                            <span class="plan-title">Bank Card.</span>
                                            <p class="plan-text">Pellentesque nec nam aliquam sem et volutpat consequat mauris nunc congue nisi.</p>
                                        </div>
                                        

                                        <input type="radio" class="radio" name="radio4" id="plan-1" value="plan-1">
                                        <label class="plan-icon plan-1-label" for="plan-1">
		                					<img src="assets/images/form-v1-icon-2.png" alt="pay-1">
			                			</label>
                                        <div class="plan-total">
                                            <span class="plan-title">Cash After Installtion.</span>
                                            <p class="plan-text">Pellentesque nec nam aliquam sem et volutpat consequat mauris nunc congue nisi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
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
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery.steps.js"></script>
    <script src="assets/js/main.js"></script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>