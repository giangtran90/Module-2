<?php
namespace Rectangles;
use Shapes\Shape;

class Rectangle extends Shape 
{
    public int|float $width;
    public int|float $height;

    public function __construct($ts_name, $ts_width, $ts_height)
    {
        parent::__construct($ts_name);
        $this->width    = $ts_width;
        $this->height   = $ts_height;
    }

    public function calculateArea(): int|float
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter(): int|float
    {
        return ($this->width + $this->height) * 2;
    }
}
?>