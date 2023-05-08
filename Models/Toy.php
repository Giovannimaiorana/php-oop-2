<?php

require_once __DIR__ '/../Traits/Color.php';

class Toy extends Product{
    public  $COD;

    use Color;


    public function __construct (  $productName, $description,  $img, $category, $price, $COD, $colorProd){
        parent::__construct ( $productName,  $description,  $img, $category,  $price);
        $this->COD=$COD;
    }
    public function getCOD(){
        return $this->COD;
    }
}