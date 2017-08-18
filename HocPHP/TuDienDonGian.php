<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Từ điển đơn giản</title>
</head>
<body>
    <form method = "get" action = "<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type = "text" placeholder = "keyword"  name = "keyword">
        <input type = "submit" value = "Search">
    </form>
</body>
</html>
<?php
    $dictionary = array(
        "hello" => "xin chào",
        "goodbye" => "tạm biệt",
        "class" => "lớp học",
        "dictionary" => "từ điển"
    );
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $keyword = $_GET['keyword'];
        $flag = 0;  
        foreach ($dictionary as $word => $description){
            if($keyword == $word){
                $flag = 1;
                echo "<h3>Nghĩa tiếng Việt của từ <span style='color: red'>".$keyword."</span> là <span style='color:red'>".$description."</span></h3>";
                break;
            }
        }
        if($flag == 0){
            echo "<h3>Không tìm thấy từ này.</h3>";
        }
    }
?>