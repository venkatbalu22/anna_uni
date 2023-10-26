<!DOCTYPE html>
<html lang="en">

<head>
    <!-- --------------------------------------------------- -->
    <!-- Title -->
    <!-- --------------------------------------------------- -->
    <title>File View</title>

    <!-- --------------------------------------------------- -->
    <!-- Required Meta Tag -->
    <!-- --------------------------------------------------- -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- --------------------------------------------------- -->
    <!-- Favicon -->
    <!-- --------------------------------------------------- -->
    <link rel="shortcut icon" type="image/png" href="dist/images/logos/favicon.ico" />

    <!-- --------------------------------------------------- -->
    <!-- Prism Js -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="dist/libs/prismjs/themes/prism-okaidia.min.css">

    <!-- --------------------------------------------------- -->
    <!-- Core Css -->
    <!-- --------------------------------------------------- -->

    <link id="themeColors" rel="stylesheet" href="dist/css/style.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- --------------------------------------------------- -->
    <!-- Body Wrapper -->
    <!-- --------------------------------------------------- -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- --------------------------------------------------- -->
        <!-- Sidebar -->
        <!-- --------------------------------------------------- -->
        <?php include 'sidebar.php';?>

        <!-- --------------------------------------------------- -->
        <!-- Main Wrapper -->
        <!-- --------------------------------------------------- -->
        <div class="body-wrapper">
            <!-- --------------------------------------------------- -->
            <!-- Header Start -->
            <!-- --------------------------------------------------- -->
            <?php include 'header.php';?>
            <!-- --------------------------------------------------- -->
            <!-- Header End -->
            <!-- --------------------------------------------------- -->
            <div class="container-fluid">
                <!-- --------------------------------------------------- -->
                <!--  Form Basic Start -->
                <!-- --------------------------------------------------- -->
                <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                    <div class="card-body px-4 py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h4 class="fw-semibold mb-8">View File</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                                href="./index.html">Dashboard</a></li> -->
                                        <!-- <li class="breadcrumb-item" aria-current="page">View File</li> -->
                                    </ol>
                                </nav>
                            </div>

                            <div class="col-3">
                                <div class="text-center mb-n5">
                                    <img src="dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section>
                    <div class="row">
                        <div class="col-12">
                            <!-- ----------------------------------------- -->
                            <!-- 1. Basic Form -->
                            <!-- ----------------------------------------- -->
                            <!-- ---------------------
                                                    start Basic Form
                                                ---------------- -->
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h5 class="mb-3">Upload File</h5> -->

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>File Details</label>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" rows="5" spellcheck="false"
                                                    id="msg"></textarea>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">PDF Preview</h5>
                                            </div>

                                            <div class="card-body" id="previewArea">
                                                <!-- PDF Preview will be displayed here -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- <div class="card-header text-end">
                                    <button class="btn btn-success" type="submit" data-bs-original-title=""
                                        title="">Apporve</button>
                                    <button class="btn btn-danger" type="reset" data-bs-original-title=""
                                        title="">Disapprove</button>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </section>

                <!--  Mobilenavbar -->
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
                    aria-labelledby="offcanvasWithBothOptionsLabel">
                    <nav class="sidebar-nav scroll-sidebar">
                        <div class="offcanvas-header justify-content-between">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
                                alt="" class="img-fluid">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar="" data-simplebar>
                            <ul id="sidebarnav">
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                        <span>
                                            <i class="ti ti-apps"></i>
                                        </span>
                                        <span class="hide-menu">Apps</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level my-3">
                                        <li class="sidebar-item py-2">
                                            <a href="#" class="d-flex align-items-center">
                                                <div
                                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg"
                                                        alt="" class="img-fluid" width="24" height="24">
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                                    <span class="fs-2 d-block fw-normal text-muted">New messages
                                                        arrived</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="#" class="d-flex align-items-center">
                                                <div
                                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg"
                                                        alt="" class="img-fluid" width="24" height="24">
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                                    <span class="fs-2 d-block fw-normal text-muted">Get latest
                                                        invoice</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="#" class="d-flex align-items-center">
                                                <div
                                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg"
                                                        alt="" class="img-fluid" width="24" height="24">
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                                    <span class="fs-2 d-block fw-normal text-muted">2 Unsaved
                                                        Contacts</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="#" class="d-flex align-items-center">
                                                <div
                                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg"
                                                        alt="" class="img-fluid" width="24" height="24">
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                                    <span class="fs-2 d-block fw-normal text-muted">Get new
                                                        emails</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="#" class="d-flex align-items-center">
                                                <div
                                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg"
                                                        alt="" class="img-fluid" width="24" height="24">
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                                    <span class="fs-2 d-block fw-normal text-muted">learn more
                                                        information</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="#" class="d-flex align-items-center">
                                                <div
                                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg"
                                                        alt="" class="img-fluid" width="24" height="24">
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                                    <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="#" class="d-flex align-items-center">
                                                <div
                                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg"
                                                        alt="" class="img-fluid" width="24" height="24">
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                                    <span class="fs-2 d-block fw-normal text-muted">Add new
                                                        contact</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="#" class="d-flex align-items-center">
                                                <div
                                                    class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg"
                                                        alt="" class="img-fluid" width="24" height="24">
                                                </div>
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                                    <span class="fs-2 d-block fw-normal text-muted">To-do and Daily
                                                        tasks</span>
                                                </div>
                                            </a>
                                        </li>
                                        <ul class="px-8 mt-7 mb-4">
                                            <li class="sidebar-item mb-3">
                                                <h5 class="fs-5 fw-semibold">Quick Links</h5>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="#">Pricing Page</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="#">Authentication Design</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="#">Register Now</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="#">404 Error Page</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="#">Notes App</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="#">User Application</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="#">Account Settings</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
                                        <span>
                                            <i class="ti ti-message-dots"></i>
                                        </span>
                                        <span class="hide-menu">Chat</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="app-calendar.html" aria-expanded="false">
                                        <span>
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                        <span class="hide-menu">Calendar</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="app-email.html" aria-expanded="false">
                                        <span>
                                            <i class="ti ti-mail"></i>
                                        </span>
                                        <span class="hide-menu">Email</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <!--  Search Bar -->

                <!-- --------------------------------------------------- -->
                <!-- Customizer -->
                <!-- --------------------------------------------------- -->


                <div class="offcanvas offcanvas-end customizer" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel" data-simplebar="">
                    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                        <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">Settings</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body p-4">
                        <div class="theme-option pb-4">
                            <h6 class="fw-semibold fs-4 mb-1">Theme Option</h6>
                            <div class="d-flex align-items-center gap-3 my-3">
                                <a href="javascript:void(0)" onclick="toggleTheme('dist/css/style.min.css')"
                                    class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 light-theme text-dark">
                                    <i class="ti ti-brightness-up fs-7 text-primary"></i>
                                    <span class="text-dark">Light</span>
                                </a>
                                <a href="javascript:void(0)" onclick="toggleTheme('dist/css/style-dark.min.css')"
                                    class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 dark-theme text-dark">
                                    <i class="ti ti-moon fs-7 "></i>
                                    <span class="text-dark">Dark</span>
                                </a>
                            </div>
                        </div>
                        <div class="theme-direction pb-4">
                            <h6 class="fw-semibold fs-4 mb-1">Theme Direction</h6>
                            <div class="d-flex align-items-center gap-3 my-3">
                                <a href="index.html"
                                    class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                                    <i class="ti ti-text-direction-ltr fs-6 text-primary"></i>
                                    <span class="text-dark">LTR</span>
                                </a>
                                <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/rtl/index.html"
                                    class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                                    <i class="ti ti-text-direction-rtl fs-6 text-dark"></i>
                                    <span class="text-dark">RTL</span>
                                </a>
                            </div>
                        </div>
                        <div class="theme-colors pb-4">
                            <h6 class="fw-semibold fs-4 mb-1">Theme Colors</h6>
                            <div class="d-flex align-items-center gap-3 my-3">
                                <ul class="list-unstyled mb-0 d-flex gap-3 flex-wrap change-colors">
                                    <li
                                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                                        <a href="javascript:void(0)"
                                            class="rounded-circle position-relative d-block customizer-bgcolor skin1-bluetheme-primary active-theme "
                                            onclick="toggleTheme('dist/css/style.min.css')"
                                            data-color="blue_theme" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="BLUE_THEME"><i
                                                class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                                    </li>
                                    <li
                                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                                        <a href="javascript:void(0)"
                                            class="rounded-circle position-relative d-block customizer-bgcolor skin2-aquatheme-primary "
                                            onclick="toggleTheme('dist/css/style-aqua.min.css')"
                                            data-color="aqua_theme" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="AQUA_THEME"><i
                                                class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                                    </li>
                                    <li
                                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                                        <a href="javascript:void(0)"
                                            class="rounded-circle position-relative d-block customizer-bgcolor skin3-purpletheme-primary"
                                            onclick="toggleTheme('dist/css/style-purple.min.css')"
                                            data-color="purple_theme" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="PURPLE_THEME"><i
                                                class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                                    </li>
                                    <li
                                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                                        <a href="javascript:void(0)"
                                            class="rounded-circle position-relative d-block customizer-bgcolor skin4-greentheme-primary"
                                            onclick="toggleTheme('dist/css/style-green.min.css')"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="GREEN_THEME"><i
                                                class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                                    </li>
                                    <li
                                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                                        <a href="javascript:void(0)"
                                            class="rounded-circle position-relative d-block customizer-bgcolor skin5-cyantheme-primary"
                                            onclick="toggleTheme('dist/css/style-cyan.min.css')"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="CYAN_THEME"><i
                                                class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                                    </li>
                                    <li
                                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                                        <a href="javascript:void(0)"
                                            class="rounded-circle position-relative d-block customizer-bgcolor skin6-orangetheme-primary"
                                            onclick="toggleTheme('dist/css/style-orange.min.css')"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="ORANGE_THEME"><i
                                                class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="layout-type pb-4">
                            <h6 class="fw-semibold fs-4 mb-1">Layout Type</h6>
                            <div class="d-flex align-items-center gap-3 my-3">
                                <a href="index.html"
                                    class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                                    <i class="ti ti-layout-sidebar fs-6 text-primary"></i>
                                    <span class="text-dark">Vertical</span>
                                </a>
                                <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/horizontal/index.html"
                                    class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                                    <i class="ti ti-layout-navbar fs-6 text-dark"></i>
                                    <span class="text-dark">Horizontal</span>
                                </a>
                            </div>
                        </div>
                        <div class="container-option pb-4">
                            <h6 class="fw-semibold fs-4 mb-1">Container Option</h6>
                            <div class="d-flex align-items-center gap-3 my-3">
                                <a href="javascript:void(0)"
                                    class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 boxed-width text-dark">
                                    <i class="ti ti-layout-distribute-vertical fs-7 text-primary"></i>
                                    <span class="text-dark">Boxed</span>
                                </a>
                                <a href="javascript:void(0)"
                                    class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 full-width text-dark">
                                    <i class="ti ti-layout-distribute-horizontal fs-7"></i>
                                    <span class="text-dark">Full</span>
                                </a>
                            </div>
                        </div>
                        <div class="sidebar-type pb-4">
                            <h6 class="fw-semibold fs-4 mb-1">Sidebar Type</h6>
                            <div class="d-flex align-items-center gap-3 my-3">
                                <a href="javascript:void(0)"
                                    class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 fullsidebar">
                                    <i class="ti ti-layout-sidebar-right fs-7"></i>
                                    <span class="text-dark">Full</span>
                                </a>
                                <a href="javascript:void(0)"
                                    class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center text-dark sidebartoggler gap-2">
                                    <i class="ti ti-layout-sidebar fs-7"></i>
                                    <span class="text-dark">Collapse</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-with pb-4">
                            <h6 class="fw-semibold fs-4 mb-1">Card With</h6>
                            <div class="d-flex align-items-center gap-3 my-3">
                                <a href="javascript:void(0)"
                                    class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 text-dark cardborder">
                                    <i class="ti ti-border-outer fs-7"></i>
                                    <span class="text-dark">Border</span>
                                </a>
                                <a href="javascript:void(0)"
                                    class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 cardshadow">
                                    <i class="ti ti-border-none fs-7"></i>
                                    <span class="text-dark">Shadow</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ---------------------------------------------- -->
                <!-- Customizer -->
                <!-- ---------------------------------------------- -->

                <!-- ---------------------------------------------- -->
                <!-- Import Js Files -->
                <!-- ---------------------------------------------- -->
                <script src="dist/libs/jquery/dist/jquery.min.js"></script>
                <script src="dist/libs/simplebar/dist/simplebar.min.js"></script>
                <script src="dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

                <!-- ---------------------------------------------- -->
                <!-- core files -->
                <!-- ---------------------------------------------- -->
                <script src="dist/js/app.min.js"></script>
                <script src="dist/js/app.init.js"></script>
                <script src="dist/js/app-style-switcher.js"></script>
                <script src="dist/js/sidebarmenu.js"></script>

                <script src="dist/js/custom.js"></script>
                <script src="dist/libs/prismjs/prism.js"></script>

                <!-- ---------------------------------------------- -->
                <!-- current page js files -->
                <!-- ---------------------------------------------- -->
                <script>
                    $(document).ready(function(){

                    })
                </script>
</body>
</html>