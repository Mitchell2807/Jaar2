<?php


class Music extends Product
{
    private $songs=[];



    public function addSongs($songs)
    {
        $this->songs[] = $songs;
    }


}
