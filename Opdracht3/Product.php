<?php


abstract class Product
{
    private $name;
    private $price;
    private $tax;
    private $description;
    private $category;
    private $win;
    private $sell;


    public function __construct($name, $price, $tax, $description, $category, $win)
    {
        $this->name = $name;
        $this->price= $price;
        $this->tax = $tax;
        $this->description= $description;
        $this->category=$category;
        $this->win=$win;
        $this->sell=$this->price*$this->tax+$this->win;

    }

    public function getName()
    {
        return "Naam: ".$this->name;
    }

    public function getCategory()
    {
        return"Categorie: " .$this->category;
    }

    public function getSell()
    {
        return "Verkoopprijs: &euro;".$this->sell."<br>";
    }

}
