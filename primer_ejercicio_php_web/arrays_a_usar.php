<?php

$peliculas = [
    ["id" => 1, "titulo" => "Iron Man", "universo" => "Marvel", "director" => "Jon Favreau", "anyo" => 2008, "duracion" => 126, "puntuacion" => 7.9, "disponible" => true, "imagen" => "img/ironman.jpg"],
    ["id" => 2, "titulo" => "The Dark Knight", "universo" => "DC", "director" => "Christopher Nolan", "anyo" => 2008, "duracion" => 152, "puntuacion" => 9.0, "disponible" => true, "imagen" => "img/darkknight.jpg"],
    ["id" => 3, "titulo" => "Avengers: Endgame", "universo" => "Marvel", "director" => "Anthony y Joe Russo", "anyo" => 2019, "duracion" => 181, "puntuacion" => 8.4, "disponible" => true, "imagen" => "img/endgame.jpg"],
    ["id" => 4, "titulo" => "Aquaman", "universo" => "DC", "director" => "James Wan", "anyo" => 2018, "duracion" => 143, "puntuacion" => 6.9, "disponible" => false, "imagen" => "img/aquaman.jpg"],
    ["id" => 5, "titulo" => "Spider-Man: No Way Home", "universo" => "Marvel", "director" => "Jon Watts", "anyo" => 2021, "duracion" => 148, "puntuacion" => 8.2, "disponible" => true, "imagen" => "img/spiderman.jpg"],
    ["id" => 6, "titulo" => "Wonder Woman", "universo" => "DC", "director" => "Patty Jenkins", "anyo" => 2017, "duracion" => 141, "puntuacion" => 7.4, "disponible" => false, "imagen" => "img/wonderwoman.jpg"],
    ["id" => 7, "titulo" => "Black Panther", "universo" => "Marvel", "director" => "Ryan Coogler", "anyo" => 2018, "duracion" => 134, "puntuacion" => 7.3, "disponible" => true, "imagen" => "img/blackpanther.jpg"],
    ["id" => 8, "titulo" => "Joker", "universo" => "DC", "director" => "Todd Phillips", "anyo" => 2019, "duracion" => 122, "puntuacion" => 8.4, "disponible" => true, "imagen" => "img/joker.jpg"],
];

$watchlist = [
    ["pelicula_id" => 1, "vista" => true],
    ["pelicula_id" => 3, "vista" => false],
    ["pelicula_id" => 8, "vista" => false],
];
?>