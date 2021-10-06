<?php

$displayErr = null;
$discountPrice = null;
$discountAmount = null;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $productDescription = $_POST["productDescription"];
    $listPrice = (float)$_POST["listPrice"];
    $discountPercent = (float)$_POST["discountPercent"];

    // Discount Amount: Lượng chiết khấu
    // Discount Price: Giá sau khi đã được chiết khấu
    // Công thức tính chiết khấu: Discount Amount = List Price * Discount Percent * 0.1 

    if (empty($productDescription) || empty($listPrice) || empty($discountPercent))
    {
        $displayErr = "Please enter full information. Do not leave blank";
    }
    else
    {
        $discountAmount = $listPrice * $discountPercent * 0.1;

        $discountPrice = $listPrice + $discountAmount;
    }

}

?>