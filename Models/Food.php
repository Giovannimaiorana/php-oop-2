<?php


class Food extends Product{
    public $type;// NB pollo o carne 

    public function __construct(  $productName, $description,  $img, $category, $price,  $type){
        parent::__construct ( $productName,  $description,  $img, $category,  $price);
        $this->type=$type;
    }
    public function getFood(){
        return $this->type;
    }
}
?>