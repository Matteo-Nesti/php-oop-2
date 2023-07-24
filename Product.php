<?php
class Product
{
    public $animal_type;
    public $product_type;
    public $price;
    public $thumb = '';

    public function __construct($animal_type, $product_type, $price, $thumb)
    {
        $this->animal_type = $animal_type;
        $this->product_type = $product_type;
        $this->price = $price;
        $this->thumb = $thumb;
    }
}
