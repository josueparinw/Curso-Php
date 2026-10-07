<?php
$primero = [
    ["titulo" => "Total Orders", "subtitulo" => "All Regions", "numero" => "8,542", "descripcion" => "+3.5% since last month"],
    ["titulo" => "Total Revenue", "subtitulo" => "This Quarter", "numero" => "$23,456", "descripcion" => "+8.5% since last month"],
    ["titulo" => "Total Customers", "subtitulo" => "Worldwide", "numero" => "5,678", "descripcion" => "-2.5% since last month"],
    ["titulo" => "Total Products", "subtitulo" => "Inventory", "numero" => "1,234", "descripcion" => "+3.5% +5.0% since last month"],
    ["titulo" => "Active Shoppers", "subtitulo" => "Live Now", "numero" => "179", "descripcion" => "44% today"]
];

$segundo =[
    ["imagen"=>"img/polo.png","titulo"=>"Denim Jacket","subtitulo"=>"Outerwear","SKU"=>"DJ-659","Stock"=>"In Stock","Price"=>"$120","estado"=>"Published"],
    ["imagen"=>"img/polo.png","titulo"=>"Leather Belt","subtitulo"=>"Accessories","SKU"=>"LB-500","Stock"=>"In Stock","Price"=>"$45","estado"=>"Published"],
    ["imagen"=>"img/polo.png","titulo"=>"Slim Fit Jeans","subtitulo"=>"Bottoms","SKU"=>"SFJ-2021","Stock"=>"Low Stock","Price"=>"$89","estado"=>"Draft"],
    ["imagen"=>"img/polo.png","titulo"=>"Formal Blazer","subtitulo"=>"Suits & Blazers","SKU"=>" FB-300","Stock"=>"In Stock","Price"=>"$199","estado"=>"Published"]
];

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de control</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>

<body>
    <main>
        <section>
            <div class="contenedor">

                <?php if (count($primero) > 0): ?>

                    <?php foreach ($primero as $item): ?>

                        <div class="tarjeta">
                            <p class="titulo">
                                <?= $item["titulo"] ?>
                            </p>

                            <p class="subtitulo">
                                <?= $item["subtitulo"] ?>
                            </p>

                            <p class="numero">
                                <?= $item["numero"] ?>
                            </p>

                            <p class="descripcion">
                                <?= $item["descripcion"] ?>
                            </p>
                        </div>

                    <?php endforeach; ?>

                <?php else: ?>

                    <p>No hay nada</p>

                <?php endif; ?>

            </div>
        </section>
        <section>
                <section class="botones">
                    
                    <div>
                        <select class="status" name="status" id="status">
                                <option value="">Status</option>
                                <option value="">Published</option>
                                <option value="">Draft</option>
                                <option value="">Inacive</option>
                        </select>
                        <select class="category" name="status" id="Category">
                                <option value="">Category</option>
                                <option value="">Electronics</option>
                                <option value="">Fitness</option>
                            <option value="">Wearables</option>
                        </select>
                    </div>

                    <div>
                        <button class="boton">+ Add Product</button>
                    </div>
                </section>
                <section class="contenedor">
                    <?php if (count($primero) > 0): ?>
                        <?php foreach ($segundo as $item): ?>
                
                            <div class="tarjeta-2">
                                <img class="img......................     " src="<?=$item["imagen"]?>"
                                 alt="<?=$item["titulo"]?>">
                                 
                                <p class="titulo">
                                    <?= $item["titulo"] ?>
                                </p>

                                <p class="subtitulo">
                                    <?= $item["subtitulo"] ?>
                                </p>

                                <p class="SKU">
                                    <?= $item["SKU"] ?>
                                </p>

                                <p class="Price">
                                    <?= $item["Price"] ?>
                                </p>
                                <p class="estado">
                                    <?= $item["estado"] ?>
                                </p>
                            </div>

                        <?php endforeach; ?>

                    <?php else: ?>

                    <p>No hay nada</p>

                    <?php endif; ?>
                    
                </section>
        </section>
    </main>
</body>
</html>
