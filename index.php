<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ .'/DB.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop-2</title>
    <link rel="stylesheet" href="/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<h1 class="text-center my-5">Prodotti per animali</h1>
<div class="container w-100  d-flex justify-content-around">
    <div class="row w-100">
      <?php foreach ($products as  $product) { ?>
        <div class="col d-flex">
         <div class="card ml-2" style="width: 15rem;">
           <img src="<?= $product->img?>" class="card-img-top" >
           <div class="card-body">
            <h5 class="card-title"><?= $product->productName ?></h5>
            <p class="card-text"> <?= $product->description ?></p>
            <p class="card-text"> <?= $product->price ?></p>
            
            <?php if($product->getClassName() == 'Toy'){ ?>
                <p class="card-text mt-4"> <?= $product->COD ?></p>
                <p class="card-text mt-4"> <?= $product->Color ?></p>
            <?php }else if($product->getClassName() == 'Sit'){ ?>
                <p class="card-text mt-4"> <?= $product->material ?></p>
            <?php }else if($product->getClassName() == 'Food'){ ?>
                <p class="card-text mt-4"> <?= $product->type ?></p>
            <?php }?>    
            <a href="#" class="btn btn-primary">Shop Now!</a>

        </div>
        </div>
      <?php } ?>
    </div>
  </div>

</body>
</html>