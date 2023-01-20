<?php
include('inc/header.php');
$link = mysqli_connect("localhost", "root", "", "fithubdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");

$class_id = 0;
if (isset($_GET['id'])) //گرفتن آیدی از داخل لینک
    $class_id = $_GET['id'];
//بررسی وارد شده بودن کاربر. اگر کاربر وارد نشده بود به لاگین منتقل شود
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) || $class_id == 0) {
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
                    <h1 class="h1-title">ثبت نام دوره</h1>
                </div>
                <div class="banner-breadcum">
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="class-detail.php"> دوره ها</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="class-checkout.php?id=<?= $class_id ?>"> ثبت نام دوره</a></li>
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
                    <form action="payment.php" method="post">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="ClassId" class="form-input" placeholder=" کد دوره"
                                        value="<?= $class_id ?>" style="background-color: rgba(169,169,169,0.75)"
                                        readonly>
                                </div>
                            </div>

                            <?php
                            $query = "SELECT * FROM classes WHERE classid='$class_id'";

                            $result = mysqli_query($link, $query);            //  اجراي کوئری
                            $row = mysqli_fetch_array($result);
                            ?>
                            <div class="col-md-4">
                                <div class="form-box">
                                    <input type="text" name="" class="form-input" placeholder="نام دوره "
                                        value="<?= $row['name'] ?>" style="background-color: rgba(169,169,169,0.75)"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="UserName" class="form-input" placeholder="نام کاربری"
                                        value="<?= $_SESSION['username'] ?>"
                                        style="background-color: rgba(169,169,169,0.75)" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-box">
                                    <input type="number" name="Price" class="form-input" placeholder="مبلغ  پرداختی  "
                                        value="<?= $row['price'] ?>" style="background-color: rgba(169,169,169,0.75)"
                                        readonly>
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