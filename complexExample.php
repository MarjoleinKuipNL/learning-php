<?php
if(10 < 1) {
    echo '<p>We stopped at if</p>';
}else if (10 < 4) {
    echo '<p>We stopped at the first if.</p>';
}else if (10 < 11){
    echo '<p>We stopped at the second if.</p>';
}else if (10 < 20){
    echo '<p>We stopped at the second if.</p>';
}else {
    echo "<p>None of the conditions are true we never stopped, so this is the else</p>";
}

echo "out of the if";

$is_logged_in = true;

if($is_logged_in){
    echo "<h3>Welcome back, user!</h3>";
}else {
    echo '<h3>Welcome to the site</h3>';
}