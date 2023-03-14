<?php
//DATABASE
require __DIR__ . "/Models/db_connect.php";

if (isset($_GET['deletedid'])){
    $id=$_GET['deletedid'];
    $delete=new Task;
    $delete->deleteId($id);


    if ( $delete->deleteId($id)){
    header('location:display_task.php');
    }
     else "error";

    }

// PAGE
require __DIR__ . "/Views/main_display_task.php";