<?php
$turtle = 'Leo';
$bandana = match($turtle) {
    'Leo' => 'blue',
    'Ralph' => 'red',
    'Mikey' => 'orange',
    'Don' => 'purple',
    'default' => 'green'
}

echo "<h1>$bandana</h1>";