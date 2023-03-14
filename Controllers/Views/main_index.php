<main class="bg-secretary">
  
    <div class=" bg-secondary text-center p-3 ">

        <div class="container m-5 ">
            <div class="row">
                <div class="col-6">
                 <button class="btn btn-secondary mb-3"><a class="text-light" href="create_employee.php">Employee</a></button>
                </div>
                <div class="col-6">
                 <button class="btn btn-secondary mb-3"><a class="text-light" href="create_task.php">Task</a></button>
                </div>
            </div>



            <div class="progress m-3">
                <div class="progress-bar bg-success " role="progressbar" style="width: 100%"></div>
            </div>
            <div class="progress m-3">
                <div class="progress-bar bg-primary " role="progressbar" style="width: 75%"></div>
            </div>
            <div class="progress m-3">
                <div class="progress-bar bg-info" role="progressbar" style="width: 50%"></div>
            </div>
            <div class="progress m-3">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div>
            </div>

            <div class="progress m-3">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 10%"></div>
            </div>




            <h6 class="p-3 text-light"> Employess who completed the largest number of tasks in the last month </h6>

            <table class="table text-light ">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Numbers of tasks</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $best = new Task;
                    foreach ($best->best() as $data) {
                        echo ' <tr>
             <th scope="row">' . $data['assignee'] . ' </th>
             <td >' . $data['NUMBER_OF_TASKS'] . '</td>
             </tr>';
                    }

                    ?>

                </tbody>
            </table>
        </div>
    </div>
</main>