<main>
    <div class="container">

        <button class="btn btn-primary m-5"><a href="create_employee.php" class="text-light"> Add employee </a></button>
        <button class="btn btn-secondary m-5"><a href="index.php" class="text-light"> Home </a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Salary</th>
                </tr>
            </thead>


            <tbody>

                <?php

                $get = new Employee;

                foreach ($get->get() as $data) {

                    echo '  <tr>
    <th scope="row">' . $data['id'] . ' </th>
    <td>' . $data['full_name'] . '</td>
    <td>' . $data['email'] . '</td>
    <td>' . $data['phone_number'] . '</td>
    <td>' . $data['date_birth'] . '</td>
    <td>' . $data['salary'] . '</td>
    <td><button class="btn btn-success"><a class="text-light" href="update_employee.php?updateid=' . $data['id'] . '">Update</a></button></td>
    <td><button class="btn btn-danger"><a class="text-light" href="delete_employee.php?deletedid=' . $data['id'] . '">Delete</a></button></td>
    </tr>';
                }
                ?>

            </tbody>
        </table>


    </div>
</main>