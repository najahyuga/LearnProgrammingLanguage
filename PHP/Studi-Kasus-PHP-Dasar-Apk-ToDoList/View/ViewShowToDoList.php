<?php
require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowToDoList.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveToDoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodoList(){
    while(true){
        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");
        if($pilihan == "1"){
            viewAddTodoList();
        } elseif ($pilihan == "2"){
            viewRemoveTodoList();
        } elseif ($pilihan == "x"){
            break;
        } else {
            echo "Pilihan Tidak Sesuai" . PHP_EOL;
        }
    }

    echo "Sampai Ketemu Lagi di Aplikasi Todolist" . PHP_EOL;
}