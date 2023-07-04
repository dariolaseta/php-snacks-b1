<?php 

    $numberArray = [];

    function numbers(int $firstNumber, int $secondNumber, $array){
        if(count($array) < $secondNumber || $firstNumber > $secondNumber){
            return false;
        }else{
            for($i = $firstNumber; $i < $secondNumber + 1; $i++){
                $newArray[] = $array[$i];
            }

            return $newArray;
        }
    }

    var_dump(numbers(2, 4, $numberArray));
?>