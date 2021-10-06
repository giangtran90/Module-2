<?php
namespace Shapes;

class Shape
{
    public string $name;

    public function __construct($ts_name)
    {
        $this->name = $ts_name;
    }

    public function show(): string
    {
        return "<br/> <b>I am a Shape. My name is:</b> " . $this->name; 
    }
}
?>