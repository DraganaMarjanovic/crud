<?php
//DATABASE
require __DIR__ . "/Models/db_connect.php";




$error=[];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (($_POST['submit'] == "yes")) {
 
  
    $full_name = $_POST['full_name'];
    if (empty($full_name) || (strlen($full_name) < 2)) {
      $error["full_name"] = "Please enter name. Name must have more then 2 characters";
    }
    $email = $_POST['email'];
    if (empty($email) || (!str_contains($email, "@"))) {
      $error["email"] = "Please enter email.Email must include @";
    }
    $phone_number = $_POST['phone_number'];
    if (empty($phone_number) || (!is_numeric($phone_number)) || (strlen($phone_number) < 9 or strlen($phone_number) > 11)) {
      $error["phone_number"] = "Please enter a phone.Only numeric value is allowed, between 9 and 11 characters";
    }
    $date_birth = $_POST['date_birth'];
    if (empty($date_birth) || (!is_numeric($date_birth))) {
      $error["date_birth"] = "Please enter date of birth,must be numeric";
    }
    $salary = $_POST['salary'];
    if (empty($salary) || (!is_numeric($salary)) ) {
      $error["salary"] = "Please enter salary,must be numeric";
    }
    if (count($error) === 0) {
    $employee = new Employee;
$employee->insert($full_name, $email, $phone_number, $date_birth,$salary);

if ($employee){

    header("location:display_employee.php");
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
require __DIR__ . "/Views/main_create_employee.php";

// FOOTER
require __DIR__ . "/Views/_layout/footer.php";
?>