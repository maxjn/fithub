<?php
include('inc/header.php')
?>
<!--Banner Start-->
<section class="main-inner-banner jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url(assets/images/class-detail-in-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-in-title">
                    <h1 class="h1-title">ثبت نام دوره</h1>
                </div>
                <div class="banner-breadcum">
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="class-detail.php"> دوره ها</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="class-detail.php"> ثبت نام دوره</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner End-->

<!-- SignUp Start -->
<section class="main-appointment-two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="appointment-bg wow fadeInLeft" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <div class="appointment-title">
                        <h2 class="h2-title"> ثبت نام دوره </h2>
                        <div class="line"></div>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="Full Name" class="form-input" placeholder=" کد دوره"
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-box">
                                    <input type="password" name="Full Name" class="form-input" placeholder="نام دوره "
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="Full Name" class="form-input" placeholder=" کد مربی"
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-box">
                                    <input type="password" name="Full Name" class="form-input" placeholder="نام مربی "
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="Full Name" class="form-input" placeholder="  نام کاربری"
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-box">
                                    <input type="password" name="Full Name" class="form-input" placeholder="نام کاربر "
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-box">
                                    <input type="password" name="Full Name" class="form-input"
                                        placeholder="مبلغ ثبت نام  " required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-box mb-0">
                                    <button type="submit" class="sec-btn"><span> پرداخت </span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SignUp End -->

<?php
include('inc/footer.php')
?>