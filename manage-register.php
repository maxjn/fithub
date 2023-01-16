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

$query = "SELECT * FROM registers ORDER BY registerId DESC "; // کوئری گرفتن کلاس های ثبت نامی کاربران
$result = mysqli_query($link, $query);
?>
<!--Banner Start-->
<section class="main-inner-banner jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url(assets/images/class-detail-in-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-in-title">
                    <h1 class="h1-title">مدیریت ثبت نامی ها</h1>
                </div>
                <div class="banner-breadcum">
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><a href="manage-register.php"> مدیریت ثبت نامی ها</a></li>
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
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">کد دوره</th>
                    <th scope="col">نام دوره</th>
                    <th scope="col">کد مربی</th>
                    <th scope="col"> نام مربی </th>
                    <th scope="col"> نام کاربری </th>
                    <th scope="col">نام کاربر </th>
                    <th scope="col"> تاریخ ثبت نام </th>
                    <th scope="col"> </th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {

                    $query_user = "SELECT * FROM users WHERE userid='{$row['userid']}' "; // کوئری گرفتن اطلاعات کاربر
                    $result_user = mysqli_query($link, $query_user);
                    $row_user = mysqli_fetch_array($result_user);

                    $query_class = "SELECT * FROM classes WHERE classid='{$row['classid']}' "; // کوئری گرفتن اطلاعات کلاس
                    $result_class = mysqli_query($link, $query_class);
                    $row_class = mysqli_fetch_array($result_class);

                    $query_coach = "SELECT * FROM coaches WHERE coachid='{$row_class['coachid']}' "; // کوئری گرفتن اطلاعات مربی
                    $result_coach = mysqli_query($link, $query_coach);
                    $row_coach = mysqli_fetch_array($result_coach);
                ?>
                <tr>
                    <th scope="row"><?= $row['registerid'] ?></th>
                    <td><?= $row_class['classid'] ?></td>
                    <td><?= $row_class['name'] ?></td>
                    <td><?= $row_coach['coachid'] ?></td>
                    <td><?= $row_coach['name'] ?></td>
                    <td><?= $row_user['userid'] ?> </td>
                    <td><?= $row_user['name'] ?> </td>
                    <td><?= $row['date'] ?></td>
                    <td>
                        <a href="action-manage-register.php?id=<?= $row['registerid'] ?>">لغو</a>
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