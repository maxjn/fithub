<?php
include('inc/header.php');
$link = mysqli_connect("localhost", "root", "", "fithubdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");

$query = "SELECT * FROM classes ORDER BY classid DESC";             // کوئری نمايش تمام کلاس
if (isset($_POST['search']) && !empty(Trim($_POST['search'])))
    $query = "SELECT * FROM classes WHERE name LIKE N'%{$_POST['search']}%'"; //کوئری جستجو

$result = mysqli_query($link, $query);            //  اجراي کوئری
?>
<!--Banner Start-->
<section class="main-inner-banner jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url(assets/images/classes-in-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-in-title">
                    <h1 class="h1-title">کلاس های ما</h1>
                </div>
                <div class="banner-breadcum">
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="classes.php">کلاس ها</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner End-->

<!-- Classes Start -->
<section class="main-classes-in">
    <div class="container">
        <div class="row" id="counter">
            <?php

            while ($row = mysqli_fetch_array($result)) {

            ?>
            <!-- Class Item Start -->
            <div class="col-lg-4 col-md-6">
                <div class="class-box wow fadeInUp" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="class-img">
                        <img src="assets/images/<?php echo ($row['image']) ?>" alt="Class">
                    </div>
                    <div class="class-box-contant">
                        <div class="class-box-title">
                            <div class="class-box-icon">
                                <img src="assets/images/class-icon1.png" alt="Icon">
                            </div>
                            <a href="class-detail.php?id=<?php echo ($row['classid']) ?>">
                                <h3 class="h3-title">کلاس<br><?php echo ($row['name']) ?></h3>
                            </a>
                        </div>
                        <p class="text-justify"><?php echo (substr($row['description'], 0, 230)) ?>...</p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- Classes End -->

<?php
include('inc/footer.php')
?>