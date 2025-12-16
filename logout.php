<?php
session_start();
session_unset();   // xóa toàn bộ session
session_destroy(); // phá hủy session

header('Location: login.php'); // quay lại login
exit();
?>
