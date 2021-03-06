<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionary</title>

<style> 
    input[type=text] 
    {
        width: 300px;
        font-size: 16px;
        border: 2px solid #ccc; 
        border-radius: 4px;
        padding: 12px 10px 12px 10px;
    }
    #submit
    {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>

</head>
<body>

<?php
    $dictionary = array(
        "hello"=>"xin chào", 
        "how"=>"thế nào", 
        "book"=>"quyển vở", 
        "computer"=>"máy tính");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchkey = $_POST["search"]; 
    $flag = 0;
    foreach($dictionary as $key => $description) {
        if($key == $searchkey){
            echo "Từ: " . $key . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    } 

    if($flag == 0){
        echo "Không tìm thấy từ cần tra.";
    }
    }
?>

    <h2>Từ Điển Anh - Việt</h2>
    <form method = "post">
        <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
        <input type = "submit" id = "submit" value = "Tìm"/>
    </form>

</body>
</html>