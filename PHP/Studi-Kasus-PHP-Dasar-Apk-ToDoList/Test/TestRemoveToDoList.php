<?php
require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/RemoveToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";

addToDoList("najah");
addToDoList("yuga");
addToDoList("syalwa");
addToDoList("yuga najah");
addToDoList("yug");

showTodoList();
removeToDoList(2);
showTodoList();
removeToDoList(3);
showTodoList();
$sucess = removeToDoList(4);
var_dump($sucess);
showTodoList();