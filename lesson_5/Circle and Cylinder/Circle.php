<?php
namespace Circles;

class Circle
{
    public string $name;
    public string $color;
    public int|float $radius;

    public function __construct($ts_name, $ts_color, $ts_radius)
    {
        $this->name     = $ts_name;
        $this->color    = $ts_color;
        $this->radius   = $ts_radius;
    }

    public function calculateArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(): int|float
    {
        return 2 * pi() * $this->radius;
    }

    public function __toString(): string
    {
        return "<br/><b>My name is: </b>" . $this->name . "<br/><b>My color is: </b>" .
        $this->color . "<br/><b>My Area is: </b>" . $this->calculateArea() . 
        "<br/><b>My Perimeter is: </b>" . $this->calculatePerimeter();
    }
}
?>