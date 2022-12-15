<?php

// compare equality with ==
//      42 == 42 is true
//      2 == 7 is false 
//      '1' == 1 would evaluate as true

// identical comparison with === 
//      1 === 1 is true 
//      '1' === 1 is false

// Greater than with >
// 5 > 5 is false
// 10 > 5 is true 

// less than with < 
// 5 < 5 == false
// 10 < 15 == true

// greater or equal to with >=
// 10 >= 10 is true
// 10 >= 5 is true
// 10 >= 20 is true

// less then or equal to with <=
// 10 <= 10 is true
// 10 <= 5 is false
// 10 <= is true

// not or negation with !

// != is "not equal"
// !== is "not identical";
// 7 != 7 is false

// !(7 == 7) is also false, as it's saying the "the opposite of 7 == 7"
// Used as boolean statemants
// will always evaluate to TRUE or false
// used to check the state of a website and control the flow of the code
var_dump(0 == 'foo'); //true


// from PHP spec
// When comparing to a numeric string, use a number comparison (same as now). 
// otherwise convert the number to string ans use a string comparison
var_dump(0 == 'foo'); //false
