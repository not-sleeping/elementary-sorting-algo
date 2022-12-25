<?php

namespace App\Classes;
use App\Classes\SwapvaluesClass as Swap;

class BubblesortClass
{
    public static function bubbleSort(array $unsortedArray): array
    {
        $arrayLength =  count($unsortedArray);
        for ($i = $arrayLength - 1; $i > 0; $i--){
            for ($j = 0; $j < $i; $j++) {
                if($unsortedArray[$j] > $unsortedArray[$j+1]){
                    $unsortedArray = Swap::swapValues($unsortedArray, $j, $j + 1);
                }
            }
        }
        
        return $unsortedArray;
    }
}

?>