<?php
require_once __DIR__. '/Models/Product.php';
require_once __DIR__. '/Models/Toy.php';
require_once __DIR__. '/Models/Sit.php';
require_once __DIR__. '/Models/Food.php';
require_once __DIR__. '/Models/Category.php';

$dog = new Categories('Cane','fa-solid fa-dog');
$cat = new Categories('Gatto','fa-solid fa-cat');

$products=[
    new Toy('Gioco Cane Gomma Rope Violet','Gioco Cane Gomma Rope Violet ROPE è un gioco per cani morbido in gomma a forma di osso.','https://arcaplanet.vtexassets.com/arquivos/ids/273311/GIOCO-CANE-GOMMA-ROPE-M-VIOLET-CM.18X6X4.7.jpg?v=1768568496',$dog,'$5.90','345672534'),
    new Toy('Gioco Cane Gomma Twist Rose','Gioco Cane Gomma Twist Orange Gioco in caucciù dai colori sgargianti, senza sostanze tossiche.','https://arcaplanet.vtexassets.com/arquivos/ids/273305/GIOCO-CANE-GOMMA-TWIST-M-ROSE-CM.16.7X7X4.7.jpg?v=1768568492',$dog,'$7.00', '34567364'),
    new Food('Advance Diet Dog Articular','Alimento dietetico per cani completo ed equilibrato, formulato per il recupero e l\'appoggio nutrizionale al trattamento medico dei cani con affezioni articolari.','https://arcaplanet.vtexassets.com/arquivos/ids/276913/ID_62230_AVET_DOG_ARTICULAR_CARE_3KG.jpg?v=1768695482',$dog,'$25.49','pollo'),
    new Food('Hills Prescription, Alimento secco per Gatti','Alimento secco dietetico per gatti adulti con intolleranze o allergie alimentari','https://arcaplanet.vtexassets.com/arquivos/ids/269351/hills-prescription-diet-z-d-food-sensitivities-gatto.jpg?v=1769699296',$cat,'$65.90','carne'),
    new Sit('Cuccia Poker Ind','https://arcaplanet.vtexassets.com/arquivos/ids/273273/LOVEDI-CUCCIA-POKER-INDI-CM.53X53X23.jpg?v=1768082791', $cat, '$33.75','cuccia in tessuto','Tessuto'),
]
?>