<?php
function sum(int $first, int $last):int{//Return Type Declaration (:type data) 
    return $first + $last;
}

$total = sum(10,10);
var_dump($total);

function getFinalValue(int $value):string{
    if ($value >= 90) {
        return "A";
    }elseif($value >= 70) {
        return "B";
    }elseif($value >= 60) {
        return "C";
    }elseif($value >= 50) {
        return "D";
    }else{
        return "E";
    }

    echo "ups";//tidak akan dieksekusi
}

$score = getFinalValue(10);
var_dump($score);
var_dump(getFinalValue(80));