<?php
session_start();
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

$alert = "?>
<script type='text/javascript'>
<!--
window.history.back();
-->
</script>
<?php ";

//بررسی پر بودن فیلد ها
if (isset($_POST['ClassId']) && !empty(Trim($_POST['ClassId']))) {


    $UserName = $_SESSION['username'];
    $ClassId = $_POST['ClassId'];
    $Date = date("Y-m-d");

    $query = "SELECT * FROM users WHERE username='$UserName'";             // کوئری گرفتن آیدی کاربر
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $UserId = $row['userid'];
} else { // اگر فیلد ها خالی بودند
    $_SESSION["alert"] = "Empty"; //مشخص کردن خطای رخ داده
    echo ($alert);
    exit();
}





$query = "INSERT INTO `registers`(`classid`, `userid`, `date`) VALUES ('$ClassId','$UserId','$Date');";

if (mysqli_query($link, $query) === true) { //رزرو موفق
    $query = "UPDATE `classes` SET `capacity`=capacity-1 WHERE classid='$ClassId'";             // کوئری گرفتن آیدی کاربر
    $result = mysqli_query($link, $query);
?>
<script type="text/javascript">
location.replace("checkout-complete.php");
</script>
<?php
} else {
    $_SESSION["alert"] = "FailReserve";
    echo ($alert);
    exit();
}

mysqli_close($link); //بستن اتصال دیتابیس
?>