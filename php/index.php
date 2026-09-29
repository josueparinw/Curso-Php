<?php

$numero = 2;
$numero++;
++$numero;

$saludar = "Hola mundo";
$clase_terminada = false;

$arr1 = [1, 2, true, false, "Hola"];
$arr = Array();
$arr2 = Array(1, 2, true, false, "Hola");
$arr3 = [
    1 => "Hola",
    2 => "Mundo",
];
$arr4 = array(
    1 => "Hola",
    2 => "Mundo",
);
$arr5 = array(
    "ficcion" => ["l1", "l2", "l3", "l4", "l5"],
    "suspense" => ["l1", "l2", "l3", "l4", "l5"],
    "terror" => ["l1", "l2", "l3", "l4", "l5"],
);

//$numero = "Hola mundo";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP</title>
</head>
<body>
 
<?php
echo $numero;

echo $saludar;

//echo array1;

print_r($arr1);
echo json_encode($arr1);
echo json_encode($arr1[3]);

echo "<h1>".$saludar."<h1>";

?>

</body>
</html>