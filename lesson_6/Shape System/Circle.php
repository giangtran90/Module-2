<?php
namespace Circles;
include_once (dirname (__FILE__) . '/InterfaceResizeable.php');

use Shapes\Shape;
use Resizeables\Resizeable;

class Circle extends Shape implements Resizeable
    {
        public int|float $radius;
        public function __construct($ts_name, $ts_radius)
        {
            parent::__construct($ts_name);
            $this->radius = $ts_radius;
        }

        public function calculateArea(): int|float
        {
            return pi() * pow($this->radius, 2);
        }

        public function calculatePerimeter(): int|float
        {
            return 2 * pi() * $this->radius;
        }

        public function resize($ts_percent): string
        {   $this->percent = $ts_percent;
            return "<b>After up to </b>" . $this->percent . "<b>%. Area is: </b>" . 
            $this->calculateArea() + $this->calculateArea() * $this->percent/100;
        }
    }
    
?>
