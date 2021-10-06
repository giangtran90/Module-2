<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Customers</title>

    <style>
    table 
    {
        border-collapse: collapse;
        width: 100%;
    }
    th, td 
    {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    #col
    {
        text-align: center;
    }
</style>

</head>
<body>

<?php
$customerlist = array(
    "1" => array("ten" => "Nguyễn Thị A", 
                 "ngaysinh" => "2000-08-20", 
                 "diachi" => "Hà Nội", 
                 "anh" => "images/anh1.jpg"),
    "2" => array("ten" => "Nguyễn Thị B", 
                 "ngaysinh" => "2000-08-20", 
                 "diachi" => "Bắc Giang", 
                 "anh" => "images/anh 2.jpg"),
    "3" => array("ten" => "Nguyễn Thị C", 
                 "ngaysinh" => "2000-08-21", 
                 "diachi" => "Nam Định", 
                 "anh" => "images/anh 3.jpg"),
    "4" => array("ten" => "Nguyễn Thị D", 
                  "ngaysinh" => "2000-08-22", 
                  "diachi" => "Hà Tây", 
                  "anh" => "images/anh 4.jpg"),
    "5" => array("ten" => "Nguyễn Thị E", 
                  "ngaysinh" => "2000-08-17", 
                  "diachi" => "Hà Nội", 
                  "anh" => "images/anh 5.jpg")
   );
?> 


<table border="1">
  <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th id="col">STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th id="col">Ảnh</th>
    </tr>
     
    <?php foreach($customerlist as $key => $values):?>
        <tr>
            <td id="col"><?php echo $key; ?></td>
            <td><?php echo $values['ten']; ?></td>
            <td><?php echo $values['ngaysinh']; ?></td>
            <td><?php echo $values['diachi']; ?></td>
            <td id="col"><img src="<?php echo $values['anh'] ?>" alt="" width = "60px" height = "60px"/></td>
        </tr>
    <?php endforeach; ?>
        <!-- // foreach($customerlist as $key => $values){
        // echo "<tr>";
        // echo "<td>".$key."</td>";
        // echo "<td>".$values['ten']."</td>";
        // echo "<td>".$values['ngaysinh']."</td>";
        // echo "<td>".$values['diachi']."</td>";
        // echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
        // echo "</tr>";
        // }
    ?>
    -->
 </table>
</body>
</html>