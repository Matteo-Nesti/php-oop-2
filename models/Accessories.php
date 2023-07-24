<?php
require_once '../Product.php';

class Toy extends Product
{
    public $materials;
    public $size;

    public function __construct($animal_type, $product_type, $price, $thumb, $materials, $size)
    {
        parent::__construct($animal_type, $product_type, $price, $thumb);

        $this->materials = $materials;
        $this->size = $size;
    }
}
