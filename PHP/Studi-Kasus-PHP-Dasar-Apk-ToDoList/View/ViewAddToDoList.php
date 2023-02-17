<?php
require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewAddTodoList(){
    echo "Menambah Todo" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if($todo == "x"){
        echo "Batal Menambah Todo" . PHP_EOL;
    }else{
        addTodoList($todo);
    }
}