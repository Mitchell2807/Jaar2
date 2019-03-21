<?php

class Productlist
{
    private $products=[];

    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        $print="";
        foreach($this->products as $product)
        {
            $print .= $product->getName()."<br>";
            $print .=$product->getCategory()."<br>";
            $print .=$product->getSell()."<br>";
        }
        return $print;
    }
}