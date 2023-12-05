<?php
require('../model/database.php');
require('../model/user_db.php');
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,'password');
if ($username == NULL || $email == NULL || $password == NULL) {
    $error = "Invalid account data. Check all fields and try again.";
    include('../errors/error.php');
} else { 
    $result = add_user($username, $email, $password);
    echo $result;
    session_start(); // Bắt đầu phiên làm việc
    if(is_numeric($result))
    {
    $tb = 'doneNew';
    $_SESSION['message'] = $tb;
    header("Location: ../index.php");
    }
    else{
        $tb = 'false1';
        $_SESSION['message'] = $tb;
    header("Location: ../index.php");
    }
    exit;
}
?>