<main>
    <div class="container m-5">

      <form method="POST" action="create_task.php">

        <div class="mb-3">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" autocomplete="off">
          <span class="text-danger"><?php
                                    if (!empty($error['title'])) {
                                      echo  $error['title'];
                                    } ?>
          </span>

        </div>
        <div class="mb-3">
          <label for="description">Description</label>
          <input type="text" class="form-control" name="description" autocomplete="off">
          <span class="text-danger"><?php
                                    if (!empty($error['description'])) {
                                      echo  $error['description'];
                                    } ?>
          </span>

        </div>
        <div class="mb-3">
          <label for="assignee">Assignee</label>
          <select id="assignee" name="assignee">
        




          <?php
                    $get = new Employee;
                    foreach ($get->get() as $data) {
                        echo ' <option>' . $data['full_name'] . ' </option> ';
                    }
 ?>
  
                  </select>











          <span class="text-danger"><?php
                                    if (!empty($error['assignee'])) {
                                      echo  $error['assignee'];
                                    } ?>
          </span>

        </div>
        <div class="mb-3">
          <label for="due_date">Due date</label>
          <input type="date" class="form-control" name="due_date" autocomplete="off">
          <span class="text-danger"><?php
                                    if (!empty($error['due_date'])) {
                                      echo  $error['due_date'];
                                    } ?>
          </span>

        </div>

       <button type="submit" class="btn btn-primary" name="submit" value="yes">Submit</button>
       <button class="btn btn-secondary m-5"><a href="index.php" class="text-light"> Home </a></button>
      </form>

    </div>
  </main>