<?php
$is_logged_in = false;

$message = $is_logged_in ? "welcome Back!" : "Hello there";

echo $message;

echo "Welcome" . ($is_logged_in) ? " back!" : "!";

$name = null;
$name = $name ?: 'Joe';

echo $name;

