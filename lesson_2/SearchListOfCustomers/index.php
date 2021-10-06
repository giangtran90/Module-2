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
$customerList = [
    "1" => [
        "name" => "Nguyễn Thị A",
        "dayOfBirthday" => "2021/08/21",
        "address" => "Thanh Hóa",
        "image" => "images/anh1.jpg"],
    "2" => [
        "name" => "Nguyễn Thị B",
        "dayOfBirthday" => "2021/08/23",
        "address" => "Đà Nẵng",
        "image" => "images/anh 2.jpg"],  
    "3" => [
        "name" => "Nguyễn Thị C",
        "dayOfBirthday" => "2021/09/02",
        "address" => "Nam Định",
        "image" => "images/anh 3.jpg"],
    "4" => [
        "name" => "Nguyễn Thị D",
        "dayOfBirthday" => "2021/10/20",
        "address" => "Hà Nội",
        "image" => "images/anh 4.jpg"],
    "5" => [
        "name" => "Nguyễn Thị E",
        "dayOfBirthday" => "2021/06/14",
        "address" => "Hà Nam",
        "image" => "images/anh 5.jpg"]
];

function searchByDate($customers, $fromDate, $toDate) 
{   
    // empty: hàm kiểm tra dữ liệu rỗng
    if (empty($fromDate) || empty($toDate))
    {
        return $customers;
    }

    $filteredCustomers = [];
    /* Hàm strtotime() sẽ phân tích bất kỳ chuỗi thời gian bằng tiếng anh 
    thành một số nguyên chính là timestamp của thời gian đó.*/
    foreach ($customers as $customer)
    {
        if (strtotime($customer['dayOfBirthday']) < strtotime($fromDate))
        {
            continue;
        }

        if (strtotime($customer['dayOfBirthday']) > strtotime($toDate))
        {
            continue;
        }

        $filteredCustomers[] = $customer;
    }
    return $filteredCustomers;
}

$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "POST" )
{
    $fromDate = $_REQUEST["from"];
    $toDate = $_REQUEST["to"];

}

$filteredCustomers = searchByDate($customerList, $fromDate, $toDate);

?> 

<form action="" method="post">
    Select day of birth: <br />
    From:
    <input type="date" name = "from" placeholder="dd/mm/yyyy"/>
    To:
    <input type="date" name = "to" placeholder="dd/mm/yyyy"/>
    <input type = "submit" value = "Fillter"/>

</form>

<table border="1">
  <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th id="col">STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th id="col">Ảnh</th>
    </tr>
     
    <?php foreach($filteredCustomers as $key => $values):?>
        <tr>
            <td id="col"><?php echo $key + 1; ?></td>
            <td><?php echo $values['name']; ?></td>
            <td><?php echo $values['dayOfBirthday']; ?></td>
            <td><?php echo $values['address']; ?></td>
            <td id="col"><img src="<?php echo $values['image'] ?>" alt="" width = "60px" height = "60px"/></td>
        </tr>
    <?php endforeach; ?>
 </table>
</body>
</html>