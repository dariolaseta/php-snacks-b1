<?php 

    $numberArray = [];

    function numbers(int $firstNumber, int $secondNumber, $array){
        if($firstNumber < $secondNumber){
            array_push($array, $firstNumber);
        }

        var_dump($array);
    }

    numbers(1, 3, $numberArray);
?>