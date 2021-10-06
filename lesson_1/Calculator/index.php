<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <?php

        $result = null;
        $divErr = null;

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $firstOperand = (float)$_REQUEST['firstOperand'];
            $operator = $_REQUEST['operator'];
            $secondOperand = (float)$_REQUEST['secondOperand']; 

            switch ($operator) 
            {
                case '+': 
                    $result = $firstOperand + $secondOperand; 
                    break;
                case '-':
                    $result = $firstOperand - $secondOperand; 
                    break;
                case 'x':
                    $result = $firstOperand * $secondOperand; 
                    break;
                case '/':
                    if ($secondOperand != 0)
                    {
                        $result = $firstOperand / $secondOperand; 
                        break;
                    }
                    else
                    {
                        $divErr = "Cannot divide by zero";
                    }                    
            }
        }
    ?>
    

    <form action="" method="post">
        <fieldset>
            <legend>Simple Calculator</legend>
            <b>First Operand: </b>
            <input type="number" name="firstOperand" id=""><br/>
            <b>Operator: </b>   <select name = "operator">
                                    <option value="+"> + </option>
                                    <option value="-"> - </option>
                                    <option value="x"> x </option>
                                    <option value="/"> / </option>
                                </select><br/>
            <b>Second Operand: </b>
            <input type="number" name="secondOperand" id=""><br/>
            <br/>
            <input type="submit" value="Result">
            <?php echo "<br/>" . "Result: " . $firstOperand . " " . $operator . " " . $secondOperand . " = " . $result?>
            <span class="error"><?php echo $divErr ?></span>
        </fieldset>
    </form>
</body>
</html>