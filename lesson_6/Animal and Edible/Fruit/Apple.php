<?php
include_once (dirname (__FILE__) .'/../Abstract/Fruit.php');
class Apple extends Fruit
{
    function howToEat(): string
    {
        return "please eat to me!";
    }
}