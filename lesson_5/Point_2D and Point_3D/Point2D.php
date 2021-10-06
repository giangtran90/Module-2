<?php
namespace Point_2D;

class Point2D
{
    public float $x;
    public float $y;

    public function __construct(float $ts_x = 0, float $ts_y = 0)
    {
        $this->x = $ts_x;
        $this->y = $ts_y;
    }

    public function setX(float $ts_x): void
    {
        $this->x = $ts_x;
    }

    public function setY(float $ts_y): void
    {
        $this->y = $ts_y;
    }

    public function getX(): float 
    {
        return $this->x;
    }

    public function getY(): float 
    {
        return $this->y;
    }

    public function setXY(float $ts_x, float $ts_y): void
    {
        $this->arrayXY[]= [$ts_x, $ts_y];
    }

    public function getXY(): array
    {
        return $this->arrayXY;
    }

    public function __toString(): string
    {
        $string = "";
        foreach($this->getXY() as $value) {
            $string .= "X = " . $value[0] .  ". Y = " . $value[1] . "<br/>";
        }
        return $string;
    }
}

?>