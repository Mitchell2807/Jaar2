<?php

//foreach loop ergens gebruiken om kamers op te tellen.

class House
{
    private $rooms;
    private $pricepermeter;

    public function addPricepermeter($pricepermeter)
    {
        $this->pricepermeter=$pricepermeter;
    }

    public function addRoom($room)
    {
        $this->rooms[]=$room;
    }

    public function getHouse()
    {
        $rooms=count($this->rooms);
        $volume=array_sum($this->rooms);
        $price=$volume*$this->pricepermeter;

        return "Kamers: ".$rooms.
         "<br>Inhoud: ".$volume.
         "<br>prijs: ".$price;
    }

}