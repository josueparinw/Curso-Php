<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NOMBRE ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="cabecera">

        <h1><?= APP_NOMBRE ?></h1>
        <p>Animes</p>
        <div class="video-banner">
            <video autoplay muted loop playsinline>
                <source src="<?= RUTA_IMG . 'video.mp4' ?>" type="video/mp4">
                no hay video
            </video>
        </div>

        
    </header>
