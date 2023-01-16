<?php
include('inc/header.php');
//وضعیت ورود کار بر را بررسی و در صورت وارد نشده بودن  به صفحه ورود هدایت می کند
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)) {
    $_SESSION["alert"] = "First";
?>
<script type='text/javascript'>
location.replace('login.php');
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
                    <h1 class="h1-title">ثبت نام موفق بود</h1>
                </div>
                <div class="banner-breadcum">
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="class-detail.php"> دوره ها</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="checkout-complete.php"> ثبت نام موفق</a></li>
                    </ul>
                </div>
                <div class="header-btn-two">
                    <a href="index.php" class="sec-btn"> بازگشت به صفحه اصلی</a>
                </div>
                <div class="header-btn-two">
                    <a href="classes.php" class="sec-btn"> بازگشت به دوره ها</a>
                </div>
                <div class="header-btn-two">
                    <a href="class-taken.php" class="sec-btn"> مشاهده کلاس های من </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner End-->

<?php
include('inc/footer.php')
?>