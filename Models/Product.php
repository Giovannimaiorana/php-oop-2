<?php
//Creazione classe product con istanze 
class Product{
    public $productName;
    public $description;
    public $img;
    public $category; //cane/gatto
    protected $price;
    

    public function __construct(string $productName, string $description, string $img, string $category, int $price){
        $this->productName = $productName;
        $this->description = $description;
        $this->img = $img;
        $this->category = $category;
        $this->price = $price;
    }
    
    public function getProductName(){
        return $this->productName;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getImg(){
        return $this->img;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getPrice(){
        return $this->price;
    }
    
}