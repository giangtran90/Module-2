<?php
include_once (dirname (__FILE__) .'/../Abstract/Fruit.php');
class Orange extends Fruit
{
    function howToEat(): string
    {
        return "酸っぱいですよ。";
    }
}