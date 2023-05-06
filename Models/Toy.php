<?php


class Toy extends Product{
    public  $COD;

    public function __construct (  $productName, $description,  $img, $category, $price, $COD){
        parent::__construct ( $productName,  $description,  $img, $category,  $price);
        $this->COD=$COD;
    }
    public function getCOD(){
        return $this->COD;
    }
}