<?php
 require_once 'classes/Videojuego.php';

$juegos=[
    new Videojuego(1, "Counter-Strike 2", "FPS", 0, 5, "img/counter-strike.png", 9),
    new Videojuego(2, "Rust", "Supervivencia", 39.99, 5, "img/Rust.png", 8),
    new Videojuego(3, "Grand Theft Auto V", "Acción", 29.99, 5, 'img/grand-theft-auto.png', 9),
    new Videojuego(4, "Stardew Valley", "Simulación", 13.99, 5, "img/Stardew.png", 10),
    new Videojuego(5, "Terraria", "Aventura", 9.99, 5, "img/terraria.png", 9),
    new Videojuego(6, "ELDEN RING", "RPG", 59.99, 5, "img/Elden.png", 10)
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
        <?php foreach($juegos as $juego):?>
          <?php $juego->pintarTarjeta()?>
         <?php endforeach ?>  
    </main>
        
</body>
</html>