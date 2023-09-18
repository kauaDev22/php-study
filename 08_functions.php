<?php

// Function which prints "Hello I am TheCodeholic"

// function hello($name){
//     echo "Hello $name";}
// for ($i=1;$i<=10;$i++){    
//   echo   hello('kaua') . '<br>';
// };





// // Create sum of two functions

// function sum($a, $b){
//     return $a + $b;
// }

// $sum = sum(3, 2);

// echo $sum . '<br>';
// Create function to sum all numbers using ...$nums

function sum(...$numbers){
    // $sum = 0;
    // foreach($numbers as $num) $sum += $num;
    // return $sum;

    return array_reduce($numbers, fn($carry, $n) => $carry + $n);
}

$sum = sum(1,2,3,4,5,5);

echo $sum . '<br>';