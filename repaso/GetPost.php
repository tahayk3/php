<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <form action="GetPost.php" method="POST">
                <label for="email">Correo electronico:</label><br>
                <input type="email" name="email" id=""><br>
                <label for="password">Contraseña:</label><br>
                <input type="password" name="password" id=""><br>
                <input type="submit" value="Iniciar sesion">
        </form>
</body>

</html>

<?php
//$_GET $_POST, Variables especiales utilizadas para recopilar datos de un formulario HTML.
// Es como un array que guarda los datos de un formulario.
/*
$_GET = Los datos se ven en la url 
        No es seguro
        limite de caracteres
        Las solicitudes GET se pueden almacenar en caché
        mejor para una pagina de busqueda
 */
/*
 $_POST = Los datos se empaquetan dentro del cuerpo de la solicitud HTTP
          Mas seguro
          Sin limite de datos
          Las solicitudes get no son cacheables/capturan
          Mejor para enviar credenciales   
 */

 echo $_POST["email"] . "<br>";
 echo "{$_POST["password"]} <br>";
?>