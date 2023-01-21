<?php
function factorialLoop(int $value):int{
    $total = 1;

    for ($i = 1; $i <= $value ; $i++) { 
        $total *= $i;
    }

    return $total;
}
var_dump(factorialLoop(5));

function factorialRecursive(int $value):int{
    $total = 1;
    if ($value == 1) {
        return 1;
    }else {
        return $value * factorialLoop($value - 1);
    }
}
var_dump(factorialRecursive(5));

function loop(int $value)
{
    if ($value == 0) {
        echo "end loop" . PHP_EOL;
    }else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(3);