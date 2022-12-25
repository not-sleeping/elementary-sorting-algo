<?php

namespace App\Classes;

class SwapvaluesClass
{
    public static function swapValues(array $elementsArray, int $oldPosition, int $newPosition): array
    {
        $oldElementValue = $elementsArray[$oldPosition];
        $elementsArray[$oldPosition] = $elementsArray[$newPosition];
        $elementsArray[$newPosition] = $oldElementValue;
        return $elementsArray;
    }
}


?>