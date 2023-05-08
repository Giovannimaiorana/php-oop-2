<?php
trait Color {
    public $colorProd;


    public function setColorProd($colorProd){
      $this->colorProd = $colorProd;
    }

    public function getColorProd(){
        return $this->colorProd;
    }
}
?>