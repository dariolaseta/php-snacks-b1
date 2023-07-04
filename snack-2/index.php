<?php
    $name = $_GET['name'];
    $age =  $_GET['age'];
    $mail = $_GET['mail'];

    if(is_numeric($age) && strlen($name) == 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false){
        echo "Accesso riuscito";
    }else{
        echo "Accesso negato";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack-2</title>
    </head>
    <body>
        <form action="./index.php" method="get">
            <input type="text" name="name" id="name" placeholder="Inserisci il nome">
            <input type="text" name="mail" id="mail" placeholder="Inserisci una mail">
            <input type="text" name="age" id="age" placeholder="Inserisci l'età">
            <button type="submit">Invia</button>
        </form>
    </body>
</html>