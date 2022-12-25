<?php

require_once __DIR__.'/vendor/autoload.php';

use App\Controllers\SortingController as Sort;

$unsortedArray = [2, 45, 6, 12, 3, 89, 5, 24, 12, 79, 34];
$sortedArray = Sort::sortArray($unsortedArray, 1);

echo implode(', ', $unsortedArray);
echo '</br>';
echo implode(', ', $sortedArray);

?>