<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị thời gian</title>
</head>
<body>
    <?php 
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $format = "%H:%M:%S %d-%B-%Y";
    $timestamp = time();
    echo "<br/>" . $strTime = strftime($format, $timestamp );
    echo  "<br />";
    echo "<br/>" . "Timestamp:" . $timestamp;
    ?>
    <h1>Now Ho Chi Minh Time: <?php echo date('h:i:s D d-M-Y'); ?></h1>
</body>
</html>