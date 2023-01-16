<?php
include('inc/header.php');

$link = mysqli_connect("localhost", "root", "", "fithubdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");

$class_id = 0;
if (isset($_GET['id']))
    $class_id = $_GET['id'];

$query = "SELECT * FROM classes WHERE classid='$class_id'";

$result = mysqli_query($link, $query);            //  اجراي کوئری گرفتن اطلاعات کلاس
if ($row = mysqli_fetch_array($result)) {
    $coach_id = $row['coachid'];
    $query_coach = "SELECT * FROM coaches WHERE coachid='$coach_id'";

    $result_coach = mysqli_query($link, $query_coach);            //  اجراي کوئری گرفتن اطلاعات مربی
    $row_coach = mysqli_fetch_array($result_coach);
?>
<!--Banner Start-->
<section class="main-inner-banner jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url(assets/images/class-detail-in-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-in-title">
                    <h1 class="h1-title">کلاس <?= $row['name'] ?></h1>
                </div>
                <div class="banner-breadcum">
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="classes.php">کلاس ها</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="class-detail.php?id=<?= $row['classid'] ?>"><?= $row['name'] ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner End-->

<!--Class Detail Start-->
<section class="main-class-detail">
    <div class="container">
        <div class="row">
            <!--Sidebar Start-->
            <div class="col-lg-4">

                <div class="join-class wow fadeInRight" data-wow-delay=".7s" id="counter">
                    <h3 class="h3-title">به کلاس <span></span> بپیوندید</h3>
                    <div class="line"></div>
                    <ul>
                        <li>
                            <div class="join-class-icon"><img src="assets/images/join-class1.png" alt="Icon"></div>
                            <div class="join-class-text"><span>نام کلاس:</span><span><?= $row['name'] ?></span></div>
                        </li>
                        <li>
                            <div class="join-class-icon"><img src="assets/images/join-class2.png" alt="Icon"></div>
                            <div class="join-class-text"><span>نام مربی:</span><span><?= $row_coach['name'] ?> </span>
                            </div>
                        </li>
                        <li>
                            <div class="join-class-icon"><img src="assets/images/join-class3.png" alt="Icon"></div>
                            <div class="join-class-text"><span>بازه زمانی
                                    :</span><span><?= $row['time_period'] ?></span></div>
                        </li>
                        <li>
                            <div class="join-class-icon"><img src="assets/images/join-class3.png" alt="Icon"></div>
                            <div class="join-class-text"><span>تعداد
                                    جلسات:</span><span><?= $row['session_number'] ?></span></div>
                        </li>
                        <li>
                            <div class="join-class-icon"><img src="assets/images/join-class3.png" alt="Icon"></div>
                            <div class="join-class-text"><span> ظرفیت:</span><span><?= $row['capacity'] ?></span></div>
                        </li>
                    </ul>
                    <div class="join-class-price">
                        <h4><?= $row['price'] ?> هزار تومان<span>/ماه</span></h4>
                    </div>
                    <?php
                        if ($row['capacity'] < 1) {
                        ?>
                    <a class="sec-btn dark-bg">ظرفیت تکمیل</a>

                    <?php

                        } else {
                        ?>
                    <a href="class-checkout.php?id=<?= $row['classid'] ?> " class="sec-btn">اکنون به کلاس بپیوندید</a>
                    <?php } ?>
                </div>
            </div>
            <!--Sidebar End-->
            <!--Class Detail Info Start-->
            <div class="col-lg-8">
                <div class="class-detail-content">
                    <div class="class-box-title">
                        <div class="class-box-icon">
                            <img src="assets/images/class-icon1.png" alt="Icon">
                        </div>
                        <h2 class="h2-title">کلاس <?= $row['name'] ?></h2>
                    </div>
                    <div class="class-trainer-review">
                        <div class="class-trainer">
                            <div class="class-trainer-img">
                                <img src="assets/images/<?= $row_coach['image'] ?> " class="rounded-circle"
                                    alt="trainer" width="50" height="50">
                            </div>
                            <div class="class-trainer-text">
                                <a href="team-detail.php"> <?= $row_coach['name'] ?> </a>
                                <span>مربی</span>
                            </div>
                        </div>
                    </div>
                    <div class="class-detail-img wow fadeInUp" data-wow-delay=".5s">
                        <img src="assets/images/<?= $row['image'] ?>" alt="Class Detail">
                    </div>
                    <p class="text-justify"><?= $row['description'] ?></p>

                    <div class="class-detail-trainer-box wow fadeInUp" data-wow-delay=".5s">
                        <div class="class-trainer-box-img">
                            <img src="assets/images/<?= $row_coach['image'] ?> " class="rounded-circle" alt="Trainer"
                                width="150" height="150">
                        </div>
                        <div class="class-trainer-box-text">
                            <a href="">
                                <h3 class="h3-title"><?= $row_coach['name'] ?> </h3>
                            </a>
                            <span>مربی شما</span>
                            <p><?= $row_coach['expertice'] ?> </p>
                        </div>
                    </div>
                    <div class="class-detail-time wow fadeInUp" data-wow-delay=".5s">
                        <h3 class="h3-title">زمان کلاس ها</h3>
                        <div class="line"></div>
                        <div class="class-detail-time-main-box">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="class-detail-time-box">
                                        <span><?= $row['days'] ?></span>
                                        <span><?= $row['hours'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Class Detail Info End-->
        </div>
    </div>
</section>
<!--Class Detail End-->
<?php
}
include('inc/footer.php')
?>