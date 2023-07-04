<?php 
    $array1 = ["a", "b", "c", "d", "e"];
    $array2 = [1,2,3,4,5];

    function arrayMerge($firstArray, $secondArray){
        $newArray = array_merge($firstArray, $secondArray);

        foreach($newArray as $element){
            echo $element;
        }
    }

    
    arrayMerge($array1, $array2);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 3</title>
    </head>
    <body>
        <p>
        </p>
    </body>
</html>