<section class="testimonials-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="sub-title text-center">Testimonials</div>
            <h2>1000+ Happy Customers Said</h2>
        </div>
        <div class="theme_carousel owl-theme owl-carousel">
            <?php
            while($row=mysqli_fetch_array($testi)){
        ?>
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">
                            <?php echo $row['descrip']; ?>
                        </div>
                        <div class="author-thumb">
                            <img src="admin/images/testimonial/<?php echo $row['img']; ?>" alt="">
                            <div class="quote"><span class="flaticon-right-quote"></span>
                            </div>
                        </div>
                        <h4>
                            <?php echo $row['title']; ?>
                        </h4>
                        <div class="designation">
                            <?php echo $row['designation']; ?>
                        </div>
                        <div class="rating">
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- End -->
        </div>
    </div>
</section>