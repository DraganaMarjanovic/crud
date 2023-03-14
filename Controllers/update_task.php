<?php
//DATABASE
require __DIR__ . "/Models/db_connect.php";


$id=$_GET['updateid'];
$update=new Task;

if (isset($_POST['submit'])){

$title=$_POST['title'];
$description=$_POST['description'];
$assignee=$_POST['assignee'];
$due_date=$_POST['due_date'];
$id=$_GET['updateid'];
$update = new Task;
$update->updateId($id,$title, $description,$assignee, $due_date);

if ($update){
echo 
    header("location:display_task.php");
}
else {
    echo "error";
}

}

//HEADER
require __DIR__ . "/Views/_layout/header.php";
// PAGE
require __DIR__ . "/Views/main_update_task.php";

// FOOTER
require __DIR__ . "/Views/_layout/footer.php";
?>