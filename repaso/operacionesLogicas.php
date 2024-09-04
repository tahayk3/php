<?php
    //Operaciones logicas 
    // && y 
    // || o
    // ! diferente de
    $age = 18;
    $name = "Juan";
    if($age >=18 && $name ==="Juan"){
        echo "Es mayor de edad" . "y se llama Juan";
    }elseif($age <0)
    {
        echo "Edad no validad";
    }
    else{
        echo "Es menor de edad";
    }
?>