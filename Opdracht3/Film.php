<?php


class Film extends Product
{
    private $films=[];



    public function addFilms($films)
    {
        $this->films[] = $films;
    }


}
