<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radioButtons.php" method="POST">
        <input type="radio" name = "credit_card" value = "Visa">
        Visa <br>
        <input type="radio" name = "credit_card"  value = "Mastercard">
        Mastercard <br>
        <input type="radio" name = "credit_card"  value = "American Express">
        American Express <br>
        <input type="submit" value="confirmar" name="confirm">
    </form>
</body>
</html>

<?php
    if(isset($_POST["confirm"])){
        if(isset($_POST["credit_card"])){
            $card = $_POST["credit_card"];
            echo $card;
        }
    }
?>