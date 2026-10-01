<?php

$peliculas = [
    ["id" => 1, "titulo" => "Iron Man", "universo" => "Marvel", "director" => "Jon Favreau", "anyo" => 2008, "duracion" => 126, "puntuacion" => 7.9, "disponible" => true, "imagen" => "img/iroman.png"],
    ["id" => 2, "titulo" => "The Dark Knight", "universo" => "DC", "director" => "Christopher Nolan", "anyo" => 2008, "duracion" => 152, "puntuacion" => 9.0, "disponible" => true, "imagen" => "img/TheDarkKnight.png"],
    ["id" => 3, "titulo" => "Avengers: Endgame", "universo" => "Marvel", "director" => "Anthony y Joe Russo", "anyo" => 2019, "duracion" => 181, "puntuacion" => 8.4, "disponible" => true, "imagen" => "img/AvengersEndgame.png"],
    ["id" => 4, "titulo" => "Aquaman", "universo" => "DC", "director" => "James Wan", "anyo" => 2018, "duracion" => 143, "puntuacion" => 6.9, "disponible" => false, "imagen" => "img/aquaman.png"],
    ["id" => 5, "titulo" => "Spider Man", "universo" => "Marvel", "director" => "Jon Watts", "anyo" => 2021, "duracion" => 148, "puntuacion" => 8.2, "disponible" => true, "imagen" => "img/spiderman.png"],
    ["id" => 6, "titulo" => "Wonder Woman", "universo" => "DC", "director" => "Patty Jenkins", "anyo" => 2017, "duracion" => 141, "puntuacion" => 7.4, "disponible" => false, "imagen" => "img/WonderWoman.png"],
    ["id" => 7, "titulo" => "Black Panther", "universo" => "Marvel", "director" => "Ryan Coogler", "anyo" => 2018, "duracion" => 134, "puntuacion" => 7.3, "disponible" => true, "imagen" => "img/BlackPanther.png"],
    ["id" => 8, "titulo" => "Joker", "universo" => "DC", "director" => "Todd Phillips", "anyo" => 2019, "duracion" => 122, "puntuacion" => 8.4, "disponible" => true, "imagen" => "img/Joker.png"],
];

$watchlist = [
    ["pelicula_id" => 1, "vista" => true],
    ["pelicula_id" => 3, "vista" => false],
    ["pelicula_id" => 8, "vista" => false],
];

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primer Ejercicio PHP Web</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<main>
    <section class="peliculas">

        <?php if (count($peliculas) > 0): ?>

            <?php foreach ($peliculas as $peli): ?>

                <div class="item">

                    <img
                        src="<?= htmlspecialchars($peli['imagen']) ?>"
                        alt="<?= htmlspecialchars($peli['titulo']) ?>"
                    >

                    <h1 class="titulo">
                        <?= htmlspecialchars($peli["titulo"]) ?>
                    </h1>

                    <p class="universo text-center">
                        <?= htmlspecialchars($peli["universo"]) ?>
                    </p>

                    <p class="director text-center">
                        Director: <?= htmlspecialchars($peli["director"]) ?>
                    </p>

                    <p class="anyo text-center">
                        <?= $peli["anyo"] ?> -
                        <?= $peli["duracion"] ?> min
                    </p>

                    <p class="puntuacion text-center">
                        ⭐ <?= $peli["puntuacion"] ?>
                    </p>

                    <p class="disponibilidad text-center">
                        <?php if ($peli["disponible"]): ?>
                            Disponible
                        <?php else: ?>
                            No disponible
                        <?php endif; ?>
                    </p>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <div>
                <p>Películas no disponibles.</p>
            </div>

        <?php endif; ?>

    </section>
            
    <section class="">

    </section>
</main>

</body>
</html>
