<?php
include('inc/header.php');
//بررسی مدیر بودن کاربر وارد شده
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] ==
    "admin")) {
?>
<script type="text/javascript">
//انتقال به صفحه اصلی

location.replace("index.php");
</script>
<?php
} // if پایان

$link = mysqli_connect("localhost", "root", "", "fithubdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");

$url = $class_id = $coachid = $name = $description = $image = $time_period = $session_number = $days = $hours = $capacity = $price = "";
// اکشن دکمه ویرایش
$btn_caption = "افزودن";
if (isset($_GET['action']) && $_GET['action'] == 'EDIT') {
    $id = $_GET['id'];
    $query = "SELECT * FROM classes WHERE classid='$id'";
    $result = mysqli_query($link, $query);
    if ($row = mysqli_fetch_array($result)) {
        $class_id = $row['classid'];
        $coachid = $row['coachid'];
        $name = $row['name'];
        $description = $row['description'];
        $image = $row['image'];
        $capacity = $row['capacity'];
        $time_period = $row['time_period'];
        $session_number = $row['session_number'];
        $days = $row['days'];
        $hours = $row['hours'];
        $price = $row['price'];
        $url = "?id=$class_id&action=EDIT";
        $btn_caption = "ويرايش";
    }
}

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
                        <li><a href="manage-class.php"> مدیریت کلاس ها</a></li>
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
                    <form action="action-manage-class.php<?php if (!empty($url)) echo ($url); ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="ClassId" class="form-input" placeholder="کد "
                                        value="<?= $class_id ?>" style="background-color: rgba(169,169,169,0.75)"
                                        readonly="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="Name" class="form-input" placeholder="نام  "
                                        value="<?= $name ?>" required="">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="CoachId" class="form-input" placeholder="کد مربی "
                                        value="<?= $coachid ?>" required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="TimePeriod" class="form-input" placeholder="بازه زمانی  "
                                        value="<?= $time_period ?>" required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="SessionNumber" class="form-input"
                                        placeholder="تعداد جلسات   " value="<?= $session_number ?>" required="">
                                </div>
                            </div>


                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="number" name="Price" class="form-input" placeholder=" هزینه   "
                                        value="<?= $price ?>" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-box">
                                    <input type="text" name="Days" class="form-input" placeholder="روز ها   "
                                        value="<?= $days ?>" required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="text" name="Hours" class="form-input" placeholder="ساعت ها   "
                                        value="<?= $hours ?>" required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-box">
                                    <input type="number" name="Capacity" class="form-input" placeholder="ظرفیت    "
                                        value="<?= $capacity ?>" required="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-box">
                                    <input type="file" name="Image" class="form-input" placeholder="  تصویر  "
                                        value="<?= $image ?>">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-box">
                                    <textarea class="form-input" name="Description" rows="10" cols="50"
                                        placeholder="متن توضیحات ..."><?= $description ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-box">
                                    <div class="class-img">
                                        <img src="assets/images/<?= $image ?>" alt="Class">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="form-box mb-0">
                                <button type="submit" class="sec-btn"><span><?= $btn_caption ?></span></button>
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
                    <th scope="col"> کد مربی</th>
                    <th scope="col">بازه زمانی </th>
                    <th scope="col"> جلسات </th>
                    <th scope="col">روز ها </th>
                    <th scope="col"> ساعت ها </th>
                    <th scope="col"> هزینه </th>
                    <th scope="col"> ظرفیت </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM classes ORDER BY classid DESC"; // کوئری نمايش کلاس ها
                $result = mysqli_query($link, $query); //اجرا کوئری

                while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <th scope="row"><?= $row['classid'] ?></th>
                    <td>
                        <img src="assets/images/<?= $row['image'] ?> " class="rounded-circle" alt="class" width="50"
                            height="50">

                    </td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['coachid'] ?> </td>
                    <td><?= $row['time_period'] ?> </td>
                    <td><?= $row['session_number'] ?></td>
                    <td> <?= $row['days'] ?></td>
                    <td> <?= $row['hours'] ?></td>
                    <td><?= $row['price'] ?> هزار تومان</td>
                    <td><?= $row['capacity'] ?></td>
                    <td>
                        <a href="action-manage-class.php?id=<?= $row['classid'] ?>&action=DELETE">حذف</a>
                        |
                        <a href="manage-class.php?id=<?= $row['classid'] ?>&action=EDIT">ویرایش</a>
                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</section>
<!-- Table End -->


<?php
include('inc/footer.php')
?>