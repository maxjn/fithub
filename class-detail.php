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
                    <h1 class="h1-title">کلاس وزنه برداری</h1>
                </div>
                <div class="banner-breadcum">
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="classes.php">کلاس ها</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="class-detail.php">وزنه برداری</a></li>
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
                    <h3 class="h3-title">به کلاس <span>وزنه برداری</span> بپیوندید</h3>
                    <div class="line"></div>
                    <ul>
                        <li>
                            <div class="join-class-icon"><img src="assets/images/join-class1.png" alt="Icon"></div>
                            <div class="join-class-text"><span>خدمات:</span><span>وزنه برداری</span></div>
                        </li>
                        <li>
                            <div class="join-class-icon"><img src="assets/images/join-class2.png" alt="Icon"></div>
                            <div class="join-class-text"><span>آموزش:</span><span>مربی شخصی</span></div>
                        </li>
                        <li>
                            <div class="join-class-icon"><img src="assets/images/join-class3.png" alt="Icon"></div>
                            <div class="join-class-text"><span>بازه زمانی :</span><span>1 ماه</span></div>
                        </li>
                        <li>
                            <div class="join-class-icon"><img src="assets/images/join-class3.png" alt="Icon"></div>
                            <div class="join-class-text"><span>تعداد جلسات:</span><span>12</span></div>
                        </li>
                        <li>
                            <div class="join-class-icon"><img src="assets/images/join-class3.png" alt="Icon"></div>
                            <div class="join-class-text"><span> ظرفیت:</span><span>30</span></div>
                        </li>
                    </ul>
                    <div class="join-class-price">
                        <h4>50 تومان<span>/ماه</span></h4>
                    </div>
                    <a href="class-checkout.php" class="sec-btn">اکنون به کلاس بپیوندید</a>
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
                        <h2 class="h2-title">کلاس های وزنه برداری</h2>
                    </div>
                    <div class="class-trainer-review">
                        <div class="class-trainer">
                            <div class="class-trainer-img">
                                <img src="assets/images/trainer5.jpg" class="rounded-circle" alt="trainer" width="50"
                                    height="50">
                            </div>
                            <div class="class-trainer-text">
                                <a href="team-detail.php">سارا محمدی</a>
                                <span>مربی</span>
                            </div>
                        </div>
                    </div>
                    <div class="class-detail-img wow fadeInUp" data-wow-delay=".5s">
                        <img src="assets/images/class-detail-img1.jpg" alt="Class Detail">
                    </div>
                    <p class="text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                        طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای
                        شرایط فسارا تکنولوژی مورد نیاز، و .</p>

                    <div class="class-detail-trainer-box wow fadeInUp" data-wow-delay=".5s">
                        <div class="class-trainer-box-img">
                            <img src="assets/images/trainer5.jpg" class="rounded-circle" alt="Trainer">
                        </div>
                        <div class="class-trainer-box-text">
                            <a href="team-detail.php">
                                <h3 class="h3-title">سارا محمدی</h3>
                            </a>
                            <span>مربی شما</span>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                                است، .</p>
                            <a href="team-detail.php" class="sec-btn-link">بیشتر بخوانید</a>
                        </div>
                    </div>
                    <div class="class-detail-time wow fadeInUp" data-wow-delay=".5s">
                        <h3 class="h3-title">زمان کلاس ها</h3>
                        <div class="line"></div>
                        <div class="class-detail-time-main-box">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="class-detail-time-box">
                                        <span>روز های فرد</span>
                                        <span>8:00 - 9:00 ق.ظ</span>
                                        <span>سارا محمدی</span>
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
include('inc/footer.php')
?>