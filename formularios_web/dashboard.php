<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
//    unset($_SESSION["usuario_logged"]);
    session_destroy();
    header("location: ./index.php");
    exit();
}

if (!isset($_SESSION["usuario_logged"])) {
    header("location: ./index.php");
    exit();
}


?>



<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de control</title>
    <link rel="stylesheet" type="text/css" href="./components/dashboard.css">
</head>
<body>

<main class="body">

<!--    <div id="carousel" class="carousel border">-->
<!--        <img src="" alt="">-->
<!--    </div>-->

    <div class="top-section">
        <form action="" method="post">
            <button type="submit" class="rounded-3 btn btn-primary">Cerrar sesión</button>
        </form>

        <div>
            <p>
                Bienvenid@ de nuevo, <?= $_SESSION["usuario_logged"] ?>
            </p>
        </div>
    </div>



    <?php include_once "./components/section_resume.php"; ?>
    <?php include_once "./components/section_products.php"; ?>

</main>

</body>




<!--<script>-->
<!---->
<!--    const imagenes = [-->
<!--        "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic1.colliderimages.com%2Fwordpress%2Fwp-content%2Fuploads%2F2024%2F03%2Fmarvel-calendar.jpg&f=1&nofb=1&ipt=dbc49f0054cb3c97bdf25a90cbb9d1b71ac3638c9b5f7fe256119e080ec30952&ipo=images",-->
<!--        "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.thedirect.com%2Fmedia%2Farticle_full%2Fms-marvel-season-2-iman.jpg&f=1&nofb=1&ipt=da8c8ee4c0113f9b87170e6e58e79f756f5c16f64e941ccee90e359df0a7f60e&ipo=images"-->
<!--    ]-->
<!---->
<!--    document.addEventListener("DOMContentLoaded", () => {-->
<!--        let contCarousel = 0;-->
<!--        const carousel = document.querySelector("#carousel img");-->
<!--        carousel.src = imagenes[0];-->
<!--        contCarousel++;-->
<!---->
<!--        setInterval(() => {-->
<!---->
<!--            if (contCarousel >= imagenes.length) {-->
<!--                contCarousel = 0;-->
<!--            }-->
<!--            carousel.src = imagenes[contCarousel];-->
<!---->
<!--            carousel.classList.add("active");-->
<!---->
<!--            setTimeout(() => carousel.classList.remove("active"), 750)-->
<!---->
<!--            contCarousel++;-->
<!---->
<!--        }, 3000);-->
<!--    })-->
<!---->
<!--</script>-->



</html>