<?php
// config.php

// Define global constants
define('APP_NAME', 'dwexchange');
define('DEBUG_MODE', true);

// Define global variables
// $GLOBALS['db_host'] = 'localhost';
// $GLOBALS['db_user'] = 'root';
// $GLOBALS['db_pass'] = '';
// $GLOBALS['db_name'] = 'dwexchange';
if ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') {
    $servername = 'localhost'; // Replace with your server name
    $username = 'root'; // Replace with your database username
    $password = ''; // Replace with your database password
    $dbname = 'dwexchange'; // Replace with your database name
    // define('baseUrl', '/dwexchange');
    $GLOBALS['basePath'] = '/dwexchange/';
} else {
    $servername = 'localhost'; // Replace with your server name
    $username = 'u247363393_dwexchange'; // Replace with your database username
    $password = 'fydqe1-zoPqur-mitcan'; // Replace with your database password
    $dbname = 'u247363393_dwexchange'; // Replace with your database name
    // define('baseUrl', '/');
    $GLOBALS['basePath'] = '/';
}
$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);
?>