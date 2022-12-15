<?php
$min = 1;
$max = 50;
$guess = 25;
$number = rand($min, $max);
$msg = "";
if($max < $guess || $min > $guess){
    $msg = "You are out of range";
    exit();
}else {
    if($number == $guess){
        $msg = "<h3>You have found my number</h3>";
    }
    if($guess > $number){
     $msg = "<h3>You have guessed too high</h3>";
    }
    if($guess < $number){
        $msg = "<h3>You have guessed too low</h3>";
    }
}

echo $msg;