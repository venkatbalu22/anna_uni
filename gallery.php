<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Education</title>
    <!-- fav icon -->
    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- animated-css -->
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css">
    <!-- font-awesome-css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- owl-carrosel-css -->
    <link href="assets/owl-carrosel/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="assets/owl-carrosel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <!-- Revulation Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/settings.css" media="screen" />
    <!-- Calender-css -->
    <link href="assets/css/calender.css" rel="stylesheet" type="text/css">
    <!-- offcanvas-menu-css -->
    <link href="assets/css/offcanvas-menu.css" rel="stylesheet" type="text/css">
    <!-- style-css -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <style>
        .gallery-title {
            background: url(../img/about/anna-university.jpg) no-repeat center top;
            background-size: cover;
            /* padding: 310px 0 75px; */
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .header-directors-title {
                padding: 250px 0 50px;
            }
        }

        @media only screen and (max-width: 991px) {
            .gallery-title-title {
                padding: 140px 0 50px;
            }
        }

        @media only screen and (max-width: 479px) {
            .gallery-title-title {
                padding: 120px 0 30px;
            }
        }

        .gallery-title-title .title {
            font-size: 48px;
            font-weight: 700;
            line-height: 42px;
            color: #FFFFFF;
            margin-bottom: 10px;
        }

        @media only screen and (max-width: 991px) {
            .gallery-title-title .title {
                font-size: 35px;
                line-height: 35px;
            }
        }

        @media (min-width: 480px) and (max-width: 767px) {
            .gallery-title-title .title {
                font-size: 30px;
                line-height: 30px;
            }
        }

        @media only screen and (max-width: 479px) {
            .gallery-title-title .title {
                font-size: 25px;
                line-height: 30px;
                margin-bottom: 0;
            }
        }

        .gallery-title-title .sub-title {
            color: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all .2s linear;
        }

        body {
            /* background: #ffffff; */
        }

        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 90%;
            margin: auto;
        }

        .gallery img {
            width: 300px;
            height: 300px;
        }

        .gallery a {
            height: 200px;
            width: 300px;
            margin: 20px;
            border-radius: 5px;
            overflow: hidden;
        }

        .gallery a img {
            height: 100%;
            width: 100%;
            object-fit: cover
        }

        .gallery a img:hover {
            transform: scale(1.4);
        }
    </style>
</head>

<body class="about-page sub-page">
    <!-- start preloader -->
    <div id="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- end preloader -->
    <?php include 'header.php';?>
    <!-- header-section -->
    <section class="gallery-title">
        <div class="container">
            <h2 class="title">Board of Directors</h2>
            <span class="sub-title">Home / Directors</span>
        </div>
    </section>
    <div class="gallery">
        <!-- <a href="assets/img/gallery/1.jpg">
            <img src="assets/img/gallery/1.jpg" alt="">
        </a> -->
        <a href="assets/img/gallery/2.jpg">
            <img src="assets/img/gallery/2.jpg" alt="">
        </a>
        <a href="assets/img/gallery/3.jpg">
            <img src="assets/img/gallery/3.jpg" alt="">
        </a>
        <a href="assets/img/gallery/4.jpg">
            <img src="assets/img/gallery/4.jpg" alt="">
        </a>
        <a href="assets/img/gallery/5.jpg">
            <img src="assets/img/gallery/5.jpg" alt="">
        </a>
        <a href="assets/img/gallery/6.jpg">
            <img src="assets/img/gallery/6.jpg" alt="">
        </a>
    </div>

    <!-- footer -->
    <?php include 'footer.php';?>
    <!-- /footer -->
    <div id="toTop" class="hidden-xs">
        <i class="fa fa-chevron-up"></i>
    </div> <!-- totop -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.inview.min.js"></script>
    <script src="assets/owl-carrosel/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- font-awesome-->
    <script src="https://kit.fontawesome.com/b4800cbf2d.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script>
        lightGallery(document.querySelector('.gallery'))
    </script>
</body>

</html>