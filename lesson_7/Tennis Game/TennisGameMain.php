<?php

include ('TennisGame.php');

$player_1 = new SetPlayer();
$player_1->setPlayerName("Giang");
$player_1->setMarkScore(6);
$Score_1 = $player_1->getMarkScore();

echo "<pre>";
print_r($player_1);

$player_2 = new SetPlayer();
$player_2->setPlayerName("Hung");
$player_2->setMarkScore(8);
$Score_2 = $player_2->getMarkScore();

echo "<pre>";
print_r($player_2);

$tennisGame = new TennisGame();

echo "<pre>";

$tennisGame->getScore ($Score_1, $Score_2);
echo $tennisGame;
