<?php
session_start();
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
                                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Email</th>
      <th scope="col">Joined Date</th>
    </tr>
  </thead>
  <tbody>
      <?php
      foreach($_SESSION['userTeamMembers'] as $item) {
          ?>
          <tr>
              <th scope='row'><?php echo $item['id']; ?></th>
              <td><?php echo $item['username']; ?></td>
              <td><?php echo $item['email']; ?></td>
              <td><?php echo $item['createdAt']; ?></td>
          </tr>
          <?php
      }
      ?>
  </tbody>
</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>