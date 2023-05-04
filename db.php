<?php
require_once './Models/Shop.php';

require_once './Models/Product.php';

require_once './Models/AnimalGenre.php';

require_once './Models/TypeProduct.php';


$animalShop = new Shop('Animal Shop', 'Rome', '9:00 - 19:00');



$dogKibbles = new Product('Animal Shop', 'Rome', '9:00 - 19:00', 'Croccantini per Cani', 10.50, 15, new AnimalGenre('Cani', '0 - 10kg'), new TypeProduct('Cibo', '1000 gr', 'Monge'));

$catKibbles = new Product('Animal Shop', 'Rome', '9:00 - 19:00', 'Croccantini per Gatti', 10.50, 7, new AnimalGenre('Gatti', '0 - 10kg'), new TypeProduct('Cibo', '1000 gr', 'Monge'));


$catToy = new Product('Animal Shop', 'Rome', '9:00 - 19:00', 'Tiragraffi per Gatti', 47.90, 25, new AnimalGenre('Gatti', '0 - 20kg'), new TypeProduct('Gioco', '8,5 kg', 'Bakaji'));
