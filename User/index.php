<?php
session_start(); // Start the session
if (isset($_SESSION['userLoginInfo'])) {
    $userData = $_SESSION['userLoginInfo'];
    // print_r($userData);
    ?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Dollar Win Exchange </title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords"
        content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php include '../header.php'; ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include '../sideNavbar.php'; ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- order-card start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Registration Bonus</h6>
                                                        <h2 class="text-right">
                                                            <i class="fa fa-gift f-left"></i>
                                                            <span>$<?php echo $userData['bonusAmount']; ?></span>
                                                        </h2>
                                                        <p class="m-b-0">Congratulations !!<span
                                                                class="f-right"></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-green order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Investment Package</h6>
                                                        <h2 class="text-right"><i
                                                                class="fa fa-gift f-left"></i>
                                                                <span>$<?php echo $userData['amount']; ?></span></h2>
                                                        <p class="m-b-0">Investment Date<span
                                                                class="f-right"><?php echo $userData['lastInvestmentDate'] ?></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-yellow order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Deposit Bonus</h6>
                                                        <h2 class="text-right"><i
                                                                class="fa fa-gift f-left"></i><span>$0</span>
                                                        </h2>
                                                        <p class="m-b-0">On First Deposit<span
                                                                class="f-right">$0</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-pink order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Investment Bonus</h6>
                                                        <h2 class="text-right"><i
                                                                class="fa fa-gift f-left"></i><span>$0</span>
                                                        </h2>
                                                        <p class="m-b-0">Weekly<span class="f-right">$0</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- order-card end -->
                                            <!-- order-card start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-pink order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Referral Bonus</h6>
                                                        <h2 class="text-right"><i
                                                                class="ti-tag f-left"></i><span>$0</span></h2>
                                                        <p class="m-b-0">Total Sponsors<span class="f-right">0</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-yellow order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Team Building Bonus</h6>
                                                        <h2 class="text-right"><i
                                                                class="ti-reload f-left"></i><span>$0</span>
                                                        </h2>
                                                        <p class="m-b-0">Total Team<span class="f-right">$0</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Team Monthly Bonus</h6>
                                                        <h2 class="text-right"><i
                                                                class="ti-reload f-left"></i><span>$0</span>
                                                        </h2>
                                                        <p class="m-b-0">This Month<span class="f-right">$0</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-green order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Earning Profit</h6>
                                                        <h2 class="text-right"><i
                                                                class="ti-wallet f-left"></i><span>$0</span>
                                                        </h2>
                                                        <p class="m-b-0">This Month<span class="f-right">$0</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="card tabs-card">
                                                    <div class="card-block p-0">
                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab"
                                                                    href="#home3" role="tab"><i
                                                                        class="fa fa-home"></i>Home</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#profile3"
                                                                    role="tab"><i class="fa fa-key"></i>Security</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab"
                                                                    href="#messages3" role="tab"><i
                                                                        class="fa fa-play-circle"></i>Entertainment</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab"
                                                                    href="#settings3" role="tab"><i
                                                                        class="fa fa-database"></i>Big Data</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                        </ul>
                                                        <!-- Tab panes -->
                                                        <div class="tab-content card-block">
                                                            <div class="tab-pane active" id="home3"
                                                                role="tabpanel">

                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                    </table>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button
                                                                        class="btn btn-outline-primary btn-round btn-sm">Load
                                                                        More</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div id="styleSelector">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


    <!-- Mirrored from themewagon.github.io/Gradient-Able-free-bootstrap-admin-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Aug 2024 00:54:21 GMT -->

</html>
<?php
} else {
    header('Location: ../dwe.html');
exit; // Always use exit() after header redirection to ensure no further code is executed
}
?>
