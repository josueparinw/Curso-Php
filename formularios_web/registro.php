<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarme</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>


<form class="form">

    <div class="mb-3 form-div">
        <label class="form-label" for="full_name">Nombre</label>
        <input type="text" class="form-input" name="full_name" id="full_name" required>
    </div>

    <div class="mb-3 form-div">
        <label class="form-label" for="email">Correo electrónico</label>
        <input type="email" class="form-input" name="email" id="email" required>
    </div>

    <div class="mb-3 form-div">
        <label class="form-label" for="passwd">Contraseña</label>
        <input type="password" class="form-input" name="passwd" id="passwd" required>
    </div>

    <div class="mb-3 form-div">
        <label class="form-label" for="repeat_passwd">Repetir contraseña</label>
        <input type="password" class="form-input" name="repeat_passwd" id="repeat_passwd" required>
    </div>

    <div class="form-div button-div">
        <button type="submit" class="btn btn-primary">Finalizar registro</button>
    </div>

    <div>
        <a class="link" rel="nofollow" href="./index.php">Iniciar sesión</a>
    </div>

</form>

</body>
</html>