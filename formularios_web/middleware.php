<?php
session_start();

function redirect($file, $error = null): void
{
    $url = "./" . $file . ".php";
    if ($error != null) {
        $url .= "?error=" . $error;
    }
    header("Location: $url");
    exit();
}


$productos = [
    "camilo@gmail.com" => [
        ["SKU" => "DJ-659", "price" => "25", "name" => "Producto 1", "stock" => 0, "is_published" => false],
        ["SKU" => "DJ-656", "price" => "30", "name" => "Producto 2", "stock" => 0, "is_published" => true],
        ["SKU" => "DJ-651", "price" => "5", "name" => "Producto 3", "stock" => 0, "is_published" => true],
//        ["SKU" => "DJ-6", "price" => "4.99", "name" => "Producto 4", "stock" => 0, "is_published" => true],
    ],
    "pepe@gmail.com" => []
];



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $passwd = $_POST["passwd"];

    /*
     *
     * SELECT email, first_name, password FROM Users WHERE email = '$email';
     *
     * Puede retornar 2 cosas:
     *  - Si no existe => Null o None (vacío)
     *  - Si exista => 1 fila (objeto) como si fuese un array con dos valores.
     *                 email, password.
     *
     * */

    $arr = [
        ["usuario" => "camilo@gmail.com", "passwd" => "12345"],
        ["usuario" => "pepe@gmail.com", "passwd" => "12345"],
    ];

    $correo_existe = false;
    $passwd_correcta = false;
    foreach ($arr as $e) {
        if ($e["usuario"] === $email) {
            $correo_existe = true;
            if ($passwd === $e["passwd"]) {
                $passwd_correcta = true;
            }
        }
    }

    if (count($arr) > 0 && $correo_existe) { /* Usuario existe porque el arr tiene valores*/
        if ($passwd_correcta) {
            /* Contraseña correcta. Permitimos acceder al panel de control */

            $_SESSION["usuario_logged"] = "Juan Camilo";
            $_SESSION["productos"] = $productos[$email];
            redirect("dashboard");
        } else {
            /* Contraseña incorrecta. Retornamos a login con mensaje de error */
            redirect("index", "passwd-incorrect");
        }
    } else {
        /* Retornamos al login con mensaje de "Usuario no encontrado" */
        redirect("index", "user-not-exist");
    }

} else {
    redirect("index", "403");
}