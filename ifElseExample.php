<?php
// if/Else

if($a > $b) {
    echo '$a is greater then $b';
}
else {
    echo '$a is not greater than $b';
}

// if/else if / else
if($a > $b) {
    echo '$a is greater then $b';
}else if ($b > $a){
    echo '$b is greater than $a';
}
else {
    echo '$a and $b appear to be equal';
}

// notes on if statements
// a single "if" always goes first
// the first condition to evaluate as true will be the one that runs;
// the rest will be ignored
// the else statement always goes last -- it serves as a 
// catchall if none of the conditions are true

// alternative syntax

if(condition to check ):
 // code to execute if the condition is true
elseif (different condition)

// different code to execute

else:
    // catch all code
endif;


// Yoda conditionals:

//Good:
?>
<?php if(10 == $i) {/* do something *? } ?>

bad:
<?php if($i == 10 ) { /* do something */ } ?>