<?php

require_once './db.php';


$products = [
    $dogKibbles,
    $catKibbles,
    $catToy
];


$shopName = $animalShop->name;


?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <?php
    include './Views/partials/header.php';
    ?>

    <main>
        <div class="container pt-4">
            <h1 class="text-center mb-4">Animal Shop</h1>


            <h2 class="mb-3">
                Prodotti Negozio:
            </h2>


            <div class="d-flex gap-5">
                <?php foreach ($products as  $product) {
                ?>
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product->productName ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $product->typeProduct->typeProduct ?> per <?php echo $product->animalGenre->animalName ?>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Marca: <strong><?php echo $product->typeProduct->brand ?></strong>

                            </li>
                            <li class="list-group-item">
                                Peso animale max: <strong><?php echo $product->animalGenre->animalWeight ?></strong>
                            </li>
                            <li class="list-group-item">
                                Prezzo: <strong><?php echo $product->price ?>€</strong>
                                <br>
                                Saldo: <strong><?php if ($product->discount > 0) {
                                                    echo $product->discount . '%';
                                                } else {
                                                    echo 'Nessuno sconto';
                                                }
                                                ?>
                                </strong>
                            </li>
                            <li class="list-group-item">
                                Peso prodotto: <strong><?php echo $product->typeProduct->productWeight ?></strong>
                            </li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Shop</a>
                        </div>
                    </div>

                <?php
                }
                ?>



            </div>

        </div>
    </main>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>