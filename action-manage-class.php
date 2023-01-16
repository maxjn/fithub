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
        location.replace('manage-class.php');
        -->
        </script>";

//بررسي پر بودن فیلد ها در صورتی که اکشن حذف نبود
if (!(isset($_GET['action']) && $_GET['action'] == 'DELETE')) {

    if ((isset($_POST['Name']) && !empty(Trim($_POST['Name'])) &&
        isset($_POST['CoachId']) && !empty(Trim($_POST['CoachId'])) &&
        isset($_POST['TimePeriod']) && !empty(Trim($_POST['TimePeriod'])) &&
        isset($_POST['SessionNumber']) && !empty(Trim($_POST['SessionNumber'])) &&
        isset($_POST['Price']) && !empty(Trim($_POST['Price'])) &&
        isset($_POST['Days']) && !empty(Trim($_POST['Days'])) &&
        isset($_POST['Hours']) && !empty(Trim($_POST['Hours'])) &&
        isset($_POST['Capacity']) && !empty(Trim($_POST['Capacity'])) &&
        isset($_POST['Description']) && !empty(Trim($_POST['Description']))
    )) {
        // ذخيره اطلاعاتي
        $ClassId = $_POST['ClassId'];
        $Name = $_POST['Name'];
        $CoachId = $_POST['CoachId'];
        $TimePeriod = $_POST['TimePeriod'];
        $SessionNumber = $_POST['SessionNumber'];
        $Price = $_POST['Price'];
        $Days = $_POST['Days'];
        $Hours = $_POST['Hours'];
        $Capacity = $_POST['Capacity'];
        $Description = $_POST['Description'];
        $Picture = basename($_FILES["Image"]["name"]);
    } else { // خروج و تعین خطای آن به دلیل خالی بودن فیلد
        $_SESSION["alert"] = "Empty";
        echo ($alert);
        exit();
    }
}


$link = mysqli_connect("localhost", "root", "", "fithubdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");

//ویرایش و حذف تور
if (isset($_GET['action'])) {

    $id = $_GET['id'];

    switch ($_GET['action']) {
            //ویرایش
        case 'EDIT':
            $query = "UPDATE `classes` SET `coachid`='$CoachId',`name`='$Name',`description`='$Description',`time_period`='$TimePeriod',`session_number`='$SessionNumber',`days`='$Days',`hours`='$Hours',`capacity`='$Capacity',`price`='$Price' WHERE classid='$ClassId'";

            if (mysqli_query($link, $query) === true) { //ویرایش موفق
                $_SESSION["alert"] = "SucEdit";
                echo ($alert);
                exit();
            } else { //ویرایش ناموفق
                $_SESSION["alert"] = "FailEdit";
                echo ($alert);
                exit();
            }

            break;
            //حذف
        case 'DELETE':
            $query = "DELETE  FROM classes
             WHERE classid='$id'";

            if (mysqli_query($link, $query) === true) { //حذف موفق
                $_SESSION["alert"] = "SucDelet";
                echo ($alert);
                exit();
            } else { //حذف ناموفق
                $_SESSION["alert"] = "FailDelet";
                echo ($alert);
                exit();
            }
            break;
    } //switch
    mysqli_close($link);
    exit();
} //if


$target_dir = "assets/images/";
$target_file = $target_dir . basename($_FILES["Image"]["name"]);
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

//بررسی تصویر بودن فایل
$check = getimagesize($_FILES["Image"]["tmp_name"]);
if ($check == false) {
    $_SESSION["alert"] = "NotImg";
    echo ($alert);
    exit();
}

//بررسی موجود بودن از قبل
if (file_exists($target_file)) {
    $_SESSION["alert"] = "ImgExists";
    echo ($alert);
    exit();
}

//بررسی پسوند تصویر
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType !=
    "jpeg" && $imageFileType != "gif"
) {
    $_SESSION["alert"] = "ImgType";
    echo ($alert);
    exit();
}
//ارسال تصویر به پوشه هاست
if (!(move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file))) {
    $_SESSION["alert"] = "ImgSend";
    echo ($alert);
    exit();
}
//افزودن رکورد جدید
$query = "INSERT INTO `classes`(`coachid`, `name`, `description`, `image`, `time_period`, `session_number`, `days`, `hours`, `capacity`, `price`)
VALUES ('$CoachId','$Name','$Description','$Picture','$TimePeriod','$SessionNumber','$Days','$Hours','$Capacity','$Price') ";

if (mysqli_query($link, $query) === true) {
    $_SESSION["alert"] = "SucInsert";
    echo ($alert);
} else {
    $_SESSION["alert"] = "FailInsert";
    echo ($alert);
}


mysqli_close($link);