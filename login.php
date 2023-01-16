<?php
include('inc/header.php');
//وضعیت ورود کار بر را بررسی و در صورت ورود قبلی به صفحه اصلی هدایت می کند
if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
?>
<script type="text/javascript">
location.replace("index.php");
</script>

<?php
    exit();
}
?>
<!--Banner Start-->
<section class="main-inner-banner jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url(assets/images/class-detail-in-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-in-title">
                    <h1 class="h1-title">ورود</h1>
                </div>
                <div class="banner-breadcum">
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="login.php"> ورود</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner End-->

<!-- SignUp Start -->
<section class="main-appointment-two" id="bmi">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="appointment-bg wow fadeInLeft" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <div class="appointment-title">
                        <h2 class="h2-title"> ورود </h2>
                        <div class="line"></div>
                    </div>
                    <form id="login" method="post" action="action-login.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-box">
                                    <input type="text" name="UserName" class="form-input" placeholder="نام کاربری"
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box">
                                    <input type="password" name="Password" class="form-input" placeholder="رمز عبور "
                                        required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-box mb-0">
                                    <button type="submit" class="sec-btn"><span> ورود</span></button>
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