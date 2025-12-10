<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng</title>
</head>
<body>
    <h2>Xin chào, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>Chào mừng bạn đến với trang web của chúng tôi.</p>
    <a href="logout.php">Đăng xuất</a>
</body>