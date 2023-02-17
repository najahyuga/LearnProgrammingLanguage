<?php
require_once "../View/ViewShowToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/RemoveToDoList.php";
require_once "../View/ViewShowToDoList.php";
require_once "../View/ViewAddToDoList.php";
require_once "../View/ViewRemoveToDoList.php";


addTodoList("najah");
addTodoList("yuga");

viewShowTodoList();