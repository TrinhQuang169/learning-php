<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>In dãy số 1 - 100</title>
</head>
<body>

<?php
for ($i = 1; $i <= 100; $i++) {

    if ($i % 2 == 0) {
        echo "<span style='color:red; font-weight:bold;'>$i</span> ";
    } else {
        echo "<span style='color:green; font-weight:bold; font-style:italic;'>$i</span> ";
    }

}
?>

</body>




</html>
