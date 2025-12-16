<?php
session_start();

// Nếu đã đăng nhập rồi thì khỏi cần login nữa
if (isset($_SESSION['username'])) {
    header('Location: welcome.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form method="post" action="">
        <label>Nhập tên:</label>
        <input type="text" name="username" required>
        <button type="submit">Login</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['username'];
        $_SESSION['username'] = $name;    // lưu session
        header('Location: welcome.php');  // chuyển trang
        exit();
    }
    ?>
</body>
</html>
