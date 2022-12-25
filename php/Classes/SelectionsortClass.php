<?php

namespace App\Classes;
use App\Classes\SwapvaluesClass as Swap;

class SelectionsortClass
{
    public static function selectionSort($unsortedArray): array
    {
        /**
         *  The function will take a value , starting from index 0
         *  It will check if the current value is smaller than any value in the array
         *  If it is smaller it will swap the current value with the smaller value
         *  Until there are no smaller values
         *  
         *  Example;
         *  
         *  BEFORE 
         *  $array = [5, 4, 3, 1, 2];
         *  unsolved |0  1  2  3  4|
         *            
         *  AFTER THE FIRST ITERATION
         *  $array = [1, 4, 3, 5, 2];
         *    solved |0||1  2  3  4| unsolved
         *            
         *  AFTER THE SECOND ITERATION
         *  $array = [1, 2, 3, 5, 4];
         *    solved |0  1||2  3  4| unsolved
         * 
         *  5 is swapped with 1 because it was the smallest value 0 - 4
         *  4 is swapped with 2 because it was the smallest value 1 - 4
         */

        $arrayLength =  count($unsortedArray);
        for ($i = 0; $i < $arrayLength; $i++){
            for ($j = 0; $j < $arrayLength; $j++) {
                if($unsortedArray[$i] < $unsortedArray[$j]){
                    $unsortedArray = Swap::swapValues($unsortedArray, $i, $j);
                }
            }
        }
        
        return $unsortedArray;
    }
}

?>