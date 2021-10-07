<?php

const SUM = '+';
const SUB = '-';
const MUL = '*';
const DIV = '/';

class Calculator
{
    public function calculate($firstOperand, $secondOperand, $Operator)
    {
        switch ($Operator) {
            case SUM:
                return $firstOperand + $secondOperand;
            case SUB:
                return $firstOperand - $secondOperand;
            case MUL:
                return $firstOperand * $secondOperand;
            case DIV:
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    return "Can not divide by ";
                }
            default:
                return "Unsupported operation";
        }
    }
}