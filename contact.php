<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themexriver.com/education/full-width/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 07:49:03 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contact us</title>
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
    <!-- offcanvas-menu-css -->
    <link href="assets/css/offcanvas-menu.css" rel="stylesheet" type="text/css">
    <!-- style-css -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>

<body class="contact-page sub-page">
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


    <!-- header-section -->
    <?php include 'header.php';?>
    <!--/ header-section -->


    <section class="header-title">
        <div class="container">
            <h2 class="title">Contact Us</h2>
            <span class="sub-title">Home / Contact</span>
        </div>
    </section> <!-- header-title -->



    <section class="contact-section section-padding">
        <div class="container text-center">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>We are happy to hear from you,.Write your Requirements to EDII – Anna Business Incubation Research
                    Foundatio</p>
            </div> <!-- section-title -->

            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="contact-wrapper">
                            <span class="caption"><img src="assets/images/contact/i1.png" alt=""></span>
                            <h4>Address</h4>
                            <span class="contact">EDII – Anna Business Incubation Research Foundation. <br>University
                                College of Engineering,<br>Trichy – 620024.</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="contact-wrapper">
                            <span class="caption"><img src="assets/images/contact/i2.png" alt=""></span>
                            <h4>Email</h4>
                            <span class="contact"> support@annaincubatortrichy.com</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="contact-wrapper">
                            <span class="caption"><img src="assets/images/contact/i3.png" alt=""></span>
                            <h4>Phone</h4>
                            <span class="contact"> +91 0431-2407946</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section -->
    <div class="container">
        <div class="form-section">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>Leave Us a Message</h2>
                        <hr>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="domainSearchBar form-control" id="email" placeholder="Email address"
                                    name="email" type="email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" placeholder="Write here.." id="msg" rows="6"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-primary subscribeBtn" id="submit" type="submit">submit</button>
                    </div>
                </div>
            </div>
        </div> <!-- mail-section -->
    </div>
    <!-- map-section -->
    <!-- footer -->
    <?php include 'footer.php';?>

    <!-- footer -->
    <!-- Off-Canvas View Only -->

    <div id="toTop" class="hidden-xs">
        <i class="fa fa-chevron-up"></i>
    </div> <!-- totop -->


    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="assets/js/script.js"></script>
    <!-- font-awesome-->
    <script src="https://kit.fontawesome.com/b4800cbf2d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        jQuery(document).ready(function () {
            jQuery('#submit').click(function () {
                var name = jQuery('#name').val();
                var email = jQuery('#email').val();
                var subject = jQuery('#subject').val();
                var message = jQuery('#msg').val();

                console.log(name);
                if (name == '') {
                    toastr.warning('Enter name');
                } else if (email == '') {
                    toastr.warning('Enter email');
                } else if (subject == '') {
                    toastr.warning('Enter subject');
                } else if (message == '') {
                    toastr.warning('Enter message');
                } else {
                    var fd = new FormData();

                    fd.append('name', name);
                    fd.append('email', email);
                    fd.append('subject', subject);
                    fd.append('message', message);

                    jQuery.ajax({
                        url: 'ajax/email.php',
                        method: 'post',
                        contentType: false,
                        processData: false,
                        data: fd,

                        success: function (response) {
                            var result = JSON.parse(response);

                            if (result.status == 'Success') {
                                toastr.success('Email sent', 'Success');
                            } else {
                                toastr.error('Error sending mail', 'Error');
                            }
                        }
                    })
                }
            });
        });
    </script>
</body>

</html>