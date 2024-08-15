<?php
session_start(); // Start the session
if (isset($_SESSION['userLoginInfo'])) {
    $userData = $_SESSION['userLoginInfo'];
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
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>

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
                <nav class="navbar header-navbar pcoded-header">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                            </a>
                            <div class="mobile-search">
                                <div class="header-search">
                                    <div class="main-search morphsearch-search">
                                        <div class="input-group">
                                            <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Keyword">
                                            <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <a href="dwe.html"><img class="img-fluid" src="assets/images/logo-white.png" alt="Theme-Logo" style="width: 100px; height: auto;" />
                            <a class="mobile-options">
                                <i class="ti-more"></i>
                            </a>
                        </div>

                        <div class="navbar-container container-fluid">
                                <ul class="nav-left">
                                <li>
                            </a>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                    </div>
                                </li>
                                <li class="header-search">
                                    <div class="main-search morphsearch-search">
                                        <div class="input-group">
                                            <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            
                            <ul class="nav-right">
                                <li class="header-notification">
                                    <a href="#!">
                                        <i class="ti-bell"></i>
                                        <span class="badge bg-c-pink"></span>
                                    </a>
                                    <ul class="show-notification">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Congratulation !!  !! <span><?php echo $userData['username']; ?></span><br>Now you are the family of Dollar Win Exchange </p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <!--<li>-->
                                        <!--    <div class="media">-->
                                        <!--        <img class="d-flex align-self-center img-radius"-->
                                        <!--            src="assets/images/avatar-4.jpg" alt="Generic placeholder image">-->
                                        <!--        <div class="media-body">-->
                                        <!--            <h5 class="notification-user">Joseph William</h5>-->
                                        <!--            <p class="notification-msg">Lorem ipsum dolor sit amet,-->
                                        <!--                consectetuer elit.</p>-->
                                        <!--            <span class="notification-time">30 minutes ago</span>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <div class="media">-->
                                        <!--        <img class="d-flex align-self-center img-radius"-->
                                        <!--            src="assets/images/avatar-3.jpg" alt="Generic placeholder image">-->
                                        <!--        <div class="media-body">-->
                                        <!--            <h5 class="notification-user">Sara Soudein</h5>-->
                                        <!--            <p class="notification-msg">Lorem ipsum dolor sit amet,-->
                                        <!--                consectetuer elit.</p>-->
                                        <!--            <span class="notification-time">30 minutes ago</span>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</li>-->
                                    </ul>
                                </li>

                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <img src="assets/images/avatar-4.jpg" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span><?php echo $userData['username']; ?></span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li>
                                            <a href="#!">
                                                <i class="ti-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ti-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a id="logout">
                                                <!-- <button type="submit" name="logout" id="logout"> -->
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                                <!-- </button> -->
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar">
                            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                            <div class="pcoded-inner-navbar main-menu">

                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="active">
                                        <a href="index-2.html">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"></div>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-wallet"></i></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.basic-components.main">Deposit Wallet</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Investment</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"> 
                                </div>
                                
                                <ul class="pcoded-item pcoded-left-item">
                                   
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.basic-components.main">Team Report</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Direct Sponsors</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Tree View</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Total Team</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            

                                        </ul>
                                    </li>
                                </ul>
                                
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"> 
                                </div>
                                
                                <ul class="pcoded-item pcoded-left-item">
                                   
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="fa fa-money"></i></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.basic-components.main">Earning Report</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Non/Working Bonus</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Referral Bonus</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Team Building Bonus</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Team Monthly Bonus</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">24Hrs. Closing Bonus</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            

                                        </ul>
                                    </li>
                                </ul>
                                
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"> 
                                </div>
                                
                                <ul class="pcoded-item pcoded-left-item">
                                   
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="fa fa-exchange"></i></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.basic-components.main">Transaction History</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Debited</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Credit</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">All Transaction History</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"> 
                                </div>
                                
                                <ul class="pcoded-item pcoded-left-item">
                                   
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="fa fa-money"></i></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.basic-components.main">Withdrawal</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        
                                    </li>
                                </ul>
                                
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"> </div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="fa fa-ticket"></i></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.basic-components.main">Generate Ticket</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                
                                
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"></div>
                               <ul class="pcoded-item pcoded-left-item">
                                    
                                <li class="pcoded-hasmenu">
                                        <a id="logout">
                                            <span class="pcoded-micon"><i class="fa fa-sign-out"></i></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.basic-components.main">Logout</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        
                                    </li>
                                </ul>
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"> 
                                </div>
                                
                                
                                
                                

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
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
                                                                <i
                                                                    class="fa fa-gift f-left"></i>
                                                                    <span>$<?php echo $userData['bonusAmount'] ?></span>
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
                                                                    class="fa fa-gift f-left"></i><span>$0</span></h2>
                                                            <p class="m-b-0">Investment Date<span
                                                                    class="f-right">00/00/0000</span></p>
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
                                                            <p class="m-b-0">Weekly<span
                                                                    class="f-right">$0</span></p>
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
                                                            <p class="m-b-0">Total Sponsors<span
                                                                    class="f-right">0</span></p>
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
                                                            <p class="m-b-0">Total Team<span
                                                                    class="f-right">$0</span></p>
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
                                                            <p class="m-b-0">This Month<span
                                                                    class="f-right">$0</span></p>
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
                                                            <p class="m-b-0">This Month<span
                                                                    class="f-right">$0</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- order-card end -->

                                                <!-- statustic and process start -->
                                                <!--<div class="col-lg-8 col-md-12">-->
                                                <!--    <div class="card">-->
                                                <!--        <div class="card-header">-->
                                                <!--            <h5>Statistics</h5>-->
                                                <!--            <div class="card-header-right">-->
                                                <!--                <ul class="list-unstyled card-option">-->
                                                <!--                    <li><i class="fa fa-chevron-left"></i></li>-->
                                                <!--                    <li><i class="fa fa-window-maximize full-card"></i>-->
                                                <!--                    </li>-->
                                                <!--                    <li><i class="fa fa-minus minimize-card"></i></li>-->
                                                <!--                    <li><i class="fa fa-refresh reload-card"></i></li>-->
                                                <!--                    <li><i class="fa fa-times close-card"></i></li>-->
                                                <!--                </ul>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--        <div class="card-block">-->
                                                <!--            <canvas id="Statistics-chart" height="200"></canvas>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!--<div class="col-lg-4 col-md-12">-->
                                                <!--    <div class="card">-->
                                                <!--        <div class="card-header">-->
                                                <!--            <h5>Customer Feedback</h5>-->
                                                <!--        </div>-->
                                                <!--        <div class="card-block">-->
                                                <!--            <span-->
                                                <!--                class="d-block text-c-blue f-24 f-w-600 text-center">365247</span>-->
                                                <!--            <canvas id="feedback-chart" height="100"></canvas>-->
                                                <!--            <div class="row justify-content-center m-t-15">-->
                                                <!--                <div class="col-auto b-r-default m-t-5 m-b-5">-->
                                                <!--                    <h4>83%</h4>-->
                                                <!--                    <p class="text-success m-b-0"><i-->
                                                <!--                            class="ti-hand-point-up m-r-5"></i>Positive-->
                                                <!--                    </p>-->
                                                <!--                </div>-->
                                                <!--                <div class="col-auto m-t-5 m-b-5">-->
                                                <!--                    <h4>17%</h4>-->
                                                <!--                    <p class="text-danger m-b-0"><i-->
                                                <!--                            class="ti-hand-point-down m-r-5"></i>Negative-->
                                                <!--                    </p>-->
                                                <!--                </div>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!-- statustic and process end -->
                                                <!-- tabs card start -->
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
                                                                    <a class="nav-link" data-toggle="tab"
                                                                        href="#profile3" role="tab"><i
                                                                            class="fa fa-key"></i>Security</a>
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
                                                                            <!--<tr>-->
                                                                            <!--    <th>Image</th>-->
                                                                            <!--    <th>Product Code</th>-->
                                                                            <!--    <th>Customer</th>-->
                                                                            <!--    <th>Purchased On</th>-->
                                                                            <!--    <th>Status</th>-->
                                                                            <!--    <th>Transaction ID</th>-->
                                                                            <!--</tr>-->
                                                                            <!--<tr>-->
                                                                            <!--    <td><img src="assets/images/product/prod2.jpg"-->
                                                                            <!--            alt="prod img"-->
                                                                            <!--            class="img-fluid"></td>-->
                                                                            <!--    <td>PNG002344</td>-->
                                                                            <!--    <td>John Deo</td>-->
                                                                            <!--    <td>05-01-2017</td>-->
                                                                            <!--    <td><span-->
                                                                            <!--            class="label label-danger">Faild</span>-->
                                                                            <!--    </td>-->
                                                                            <!--    <td>#7234486</td>-->
                                                                            <!--</tr>-->
                                                                            <!--<tr>-->
                                                                            <!--    <td><img src="assets/images/product/prod3.jpg"-->
                                                                            <!--            alt="prod img"-->
                                                                            <!--            class="img-fluid"></td>-->
                                                                            <!--    <td>PNG002653</td>-->
                                                                            <!--    <td>Eugine Turner</td>-->
                                                                            <!--    <td>04-01-2017</td>-->
                                                                            <!--    <td><span-->
                                                                            <!--            class="label label-success">Delivered</span>-->
                                                                            <!--    </td>-->
                                                                            <!--    <td>#7234417</td>-->
                                                                            <!--</tr>-->
                                                                            <!--<tr>-->
                                                                            <!--    <td><img src="assets/images/product/prod4.jpg"-->
                                                                            <!--            alt="prod img"-->
                                                                            <!--            class="img-fluid"></td>-->
                                                                            <!--    <td>PNG002156</td>-->
                                                                            <!--    <td>Jacqueline Howell</td>-->
                                                                            <!--    <td>03-01-2017</td>-->
                                                                            <!--    <td><span-->
                                                                            <!--            class="label label-warning">Pending</span>-->
                                                                            <!--    </td>-->
                                                                            <!--    <td>#7234454</td>-->
                                                                            <!--</tr>-->
                                                                        </table>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <button
                                                                            class="btn btn-outline-primary btn-round btn-sm">Load
                                                                            More</button>
                                                                    </div>
                                                                </div>
                                                                <!--<div class="tab-pane" id="profile3" role="tabpanel">-->

                                                                <!--    <div class="table-responsive">-->
                                                                <!--        <table class="table">-->
                                                                <!--            <tr>-->
                                                                <!--                <th>Image</th>-->
                                                                <!--                <th>Product Code</th>-->
                                                                <!--                <th>Customer</th>-->
                                                                <!--                <th>Purchased On</th>-->
                                                                <!--                <th>Status</th>-->
                                                                <!--                <th>Transaction ID</th>-->
                                                                <!--            </tr>-->
                                                                <!--            <tr>-->
                                                                <!--                <td><img src="assets/images/product/prod3.jpg"-->
                                                                <!--                        alt="prod img"-->
                                                                <!--                        class="img-fluid"></td>-->
                                                                <!--                <td>PNG002653</td>-->
                                                                <!--                <td>Eugine Turner</td>-->
                                                                <!--                <td>04-01-2017</td>-->
                                                                <!--                <td><span-->
                                                                <!--                        class="label label-success">Delivered</span>-->
                                                                <!--                </td>-->
                                                                <!--                <td>#7234417</td>-->
                                                                <!--            </tr>-->
                                                                <!--            <tr>-->
                                                                <!--                <td><img src="assets/images/product/prod4.jpg"-->
                                                                <!--                        alt="prod img"-->
                                                                <!--                        class="img-fluid"></td>-->
                                                                <!--                <td>PNG002156</td>-->
                                                                <!--                <td>Jacqueline Howell</td>-->
                                                                <!--                <td>03-01-2017</td>-->
                                                                <!--                <td><span-->
                                                                <!--                        class="label label-warning">Pending</span>-->
                                                                <!--                </td>-->
                                                                <!--                <td>#7234454</td>-->
                                                                <!--            </tr>-->
                                                                <!--        </table>-->
                                                                <!--    </div>-->
                                                                    <!--<div class="text-center">-->
                                                                    <!--    <button-->
                                                                    <!--        class="btn btn-outline-primary btn-round btn-sm">Load-->
                                                                    <!--        More</button>-->
                                                                    <!--</div>-->
                                                                </div>
                                                            <!--    
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- tabs card end -->

                                                <!-- social statustic start -->
                                                <!--<div class="col-md-12 col-lg-4">-->
                                                <!--    <div class="card">-->
                                                <!--        <div class="card-block text-center">-->
                                                <!--            <i-->
                                                <!--                class="fa fa-envelope-open text-c-blue d-block f-40"></i>-->
                                                <!--            <h4 class="m-t-20"><span class="text-c-blue">8.62k</span>-->
                                                <!--                Subscribers</h4>-->
                                                <!--            <p class="m-b-20">Your main list is growing</p>-->
                                                <!--            <button class="btn btn-primary btn-sm btn-round">Manage-->
                                                <!--                List</button>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!--<div class="col-md-6 col-lg-4">-->
                                                <!--    <div class="card">-->
                                                <!--        <div class="card-block text-center">-->
                                                <!--            <i class="fa fa-twitter text-c-green d-block f-40"></i>-->
                                                <!--            <h4 class="m-t-20"><span-->
                                                <!--                    class="text-c-blgreenue">+40</span> Followers</h4>-->
                                                <!--            <p class="m-b-20">Your main list is growing</p>-->
                                                <!--            <button class="btn btn-success btn-sm btn-round">Check them-->
                                                <!--                out</button>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!--<div class="col-md-6 col-lg-4">-->
                                                <!--    <div class="card">-->
                                                <!--        <div class="card-block text-center">-->
                                                <!--            <i class="fa fa-puzzle-piece text-c-pink d-block f-40"></i>-->
                                                <!--            <h4 class="m-t-20">Business Plan</h4>-->
                                                <!--            <p class="m-b-20">This is your current active plan</p>-->
                                                <!--            <button class="btn btn-danger btn-sm btn-round">Upgrade to-->
                                                <!--                VIP</button>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!-- social statustic end -->

                                                <!-- users visite and profile start -->
                                                <!--<div class="col-md-4">-->
                                                <!--    <div class="card user-card">-->
                                                <!--        <div class="card-header">-->
                                                <!--            <h5>Profile</h5>-->
                                                <!--        </div>-->
                                                <!--        <div class="card-block">-->
                                                <!--            <div class="usre-image">-->
                                                <!--                <img src="assets/images/avatar-4.jpg"-->
                                                <!--                    class="img-radius" alt="User-Profile-Image">-->
                                                <!--            </div>-->
                                                <!--            <h6 class="f-w-600 m-t-25 m-b-10">Alessa Robert</h6>-->
                                                <!--            <p class="text-muted">Active | Male | Born 23.05.1992</p>-->
                                                <!--            <hr />-->
                                                <!--            <p class="text-muted m-t-15">Activity Level: 87%</p>-->
                                                <!--            <ul class="list-unstyled activity-leval">-->
                                                <!--                <li class="active"></li>-->
                                                <!--                <li class="active"></li>-->
                                                <!--                <li class="active"></li>-->
                                                <!--                <li></li>-->
                                                <!--                <li></li>-->
                                                <!--            </ul>-->
                                                <!--            <div class="bg-c-blue counter-block m-t-10 p-20">-->
                                                <!--                <div class="row">-->
                                                <!--                    <div class="col-4">-->
                                                <!--                        <i class="ti-comments"></i>-->
                                                <!--                        <p>1256</p>-->
                                                <!--                    </div>-->
                                                <!--                    <div class="col-4">-->
                                                <!--                        <i class="ti-user"></i>-->
                                                <!--                        <p>8562</p>-->
                                                <!--                    </div>-->
                                                <!--                    <div class="col-4">-->
                                                <!--                        <i class="ti-bag"></i>-->
                                                <!--                        <p>189</p>-->
                                                <!--                    </div>-->
                                                <!--                </div>-->
                                                <!--            </div>-->
                                                <!--            <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy-->
                                                <!--                text of the printing and typesetting industry.</p>-->
                                                <!--            <hr />-->
                                                <!--            <div class="row justify-content-center user-social-link">-->
                                                <!--                <div class="col-auto"><a href="#!"><i-->
                                                <!--                            class="fa fa-facebook text-facebook"></i></a>-->
                                                <!--                </div>-->
                                                <!--                <div class="col-auto"><a href="#!"><i-->
                                                <!--                            class="fa fa-twitter text-twitter"></i></a>-->
                                                <!--                </div>-->
                                                <!--                <div class="col-auto"><a href="#!"><i-->
                                                <!--                            class="fa fa-dribbble text-dribbble"></i></a>-->
                                                <!--                </div>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!--<div class="col-md-8">-->
                                                <!--    <div class="card">-->
                                                <!--        <div class="card-header">-->
                                                <!--            <h5>Activity Feed</h5>-->
                                                <!--            <div class="card-header-right">-->
                                                <!--                <ul class="list-unstyled card-option">-->
                                                <!--                    <li><i class="fa fa-chevron-left"></i></li>-->
                                                <!--                    <li><i class="fa fa-window-maximize full-card"></i>-->
                                                <!--                    </li>-->
                                                <!--                    <li><i class="fa fa-minus minimize-card"></i></li>-->
                                                <!--                    <li><i class="fa fa-refresh reload-card"></i></li>-->
                                                <!--                    <li><i class="fa fa-times close-card"></i></li>-->
                                                <!--                </ul>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--        <div class="card-block">-->
                                                <!--            <ul class="feed-blog">-->
                                                <!--                <li class="active-feed">-->
                                                <!--                    <div class="feed-user-img">-->
                                                <!--                        <img src="assets/images/avatar-3.jpg"-->
                                                <!--                            class="img-radius "-->
                                                <!--                            alt="User-Profile-Image">-->
                                                <!--                    </div>-->
                                                <!--                    <h6><span class="label label-danger">File</span>-->
                                                <!--                        Eddie uploaded new files: <small-->
                                                <!--                            class="text-muted">2 hours ago</small></h6>-->
                                                <!--                    <p class="m-b-15 m-t-15">hii <b> @everone</b> Lorem-->
                                                <!--                        Ipsum is simply dummy text of the printing and-->
                                                <!--                        typesetting industry.</p>-->
                                                <!--                    <div class="row">-->
                                                <!--                        <div class="col-auto text-center">-->
                                                <!--                            <img src="assets/images/blog/blog-r-1.jpg"-->
                                                <!--                                alt="img"-->
                                                <!--                                class="img-fluid img-100">-->
                                                <!--                            <h6 class="m-t-15 m-b-0">Old Scooter</h6>-->
                                                <!--                            <p class="text-muted m-b-0">-->
                                                <!--                                <small>PNG-100KB</small></p>-->
                                                <!--                        </div>-->
                                                <!--                        <div class="col-auto text-center">-->
                                                <!--                            <img src="assets/images/blog/blog-r-2.jpg"-->
                                                <!--                                alt="img"-->
                                                <!--                                class="img-fluid img-100">-->
                                                <!--                            <h6 class="m-t-15 m-b-0">Wall Art</h6>-->
                                                <!--                            <p class="text-muted m-b-0">-->
                                                <!--                                <small>PNG-150KB</small></p>-->
                                                <!--                        </div>-->
                                                <!--                        <div class="col-auto text-center">-->
                                                <!--                            <img src="assets/images/blog/blog-r-3.jpg"-->
                                                <!--                                alt="img"-->
                                                <!--                                class="img-fluid img-100">-->
                                                <!--                            <h6 class="m-t-15 m-b-0">Microphone</h6>-->
                                                <!--                            <p class="text-muted m-b-0">-->
                                                <!--                                <small>PNG-150KB</small></p>-->
                                                <!--                        </div>-->
                                                <!--                    </div>-->
                                                <!--                </li>-->
                                                <!--                <li class="diactive-feed">-->
                                                <!--                    <div class="feed-user-img">-->
                                                <!--                        <img src="assets/images/avatar-4.jpg"-->
                                                <!--                            class="img-radius "-->
                                                <!--                            alt="User-Profile-Image">-->
                                                <!--                    </div>-->
                                                <!--                    <h6><span-->
                                                <!--                            class="label label-success">Task</span>Sarah-->
                                                <!--                        marked the Pending Review: <span-->
                                                <!--                            class="text-c-green"> Trash Can Icon-->
                                                <!--                            Design</span><small class="text-muted">2-->
                                                <!--                            hours ago</small></h6>-->
                                                <!--                </li>-->
                                                <!--                <li class="diactive-feed">-->
                                                <!--                    <div class="feed-user-img">-->
                                                <!--                        <img src="assets/images/avatar-2.jpg"-->
                                                <!--                            class="img-radius "-->
                                                <!--                            alt="User-Profile-Image">-->
                                                <!--                    </div>-->
                                                <!--                    <h6><span-->
                                                <!--                            class="label label-primary">comment</span>-->
                                                <!--                        abc posted a task: <span-->
                                                <!--                            class="text-c-green">Design a new-->
                                                <!--                            Homepage</span> <small class="text-muted">6-->
                                                <!--                            hours ago</small></h6>-->
                                                <!--                    <p class="m-b-15 m-t-15"hii <b> @everone</b> Lorem-->
                                                <!--                        Ipsum is simply dummy text of the printing and-->
                                                <!--                        typesetting industry.</p>-->
                                                <!--                </li>-->
                                                <!--                <li class="active-feed">-->
                                                <!--                    <div class="feed-user-img">-->
                                                <!--                        <img src="assets/images/avatar-3.jpg"-->
                                                <!--                            class="img-radius "-->
                                                <!--                            alt="User-Profile-Image">-->
                                                <!--                    </div>-->
                                                <!--                    <h6><span-->
                                                <!--                            class="label label-warning">Task</span>Sarah-->
                                                <!--                        marked : <span class="text-c-green"> do Icon-->
                                                <!--                            Design</span><small class="text-muted">10-->
                                                <!--                            hours ago</small></h6>-->
                                                <!--                </li>-->
                                                <!--            </ul>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!-- users visite and profile end -->

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

            <!-- Warning Section Starts -->
            <!-- Older IE warning message -->
            <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
            <!-- Warning Section Ends -->
            <!-- Required Jquery -->
            <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
            <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
            <!-- jquery slimscroll js -->
            <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
            <!-- modernizr js -->
            <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
            <!-- am chart -->
            <script src="assets/pages/widget/amchart/amcharts.min.js"></script>
            <script src="assets/pages/widget/amchart/serial.min.js"></script>
            <!-- Chart js -->
            <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
            <!-- Todo js -->
            <script type="text/javascript " src="assets/pages/todo/todo.js"></script>
            <!-- Custom js -->
            <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.min.js"></script>
            <script type="text/javascript" src="assets/js/script.js"></script>
            <script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
            <script src="assets/js/pcoded.min.js"></script>
            <script src="assets/js/vartical-demo.js"></script>
            <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>


    <!-- Mirrored from themewagon.github.io/Gradient-Able-free-bootstrap-admin-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Aug 2024 00:54:21 GMT -->

</html>
<script>
    $('#logout').on('click', function(event) {
        event.preventDefault(); // Prevent the default form submission
        // var formData = $(this).serialize(); // Serialize form data
        $.ajax({
            url: '/User/userFunctions.php', // Replace with your server URL
            type: 'POST',
            data: {
                'type': 2
            },
            dataType: 'json',
            success: function(response) {
                window.location.href = '../dwe.html';
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error('Form submission failed:', error);
            }
        });
    });
</script>
<?php
} else {
    header('Location: ../dwe.html');
exit; // Always use exit() after header redirection to ensure no further code is executed
}
?>
