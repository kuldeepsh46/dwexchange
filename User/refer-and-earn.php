<?php
session_start();
// print_r($_SESSION['userLoginInfo']);
// include('../header.php');
?>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
        }
        .card {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-copy {
            cursor: pointer;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
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
                                <div class="container">
        <div class="card">
            <h1 class="card-title">Refer and Earn</h1>
            <p class="card-text">Share your referral code with your friends and earn rewards when they sign up!</p>
            <div class="form-group">
                <label for="referralCode">Your Referral Code:</label>
                <input type="text" class="form-control" id="referralCode" value="<?php echo $_SESSION['userLoginInfo']['sponsorId'] ?>" readonly>
                <small class="form-text text-muted">Copy this code and share it with your friends.</small>
            </div>
            <button class="btn btn-primary btn-copy" onclick="copyReferralCode()">Copy Code</button>
            <div class="alert alert-success d-none" id="copyAlert" role="alert">
                Referral code copied to clipboard!
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
</html>
<script>
        function copyReferralCode() {
            // Get the referral code input
            const referralCodeInput = document.getElementById('referralCode');
            
            // Select the text field
            referralCodeInput.select();
            referralCodeInput.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            document.execCommand('copy');

            // Show success message
            const copyAlert = document.getElementById('copyAlert');
            copyAlert.classList.remove('d-none');
            setTimeout(() => copyAlert.classList.add('d-none'), 2000); // Hide message after 2 seconds
        }
    </script>