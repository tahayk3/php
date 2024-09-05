<?php
    //arrays de tipo clave valor
    //item => precio
    $muebles = array(
                    "Telefono" =>"8500",
                    "Tablet" => "5000"
    );
    echo $muebles["Tablet"] . "<br>";
    
    foreach($muebles as $key=>$value){
        echo "{$key} {$value} <br>"; 
    }
?>