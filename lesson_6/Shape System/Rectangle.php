<?php
namespace Rectangles;

include_once (dirname (__FILE__) . '/InterfaceResizeable.php');

use Shapes\Shape;
use Resizeables\Resizeable;

class Rectangle extends Shape implements Resizeable  
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

    public function resize($ts_percent): string
    {   $this->percent = $ts_percent;
        return "<b>After up to </b>" . $this->percent . "<b>%. Area is: </b>" . 
        $this->calculateArea() + $this->calculateArea() * $this->percent/100;
    }
}
?>