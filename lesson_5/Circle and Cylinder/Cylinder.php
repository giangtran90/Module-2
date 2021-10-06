<?php
namespace Cylinders;
use Circles\Circle;

class Cylinder extends Circle 
{
    public int|float $height;

    public function __construct($ts_name, $ts_color, $ts_radius, $ts_height)
    {
        parent::__construct($ts_name, $ts_color, $ts_radius);
        $this->height = $ts_height;
    }

    public function calculateArea(): int|float
    {
        return 2 * parent::calculateArea() + 2 * parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(): int|float
    {
        return parent::calculateArea() * $this->height;
    }

    public function __toString(): string
    {
        return "<br/><b>My name is: </b>" . $this->name . "<br/><b>My color is: </b>" .
        $this->color . "<br/><b>My Area is: </b>" . $this->calculateArea() . 
        "<br/><b>My Volume is: </b>" . $this->calculateVolume();
    }
}
?>