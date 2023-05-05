<?php
require_once __DIR__. '/Models/Product.php';
require_once __DIR__. '/Models/Toy.php';
require_once __DIR__. '/Models/Sit.php';
require_once __DIR__. '/Models/Food.php';
require_once __DIR__. '/Models/Category.php';

$dog = new Category('Cane','fa-solid fa-dog');
$cat = new Category('Gatto','fa-solid fa-cat');

$products=[
    new Toy('Gioco Cane Gomma Rope Violet','345672534','Gioco Cane Gomma Rope Violet ROPE è un gioco per cani morbido in gomma a forma di osso.','src="https://arcaplanet.vtexassets.com/arquivos/ids/273311/GIOCO-CANE-GOMMA-ROPE-M-VIOLET-CM.18X6X4.7.jpg?v=1768568496"',$dog,'$5.90'),
   
]
?>