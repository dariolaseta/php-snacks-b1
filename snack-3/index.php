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