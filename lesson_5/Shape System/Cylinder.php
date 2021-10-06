<?php
namespace Cylinders;
use Circles\Circle;

class Cylinder extends Circle 
{
    public int|float $height;

    public function __construct($ts_name, $ts_radius, $ts_height)
    {
        parent::__construct($ts_name, $ts_radius);
        $this->height = $ts_height;
    }

    public function calculateArea(): int|float
    {
        return 2 * parent::calculateArea() + parent::calculatePerimeter() * $this->height;
    }
    // V = pi * r^2 * height
    public function calculateVolume(): int|float
    {
        return parent::calculateArea() * $this->height;
    }

}

?>