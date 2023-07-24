<?php

require_once './Product.php';


// array per poterci girare tramite un foreach di tutti i prodotti
$products = array(
    new Food('Cane', 'Royal Canin', 25, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 545, 'prosciutto e riso'),
    new Food('Cane', 'Almo Nature Holistic', 44.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 600, 'manzo, cereali'),
    new Food('Gatto', 'Almo Nature Cat', 34.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 400, 'tonno, pollo, prosciutto'),
    new Food('Pesce', 'Mangime per Pesci Guppy', 2, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 30, 'cereali e gamberetti'),


    new Toy('cane', 'Kong Classic', 11.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'galleggia e rimbalza', '8,5 cm x 10 cm'),
    new Toy('Gatto', 'Topino di Peluche', 4.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'morbido con codina in corda', '8,5 cm x 10 cm'),



    new Accessories('Uccello', 'Voliera Wilma in Legno', 184.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Legno', 'M: L 83 x P 67 x H 153 cm'),
    new Accessories('Pesce', 'Cartucce filtranti Easy Crystal', 2.29, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Materiale espanso', 'ND')
);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Products</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Prodotti consigliati</h1>
        <div class="row">
            <!-- foreach per stampare i prodotti -->
            <?php foreach ($products as $product) {  ?>
                <div class="col-4 text-center g-5">
                    <img src="<?= $product->thumb ?>" alt="food" class="img-fluid">
                    <h3><?= $product->product_type ?></h3>
                    <div>
                        <em><?= $product->animal_type ?></em>
                    </div>
                    <div>
                        <em><?= $product->price ?> Euro</em>
                    </div>

                    <!-- controllo per cosa stampare -->
                    <?php if ($product instanceof Food) { ?>
                        <div>
                            <em>Weight: <?= $product->weight ?> g</em>
                        </div>
                        <div>
                            <em>Ingredients: <?= $product->ingredients ?></em>
                        </div>
                    <?php } elseif ($product instanceof Toy) { ?>
                        <div>
                            <em>Specifics: <?= $product->specifics ?></em>
                        </div>
                        <div>
                            <em>Size: <?= $product->size ?></em>
                        </div>
                    <?php } elseif ($product instanceof Accessories) { ?>
                        <div>
                            <em>Material: <?= $product->materials ?></em>
                        </div>
                        <div>
                            <em>Dimensions: <?= $product->size ?></em>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>