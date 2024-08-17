<?php
session_start(); // Start the session
// include('config.php');
if (isset($_SESSION['userLoginInfo'])) {
    $userData = $_SESSION['userLoginInfo'];
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        var status = new URLSearchParams(window.location.search);
        status = status.get('status');
        // console.log(status)
        var type = '';
        if (status == 0) {
            type = 'getDepositRequests';
        } else if (status == 1) {
            type = 'getApprovedRequests';
        } else if (status == 2) {
            type = 'getDeniedRequests';
        }
        var url = '/admin/adminFunctions.php';
        <?php
        if ($GLOBALS['basePath'] == 0) {
            ?>url = 'dwexchange' + url;<?php
        }
        ?>
        $.ajax({
            url: url, // Replace with your server URL
            type: 'POST',
            data: {
                'type': type
            },
            // dataType: 'json',
            success: function(response) {
                response = JSON.parse(response);
                if (response.status == 1) {
                    response.data.forEach(function(item) {
                        var actionBtns = '<td>N/A</td>';
                        var updatedBy = 'No action taken yet.';
                        if (item.status == 0) {
                            actionBtns = '<td><button class="btn btn-success btn-sm" onclick="approveRequest('+ item.id +', '+ item.userId +', '+ item.amount +');">Approve</button><button class="btn btn-danger btn-sm" onclick="denyRequest('+ item.id +', '+ item.userId +')";>Deny</button></td>';
                        } else {
                            updatedBy = item.updatedBy;
                        }
                        $('.table tbody').append('<tr><th scope="row">'+ item.id +'</th><td>'+ item.username +'</td><td>'+ item.email +'</td><td>'+ item.amount +'</td><<td>'+ item.createdAt +'</td>'+ actionBtns +'<td>'+ updatedBy +'</td></tr>');
                    });
                }
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error('Form submission failed:', error);
            }
        });
});
</script>    
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
                <?php include('header.php'); ?>
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <?php include('../sideNavbar.php'); ?>
            <div class="pcoded-content">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Amount</th>
      <!--<th scope="col">Payment Type</th>-->
      <th scope="col">Submitted At</th>
      <th scope="col">Action</th>
      <th scope="col">Updated By</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
            </div>
    </body>
</html>
<script>
function approveRequest(id, userId, amount) {
    console.log(id);
    var url = '/admin/adminFunctions.php';
        <?php
        if ($GLOBALS['basePath'] == 0) {
            ?>url = 'dwexchange' + url;<?php
        }
        ?>
    $.ajax({
            url: url, // Replace with your server URL
            type: 'POST',
            data: {
                'type': 'approveRequest',
                'id': id,
                'userId': userId,
                'amount': amount
            },
            // dataType: 'json',
            success: function(response) {
                // window.location.href = '../dwe.html';
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error('Form submission failed:', error);
            }
        });
}
function denyRequest(id, userId) {
    var url = '/admin/adminFunctions.php';
        <?php
        if ($GLOBALS['basePath'] == 0) {
            ?>url = 'dwexchange' + url;<?php
        }
        ?>
    $.ajax({
            url: url, // Replace with your server URL
            type: 'POST',
            data: {
                'type': 'denyRequest',
                'id': id,
                'userId': userId
            },
            // dataType: 'json',
            success: function(response) {
                // window.location.href = '../dwe.html';
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error('Form submission failed:', error);
            }
        });
}
    $('#logout').on('click', function(event) {
        event.preventDefault(); // Prevent the default form submission
        // var formData = $(this).serialize(); // Serialize form data
        var url = '/User/userFunctions.php';
        <?php
        if ($GLOBALS['basePath'] == 0) {
            ?>url = 'dwexchange' + url;<?php
        }
        ?>
        $.ajax({
            url: url, // Replace with your server URL
            type: 'POST',
            data: {
                'type': 2
            },
            dataType: 'json',
            success: function(response) {
                window.location.href = '../dwe.php';
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
    header('Location: ../dwe.php');
exit; // Always use exit() after header redirection to ensure no further code is executed
}
?>