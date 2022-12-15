<?php
echo 5 * 6 + 3 -1 . "<br/>";
echo 5 * (6 + 3) -1 . "<br/>";

echo 5**2 . "<br/>";
echo 5**2 *6 + 3-2;

?>

<?php

$a = 5;
// this will still be 5
echo 'The value of $a is ' . --$a . '<br />';
// This will still be 6
echo 'Now $a is '. $a ."<br />";

$a = 5; // this will still be 5
echo 'The value of $a is ' . $a++ . '<br />';
echo 'Now $a is ' . $a . '<br/>';

$a = 'A';
echo '$a is ' . ++$a . '<br/>';

$a = 1;

$a += 5;
echo $a;
$a -= 5;
echo $a;
$a /= 5;
echo $a;
$a *= 5;
echo $a;