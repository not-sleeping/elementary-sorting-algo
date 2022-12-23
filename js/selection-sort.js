import {swapValues} from './swap-values.js';

function selectionSort(unsortedArray){
    for (let i = 0; i < unsortedArray.length; i++) {
        for (let j = 0; j < unsortedArray.length; j++) {
            if(unsortedArray[i] < unsortedArray[j]){
                swapValues(unsortedArray, i, j);
            }
        }
    }
    return unsortedArray;
}

let sortedArray = selectionSort([5, 5, 5, 25, 65, 3, 3, 1, 45, 21]);
console.log(sortedArray);