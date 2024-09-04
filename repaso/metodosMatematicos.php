<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="metodosMatematicos.php" method="GET">
        <label for="dato">DATO:</label>
        <input type="text" name="datoCalcular">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

<?php 
    $valor = $_GET["datoCalcular"];
    //$resultado = abs($valor);
    //$resultado = round($valor);
    //$resultado = floor($valor);
    //$resultado = ceil($valor);
    //$resultado = sqrt($valor);
    //$resultado = max($valor1, $valor2, $valor3);
    //$resultado = min($valor1, $valor2, $valor3);
    //$resultado = pi();
    //$resultado = rand();
    //$resultado = rand(1, 100);
    $resultado = pow($valor, 2);
    echo "El promedio es: " . $promedio;
?>
