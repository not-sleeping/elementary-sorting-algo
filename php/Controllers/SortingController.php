<?php

namespace App\Controllers;

use App\Classes\BubblesortClass as Bubblesort;
use App\Classes\SelectionsortClass as Selectionsort;

class SortingController
{
    public static function sortArray(array $unsortedArray, int|string $type): array
    {
        $sortedArray = match($type){
            1, 'bubble' => Bubblesort::bubbleSort($unsortedArray),
            2, 'selection' => Selectionsort::selectionSort($unsortedArray),
        };

        return $sortedArray;
    }
}


?>