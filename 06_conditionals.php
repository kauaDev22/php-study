<?php

$age = 8;
$salary = 300000;

// if condition
// if ($age >= 25){
//     echo "you are not young" . '<br>';
// }
// if ($age < 25){
//     echo "you are young" . '<br>';
// }

// // if condition - else
// if($age > 25){
//     echo "you are not young" . '<br>';
// }else{
//     echo "you are young" . '<br>';
// }
// if condition1 AND condition2
// if ($age < 22 && $salary > 50000){
//     echo 'You are young and not so rich' . '<br>';
// }
// if condition1 OR condition2
// if ($age < 22 | $salary > 50000){
//     echo 'You are young and not so rich' . '<br>';
// }
// if condition1 - elseif condition2 - else
// if($age < 22){
//     echo "Young" . '<br>';
// }elseif ($age < 30){
//     echo 'you are not young but not old' . '<br>';
// }elseif ($age < 60){
//     echo 'you are old but not too old' . '<br>';
// }else{
//     echo "you are old" . '<br>';
// }
// if condition1 and condition2 - elseif condition1 and condition2 - else
// if($age < 22  && $salary >= 50000){
//     echo "Young and rich" . '<br>';
// }elseif ($age < 22  && $salary < 50000){
//     echo 'you are, young but so rich' . '<br>';
// }elseif ($age > 60 && $salary >= 50000){
//     echo 'you are old old, and rich' . '<br>';
// }elseif($age > 60 && $salary < 50000){
//     echo "you are old but not rich" . '<br>';
// }
// Ternary if
echo $age < 22 ? 'Young' : 'Not young';
// Null coalescing operator

// $myAge = $age ? $age : 18;
// echo $myage;

// 7.1

$myAge = $age ?: 18;
echo $myAge;


// Null coalescing assignment operator. Since PHP 7.4

// switch

