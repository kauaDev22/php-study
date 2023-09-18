<?php
// date_default_timezone_set('America/Sao_Paulo');
// // Print current timestamp
// echo time(). '<br>';
// // Print current date
// echo date('d-m-Y H:i:s') . '<br>';
// // Print yesterday
// echo date('d-m-Y H:i:s', time() - 60*60 * 24) . '<br>';;
// // Different format: https://www.php.net/manual/en/function.date.php
// echo  date('Y j Y, H:i:s') . '<br>';
// // String to timestamp
// echo strtotime('+1 week') . '<br>';
// Parse date: https://www.php.net/manual/en/function.date-parse.php
$dateString = "2020-02-23 12:45:23";
$parseDate = date_parse($dateString);

echo '<pre>';
var_dump($parseDate);
echo '</pre>';
// Parse date from format
// https://www.php.net/manual/en/function.date-parse-from-format.php