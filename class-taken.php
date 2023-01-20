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
$link = mysqli_connect("localhost", "root", "", "fithubdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");

$query = "SELECT * FROM users WHERE username='{$_SESSION['username']}' "; //کوئری گرفتن اطلاعات کاربر
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

$query = "SELECT * FROM registers WHERE userid='{$row['userid']}' ORDER BY registerId DESC "; // کوئری گرفتن کلاس های ثبت نامی کاربر
$result = mysqli_query($link, $query);
?>
<!--Banner Start-->
<section class="main-inner-banner jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url(assets/images/class-detail-in-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-in-title">
                    <h1 class="h1-title"> کلاس های من</h1>
                </div>
                <div class="banner-breadcum">
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="class-taken.php"> کلاس های من </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner End-->


<!-- Table Start -->
<section class="main-appointment-two" id="bmi">
    <div class="container">

        <div class="d-flex mb-4">
            <div class="point-object"></div>
            <p>برای اطلاعات بیشتر راجب کلاس های خود و ارتباط با مربی با شماره مربی خود تماس بگیرید.</p>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">کد دوره</th>
                    <th scope="col">نام دوره</th>
                    <th scope="col">کد مربی</th>
                    <th scope="col"> نام مربی </th>
                    <th scope="col"> تلفن مربی </th>
                    <th scope="col">تاریخ ثبت نام</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //حلقه نمایش کلاس ها

                while ($row = mysqli_fetch_array($result)) {
                    //کوئری گرفتن اطلاعات کلاس
                    $query_class = "SELECT * FROM classes WHERE classid='{$row['classid']}' ";
                    $result_class = mysqli_query($link, $query_class);
                    $row_class = mysqli_fetch_array($result_class);

                    //کوئری گرفتن اطلاعات مربی
                    $query_choach = "SELECT * FROM coaches WHERE coachid='{$row_class['coachid']}' ";
                    $result_choach = mysqli_query($link, $query_choach);
                    $row_choach = mysqli_fetch_array($result_choach);
                ?>
                <tr>
                    <th scope="row"> <?= $row['registerid'] ?></th>
                    <td><?= $row_class['classid'] ?></td>
                    <td><?= $row_class['name'] ?></td>
                    <td><?= $row_choach['coachid'] ?> </td>
                    <td><?= $row_choach['name'] ?></td>
                    <td><?= $row_choach['phone'] ?> </td>
                    <td><?= $row['date'] ?> </td>

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