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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
        }

        .package {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #f9f9f9;
        }

        .package h2 {
            margin-top: 0;
        }

        .package label {
            display: block;
            margin-bottom: 10px;
        }

        .package input[type="radio"] {
            margin-right: 10px;
        }

        .submit-btn {
            text-align: center;
            margin-top: 20px;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 5px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-footer {
            margin-top: 20px;
            text-align: right;
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
                                <h3>Select an Investment Package</h3>

                                <form id="investmentForm" action="/submit" method="post">
                                    <div class="package">
                                        <h3>Package 1</h3>
                                        <label>
                                            <input type="radio" name="investment_package" value="1"
                                                id="package1">
                                            Investment: $5 to $999<br>
                                            Weekly Income: 3%<br>
                                            Monthly Income: 12%
                                        </label>
                                    </div>

                                    <div class="package">
                                        <h3>Package 2</h3>
                                        <label>
                                            <input type="radio" name="investment_package" value="2"
                                                id="package2">
                                            Investment: $1000 to $9999<br>
                                            Weekly Income: 5%<br>
                                            Monthly Income: 20%
                                        </label>
                                    </div>

                                    <div class="package">
                                        <h3>Package 3</h3>
                                        <label>
                                            <input type="radio" name="investment_package" value="3"
                                                id="package3">
                                            Investment: $10000 and Above<br>
                                            Weekly Income: 7%<br>
                                            Monthly Income: 28%
                                        </label>
                                    </div>

                                    <div>
                                        <label for="investmentAmount">Enter Investment Amount:</label>
                                        <input type="number" id="investmentAmount" name="investmentAmount" required
                                            min="5" step="0.01" required>
                                    </div>

                                    <div class="submit-btn">
                                        <button type="button" id="depositBtn">Deposit</button>
                                        <input type="hidden" id="selectedPackage" value="" />
                                    </div>
                                </form>
                                <div id="myModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <p>Your deposit details are ready to be submitted. Click "Submit" to proceed.
                                        </p>
                                        <div class="modal-footer">
                                            <button id="confirmBtn">Submit</button>
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
    // JavaScript to handle package selection based on input amount
    document.getElementById('investmentAmount').addEventListener('input', function() {
        var amount = parseFloat(this.value);
        if (isNaN(amount)) return;

        // Deselect all radio buttons
        document.querySelectorAll('input[name="investment_package"]').forEach(radio => radio.checked = false);

        // Select the appropriate package based on the amount
        if (amount >= 10000) {
            $('#selectedPackage').val(3);
            document.getElementById('package3').checked = true;
        } else if (amount >= 1000) {
            $('#selectedPackage').val(2);
            document.getElementById('package2').checked = true;
        } else if (amount >= 5) {
            $('#selectedPackage').val(1);
            document.getElementById('package1').checked = true;
        } else {
            // If the amount is less than the minimum, deselect all packages
            document.querySelectorAll('input[name="investment_package"]').forEach(radio => radio.checked =
                false);
        }
    });

    // JavaScript for modal
    var modal = document.getElementById("myModal");
    var depositBtn = document.getElementById("depositBtn");
    var closeModal = document.getElementsByClassName("close")[0];
    var confirmBtn = document.getElementById("confirmBtn");

    // When the user clicks the button, open the modal 
    depositBtn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    closeModal.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks on the "Confirm" button, send the AJAX request
    confirmBtn.onclick = function() {
        // var formData = $('#')
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
                'type': 'sendDepositRequest',
                'amount': $('#investmentAmount').val(),
                'selectedPackage': $('#selectedPackage').val()
            },
            success: function(response) {
                // Handle success
                console.log(typeof(response), response)
                response = JSON.parse(response);
                if (response.status == 1) {
                    console.log(4)
                    window.location.href = 'User/index.php';
                }
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error('Form submission failed:', error);
            }
        });
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>