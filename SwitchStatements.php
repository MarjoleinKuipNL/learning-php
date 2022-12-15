<?php

// Switch Statement
// Allow you to clearly make decisions based on the value of a single variable
// syntax

$total = 10;
switch($total) {
    case 1:
        echo '$total is 1';
        break;
    case 2:
        echo '$total is 2';
        break;
    default:
        echo '$total is more than 2.';
        break;
    
    }
// notes on switch statements
// Unlike if statements, they don't terminate upon finding a true statement
// break statements are absolutely crucial
// default serves as the catchall 
// you can group cases together

