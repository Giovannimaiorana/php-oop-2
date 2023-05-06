<?php
require_once __DIR__ .'/Product.php';

class Sit extends Product {
    public $material;

    public function __construct ( $productName, $description,  $img, $category, $price, $material){
        parent::__construct( $productName, $material, $description,  $img, $category,  $price);
        $this->material=$material;
    }
    public function getMaterial(){
        return $this->material;
    }
}


?>