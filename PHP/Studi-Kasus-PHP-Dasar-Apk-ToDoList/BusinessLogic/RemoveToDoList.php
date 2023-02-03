<?php
/**
 * remove Todo di List
 */
function removeTodoList(int $number):bool
{
    global $todoList;

    if($number > sizeof($todoList))
    {
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) { 
        # code...
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;
}