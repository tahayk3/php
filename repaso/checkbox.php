<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <form action="checkbox.php" method="POST">
        <input type="checkbox" name="pizza" value="pizza">
        pizza <br>
        <input type="checkbox" name="burger" value="burger">
        Hamburguesa <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["pizza"])){
            echo "Seleccionaste pizza";
        }
        if(isset($_POST["burger"])){
            echo "Seleccionaste hamburguesa";
        }
    }
?>