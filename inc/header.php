<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <title>Fithub</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="Fithub" />
    <meta name="description" content="Fithub" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- FavIcon CSS -->
    <link rel="icon" href="assets/images/favicon.png" type="image/gif" sizes="16x16">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!--Font Awesome Icon CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- Wow Animation CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.min.css">

    <!-- Main Style CSS  -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Alert CSS  -->
    <link rel="stylesheet" type="text/css" href="assets/css/stylealert.css">
</head>

<body>

    <!-- Loader Start -->
    <div class="loader-box">
        <div class="loader-text">
            <span class="let1">L</span>
            <span class="let2">o</span>
            <span class="let3">a</span>
            <span class="let4">d</span>
            <span class="let5">i</span>
            <span class="let6">n</span>
            <span class="let7">g</span>
            <span class="let8">.</span>
            <span class="let9">.</span>
            <span class="let10">.</span>
        </div>
    </div>
    <!-- Loader End -->

    <!-- Header Start -->
    <header class="site-header">
        <!--Navbar Start  -->
        <div class="header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <!-- Sit Logo Start -->
                        <div class="site-branding">
                            <a href="index.html" title="Fithub">
                                <img src="assets/images/logo_stickey.png" alt="Logo">
                                <img src="assets/images/logo_stickey.png" class="sticky-logo" alt="Logo">
                            </a>
                        </div>
                        <!-- Sit Logo End -->
                    </div>
                    <div class="col-lg-10">
                        <div class="header-menu">
                            <!-- Menu Start -->
                            <nav class="main-navigation two">
                                <button class="toggle-button">
                                    <span></span>
                                    <span class="toggle-width"></span>
                                    <span></span>
                                </button>
                                <div class="mobile-menu-box">
                                    <i class="menu-background top"></i>
                                    <i class="menu-background middle"></i>
                                    <i class="menu-background bottom"></i>
                                    <ul class="menu">
                                        <li class=" active">
                                            <a href="index.php" title="Home">صفحه اصلی</a>
                                        </li>
                                        <li> <a href="classes.php" title="Classes">کلاس ها</a></li>


                                        <?php //بررسی وضعیت ورود کاربر
                                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {

                                            //اگر مدیر بود
                                            if ($_SESSION["user_type"] == "admin") {
                                        ?>
                                        <li class="sub-items">
                                            <a href="javascript:void(0);" title="َManagement">مدیریت</a>
                                            <ul class="sub-menu">
                                                <li><a href="manage-class.php" title="Class Management">مدیریت کلاس
                                                        ها</a></li>
                                                <li><a href="manage-register.php" title="Class Registers">مدیریت ثبت
                                                        نام
                                                        ها</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php } ?>

                                        <li class="sub-items">
                                            <a href="javascript:void(0);" title="User">
                                                <?php echo ($_SESSION["name"]) ?> </a>
                                            <ul class="sub-menu">
                                                <li><a href="class-taken.php" title="My Classes">کلاس های من</a>
                                                </li>
                                                <li><a href="logout.php" title="Logout">خروج
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php } else { //اگر کاربر خارج بود
                                        ?>

                                        <li> <a href="signup.php" title="Sign Up">ثبت نام</a></li>
                                        <li>|</li>
                                        <li> <a href="login.php" title="Log in"> ورود</a></li>

                                        <?php  } ?>


                                    </ul>
                                </div>
                            </nav>
                            <!-- Menu End -->

                            <div class="header-search-box two">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#search-modal"
                                    class="header-search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="black-shadow"></div>
                            <div class="header-btn-two">
                                <a href="index.php#bmi" class="sec-btn">محاسبه BMI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Navbar End  -->
    </header>
    <!-- Header End -->