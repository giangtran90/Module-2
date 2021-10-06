<?php
namespace Cylinders;
include_once (dirname (__FILE__) . '/InterfaceResizeable.php');

use Circles\Circle;
use Resizeables\Resizeable;

class Cylinder extends Circle implements Resizeable 
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

    public function resize($ts_percent): string
    {   $this->percent = $ts_percent;
        return "<b>After up to </b>" . $this->percent . "<b>%. Area is: </b>" . 
        $this->calculateArea() + $this->calculateArea() * $this->percent/100;
    }

}

?>