<?php
class Product
{
    public $animal_Type;
    public $product_type;
    public $price;

    public function __construct($animal_Type, $product_type, $price)
    {
        $this->animal_Type = $animal_Type;
        $this->product_type = $product_type;
        $this->price = $price;
    }
}
