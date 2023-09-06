<?php

// Create array
 $fruits = ['banana', 'apple', 'orage', 'blue barry'];
// // Print the whole array
// echo '<pre>';
    // var_dump($fruits);

    //echo '</pre>';
    // // Get element by index
    // echo $fruits[0].'<br>';
    // // Set element by index
    // $fruits[0] = 'Peach';



//set element by index

// echo '<pre>';
    // var_dump($fruits);
    // echo '</prev>';
    // // Check if array has element at index 2
        // echo '<pre>';
        // var_dump(isset($fruits[3]));
        // echo '</prev>';

        
// Append element
//     $fruits[]  = "Peach";
//     // $fruits[]  = "pear";

//     // echo '<pre>';
//     // var_dump($fruits);
//     // echo '</pre>';   

    
// // Print the length of the array

// echo count($fruits) . '<br>';


// // Add element at the end of the array

// array_push($fruits, 'melon');

// echo '<pre>'; 
// var_dump($fruits); 
// echo '</pre>';


// // Remove element from the end of the array

// array_pop($fruits);

// echo '<pre>';  var_dump($fruits); echo'</pre>';



// // Add element at the beginning of the array

// array_unshift($fruits, 'orage');

// echo '<pre>';  var_dump($fruits); echo'</pre>';


// // Remove element from the beginning of the array
// array_shift($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Split the string into an array

// $string = "Banana,Apple,Peach";


// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';

// // Combine array elements into string

// echo implode("-", $fruits) .'<br>';

// print_r($fruits);
// // Check if element exist in the array

// echo '<pre>'; var_dump(in_array('play', $fruits)); echo '</pre>';




// // Search element index in the array


// echo  array_search('apple', $fruits) ;


// // Merge two arrays


// $vegetables = ['Potato','Cucumber'];

// echo '<pre>'; 
// var_dump(array_merge($vegetables, $fruits)); 
// var_dump([...$fruits, ...$vegetables]);
// echo '</pre>';



// Sorting of array (Reverse order also)

// sort($fruits);

// echo '<pre>'; 
// var_dump($fruits);
// echo '</pre>';

// Filter, map, reduce of array

// $numbers = [1,2,3,4,5,6,7,8];

// $evens = array_filter($numbers, fn($n) => $n % 2 === 0);

// echo '<pre>';
// var_dump($evens);
// echo '</pre>';

// $squres = array_map(fn($n) => $n * $n, $numbers);

// echo '<pre>';
// var_dump($squres);
// echo '</pre>';


// $reduce = array_reduce($numbers, fn($carry, $item) => $carry + $item);

// echo '<pre>';
// var_dump($reduce);
// echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    'name' => 'jotta',
    'surname' => 'silva',
    'age' => 19,
    'hobbies' => ['play basketball', 'volleyball']
    
];


// // Get element by key
// echo $person['name'] . '<br>';
// echo $person['age'] . '<br>';
// // Set element by key
// $person['Channel'] = 'HB0';
// // Check if array has specific key
// isset($person['age']);
// isset($person['address']);

// // Print the keys of the array

// echo '<pre>';
// var_dump(array_keys($person));
// echo '</pre>';
// // Print the values of the array
// echo '<pre>';
// var_dump(array_values($person));
// echo '</pre>';
// Sorting associative arrays by values, by keys

// arsort($person);
// echo '<pre>';
// var_dump($person);
// echo '</pre>';

// Two dimensional arrays
$todoItems = [
    ['titles' => 'item 1', 'complete' => true],
    ['titles' => 'item 2', 'complete' => false],
    ['titles' => 'item 3', 'complete' => true]
    
];


 echo '<pre>';
 var_dump($todoItems);
 echo '</pre>';