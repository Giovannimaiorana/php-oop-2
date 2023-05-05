<?php

require_once __DIR__ .'/Product.php';

class Toy extends Product{
    private $year ;
    public  $COD;

    public function __construct (  $productName, $year, $COD,  $description,  $img, $category, $price){
        parent::__construct ( $productName,  $description,  $img, $category,  $price);
        $this->year=$year;
        $this->COD=$COD;
    }
    public function getYear(){
        return $this->year;
    }
    public function getCOD(){
        return $this->COD;
    }
}