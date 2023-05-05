<?php
require_once './Models/Shop.php';

require_once './Models/Product.php';




$animalShop = new Shop('Animal Shop', 'Rome', '9:00 - 19:00', 'Via Palmiro Togliatti,101');



$dogKibbles = new Product('Animal Shop', 'Rome', '9:00 - 19:00', 'Via Palmiro Togliatti,101', 'Croccantini per Cani', 10.50, 15, new AnimalGenre('Cani', '0 - 10kg'), new TypeProduct('Cibo', '1000 gr', 'Monge'), 'https://cdn.manomano.com/images/images_products/5040562/P/9531782_1.jpg');

$catKibbles = new Product('Animal Shop', 'Rome', '9:00 - 19:00', 'Via Palmiro Togliatti,101', 'Croccantini per Gatti', 10.50, 1007, new AnimalGenre('Gatti', '0 - 10kg'), new TypeProduct('Cibo', '1000 gr', 'Monge'), 'https://cdn.manomano.com/images/images_products/13100073/P/20106880_1.jpg');


$catToy = new Product('Animal Shop', 'Rome', '9:00 - 19:00', 'Via Palmiro Togliatti,101', 'Tiragraffi per Gatti', 47.90, 25, new AnimalGenre('Gatti', '0 - 20kg'), new TypeProduct('Gioco', '8,5 kg', 'Bakaji'), 'https://cdn.manomano.com/images/images_products/396180/P/1788113_1.jpg');

$dogsKennel = new Product('Animal Shop', 'Rome', '9:00 - 19:00', 'Via Palmiro Togliatti,101', 'Cuccia per Cani', 235.90, 5, new AnimalGenre('Cani', '0 - 30kg'), new TypeProduct('Cuccia', '23,5 kg', 'PawHut'), 'https://cdn.manomano.com/images/images_products/474999/P/59115712_1.jpg');

$catKennel = new Product('Animal Shop', 'Rome', '9:00 - 19:00', 'Via Palmiro Togliatti,101', 'Cuccia per Gatti', 50.87, 12, new AnimalGenre('Gatti', '0 - 30kg'), new TypeProduct('Cuccia', '6 kg', 'PawHut'), 'https://cdn.manomano.com/images/images_products/1240384/P/13218263_1.jpg');


$catKennel2 = new Product('Animal Shop', 'Rome', '9:00 - 19:00', 'Via Palmiro Togliatti,101', 'Cuccia per Gatti', 79.95, 2, new AnimalGenre('Gatti', '0 - 30kg'), new TypeProduct('Cuccia', '5,56 kg', 'RelaxDays'), 'https://cdn.manomano.com/images/images_products/4388982/P/57541641_1.jpg');


$toyBall = new Product('Animal Shop', 'Rome', '9:00 - 19:00', 'Via Palmiro Togliatti,101', 'Palla Giocattolo', 7.59, 39, new AnimalGenre('Cani', '0 - 50kg'), new TypeProduct('Gioco', '15000 gr', 'Bakaji'), 'https://cdn.manomano.com/images/images_products/8229909/P/69831490_1.jpg');


$meatCats = new Product('Animal Shop', 'Rome', '9:00 - 19:00', 'Via Palmiro Togliatti,101', 'Mousse per Gatto di  Tacchino', 0.77, 93, new AnimalGenre('Gatti', '0 - 20kg'), new TypeProduct('Cibo', '85 gr', 'Gourmet Gold'), 'https://cdn.manomano.com/images/images_products/5040562/P/9531190_1.jpg');
