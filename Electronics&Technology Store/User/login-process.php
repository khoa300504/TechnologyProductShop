<?php
require('../model/database.php');
require('../model/user_db.php');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if ($username == NULL || $password == NULL) {
    $error = "Invalid account data. Check all fields and try again.";
    include('../errors/error.php');
} else {
    $account = login($username, $password);
    if (isset($account)) {
        session_start();
        $_SESSION['user'] = $account;
        header("Location: ../views/A-login.php");
    } else {
        session_start();
        $_SESSION['message'] = false;
        header("Location: ../index.php");
    }
    exit;
}
