<?php

// while

// while(true){
//     // do something
// }
// // Loop with $counter
// $counter = 0;
// $loop = true;
// while($loop){
//     echo "counter $counter" . '<br>';
//     if($counter >= 10){
//         $loop = false;
//     }
//     $counter++;
// }
// do - while
// $counter = 10;
// do{
//     echo "Counter $counter" . '<br>';
// }while($counter < 10);
// for
// for ($i=1;$i<=10;$i++){
//     echo "Counter: $i  " . '<br>';
// }




// foreach

// $fruits = ["banana", "maça", "pera", "orange"];
// foreach ($fruits as $i => $fruits){
//     echo $i . " - " . $fruits . '<br>';
// }





// Iterate Over associative array.
$person =[
    'name' => 'Kauã',
    'surname' => 'Jotta',
    'age' => 19,
    'hobby' => ['Be beautiful', 'smart', 'Romantic']
];

foreach($person as $key => $value){
    echo $value.'<br>';
     
}