<?php
/**
 * add Todo ke List
 */
function addTodoList(string $todo){
    global $todoList;

    $number = sizeof($todoList);

    $todoList[$number] = $todo;
}