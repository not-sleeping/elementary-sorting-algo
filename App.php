<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/php/Controllers/SortingController.php';
use App\Controllers\SortingController as Sort;

$unsortedArray = [2, 45, 6, 12, 3, 89, 5, 24, 12, 79, 34];

/**
 *  Sort your array with this function
 *  sortArray( array , int|string )
 * 
 *  Sort it with the following types
 *  1, 'bubble' = Bubble Sort Algorithm
 *  2, 'selection' = Selection Sort Algorithm
 */

$sortedArray = Sort::sortArray($unsortedArray, 1);

echo implode(', ', $unsortedArray);
echo '</br>';
echo implode(', ', $sortedArray);

?>