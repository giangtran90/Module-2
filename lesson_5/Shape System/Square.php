<?php
namespace Squares;
use Rectangles\Rectangle;

class Square extends Rectangle
{
    public function __construct($ts_name, $ts_width)
    {
        parent::__construct($ts_name, $ts_width, $ts_width);
    }
}
?>