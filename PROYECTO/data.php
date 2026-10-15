<?php
require_once __DIR__ . '/config.php';

$animes = [
    [
        "id" => 1,
        "titulo" => "One Piece",
        "genero" => "Aventura",
        "anio" => 1999,
        "descripcion" => "Monkey D. Luffy y su tripulación buscan el legendario tesoro One Piece.",
        "imagen" => RUTA_IMG."OnePiece.png",
        "destacado"=>true
    ],
    [
        "id" => 2,
        "titulo" => "Naruto",
        "genero" => "Acción",
        "anio" => 2002,
        "descripcion" => "Naruto Uzumaki sueña con convertirse en Hokage y ganarse el respeto de su aldea.",
        "imagen" => RUTA_IMG."Naruto.png",
        "destacaado"=>true
    ],
    [
        "id" => 3,
        "titulo" => "Dragon Ball Beerus",
        "genero" => "Acción",
        "anio" => 2026,
        "descripcion" => "Goku y sus amigos protegen la Tierra frente a poderosos enemigos.",
        "imagen" => RUTA_IMG."idragonball.png",
        "destacaado"=>false
    ],
    [
        "id" => 4,
        "titulo" => "Attack on Titan",
        "genero" => "Acción / Drama",
        "anio" => 2013,
        "descripcion" => "La humanidad lucha por sobrevivir frente a unos gigantes conocidos como titanes.",
        "imagen" => RUTA_IMG."attackontitan.png",
        "destacaado"=>true
    ],
    [
        "id" => 5,
        "titulo" => "Demon Slayer",
        "genero" => "Acción / Fantasía",
        "anio" => 2019,
        "descripcion" => "Tanjiro Kamado lucha contra demonios mientras busca salvar a su hermana Nezuko.",
        "imagen" => RUTA_IMG."DemonSlayer.png",
        "destacaado"=>false
    ],
    [
        "id" => 6,
        "titulo" => "Death Note",
        "genero" => "Suspense / Psicológico",
        "anio" => 2006,
        "descripcion" => "Light Yagami encuentra un cuaderno capaz de matar a cualquier persona cuyo nombre se escriba en él.",
        "imagen" => RUTA_IMG."DeadNote.png",
        "destacaado"=>true
    ]
];

$usuarios=[
    ["username"=>"admin","password"=> "admin","role"=>"ADMIN"],
    ["username"=> "josue","password"=> "josue","role"=>"USER"],  
    ["username"=> "usuario","password"=> "usuario","role"=>"USER"]
];

?>