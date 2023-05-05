<?php
require_once __DIR__ .'/Product.php';

class Food extends Product{
    private $type;// NB pollo o carne 

    public function __construct(  $productName, $type,  $description,  $img, $category, $price){
        parent::__construct ( $productName,  $description,  $img, $category,  $price);
        $this->type=$type;
    }
    public function getFood(){
        return $this->type;
    }
}
?>