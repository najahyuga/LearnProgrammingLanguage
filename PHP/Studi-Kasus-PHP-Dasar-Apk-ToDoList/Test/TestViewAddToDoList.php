<?php
require_once "../View/ViewAddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addTodoList("najah");
addTodoList("yuga");

viewAddTodoList();
showTodoList();
viewAddTodoList();
showTodoList();