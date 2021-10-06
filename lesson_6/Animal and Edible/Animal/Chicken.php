<?php
include_once (dirname (__FILE__) .'/../Abstract/Animal.php');
include_once (dirname (__FILE__) . '/../Interface Edible/Edible.php');

class Chicken extends Animal implements Edible
{
    public function makeSound(): string
    {
        return "o ó o o!";
    }

    public function howToEat(): string
    {
        return "Hãy thịt tôi đi";
    }
}