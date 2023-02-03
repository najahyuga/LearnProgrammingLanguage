<?php
/**
 * add Todo ke List
 */
function addTodoList(string $todo){
    global $todolist;

    $number = sizeof($todolist);

    $todolist[$number] = $todo;
}