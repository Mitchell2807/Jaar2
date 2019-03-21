<?php

class Room
{
    private $length;
    private $width;
    private $height;

    public function __construct($length, $width, $height)
    {
        $this->length= $length;
        $this->width= $width;
        $this->height= $height;
    }

    public function getVolume()
    {
        $volume = $this->length*$this->width*$this->height;
        return $volume;
    }
}