<?php
    //array = "variable" que puede guardar mas de un valor de un mismo tipo
    $foods = array("manzana", "pizza", "lechuga");

    //añadir alemento
    array_push($foods, "piña", "burrito");
    //eliminar ultimo elemento del array
    array_pop($foods);
    //eliminar el primer elemento del array
    array_shift($foods);
    //invertir array
    $arrayvolteado =  array_reverse($foods);
    //obtener longitud del array
    echo count($arrayvolteado);


    foreach($foods as $food){
        echo $food . "<br>";
    }
?>