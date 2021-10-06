<?php

//khai báo hằng SLOW, MEDIUM, FAST
define('SLOW', '1');
define('MEDIUM', '2');
define('FAST ', '3');

class Fan
{
    public int $speed;
    public bool $on;
    public float $radius;
    public string $color;

    public function __construct()
    {
        // default value: speed, on, radius, color
        $this->speed = SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "Blue";
    }
    // sets speed value
    public function setSpeed($ts_speed) : void
    {
        $this->speed = $ts_speed;
    }
    private function getSpeed()
    {
        return $this->speed;
    }
    // sets On value
    public function setOn($ts_on) : void
    {
        $this->on = $ts_on;
    }
    private function getOn() : bool
    {
        return $this->on;
    }
    // sets fan radius value
    public function setRadius($ts_radius) : void
    {
        $this->radius = $ts_radius;
    }
    private function getRadius() : float
    {
        return $this->radius;
    }
    // sets fan color value
    public function setColor($ts_color) : void
    {
        $this->color = $ts_color;
    }
    private function getColor() : string
    {
        return $this->color;
    }
    // display fan status
    public function __toString()
    {
        if ($this->on == true)
        {
            return "<br/>" . "Fan is on " . "<br/>" . "Fan color: " . $this->color . "<br/>" .
            "Fan radius: " . $this->radius . "<br/>" ."Fan is running at speed: " . $this->speed . "<br/>";  
        }

        else
        {
            return "<br/>" . "Fan is off " . "<br/>" . "Fan color: " . $this->color . "<br/>" ."Fan radius: " . 
            $this->radius . "<br/>"; 
        }
    }
}

?>