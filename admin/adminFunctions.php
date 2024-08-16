<?php
// print_r($_POST);
session_start(); // Start the session
include '../db/dbConn.php';
if (isset($_POST)) {
    if ($_POST['type'] == 'getDepositRequests') {
        getDepositRequests(0);
    } elseif ($_POST['type'] == 'getApprovedRequests') {
        getDepositRequests(1);
    } elseif ($_POST['type'] == 'getDeniedRequests') {
        getDepositRequests(2);
    } elseif ($_POST['type'] == 'approveRequest') {
        // echo 1;
        approveRequest($_POST);
    } elseif ($_POST['type'] == 'denyRequest') {
        denyRequest($_POST);
    }
}
function getDepositRequests($status) {
    global $conn;
    $stmt = $conn->prepare('SELECT depositRequests.*, users.email, users.username FROM depositRequests LEFT JOIN users ON depositRequests.userId = users.id WHERE depositRequests.status = ?');
    // $status = 0;
    $stmt->bind_param('i', $status);
    $stmt->execute();
    $response = [
        'status' => 0,
        'msg' => 'Failed! Try Again.',
    ];
    if ($stmt) {
        $result = $stmt->get_result();
        $records = [];
        // Traverse all records
        while ($row = $result->fetch_assoc()) {
            if ($status != 0) {
                $userDetails = getUserById($row['updatedBy']);
                $row['updatedBy'] = $userDetails['data']['username'];
            }
            $records[] = $row;
        }
        // Close the statement
        $stmt->close();
        $response['status'] = 1;
        $response['msg'] = 'Data Fetched Successfully';
        $response['data'] = $records;
        // return $records;
    }
    echo json_encode($response);
}
function approveRequest($data) {
    global $conn;
    // print_r($data);
    $response = [
        'status' => 0,
        'msg' => 'Failed! Try Again.',
    ];
    $id = $data['id'];
    // Prepare the UPDATE statement
$stmt = $conn->prepare('UPDATE depositRequests SET status = ?, updatedBy = ? WHERE id = ?');

// Example values
$newStatus = 1;  // New status you want to set              // The user ID for which records need to be updated
$updatedById = $_SESSION['userLoginInfo']['id'];
// Bind parameters

$stmt->bind_param('iii', $newStatus, $updatedById, $id);  // 's' for string, 'i' for integer
// Execute the statement
$stmt->execute();
// echo 3;
// Check if the update was successful
if ($stmt->affected_rows > 0) {
    // echo 'Update successful!';
    updateWallet($data['userId'], $amount, $operator);
    $response['status'] = 1;
    $response['msg'] = 'Update Successfull';
}

// Close the statement
$stmt->close();
echo json_encode($response);
}
function denyRequest($data) {
    global $conn;
    $response = [
        'status' => 0,
        'msg' => 'Failed! Try Again.',
    ];
    // Prepare the UPDATE statement
$stmt = $conn->prepare('UPDATE depositRequests SET status = ?, updatedBy = ? WHERE id = ?');

// Example values
$newStatus = 2;  // New status you want to set
// Bind parameters
$stmt->bind_param('ii', $newStatus, $id);  // 's' for string, 'i' for integer
// Execute the statement
$stmt->execute();
// Check if the update was successful
if ($stmt->affected_rows > 0) {
    // echo 'Update successful!';
    $response['status'] = 1;
    $response['msg'] = 'Update Successfull';
}
// Close the statement
$stmt->close();
echo json_encode($response);
}
function getUserById($id) {
    // echo $id;
    global $conn;
    // if($userId == null && $userRefCode == null) {
        $uniqueFieldName = 'id';
        $uniqueId = $id;
        $dataType = 'i';
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
function updateWallet($id, $amount, $operator) {
    global $conn;
    $response = [
        'status' => 0,
        'msg' => 'Failed to update wallet'
    ];
    $stmt = $conn->prepare('UPDATE wallet SET amount = amount '. $operator .' '. $amount .' WHERE userId = ?');
    if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
} else {
    $stmt->bind_param('i', $id); // 'i' specifies that the parameter is an integer
    $stmt->execute();
    $response = [
        'status' => 1,
        'msg' => 'Wallet Balance Updated.',
    ];
    
    $stmt->close();
}
    echo json_encode($response);
}
?>