<?php
session_start();

// Hủy toàn bộ session
session_destroy();

// Chuyển hướng người dùng đến trang đăng nhập hoặc trang chính
header("Location: ../index.php");
exit();
?>