<?php
require_once './Product.php';

class Toy extends Product
{
    public $specifics;
    public $size;

    public function __construct($animal_type, $product_type, $price, $thumb, $specifics, $size)
    {
        parent::__construct($animal_type, $product_type, $price, $thumb);

        $this->specifics = $specifics;
        $this->size = $size;
    }
}
