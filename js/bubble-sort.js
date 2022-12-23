import {swapValues} from 'swap-values.js';

function bubbleSort(unsortedArray){    
    for (let i = unsortedArray.length; i > 0; i--) {
        for (let j = 0; j < i; j++) {
            if(unsortedArray[j] > unsortedArray[j+1]){
                swapValues(unsortedArray, j, j + 1);
            }
        }
    }
    return unsortedArray;
}

let sortedArray = bubbleSort([5, 1, 2, 3, 6, 8, 8, 1, 2, 3, 1, 1, 4, 5, 8, 9, 9, 2, 4, 1]);
console.log(sortedArray);
