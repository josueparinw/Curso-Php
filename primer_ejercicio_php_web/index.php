<?php
include_once("./arrays_a_usar.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Ejercicio PHP Web</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<?php

function imprimirDatos($pelicula): void
{
    echo "<img src=\"" . $pelicula["imagen"] . "\" alt=\"" . $pelicula["titulo"] . "\">";
    echo "<div class='datos'>";
    echo "<h2>" . $pelicula["titulo"] . "</h2>";
    echo "<h3>" . $pelicula["universo"] . "</h3>";
    echo "<p>" . $pelicula["anyo"] . " ⏱ " . $pelicula["duracion"] . " min</p>";
    echo "<p>⭐ " . $pelicula["puntuacion"] . "</p>";

    if (!$pelicula["disponible"]):
        echo "<p class='no-disponible'>No disponible</p>";
    endif;

    echo "</div>";
}

?>

<main>

    <h2 class="titulo">TODAS LAS PELÍCULAS</h2>

    <section class="tarjeta">

        <?php if (count($peliculas) > 0): ?>

            <?php foreach ($peliculas as $pelicula): ?>

                <div class="item <?php if (!$pelicula['disponible']) {
                    echo 'no-disponible2';
                } ?>">

                    <?php imprimirDatos($pelicula); ?>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <div>
                <p>Películas no disponibles.</p>
            </div>

        <?php endif; ?>

    </section>


    <?php $filtrouniverso = "Marvel"; ?>

    <h2 class="titulo">
        Universo <?= $filtrouniverso ?>
    </h2>

    <section class="tarjeta">

        <?php
        foreach ($peliculas as $pelicula):
            if ($pelicula["universo"] === $filtrouniverso):
        ?>

                <div class="item">

                    <?php imprimirDatos($pelicula); ?>

                </div>

        <?php
            endif;
        endforeach;
        ?>

    </section>


    <h2 class="titulo">Mejor puntuadas</h2>

    <section class="tarjeta">

        <?php
        foreach ($peliculas as $pelicula):
            if ($pelicula["puntuacion"] >= 8):
        ?>

                <div class="item">

                    <?php imprimirDatos($pelicula); ?>

                </div>

        <?php
            endif;
        endforeach;
        ?>

    </section>


    <h2 class="titulo">Watchlist</h2>

    <section class="tarjeta">

        <?php

        foreach ($watchlist as $w):

            $id = $w["pelicula_id"];

            foreach ($peliculas as $pelicula):

                if ($pelicula["id"] === $id):

        ?>

                    <div class="item">

                        <img
                            src="<?= $pelicula["imagen"] ?>"
                            alt="<?= $pelicula["titulo"] ?>"
                        >

                        <div class="datos">

                            <h2><?= $pelicula["titulo"] ?></h2>

                            <p><?= $pelicula["anyo"] ?></p>

                            <?php if ($w["vista"]): ?>

                                <p class="vista">VISTA</p>

                            <?php else: ?>

                                <p class="vista">NO VISTA</p>

                            <?php endif; ?>

                        </div>

                    </div>

        <?php
                endif;

            endforeach;

        endforeach;

        ?>

    </section>


    <h2 class="titulo">Añadir al catálogo</h2>

    <section class="anyadir-peli">

        <form>

            <div class="campo">

                <label for="titulo">Título:</label>

                <input
                    type="text"
                    id="titulo"
                    placeholder="Título de la película"
                >

            </div>


            <div class="campo">

                <label for="universo">Universo:</label>

                <select id="universo">

                    <option value="Marvel">Marvel</option>
                    <option value="DC">DC</option>

                </select>

            </div>


            <div class="campo">

                <label for="director">Director:</label>

                <input
                    type="text"
                    id="director"
                >

            </div>


            <div class="campo">

                <label for="anyo">Año:</label>

                <input
                    type="number"
                    id="anyo"
                    min="1888"
                >

            </div>


            <div class="campo">

                <label for="duracion">Duración:</label>

                <input
                    type="number"
                    id="duracion"
                    min="0"
                >

            </div>


            <div class="campo">

                <label for="puntuacion">Puntuación:</label>

                <input
                    type="number"
                    id="puntuacion"
                    min="0"
                    max="10"
                    placeholder="0-10"
                >

            </div>


            <div class="campo">

                <label for="imagen">Imagen:</label>

                <input
                    type="file"
                    id="imagen"
                >

            </div>


            <div class="campo">

                <label for="disponible">Disponible:</label>

                <input
                    type="checkbox"
                    id="disponible"
                    checked
                >

            </div>


            <button type="submit">Enviar</button>

        </form>

    </section>

</main>

</body>

</html>
