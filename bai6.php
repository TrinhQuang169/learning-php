<form method="POST" action="URL">
    <input type="submit" 
    name="submit" value=""  />

    action="process.php" method="GET"> 
    <input type="text" name="search"> 
    <button type="submit">Tìm kiếm</button>

    action="process.php" method=“POST"> 
    <input type="text" name="search"> 
    <button type="submit">Gửi</button>

    if (isset($_GET['submit'])) {
        
        echo "từ khoá". htmlspecialchars($_GET['search']);
    }


</form>