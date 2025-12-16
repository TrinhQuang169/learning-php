<?php
session_start();

// Nếu chưa có session thì đá về login
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Xin chào, <?php echo $_SESSION['username']; ?> 🎉</h2>

    <p>Bạn đã đăng nhập thành công.</p>

    <a href="logout.php">Đăng xuất</a>
</body>
</html>
