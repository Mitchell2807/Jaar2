<?php


class Game extends Product
{
    private $games=[];

    public function addGames($games)
    {
        $this->games[] = $games;
    }


}
