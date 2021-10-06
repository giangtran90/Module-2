<?php
include_once (dirname (__FILE__) .'/../Abstract/Animal.php');

class Tiger extends Animal
{
    public function makeSound(): string
    {
        return "grao...grao...!";
    }
}