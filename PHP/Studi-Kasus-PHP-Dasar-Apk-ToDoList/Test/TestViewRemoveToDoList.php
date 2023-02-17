<?php
require_once "../Model/ToDoList.php";
require_once "../View/ViewRemoveToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";

addTodoList("muhammad");
addTodoList("najah");
addTodoList("yuga");
addTodoList("desyalwa");

showTodoList();
viewRemoveTodoList();
showTodoList();