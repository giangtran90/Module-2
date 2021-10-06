<?php
namespace Squares;

include_once (dirname (__FILE__) . '/InterfaceResizeable.php');
include_once (dirname (__FILE__) . '/Colorable.php');

use Rectangles\Rectangle;
use Resizeables\Resizeable;
use Colorables\Colorable;

class Square extends Rectangle implements Resizeable, Colorable 
{
    public function __construct($ts_name, $ts_width)
    {
        parent::__construct($ts_name, $ts_width, $ts_width);
    }

    public function resize($ts_percent): string
    {   $this->percent = $ts_percent;
        return "<b>After up to </b>" . $this->percent . "<b>%. Area is: </b>" . 
        $this->calculateArea() + $this->calculateArea() * $this->percent/100;
    }

    public function howToColor(): string
    {
        return "<b>Color all four sides.</b>";
    }
}
?>