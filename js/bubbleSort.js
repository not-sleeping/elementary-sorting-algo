function bubbleSort(unsortedArray){
    
    for (let i = unsortedArray.length; i != 0; i--) {

        for (let j = 0; j < i; j++) {

            if(unsortedArray[j] <= unsortedArray[j+1]){
                continue;
            }

            swapValues(unsortedArray, unsortedArray[j]);
            
        }
    }

    console.log(unsortedArray);

}

function swapValues(elementsArray, element){

    let oldElementValue = element;
    let position = elementsArray.indexOf(element);
    let newPosition = position + 1;

    elementsArray.splice(position, 1);
    elementsArray.splice(newPosition, 0, oldElementValue);

}