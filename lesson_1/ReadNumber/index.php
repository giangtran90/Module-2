<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc số thành chữ</title>
</head>
<body>

    <?php
        $numbersFromTokeys = array(
            "1" => "one", "2" => "two", "3" => "three", "4" => "four", "5" => "five",
            "6" => "six", "7" => "seven", "8" => "eight", "9" => "nine", "10" => "ten",
            "11" => "eleven", "12" => "twelve", "13" => "thirteen", "14" => "fourteen", "15" => "fifteen",
            "16" => "sixteen", "17" => "seventeen", "18" => "eighteen", "19" => "nineteen", "20" => "twenty",
            "30" => "thirty", "40" => "forty", "50" => "fifty", "60" => "sixty", "70" => "seventies",
            "80" => "eighty", "90" => "ninety", "100" => "one hundred", "110" => "one hundred ten", "111" => "one hundred eleven",
            "112" => "one hundred twelve", "113" => "one hundred thirteen", "114" => "one hundred fourteen", "115" => "one hundred fifteen",
            "116" => "one hundred sixteen", "117" => "one hundred eventeen", "118" => "one hundred eighteen", "119" => "one hundred nineteen", "120" => "one hundred twenty",
            "130" => "one hundred thirty", "140" => "one hundred forty", "150" => "one hundred fifty", "160" => "one hundred sixty", "170" => "one hundred seventies",
            "180" => "one hundred eighty", "one hundred 190" => "ninety",
            "200" => "two hundred", "300" => "three hundred",
        );
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $readnumber = $_POST["number"];

            foreach ($numbersFromTokeys as $numbers => $key) {
                $twenty = "2"; $thirty = "3"; $forty = "4"; $fifty = "5"; $sixty = "6"; $seventies = "7"; $eighty = "8"; $ninety = "9";
                $onehundred = "10"; $onehund = "1"; $twohundred = "20";
                switch ($readnumber) 
                {
                    case $numbers : echo "number: " . $numbers . " read the key is: " . $key; break;
                    case $twenty . $numbers : echo "number: " . $twenty . $numbers . " read the key is: twenty " . $key; break;
                    case $thirty . $numbers : echo "number: " . $thirty . $numbers . " read the key is: thirty " . $key; break;
                    case $forty . $numbers : echo "number: " . $forty . $numbers . " read the key is: forty " . $key; break;
                    case $fifty . $numbers : echo "number: " . $fifty . $numbers . " read the key is: fifty " . $key; break;
                    case $sixty . $numbers : echo "number: " . $sixty . $numbers . " read the key is: sixty " . $key; break;
                    case $seventies . $numbers : echo "number: " . $seventies . $numbers . " read the key is: seventies " . $key; break;
                    case $eighty . $numbers : echo "number: " . $eighty . $numbers . " read the key is: eighty " . $key; break;
                    case $ninety . $numbers : echo "number: " . $ninety . $numbers . " read the key is: ninety " . $key; break;
                    
                    case $onehundred . $numbers :                        
                            echo "number: " . $onehundred . $numbers . " read the key is: one hundred " . $key; break; 
                            
                    case $onehund . $twenty . $numbers : echo "number: " . $onehund . $twenty . $numbers . " read the key is: one hundred twenty " . $key; break;
                    case $onehund . $thirty . $numbers : echo "number: " . $onehund . $thirty . $numbers . " read the key is: one hundred thirty " . $key; break;
                    case $onehund . $forty . $numbers : echo "number: " . $onehund . $forty . $numbers . " read the key is: one hundred forty " . $key; break;
                    case $onehund . $fifty . $numbers : echo "number: " . $onehund . $fifty . $numbers . " read the key is: one hundred fifty " . $key; break;
                    case $onehund . $sixty . $numbers : echo "number: " . $onehund . $sixty . $numbers . " read the key is: one hundred sixty " . $key; break;
                    case $onehund . $seventies . $numbers : echo "number: " . $onehund . $seventies . $numbers . " read the key is: one hundred seventies " . $key; break;
                    case $onehund . $eighty . $numbers : echo "number: " . $onehund . $eighty . $numbers . " read the key is: one hundred eighty " . $key; break;
                    case $onehund . $ninety . $numbers : echo "number: " . $onehund . $ninety . $numbers . " read the key is: one hundred ninety " . $key; break;
                    
                    case $twohundred . $numbers : 
                            echo "number: " . $twohundred . $numbers . " read the key is: two hundred " . $key; break;
                }
            }
        }
    ?>

    <form action="" method="post">
        <h4>Nhập số:</h4>
        <input type = "number" name = "number" placeholder="input number"/>
        <input type = "submit" value = "Read numbers"/>
    </form>
</body>
</html>