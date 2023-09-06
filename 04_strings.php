<?php

// Create simple string
    // $name = "kauã";
    // $sirname = "Jotta";
    // echo $name . $sirname . '<br>';
    // $hello = "hello php $name";
    // $hello2 = "hello php2";




    // echo $hello.'<br>';
    // echo $hello2.'<br>';

// String concatenation

    // echo "hello" . " " . "world" . '<br>';;




// String functions
$string = "     hello world     ";
echo "1 - ". strlen($string). '<br>' . PHP_EOL;
echo "2 - " . trim($string). '<br>'. PHP_EOL;
echo "3 - " . ltrim($string). '<br>'. PHP_EOL;
echo "4 - " . rtrim($string). '<br>'. PHP_EOL;

echo "6 - " . strrev($string) .    '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string). '<br>'. PHP_EOL;
echo "8 - " . strtolower($string). '<br>'. PHP_EOL;
echo "9 - ".  ucfirst('hello')  .  '<br>'. PHP_EOL;
echo "10 - "  . lcfirst('HELLO') . '<br>'. PHP_EOL;         
echo "11 - "  .  ucwords('hello world')  . '<br>'. PHP_EOL;     
echo "12 - "  . strpos($string, 'world') . '<br>'. PHP_EOL;    
echo "13 - "   . stripos($string, 'world'). '<br>'. PHP_EOL; 
echo "14 - "  . substr($string, 8) .'<br>'. PHP_EOL;      
echo "15 - "   . str_replace('world', 'PHP', $string). '<br>'. PHP_EOL; 
echo "16 - "   . str_ireplace('world', 'PHP', $string). '<br>'. PHP_EOL;    

$number1 = "";
$number2 = 123456;

echo str_pad($number1, 8, '01', STR_PAD_LEFT). '<br>';
echo str_pad($number2, 8, '0', STR_PAD_LEFT). '<br>';


echo str_repeat("world", 3). '<br>';
// Multiline text and line breaks

$longText = "
Hello my name is Kauã 
i have <b> 19 years </b> and
i love programing
";

echo $longText . '<br>';;



// Multiline text and reserve html tags
echo "1 -" . nl2br($longText). '<br>';;
echo "2 -" .  htmlentities($longText) . '<br>' . PHP_EOL;
echo "3 -" .  nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "4 -" .  html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 -" .  htmlspecialchars($longText) . '<br>' . PHP_EOL;
// https://www.php.net/manual/en/ref.strings.php