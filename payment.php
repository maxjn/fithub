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

$alert = "?>
<script type='text/javascript'>
<!--
window.history.back();
-->
</script>
<?php ";

//بررسی وضعیت فیلد ها
if ((isset($_POST['ClassId']) && !empty(Trim($_POST['ClassId'])) &&
    isset($_POST['Price']) && !empty(Trim($_POST['Price'])))) {
    //پر کردن فیلد ها
    $ClassId = $_POST['ClassId'];
    $Price = $_POST['Price'];
} else { //خالی بودن فیلد ها
?>
<script type='text/javascript'>
alert("لطفا تمامی فیلد ها را پر کنید.");
</script>
<?php
    echo ($alert);
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>درگاه پرداخت</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Fascinating Checkout Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    };
    </script>
    <!-- //custom-theme -->
    <link href="assets/css/stylePayment.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/creditly.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/easy-responsive-tabs.css">
    <script src="assets/js/jquery.min.js"></script>
    <link
        href="//fonts.googleapis.com/css?family=Overpass:100,100i,200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
</head>

<body>
    <div class="main">
        <h1>درگاه پرداخت</h1>
        <div class="w3_agile_main_grids">
            <div class="agile_main_top_grid">

                <div class="w3_agileits_main_top_grid_right">
                </div>
                <div class="clear"> </div>
                <div class="wthree_total">
                    <h2>مبلغ قابل پرداخت <span><?php echo ($Price); ?><i>تومان هزار</i></span></h2>
                </div>
            </div>
            <div class="agileinfo_main_bottom_grid">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li><img src="asset/payment/1.jpg" alt=" " /></li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="agileits_w3layouts_tab1">
                            <form action="action-payment.php" method="post" class="creditly-card-form agileinfo_form">
                                <section class="creditly-wrapper wthree, w3_agileits_wrapper">

                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">
                                                <p style="text-align: right">صاحب کارت</p>
                                            </label>
                                            <input class="billing-address-name form-control" type="text" name="Name"
                                                placeholder="نام نام خانوادگی">
                                        </div>
                                        <div class="w3_agileits_card_number_grids">
                                            <div class="w3_agileits_card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">شماره کارت</label>
                                                    <input class="number credit-card-number form-control" type="text"
                                                        name="Number" inputmode="numeric" autocomplete="cc-number"
                                                        autocompletetype="cc-number" x-autocompletetype="cc-number"
                                                        placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                </div>
                                            </div>
                                            <div class="w3_agileits_card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">CVV</label>
                                                    <input class="security-code form-control" Â· inputmode="numeric"
                                                        type="text" name="Cvv" placeholder="&#149;&#149;&#149;">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">تاریخ انقضا</label>
                                            <input class="expiration-month-and-year form-control" type="text"
                                                name="ExpirDate" placeholder="MM / YY">
                                        </div>
                                        <input style="display: none" type="text" name="ClassId"
                                            value="<?php echo ($ClassId); ?>">
                                        <input style="display: none" type="text" name="Price"
                                            value="<?php echo ($Price); ?>">
                                        <button
                                            style="cursor: pointer; width: 100%;border: none;background: #f44336;color: #FFF;margin: 0 0 5px;padding: 10px; font-size: 15px;"
                                            name="submit" type="submit"><span>پرداخت</span></button>
                                    </div>

                                </section>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- credit-card -->
    <script type="text/javascript" src="assets/js/creditly.js"></script>
    <script type="text/javascript">
    $(function() {
        var creditly = Creditly.initialize(
            '.creditly-wrapper .expiration-month-and-year',
            '.creditly-wrapper .credit-card-number',
            '.creditly-wrapper .security-code',
            '.creditly-wrapper .card-type');

        $(".creditly-card-form .submit").click(function(e) {
            e.preventDefault();
            var output = creditly.validate();
            if (output) {
                // Your validated credit card output
                console.log(output);
            }
        });
    });
    </script>
    <!-- //credit-card -->

</body>

</html>