<?php

class Rectangle
{
    public int $width;
    public int $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // calculate area
    public function getArea() : int
    {
        echo "<br/>";
        return $this->width * $this->height;
    }

    // calculate perimeter
    public function getPerimeter() : int
    {
        echo "<br/>";
        return ($this->width + $this->height) * 2;
    }

    // display width and height
    public function display() : string
    {
        echo "<br/>";
        return "width = " . $this->width . ", height = " . $this->height;
    }

}
?>