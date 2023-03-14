
  <main>
    <div class="container">

      <button class="btn btn-primary m-5"><a href="create_task.php" class="text-light"> Add task </a></button>
      <button class="btn btn-secondary m-5"><a href="index.php" class="text-light"> Home </a></button>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Assignee</th>
            <th scope="col">Due date</th>
          </tr>
        </thead>

        <tbody>

          <?php

          $get = new Task;

          // var_dump($get->get());
          foreach ($get->get() as $data) {

            echo '  <tr>
    <th scope="row">' . $data['id'] . ' </th>
    <td>' . $data['title'] . '</td>
    <td>' . $data['description'] . '</td>
    <td>' . $data['assignee'] . '</td>
    <td>' . $data['due_date'] . '</td>
    <td><button class="btn btn-success"><a class="text-light" href="update_task.php?updateid=' . $data['id'] . '">Update</a></button></td>
    <td><button class="btn btn-danger"><a class="text-light" href="delete_task.php?deletedid=' . $data['id'] . '">Delete</a></button></td>
    </tr>';
          }
          ?>

        </tbody>
      </table>
    </div>
  </main