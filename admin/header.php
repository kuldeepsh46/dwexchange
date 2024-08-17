<link rel="icon" href="../User/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../User/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../User/assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../User/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../User/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../User/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../User/assets/css/jquery.mCustomScrollbar.css">
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
                            
                            <a href="dwe.php"><img class="img-fluid" src="../User/assets/images/logo-white.png" alt="Theme-Logo" style="width: 100px; height: auto;" />
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
                                                    src="../User/assets/images/avatar-2.jpg" alt="Generic placeholder image">
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
                <script type="text/javascript" src="../User/assets/js/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="../User/assets/js/jquery-ui/jquery-ui.min.js"></script>
            <script type="text/javascript" src="../User/assets/js/popper.js/popper.min.js"></script>
            <script type="text/javascript" src="../User/assets/js/bootstrap/js/bootstrap.min.js"></script>
            <!-- jquery slimscroll js -->
            <script type="text/javascript" src="../User/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
            <!-- modernizr js -->
            <script type="text/javascript" src="../User/assets/js/modernizr/modernizr.js"></script>
            <!-- am chart -->
            <script src="../User/assets/pages/widget/amchart/amcharts.min.js"></script>
            <script src="../User/assets/pages/widget/amchart/serial.min.js"></script>
            <!-- Chart js -->
            <script type="text/javascript" src="../User/assets/js/chart.js/Chart.js"></script>
            <!-- Todo js -->
            <script type="text/javascript " src="../User/assets/pages/todo/todo.js"></script>
            <!-- Custom js -->
            <script type="text/javascript" src="../User/assets/pages/dashboard/custom-dashboard.min.js"></script>
            <script type="text/javascript" src="../User/assets/js/script.js"></script>
            <script type="text/javascript " src="../User/assets/js/SmoothScroll.js"></script>
            <script src="../User/assets/js/pcoded.min.js"></script>
            <script src="../User/assets/js/vartical-demo.js"></script>
            <script src="../User/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>