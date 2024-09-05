<?php
    $username = "V de Venganza";
    //pasar a minuscula
    $username = strtolower($username);
    $username = strtoupper($username);
    $username = trim($username);
    $username = str_pad($username, 5, "xd");

    echo $username;
?>