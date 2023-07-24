<?php
require_once '../Product.php';

class Food extends Product
{
    public $weight;
    public $ingredients;

    public function __construct($animal_type, $product_type, $price, $thumb, $weight, $ingredients)
    {
        parent::__construct($animal_type, $product_type, $price, $thumb);

        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
