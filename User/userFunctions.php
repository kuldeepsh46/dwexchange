<?php
// print_r($_POST);
session_start(); // Start the session
include '../db/dbConn.php';
if (isset($_POST)) {
    if ($_POST['type'] == 0) {
        registerUser($_POST);
    } elseif ($_POST['type'] == 1) {
        userSignin($_POST);
    } elseif ($_POST['type'] == 2) {
        logout();
    }
}
function registerUser($data)
{
    $status = 1;
    $msg = 'Registration Successfull!';
    if (empty($_POST['username'])) {
        $status = 0;
        $msg = 'Username can not be empty! Registration Failed';
    } elseif (empty($_POST['email'])) {
        $status = 0;
        $msg = 'Email can not be empty! Registration Failed';
    } elseif (empty($_POST['password'])) {
        $status = 0;
        $msg = 'Password can not be empty';
    } elseif ($_POST['password'] != $_POST['confirmPassword']) {
        $status = 0;
        $msg = 'Password and Condirm Password should be same! Registration Failed';
    } else {
        global $conn;
        $username = $data['username'];
        $userEmail = $data['email'];
        $userPassword = password_hash($data['password'], PASSWORD_BCRYPT);
        $userType = $data['type'];
        $stmt = $conn->prepare('INSERT INTO users (username, email, password, type) VALUES (?, ?, ?, ?)');
        if (isset($stmt)) {
            $stmt->bind_param('sssi', $username, $userEmail, $userPassword, $userType);
            $insertUserData = $stmt->execute();
            if (!$insertUserData) {
                $status = 0;
                $msg = 'Data insertion failed!';
            }
            $stmt->close();
        } else {
            $status = 0;
            $msg = 'Data insertion failed!';
        }
    }
    $response = ['status' => $status, 'msg' => $msg];
    echo json_encode($response);
}
function userSignin($data)
{
    global $conn;
    $status = 1;
    $msg = 'Login Successfull!';
    $userEmail = $data['email'] ?? '';
    $userPassword = $data['password'] ?? '';
    if (!empty($userEmail) && !empty($userPassword)) {
        // Prepare the SQL statement
        $stmt = $conn->prepare('SELECT id, username, email, password FROM users WHERE email = ?');
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }
        // Bind parameters and execute
        $stmt->bind_param('s', $userEmail);
        $stmt->execute();
        // Store result
        $stmt->store_result();
        if ($stmt->num_rows === 1) {
            // Bind result variable
            $stmt->bind_result($id, $username, $email, $hashedPassword);
            $stmt->fetch();
            // Verify the password
            if (password_verify($userPassword, $hashedPassword)) {
                // $userData = $stmt->bind_result($id, $username, $email);
                // $_SESSION['userLoginInfo'] = $userData;
                $userData = [
                    'id' => $id,
                    'username' => $username,
                    'email' => $email,
                    'password' => $hashedPassword
                ];
                $_SESSION['userLoginInfo'] = $userData;
            } else {
                // echo 'Invalid email or password.';
                $status = 0;
                $msg = 'Invalid email or password.';
            }
        } else {
            $status = 0;
            $msg = 'Invalid email or password.';
        }
        // Free result and close statement
        $stmt->free_result();
        $stmt->close();
    } else {
        $status = 0;
        $msg = 'Email and password cannot be empty.';
    }
    $response = ['status' => $status, 'msg' => $msg];
    echo json_encode($response);
}
function logout()
{
    $status = 1;
    $msg = 'Logout Successfull!';
    session_unset();
    session_destroy();
    if (isset($_SESSION['userLoginInfo'])) {
        $status = 0;
        $msg = "Logout Failed! Try Again.";
    }
    $response = ['status' => $status, 'msg' => $msg];
    echo json_encode($response);
}
?>
