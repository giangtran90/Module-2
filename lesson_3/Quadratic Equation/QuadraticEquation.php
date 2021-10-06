<?php

class QuadraticEquation
{
    public int $a;
    public int $b;
    public int $c;

    public function __construct($ts_a, $ts_b, $ts_c)
    {
        $this->a = $ts_a;
        $this->b = $ts_b;
        $this->c = $ts_c;
    }

    public function setNumberA($ts_a): void 
    {
        $this->a = $ts_a;
    }
    public function getNumberA(): int 
    {
        return $this->a;
    }

    public function setNumberB($ts_b): void 
    {
        $this->b = $ts_b;
    }
    public function getNumberB(): int  
    {
        return $this->b;
    }

    public function setNumberC($ts_c): void 
    {
        $this->c = $ts_c;
    }
    public function getNumberC(): int 
    {
        return $this->c;
    }

    public function getDiscriminant(): float
    {
        return ($this->b * $this->b) - 4 * $this->a * $this->c;
    }

    public function getRoot1(): float
    {
        $delta = $this->getDiscriminant(); 
        $root1 = ((- $this->b) + sqrt($delta)) / (2 * $this->a);
        return $root1;
    }

    public function getRoot2(): float
    {
        $delta = $this->getDiscriminant();
        $root2 = ((- $this->b) - sqrt($delta)) / (2 * $this->a);
        return $root2;
    }

    public function getResult()
    {
        $delta = $this->getDiscriminant();
        $x_1 = $this->getRoot1();
        $x_2 = $this->getRoot2();
        if ($delta < 0) 
        {
            echo "<br/>" . "The equation has no roots";
        }

        else if ($delta == 0) 
        {
            echo "<br/>" . "x_1 = x_2 = " . $x_1;
        }

        else
        {
            echo "<br/>" . "x_1 = " . $x_1 . " and " . "x_2 = " . $x_2;
        }
    }

}

?>