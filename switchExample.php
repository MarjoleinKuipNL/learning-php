<?php

$total = 10;
switch($total) {
    case 1:
        echo '<p>$total is 1</p>';
        break;
    case 2:
        echo '<p>$total is 2</p>';
        break;
    case 3:
        echo '<p> $total is 3 </p>';
    default:
        echo '$total is more than 2.';
        break;
    
    }

$turtle = 'Leo';
$bandana = '';
switch($tutle){
    case 'Leo':
        $bandana = 'blue';
        break;
    case 'Raph':
        $bandana = 'red';
        break;
    case 'Mike':
        $bandana = 'blue';
        break;
    case 'Don':
        $bandana = 'purple';
        break;
}
// simple version of total
switch ($total){
    case 1:
    case 2:
    case 3:
    case 4:
        echo '<p>total is less than 5</p>';
        break;
    default:
        echo "<p>$total is more than 5</p>";
        break;
}