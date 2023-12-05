<?php

class Product
{
    protected $quantity;
    protected $price;
    protected $id;
    protected $title;

    function __construct($quantity, $price, $id, $title)
    {
        $this->quantity = $quantity;
        $this->price = $price;
        $this->id = $id;
        $this->title = $title;

    }
    // public function printCard()
    // {
    //     $quantity = $this->quantity;
    //     $price = $this->price;
    //     include __DIR__ . "/../Views/card.php";
    // }

}
?>