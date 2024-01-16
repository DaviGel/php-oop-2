<?php

// require_once __DIR__ . '/Models/Product.php';
// require_once __DIR__ . '/Models/Customer.php';
// require_once __DIR__ . '/Models/Cart.php';
// require_once __DIR__ . '/Models/Order.php';
require_once __DIR__ . '/Database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-commerce PHP OOP 2</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Boostrap -->
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="mb-5 text-center">E-commerce prodotti per animali</h1>
      <!-- Card -->
      <div class="container text-center">
        <div class="row align-items-start">
          <?php foreach($products as $product) : ?>
            <div class="col-4">
              <div class="card" style="width: 18rem;">
                <img src="<?php echo $product->getImage()?>" class="card-img-top object-fit-contain img-fluid" alt="<?php echo $product->getName() ?>">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $product->getName() ?></h5>
                  <p class="card-text">Prezzo: <?php echo $product->getPrice() ?>€</p>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </body>
</html>