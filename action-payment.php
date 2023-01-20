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
if (
    isset($_POST['ClassId']) && !empty(Trim($_POST['ClassId'])) &&
    isset($_POST['Price']) && !empty(Trim($_POST['Price'])) &&
    isset($_POST['Name']) && !empty(Trim($_POST['Name'])) &&
    isset($_POST['Number']) && !empty(Trim($_POST['Number'])) &&
    isset($_POST['Cvv']) && !empty(Trim($_POST['Cvv'])) &&
    isset($_POST['ExpirDate']) && !empty(Trim($_POST['ExpirDate']))
) {


    $UserName = $_SESSION['username'];
    $ClassId = $_POST['ClassId'];
    $Price = $_POST['Price'];
    $Name = $_POST['Name'];
    $Number = $_POST['Number'];
    $Cvv = $_POST['Cvv'];
    $ExpirDate = $_POST['ExpirDate'];
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



//کوئری پرداخت
$query_payment = "INSERT INTO `payments`( `name`, `number`, `cvv`, `expiredate`, `money`)
VALUES ('$Name','$Number','$Cvv','$ExpirDate','$Price')";

if (mysqli_query($link, $query_payment) === true) { //پرداخت و رزرو موفق

    $query_last = "SELECT Max(paymentid) FROM payments";
    $result_last = mysqli_query($link, $query_last);
    $row_last = mysqli_fetch_array($result_last);

    $PaymentId = $row_last['Max(paymentid)'];

    $query_register = "INSERT INTO `registers`(`classid`, `userid`, `paymentid`, `date`) VALUES ('$ClassId','$UserId','$PaymentId','$Date');";
    $result_register = mysqli_query($link, $query_register);

    $query_class = "UPDATE `classes` SET `capacity`=capacity-1 WHERE classid='$ClassId'";             // کوئری   کم کردن ظرفیت کلاس
    $result_class = mysqli_query($link, $query_class);

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