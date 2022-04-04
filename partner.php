<!DOCTYPE html>
<html lang="en">

<head>

    <style>
                        .containerss {
                        padding-top: 10px;
                    }

                    h2 {
                        text-align: center;
                        padding: 20px;
                    }

                    .slick-slide {
                        margin: 0 20px;
                    }

                    .slick-slide img {
                        width: 100%;
                    }

                    .slick-slider {
                        position: relative;
                        display: block;
                        box-sizing: border-box;
                    }

                    .slick-list {
                        position: relative;
                        display: block;
                        overflow: hidden;
                        margin: 0;
                        padding: 0;
                    }

                    .slick-track {
                        position: relative;
                        top: 0;
                        left: 0;
                        display: block
                    }

                    .slick-slide {
                        display: none;
                        float: left;
                        height: 100%;
                        min-height: 1px;
                    }

                    .slick-slide img {
                        display: block;
                    }

                    .slick-initialized .slick-slide {
                        display: block;
                    }

                    .copy {
                        padding-top: 250px;
                    }

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>

<body>

    <div class="containerss">
        <h2 class="text-center font-weight-bold">Our srtgwav sdg</h2>
        <section class="customer-logos slider">
            <div class="slide"><img src="partnerimages/1.png" alt="logo"></div>
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




    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    setting: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    setting: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>

</body>

</html>