<?php
 require_once 'classes/Videojuego.php';

$juegos=[
    new Videojuego(1, "Counter Strike 2", "FPS", 9.99, 5, "img/counter-strike.png", 9,),
    new Videojuego(2, "Rust", "Supervivencia", 39.99, 7, "img/Rust.png", 8,),
    new Videojuego(3, "Grand Theft Auto V", "Acción", 29.99, 5, 'img/grand-theft-auto.png', 9,),
    new Videojuego(4, "Stardew Valley", "Simulación", 13.99, 8, "img/Stardew.png", 10,),
    new Videojuego(5, "Terraria", "Aventura", 9.99, 9, "img/terraria.png", 0,),
    new Videojuego(6, "ELDEN RING", "RPG", 59.99, 10, "img/Elden.png", 5)
];


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Videojuego</title>
    
</head>
<body>
    <main>
        <h1>CATALOGO</h1>
        <div class="contenedor">
            <?php foreach($juegos as $juego):
             $juego->pintarTarjeta();
            endforeach; ?>  
            
        </div>
        <h1>RECOMENDADO</h1> 
        <div class="contenedor">
            <?php
            foreach($juegos as $juego):
                
                if($juego->filter("recomendado")):
                    $juego->pintarTarjeta();
                 endif; 
            endforeach;
            ?>
        </div>
        <h1>OFERTA</h1>
        <div class="contenedor">
            <?php
            foreach ($juegos as $juego):
                if ($juego->filter("oferta")):
                    $precioOriginal = $juego->getPrecio();
                    $precioDescuento = $juego->aplicarDescuento(20);
            
            ?>
                  
                
            <?php
                endif;
            endforeach;
            ?>
        </div>

    </main>
        
</body>
</html>