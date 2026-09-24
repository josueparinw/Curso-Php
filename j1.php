<?php

$nombre ="josue";
$edad="22";
$estudiante=true;
$contador=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php   
    echo "mi nombre es ".$nombre . " mi edad es".$edad. " es estudiante? ". json_encode($estudiante);
    
    echo "<br>";
?>
    
<?php
for($i=0;$i<=20;$i++){
       
       
        if ($i%2==0){
            echo "<br>";
            echo $i." par"  ;

        }
        else{
            echo "<br>";
            echo $i;
        }
    }echo "<br>";
?>
</body>
</html>