<?php

namespace App\Classes;
use App\Classes\SwapvaluesClass as Swap;

class BubblesortClass
{
    public static function bubbleSort(array $unsortedArray): array
    {
        /**
         *  The function will take a value , starting from index 0
         *  It will check if the current value is bigger than the upcoming value
         *  If it is bigger it will swap the current value with the smaller value
         *  Until there are no bigger value
         *  
         *  Example;
         *  
         *  BEFORE 
         *  $array = [5, 4, 3, 1, 2];
         *  unsolved |0  1  2  3  4|
         *            
         *  AFTER THE FIRST ITERATION
         *  $array = [4, 3, 1, 2, 5];
         *  unsolved |0  1  2  3||4| solved
         *            
         *  AFTER THE SECOND ITERATION
         *  $array = [2, 3, 1, 4, 5];
         *  unsolved |0  1  2||3  4| solved
         * 
         *  5 has been swapped with each value since it's the biggest value
         *  4 is following up and did not swap with 5 since it's a smaller value
         */

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