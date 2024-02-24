<?php

// 1st problem to solve
// Reverse the array using loop
function reverseArray($A)
{
    // your code here
    $reversed_array = [];
    for (end($A); key($A) !== null; prev($A)) {
        $currentElement = current($A);
        array_push($reversed_array, $currentElement);
    }

    return $reversed_array;
}

$A = [5, 9, 1];
reverseArray($A);



// 2nd problem to solve
// An array A consisting of N integers is given. Rotation of the array means that each element is shifted right by one index, and the last element of the array is moved to the first place.



function reverseArrayBasedOnGivenInteger($given_array, $given_integer)
{

    for ($i = 0; $i < $given_integer; $i++) {
        $last_element = array_pop($given_array);
        array_unshift($given_array, $last_element);
    }
    return $given_array;
}

$given_array = [3, 8, 9, 7, 6];
$given_integer = 3;
reverseArrayBasedOnGivenInteger($given_array, $given_integer);
