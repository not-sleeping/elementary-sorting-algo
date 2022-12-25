<?php

namespace App\Classes;
use App\Classes\SwapvaluesClass as Swap;

class SelectionsortClass
{
    public static function selectionSort($unsortedArray): array
    {
        $arrayLength =  count($unsortedArray);
        for ($i = 0; $i < $arrayLength; $i++){
            for ($j = 0; $j < $arrayLength; $j++) {
                if($unsortedArray[$i] < $unsortedArray[$j]){
                    Swap::swapValues($unsortedArray, $i, $j);
                }
            }
        }
        return $unsortedArray;
    }
}

?>