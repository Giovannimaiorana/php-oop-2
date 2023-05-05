<?php
require_once __DIR__ .'/Product.php';

class Sit extends Product {
    private $material;

    public function __construct ( $productName, $material,  $description,  $img, $category, $price){
        parent::__construct( $productName,  $description,  $img, $category,  $price);
        $this->material=$material;
    }
    public function getMaterial(){
        return $this->material;
    }
}


?>