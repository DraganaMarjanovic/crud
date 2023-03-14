<?php

class DB
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "application";

    public function connect()
    {
        $dsn = "mysql:host=" . $this->host . "; dbname=" . $this->dbName;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}

class Employee extends DB
{
    public function insert($full_name, $email, $phone_number, $date_birth, $salary)
    {
        $sql = "INSERT INTO employee (full_name, email,phone_number, date_birth,salary)
        VALUES (?, ?, ?, ?,?);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$full_name, $email, $phone_number, $date_birth, $salary]);
    }


    public function get()
    {
        $sql = "SELECT * FROM employee";
        return  $stmt = $this->connect()->query($sql);
    }

    public function deleteId($id)
    {

        $sql = " DELETE FROM employee WHERE id = '$id'";
        return $stmt = $this->connect()->query($sql);
    }



    public function updateId($id, $full_name, $email, $phone_number, $date_birth, $salary)
    {
        $sql = " UPDATE `employee` SET `id`='$id',`full_name`='$full_name',`email`='$email',
        `phone_number`='$phone_number',`date_birth`='$date_birth',`salary`='$salary'
         WHERE id = '$id'";

        return $stmt = $this->connect()->query($sql);
    }

    public function upd($id)
    {
        $sql = "SELECT * FROM `employee` WHERE id = '$id'";
        return  $stmt = $this->connect()->query($sql);
    }
}




class Task extends DB
{

    public function insert($title, $description, $assignee, $due_date)
    {
        $sql = "INSERT INTO task (title, description,assignee, due_date) VALUES (?, ?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $description, $assignee, $due_date]);
    }


    public function get()
    {
        $sql = "SELECT * FROM task";
        return  $stmt = $this->connect()->query($sql);
    }

    public function deleteId($id)
    {

        $sql = " DELETE FROM task WHERE id = '$id'";
        return $stmt = $this->connect()->query($sql);
    }



    public function updateId($id, $title, $description, $assignee, $due_date)
    {
        $sql = " UPDATE `task` SET `id`='$id',`title`='$title',`description`='$description',
        `assignee`='$assignee',`due_date`='$due_date' WHERE id = '$id'";

        return $stmt = $this->connect()->query($sql);
    }

    public function upd($id)
    {
        $sql = "SELECT * FROM `task` WHERE id = '$id'";
        return  $stmt = $this->connect()->query($sql);
    }


    public function best()
    {
        $firstDay = $this->getFirstDayOfThePreviousMonth();
        $lastday = $this->getLastDayOfThePreviousMonth();
        $sql = "SELECT assignee, COUNT(assignee) AS NUMBER_OF_TASKS from task 
                where due_date <='$lastday' AND due_date >= '$firstDay'
                GROUP BY assignee ORDER BY COUNT(assignee) DESC LIMIT 5;";
        return  $stmt = $this->connect()->query($sql);
    }



    public function getFirstDayOfThePreviousMonth()
    {
        $d = strtotime("first day of last month");
        return date("Y-m-d", $d);
    }

    function getLastDayOfThePreviousMonth()
    {
        $d = strtotime("last day of last month");
        return date("Y-m-d", $d);
    }
}
