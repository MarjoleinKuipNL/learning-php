<?php

function add_to_x($x){
    return $x +5;
}
// switch vs. match:
// compares values strictly (===) instead of loosely(==) as 
// the switch statement does
// a match expression returns a value
// Don not fall-trhough to later cases the way switch statements do
// a match expression must be exhaustive

$x = 0;

$result = match($x) {
    -2, -1, 0 => add_to_x($x),
    1 => '$x is 1',
    2 => '$x is 2',
    default => '$x is neither 1 or 2',
};

$result = $match(true){
    $x <= 0 => '$x is not positive',
    $x == 1 => '$x is 1',
    $x == 2 => '$x is 2',
    default => '$x is neither 1 0r 0'
};

echo $result;