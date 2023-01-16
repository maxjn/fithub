<?php
include('inc/header.php');
$link = mysqli_connect("localhost", "root", "", "fithubdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");
?>
<!--Banner Start-->
<section class="main-banner-two">
    <div class="banner-two-circle-one"></div>
    <div class="banner-two-circle-two"></div>
    <div class="banner-two-circle-three"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-title-two">
                    <div class="main-banner-subtitle-box wow fadeInUp" data-wow-delay=".5s">
                        <div class="banner-subtitle-box">
                            <div class="banner-subtitle-first">بهترین ها</div>
                            <div class="banner-subtitle-second">با فیت هاب</div>
                        </div>
                    </div>
                    <h1 class="h1-title wow fadeInUp" data-wow-delay=".7s"><span>تناسب اندام</span> ایده آل خود را شکل
                        دهید</h1>
                    <div class="banner-btn-two wow fadeInUp" data-wow-delay="1s">
                        <a href="index.php#bmi" class="sec-btn wow fadeInUp" data-wow-delay="1s">محاسبه BMI</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="main-banner-img-two wow fadeInLeft" data-wow-delay=".5s">
                    <img src="assets/images/banner-img-2.png" alt="Banner">
                    <div class="banner-img-circle-two animate-this">
                        <img src="assets/images/banner-img-circle-bg.png" alt="Circle">
                    </div>
                    <div class="heart-rate-two">
                        <div class="heart-icon">
                            <img src="assets/images/heart-rate-2.png" alt="Heart Rate">
                        </div>
                        <div class="heart-text">
                            <span>ضربان قلب</span>
                            <h3>100 bpm</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner End-->

<!--Features Start-->
<section class="main-features">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-box wow fadeInUp" data-wow-delay=".5s">
                    <span>01</span>
                    <div class="feature-icon">
                        <img src="assets/images/feature-1.png" alt="Icon">
                    </div>
                    <div class="feature-text">
                        <h3 class="h3-title">خدمات اختصاصی</h3>
                        <p> به روز ترین دستگاه های روز دنیا </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-box wow fadeInDown" data-wow-delay=".5s">
                    <span>02</span>
                    <div class="feature-icon">
                        <img src="assets/images/feature-2.png" alt="Icon">
                    </div>
                    <div class="feature-text">
                        <h3 class="h3-title">مربی واجد شرایط</h3>
                        <p>مربیان با مدارک بین المللی</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-box wow fadeInUp" data-wow-delay=".5s">
                    <span>03</span>
                    <div class="feature-icon">
                        <img src="assets/images/feature-3.png" alt="Icon">
                    </div>
                    <div class="feature-text">
                        <h3 class="h3-title">پروتئین های ارگانیک</h3>
                        <p>تناسب اندام با طبیعی ترین روش ها</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-box wow fadeInDown" data-wow-delay=".5s">
                    <span>04</span>
                    <div class="feature-icon">
                        <img src="assets/images/feature-4.png" alt="Icon">
                    </div>
                    <div class="feature-text">
                        <h3 class="h3-title">برنامه های جوایز</h3>
                        <p>اهدای جوایز به ورزشکاران منتخب </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Features End-->

<!--About Us Start-->
<section class="main-about-us-two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-two wow fadeInRight" data-wow-delay=".5s">
                    <img src="assets/images/about-img-two.png" alt="About Us">
                    <div class="about-img-bg-circle-two"></div>
                    <div class="about-client">
                        <div class="about-client-content">
                            <span>150k+ مشتری</span>
                            <img src="assets/images/about-client.png" alt="Clients">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-box two wow fadeInLeft" data-wow-delay=".5s">
                    <div class="about-us-title">
                        <div class="subtitle">
                            <h2 class="h2-subtitle">درباره ما</h2>
                        </div>
                        <h2 class="h2-title">به باشگاه تناسب اندام فیت هاب خوش آمدید</h2>
                    </div>
                    <p class="text-justify"> امروزه اهمیت ورزش کردن و داشتن فعالیتهای بدنی منظم روزانه و مستمر جهت حفظ
                        سلامت جسم و روان برای تمام افراد جامعه امری واجب و ضروری است. در زندگی ماشینی فعلی که ممکن است
                        زمان ، توان و حوصله کمتری برای پرداختن به ورزش داشته باشید، پیشنهاد می کنیم که خودتان را در
                        برنامه ورزشی منظم و حتی الامکان گروهی قرار دهید تا طبق برنامه ریزی و با گرفتن انرژی و انگیزه
                        ورزش از گروه یا تیم پیش بروید.</p>
                    <div class="points">
                        <ul>
                            <li>
                                <div class="point-object"></div>
                                <p>سالن مجهز بدنسازی</p>
                            </li>
                            <li>
                                <div class="point-object"></div>
                                <p>استودیو مخصوص یوگا و پیلاتس</p>
                            </li>
                            <li>
                                <div class="point-object"></div>
                                <p>
                                    دستگاه تناسب اندام </p>
                            </li>
                            <li>
                                <div class="point-object"></div>
                                <p>
                                    دکتر تعذیه</p>
                            </li>
                            <li>
                                <div class="point-object"></div>
                                <p>
                                    بوفه</p>
                            </li>
                            <li>
                                <div class="point-object"></div>
                                <p>پارکینگ اختصاص</p>
                            </li>
                        </ul>
                    </div>
                    <a href="classes.php" class="sec-btn">ثبت نام کلاس ها </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Us End-->

<!-- BMI Start -->
<section class="main-appointment-two" id="bmi">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="statics-contant wow fadeInRight" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                    <div class="statics-title">
                        <div class="subtitle">
                            <h2 class="h2-subtitle">محاسبه BMI</h2>
                        </div>
                        <h2 class="h2-title">BMI چیست؟</h2>
                    </div>
                    <p>بی ام آی مخفف Body Mass Index به معنای شاخص توده بدن میباشد. سنجشی آماری برای مقایسه وزن و قد یک
                        فرد است؛ ابزاری مناسب است تا سلامت وزن فرد براساس قد آن با توجه به معیارهای پزشکی تخمین بزند. و
                        در بسیاری موارد برای مشخص کردن اضافه وزن و یا کمبود وزن مورد استفاده می‌گردد. حالا میتوانید با
                        درج وزن و قد خود در زیر BMI خود را مشاهده نمایید .</p>
                    <div class="skill-content">
                        <div class="skill-progress">
                            <div class="skill-bar-box">
                                <h3 class="h3-title"> کمبود وزن</h3>
                                <div class="skill-bar-percent">
                                    <h3 class="h3-title counting-data" data-count="40">کمتر از</h3><span> 18.5</span>
                                </div>
                                <div class="skill-bar" data-width="40%">
                                    <div class="skill-bar-inner" style="width: 40.0002%; overflow: hidden;"></div>
                                </div>
                            </div>
                            <div class="skill-bar-box">
                                <h3 class="h3-title"> طبیعی</h3>
                                <div class="skill-bar-percent">
                                    <h3 class="h3-title counting-data" data-count="50">18.5 - </h3><span>24.9</span>
                                </div>
                                <div class="skill-bar" data-width="50%">
                                    <div class="skill-bar-inner" style="width: 50%; overflow: hidden;"></div>
                                </div>
                            </div>
                            <div class="skill-bar-box">
                                <h3 class="h3-title"> اضافه وزن</h3>
                                <div class="skill-bar-percent">
                                    <h3 class="h3-title counting-data" data-count="80">25 - </h3><span>29.9</span>
                                </div>
                                <div class="skill-bar" data-width="80%">
                                    <div class="skill-bar-inner" style="width: 80%; overflow: hidden;"></div>
                                </div>
                            </div>
                            <div class="skill-bar-box mb-0">
                                <h3 class="h3-title">چاقی</h3>
                                <div class="skill-bar-percent">
                                    <h3 class="h3-title counting-data" data-count="100">30</h3><span>به بالا</span>
                                </div>
                                <div class="skill-bar" data-width="100%">
                                    <div class="skill-bar-inner" style="width: 100%; overflow: hidden;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appointment-bg wow fadeInLeft" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <div class="appointment-title">
                        <h2 class="h2-title"> BMI شما <span id="bmi_show"></span></h2>
                        <div class="line"></div>
                    </div>
                    <form action="javascript:void(0);">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-box">
                                    <input type="number" name="height" step="0.01" class="form-input"
                                        placeholder="قد (متر)" required="">
                                </div>
                                <div class="form-box">
                                    <input type="number" name="weight" step="0.01" class="form-input"
                                        placeholder="وزن (کیلو)" required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-box mb-0">
                                    <button id="bmi_btn" class="sec-btn"><span> محاسبه</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BMI END -->

<!--Classes Start-->
<section class="main-classes-two">
    <div class="sec-circle-one"></div>
    <div class="sec-circle-two"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="classes-title two">
                    <div class="subtitle">
                        <h2 class="h2-subtitle">کلاس های ما</h2>
                    </div>
                    <h2 class="h2-title">کلاس های تناسب اندام برای هر هدف</h2>
                </div>
            </div>
        </div>
        <div class="row class-slider" id="counter">
            <?php
            $counter = 0;
            $query = "SELECT * FROM classes ORDER BY classid DESC";             // کوئری نمايش 5 کلاس آخر
            $result = mysqli_query($link, $query);            //  اجراي کوئری
            while ($row = mysqli_fetch_array($result)) {
                if ($counter < 5) {
                    $counter++;
            ?>
            <!-- Class Item Start -->
            <div class="col-lg-4">
                <div class="class-box wow fadeInUp" data-wow-delay=".5s">
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
                        <p><?php echo (substr($row['description'], 0, 230)) ?>...
                        </p>

                    </div>
                </div>
            </div>
            <!-- Class Item End -->
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<!--Classes End-->

<!--Team Start-->
<section class="main-team-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-title two">
                    <div class="subtitle">
                        <h2 class="h2-subtitle">مربیان برتر</h2>
                    </div>
                    <h2 class="h2-title">برترین مربیان باشگاه</h2>
                </div>
            </div>
        </div>
        <div class="row team-slider">
            <?php
            $counter = 0;
            $query = "SELECT * FROM coaches ORDER BY coachid DESC";             // کوئری نمايش مربی ها
            $result = mysqli_query($link, $query);            //  اجراي کوئری
            while ($row = mysqli_fetch_array($result)) {

            ?>
            <!-- Coach Itam Start -->
            <div class="col-lg-3">
                <div class="team-box wow fadeInUp" data-wow-delay=".5s">
                    <div class="team-img-box team-border-two">
                        <div class="team-img">
                            <img src="assets/images/<?php echo ($row['image']) ?>" alt="Trainer">
                        </div>
                    </div>
                    <div class="team-content">
                        <a href="team-detail.html">
                            <h3 class="h3-title"><?php echo ($row['name']) ?></h3>
                        </a>
                        <span>مربی <?php echo ($row['expertice']) ?></span>
                    </div>
                </div>
            </div>
            <!-- Coach Itam End -->
            <?php
            }

            ?>

        </div>
    </div>
</section>
<!--Team End-->

<!--Testimonial Start-->
<section class="main-testimonial-two">
    <div class="sec-circle-one"></div>
    <div class="sec-circle-two"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-title">
                    <div class="subtitle">
                        <h2 class="h2-subtitle">گواهینامه</h2>
                    </div>
                    <h2 class="h2-title">آنچه مشتریان ما می گویند</h2>
                </div>
            </div>
        </div>
        <div class="row testimonial-slider">
            <div class="col-lg-4">
                <div class="testimonial-box wow fadeInUp" data-wow-delay=".5s">
                    <div class="client-box">
                        <div class="client-img">
                            <img src="assets/images/trainer5.jpg" class="rounded-circle" alt="Client" width="62"
                                height="62">
                        </div>
                        <div class="client-name">
                            <h3 class="h3-title">سارا توکلی</h3>
                            <span>مشتری ما</span>
                        </div>
                    </div>
                    <p>بعد سالها با فیت هاب موفق شدم به اندام رویاییم و سلامتی برسم</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-box wow fadeInDown" data-wow-delay=".5s">
                    <div class="client-box">
                        <div class="client-img">
                            <img src="assets/images/trainer5.jpg" class="rounded-circle" alt="Client" width="62"
                                height="62">
                        </div>
                        <div class="client-name">
                            <h3 class="h3-title">شیما حسینی</h3>
                            <span>مشتری ما</span>
                        </div>
                    </div>
                    <p>مربیان بسیار با تجربه و مجرب هستند و دستگاه ها بسیار حرفه ای و به روز هستند.</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-box wow fadeInUp" data-wow-delay=".5s">
                    <div class="client-box">
                        <div class="client-img">
                            <img src="assets/images/trainer5.jpg" class="rounded-circle" alt="Client" width="62"
                                height="62">
                        </div>
                        <div class="client-name">
                            <h3 class="h3-title">سحر ده بزرگی</h3>
                            <span>مشتری ما</span>
                        </div>
                    </div>
                    <p>بدون فیت هاب نمیتونستم به اندام رویاییم و سلامتی برسمو نمیدونم چطوری ازتون تشکر کنم</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-box wow fadeInDown" data-wow-delay=".5s">
                    <div class="client-box">
                        <div class="client-img">
                            <img src="assets/images/trainer5.jpg" class="rounded-circle" alt="Client" width="62"
                                height="62">
                        </div>
                        <div class="client-name">
                            <h3 class="h3-title"> المیرا احمدی</h3>
                            <span>مشتری ما</span>
                        </div>
                    </div>
                    <p>باشگاهی با این همه امکانات به روز واقعا بی نظیره خیلی خوشحالم که اینجارو پیدا کردم</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial End-->


<?php
include('inc/footer.php');
?>