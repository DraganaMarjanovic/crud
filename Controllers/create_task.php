<?php
//DATABASE
require __DIR__ . "/Models/db_connect.php";


$error=[];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (($_POST['submit'] == "yes")) {
 
  
    $title = $_POST['title'];
    if (empty($title)) {
      $error["title"] = "Please enter title.";
    }
    $description = $_POST['description'];
    if (empty($description) || (strlen($description) < 10)) {
      $error["description"] = "Please enter description, must be more then 10 characters.";
    }
    $assignee = $_POST['assignee'];
    if (empty($assignee) || (strlen($assignee) < 2 )) {
      $error["assignee"] = "Please enter assignee,must be more then 2 characters";
    }
    $due_date = $_POST['due_date'];
    if (empty($due_date)) {
      $error["due_date"] = "Please enter due date";
    }
   
    if (count($error) === 0) {
    $task = new Task;
    $task->insert($title, $description, $assignee, $due_date);

if ($task){

    header("location:display_task.php");
}
else {
    echo "error";
}
    }
  }
}


//HEADER
require __DIR__ . "/Views/_layout/header.php";

// PAGE
require __DIR__ . "/Views/main_create_task.php";

// FOOTER
require __DIR__ . "/Views/_layout/footer.php";
?>