export function swapValues(elementsArray, oldPosition, newPosition){
    let oldElementValue = elementsArray[oldPosition];
    elementsArray[oldPosition] = elementsArray[newPosition];
    elementsArray[newPosition] = oldElementValue;
}