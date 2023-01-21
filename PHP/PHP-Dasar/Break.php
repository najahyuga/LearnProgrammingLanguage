<?php
$counter = 1;

while (true) {
    echo "counter whileloop ke - $counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}