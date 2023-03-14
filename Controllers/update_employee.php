<?php
//DATABASE
require __DIR__ . "/Models/db_connect.php";


$id = $_GET['updateid'];
$update = new Employee;

if (isset($_POST['submit'])) {

  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $date_birth = $_POST['date_birth'];
  $salary = $_POST['salary'];
  $id = $_GET['updateid'];
  $update = new Employee;
  $update->updateId($id, $full_name, $email, $phone_number, $date_birth, $salary);

  if ($update) {
    echo
    header("location:display_employee.php");
  } else {
    echo "error";
  }
}


//HEADER
require __DIR__ . "/Views/_layout/header.php";
// PAGE
require __DIR__ . "/Views/main_update_employee.php";

// FOOTER
require __DIR__ . "/Views/_layout/footer.php";
?>