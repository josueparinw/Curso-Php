<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>

<form class="form" method="post" action="middleware.php">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["error"])) {
        if ($_GET["error"] === "user-not-exist") {
            echo "<p class='error'>Usuario no encontrado</p>";
        }
        else if ($_GET["error"] === "passwd-incorrect") {
            echo "<p class='error'>Contraseña incorrecta</p>";
        }
        else {
            echo "<p class='error'>Acceso no permitido</p>";
        }
    }
    ?>

    <div class="mb-3 form-div">
        <label class="form-label" for="email">Correo electrónico</label>
        <input type="email" class="form-input" name="email" id="email" required>
    </div>

    <div class="mb-3 form-div">
        <label class="form-label" for="passwd">Contraseña</label>
        <input type="password" class="form-input" name="passwd" id="passwd" required>
    </div>

    <div class="form-div button-div mb-3">
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </div>

    <div>
        <a class="link" rel="nofollow" href="./registro.php">Registrarme</a>
    </div>

</form>

</body>
</html>