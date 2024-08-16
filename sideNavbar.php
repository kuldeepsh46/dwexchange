<?php
session_start();
if ($_SESSION['userLoginInfo']['type'] == 0) {
    ?>
    <nav class="pcoded-navbar">
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
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Deposit Wallet</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="/User/investment.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Investment</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Team Report</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="/User/my-team-members.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Direct Sponsors</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tree View</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Total Team</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-money"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Earning Report</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Non/Working Bonus</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Referral Bonus</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Team Building Bonus</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Team Monthly Bonus</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">24Hrs. Closing
                                Bonus</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-exchange"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Transaction History</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Debited</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Credit</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">All Transaction
                                History</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-money"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Withdrawal</span>
                    <span class="pcoded-mcaret"></span>
                </a>

            </li>
            <li class="pcoded-hasmenu">
                <a href="refer-and-earn.php">
                    <span class="pcoded-micon"><i class="fa fa-money"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Refer & Earn</span>
                    <span class="pcoded-mcaret"></span>
                </a>

            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-ticket"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Generate Ticket</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <!--<li class="pcoded-hasmenu">-->
            <!--    <a id="logout">-->
            <!--        <span class="pcoded-micon"><i class="fa fa-sign-out"></i></span>-->
            <!--        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Logout</span>-->
            <!--        <span class="pcoded-mcaret"></span>-->
            <!--    </a>-->

            <!--</li>-->
        </ul>
    </div>
</nav>
    <?php
} elseif ($_SESSION['userLoginInfo']['type'] == 1) {
    ?>
    <nav class="pcoded-navbar">
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
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Deposit</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="/admin/handleDepositRequests.php?status=0">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Deposit Requests</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/admin/handleDepositRequests.php?status=1">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Approved Requests</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/admin/handleDepositRequests.php?status=2">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Denied Requests</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Team Report</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="/User/my-team-members.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Direct Sponsors</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tree View</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Total Team</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-money"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Earning Report</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Non/Working Bonus</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Referral Bonus</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Team Building Bonus</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Team Monthly Bonus</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">24Hrs. Closing
                                Bonus</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-exchange"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Transaction History</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Debited</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Credit</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">All Transaction
                                History</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-money"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Withdrawal</span>
                    <span class="pcoded-mcaret"></span>
                </a>

            </li>
            <!--<li class="pcoded-hasmenu">-->
            <!--    <a href="refer-and-earn.php">-->
            <!--        <span class="pcoded-micon"><i class="fa fa-money"></i></span>-->
            <!--        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Refer & Earn</span>-->
            <!--        <span class="pcoded-mcaret"></span>-->
            <!--    </a>-->

            <!--</li>-->
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-ticket"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Generate Ticket</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <!--<li class="pcoded-hasmenu">-->
            <!--    <a id="logout">-->
            <!--        <span class="pcoded-micon"><i class="fa fa-sign-out"></i></span>-->
            <!--        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Logout</span>-->
            <!--        <span class="pcoded-mcaret"></span>-->
            <!--    </a>-->

            <!--</li>-->
        </ul>
    </div>
</nav>
    <?php
}



?>



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