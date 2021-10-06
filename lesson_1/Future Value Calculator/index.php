<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính lãi suất</title>

    <style>
        .error{
            color: red;
        }

        form{
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .sub{
            margin-left: 54px;
        }

    </style>
</head>
<body>
<!-- Ứng dụng Future Value Calculator được sử dụng để tính giá trị tương lai đối với các khoản tiền đầu tư.

Trang đầu tiên chứa form để nhập vào 3 dữ liệu chính:

Inventment Amount: Lượng tiền đầu tư ban đầu
Yearly Interest Rate: Lãi suất năm
Number of Years: Số năm đầu tư
Sau khi nhấn nút Calculate thì sẽ nhận được giá trị trong tương lai sẽ nhận được.

Công thức tính giá trị tương lai cho 1 năm:

Giá trị Tương lai = Giá trị Hiện tại + (Giá trị Hiện tại * Lãi suất) -->
<?php

function calculateMoney($inputMoney, $interestRate, $numberYears)
{
    $moneyReceived = $inputMoney + $inputMoney * $interestRate;
    for ($i = 1; $i < $numberYears; $i++)
    {
        $moneyReceived = $moneyReceived + $moneyReceived * $interestRate; 
    }
    return $moneyReceived;
}

$inputMoneyErr = null;
$interestRateErr = null;
$numberYearErr = null;
$inputMoney = null;
$interestRate = null;
$numberYears = null;
$result = null;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $inputMoney = (float)$_REQUEST["input_money"];
    $interestRate = (float)$_REQUEST["interest_rate"];
    $numberYears = (float)$_REQUEST["numbers_year"];
    $flag = false;

    if (empty($inputMoney))
    {
        $inputMoneyErr = "please input money! Do not leave blank";
    }

    if (empty($interestRate))
    {
        $interestRateErr = "please input interest rate! Do not leave blank";
    }
    
    if (empty($interestRate))
    {
        $numberYearErr = "please input number year! Do not leave blank";
    }
    else
    {
        $result = calculateMoney($inputMoney, $interestRate, $numberYears);
        $inputMoney = null;
    }

}
?>

<form action="index.php" method="post">
    <fieldset>
        <legend>Future Value Calculator</legend>
        Investment Amount: <br/>
        <input type = "text" name = "input_money" value = "<?php echo $inputMoney;?>"placeholder = "Nhập số tiền" />
        <span class="error">* <?php echo $inputMoneyErr; ?></span> <br/>
        Yearly Interest Rate:<br/>
        <input type = "text" name = "interest_rate" value = "<?php echo $interestRate;?>" placeholder = "Nhập lãi suất" />
        <span class = "error">* <?php echo $interestRateErr; ?></span> <br/>
        numbers of Years:<br/>
        <input type = "text" name = "numbers_year" value = "<?php echo $numberYears;?>" placeholder = "Nhập số năm" />
        <span class = "error">* <?php echo $numberYearErr; ?></span> <br/>
        <br/>
        <input class = "sub" type = "submit" value = "calculate"/>
        <br/> <br/>
        <textarea name="result" id="" cols="30" rows="5"><?php echo "Money received after " . $numberYears . " years is: " . $result;?></textarea>

    </fieldset>
</form>
</body>
</html>