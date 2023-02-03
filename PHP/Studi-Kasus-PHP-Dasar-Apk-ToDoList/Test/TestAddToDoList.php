<?php
require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addToDoList("najah");
addToDoList("yuga");
addToDoList("yug");

var_dump($todoList);