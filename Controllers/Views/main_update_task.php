<main>
    <div class="container m-5">

        <form method="POST">
            <?php foreach ($update->upd($id) as $data) { ?>
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" autocomplete="off" value=<?php echo $data['title'] ?>>
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" autocomplete="off" value=<?php echo $data['description'] ?>>
                </div>
                <div class="mb-3">
                    <label for="assignee">Assignee</label>
                    <input type="text" class="form-control" name="assignee" autocomplete="off" value=<?php echo $data['assignee'] ?>>
                </div>
                <div class="mb-3">
                    <label for="due_date">Due date</label>
                    <input type="text" class="form-control" name="due_date" autocomplete="off" value=<?php echo $data['due_date'] ?>>
                </div>

                <button type="submit" class="btn btn-success" name="submit">Update</button>
                <button class="btn btn-secondary m-5"><a href="application.php" class="text-light"> Home </a></button>
        </form>
    <?php } ?>
    </div>
</main>