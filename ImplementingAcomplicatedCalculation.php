<?php

$a = (14 + 82 - (32 / 2) ) ** 2;
echo $a . "<br>";
$b = 18 * ((3 /6) - 9) * 10;
echo $b . "<br>";
$c = 5 * (12 / 2 -8 * 4 / 12 * 6);
echo $c . "<br>";
$arrayOutput = array($a, $b, $c);
echo '<pre>';
print_r($arrayOutput);
echo '</pre>';

$results = array();
$results[] = (14 + 82 - (32 / 2))**2;
$results[] = 18 * ((3/6)- 9) * 10;
$results[] = 5 * ( (12/2) - (8*4) + (12*6) );

echo '<pre>';
print_r($results);
echo '</pre>';