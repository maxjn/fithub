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
                    <h1 class="h1-title">مدیریت کلاس ها</h1>
                </div>
                <div class="banner-breadcum">
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="class-detail.php"> مدیریت کلاس ها</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner End-->

<!-- Form Start -->
<section class="main-appointment-two" id="bmi">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="appointment-bg wow fadeInLeft" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <div class="appointment-title">
                        <h2 class="h2-title"> مدیریت کلاس ها </h2>
                        <div class="line"></div>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="Full Name" class="form-input" placeholder="کد "
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="Full Name" class="form-input" placeholder="نام  "
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-box">
                                    <textarea class="form-input" placeholder="متن توضیحات ..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="Full Name" class="form-input" placeholder="کد مربی "
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="Full Name" class="form-input" placeholder="بازه زمانی  "
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="Full Name" class="form-input" placeholder="تعداد جلسات   "
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="Full Name" class="form-input" placeholder="روز ها   "
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="Full Name" class="form-input" placeholder="ساعت ها   "
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="number" name="Full Name" class="form-input" placeholder=" هزینه   "
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="number" name="Full Name" class="form-input" placeholder="ظرفیت    "
                                        required="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-box">
                                    <input type="file" name="Full Name" class="form-input" placeholder="  تصویر  "
                                        required="">
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="form-box mb-0">
                                <button type="submit" class="sec-btn"><span> مدیریت کلاس ها</span></button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Form End -->

<!-- Table Start -->
<section class="main-appointment-two" id="bmi">
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">تصویر</th>
                    <th scope="col">نام</th>
                    <th scope="col">توضیحات</th>
                    <th scope="col"> کد مربی</th>
                    <th scope="col"> جلسات </th>
                    <th scope="col">بازه زمانی </th>
                    <th scope="col">روز ها </th>
                    <th scope="col"> ساعت ها </th>
                    <th scope="col"> هزینه </th>
                    <th scope="col"> ظرفیت </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>وزنه برداری</td>
                    <td>متن توضیحات</td>
                    <td>2 </td>
                    <td>12</td>
                    <td>1 ماه </td>
                    <td> روز های فرد</td>
                    <td> 8:00 - 9:00 ق.ظ</td>
                    <td>500,000</td>
                    <td>30</td>
                    <td>
                        <a href="#">حذف</a>
                        |
                        <a href="#">ویرایش</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
</section>
<!-- Table End -->


<?php
include('inc/footer.php')
?>