<?php

session_start();
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
$alert = "<script type='text/javascript'>
        <!--
        location.replace('manage-register.php');
        -->
        </script>";

$register_id = 0;
if (isset($_GET['id']))
    $register_id = $_GET['id'];

$link = mysqli_connect("localhost", "root", "", "fithubdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");

$query = "SELECT *  FROM registers
WHERE registerid='$register_id'"; // کوئری گرفتن اطلاعات رجیستر
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

$query = "UPDATE classes  SET capacity=capacity+1 WHERE classid='{$row['classid']}' "; //کوئری افزودن یک مقدار به ظرفیت کلاس
$result = mysqli_query($link, $query);

$query = "DELETE  FROM registers
WHERE registerid='$register_id'"; // کوئری حذف رجیستر کلاس با کد خاص

if (mysqli_query($link, $query) === true) { //حذف موفق
    $_SESSION["alert"] = "SucDelet";
    echo ($alert);
    exit();
} else { //حذف ناموفق
    $_SESSION["alert"] = "FailDelet";
    echo ($alert);
    exit();
}