<?php

class SetPlayer
{
    public string $playerName;
    public int $markScore;

    public function __construct($playerName = "", $markScore = 0)
    {
        $this->playerName = $playerName;
        $this->markScore  = $markScore;
    }

    public function setPlayerName($playerName): void
    {
        $this->playerName = $playerName;
    }

    public function getPlayerName(): string
    {
        return $this->playerName;
    }

    public function setMarkScore($markScore): void
    {
        $this->markScore = $markScore;
    }

    public function getMarkScore(): string
    {
        return $this->markScore;
    }

}

class TennisGame
{
    public string $score  = '';
    public function equalScore ($markScoreOne)
    {
        switch ($markScoreOne) 
        {
            case 0:
                $this->score = "Love-All";
                break;
            case 1:
                $this->score = "Fifteen-All";
                break;
            case 2:
                $this->score = "Thirty-All";
                break;
            case 3:
                $this->score = "Forty-All";
                break;
            default:
                $this->score = "Deuce";
                break;
        }
    }

    public function minusResult ($markScoreOne, $markScoreTwo)
    {
        $minusResult = $markScoreOne - $markScoreTwo;
        if ($minusResult == 1)
        {
            $this->score = "Advantage player1";
        } 
        else if ($minusResult == -1)
        {
            $this->score = "Advantage player2";
        } 
        else if ($minusResult >= 2)
        {
            $this->score = "Win for player1";
        } 
        else
        {
            $this->score = "Win for player2";
        } 
    }

    public function compareScore ($markScoreOne, $markScoreTwo)
    {
        for ($i = 1; $i < 3; $i++) 
        {
            if ($i == 1) $tempScore = $markScoreOne;
            else 
            {
                $this->score .= " - ";
                $tempScore = $markScoreTwo;
            }
            switch ($tempScore) 
            {
                case 0:
                    $this->score .= "Love";
                    break;
                case 1:
                    $this->score .= "Fifteen";
                    break;
                case 2:
                    $this->score .= "Thirty";
                    break;
                case 3:
                    $this->score .= "Forty";
                    break;
            }
        }
    }

    public function getScore ($markScoreOne, $markScoreTwo)
    {
        $tempScore = 0;

        if ($markScoreOne == $markScoreTwo) 
        {
            $this->equalScore($markScoreOne);
        }
        else if ($markScoreOne >= 4 || $markScoreTwo >= 4) 
        {
            $this->minusResult($markScoreOne, $markScoreTwo);
        }
        else 
        {
            $this->compareScore($markScoreOne, $markScoreTwo);
        }
    }
    
    public function __toString(): string
    {
        return $this->score;
    }
}