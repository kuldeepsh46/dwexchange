<?php
// print_r($_POST);
session_start(); // Start the session
include '../db/dbConn.php';
if (isset($_POST)) {
    if ($_POST['type'] == 0) {
        registerUser($_POST);
    } elseif ($_POST['type'] == 1) {
        userSignin($_POST, 0);
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
            $stmt->close();
            if (!$insertUserData) {
                $status = 0;
                $msg = 'Data insertion failed!';
            } else {
                $userData = getUser(null, $userEmail);
                // print_r($userData);
                // die;
                $addInitialBonus = $conn->prepare('INSERT INTO wallet (userId, bonusAmount) VALUES (?, ?)');
                if (isset($addInitialBonus)) {
                    $bonusAmt = 1;
                    $userId = $userData['data']['id'];
                    $addInitialBonus->bind_param('ii', $userId, $bonusAmt);
            $addInitialBonusSuccess = $addInitialBonus->execute();
            if (!$addInitialBonusSuccess) {
                $status = 2;
                $msg = 'Initial bonus insertion failed!';
            } else {
                $status = 1;
                $msg = 'User Registered and Initial Bonus Added Successfully.';
                $loginCred = [
                    'email' => $userEmail,
                    'password' => $data['password'],
                ];
                userSignin($loginCred, 1);
            }
            $addInitialBonus->close();
                }
            }
            
        } else {
            $status = 0;
            $msg = 'Data insertion failed!';
        }
    }
$response = ['status' => $status, 'msg' => $msg];
echo json_encode($response);
}
function userSignin($data, $check)
{
    global $conn;
    $status = 1;
    $msg = 'Login Successfull!';
    $userEmail = $data['email'] ?? '';
    $userPassword = $data['password'] ?? '';
    if (!empty($userEmail) && !empty($userPassword)) {
        $userData = getUser(null, $userEmail);
        // print_r($userData);
        if ($userData['status'] == 1) {
            if (password_verify($userPassword, $userData['data']['password'])) {
                $_SESSION['userLoginInfo'] = $userData['data'];
            } else {
                 $status = 0;
        $msg = 'Invalid password'; 
            }
        } else {
         $status = 0;
        $msg = 'Invalid email.';   
        }
    } else {
        $status = 0;
        $msg = 'Email and password cannot be empty.';
    }
    $response = ['status' => $status, 'msg' => $msg];
    if ($check == 0) {
        echo json_encode($response);
    } else {
        return $response;
    }
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
if($_GET['id']) {
    $id = $_GET['id'];
    $userData = getUser(null, 'ks671@gmail.com');
    print_r($userData);
}
function getUser($userId, $userEmail) {
    global $conn;
    if($userId == null) {
        $uniqueFieldName = 'email';
        $uniqueId = $userEmail;
        $dataType = 's';
    } else {
        $uniqueFieldName = 'id';
        $uniqueId = $userId;
        $dataType = 'i';
    }
    $response = [
        'status' => 0,
        'msg' => 'No User Found With Provided Credentials.',
        'data' => []
    ];
// $stmt = $conn->prepare('SELECT * FROM users WHERE ' . $uniqueFieldName . ' = ?');
$stmt = $conn->prepare('SELECT users.*, wallet.bonusAmount, wallet.amount FROM users LEFT JOIN wallet ON users.id = wallet.userId WHERE users.' . $uniqueFieldName . ' = ?');
if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
}
$stmt->bind_param($dataType, $uniqueId); // 'i' specifies that the parameter is an integer
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $response = [
            'status' => 1,
            'msg' => 'User Found.',
            'data' => $result->fetch_assoc()
        ];
        $status = 1;
    }
    $stmt->close();
    return $response;
}
?>
