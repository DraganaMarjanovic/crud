<main>

<div class="container m-5">

    <form method="POST" action="create_employee.php">

        <div class="mb-3">
            <label for="full_name">Full name</label>
            <input type="text" class="form-control" name="full_name" autocomplete="off">
            <span class="text-danger"><?php
                                        if (!empty($error['full_name'])) {
                                            echo  $error['full_name'];
                                        } ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" autocomplete="off">
            <span class="text-danger"><?php
                                        if (!empty($error['email'])) {
                                            echo  $error['email'];
                                        } ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="phone_number">Phone number</label>
            <input type="text" class="form-control" name="phone_number" autocomplete="off">
            <span class="text-danger"><?php
                                        if (!empty($error['phone_number'])) {
                                            echo  $error['phone_number'];
                                        } ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="date_birth">Date birth</label>
            <input type="text" class="form-control" name="date_birth" autocomplete="off">
            <span class="text-danger"><?php
                                        if (!empty($error['date_birth'])) {
                                            echo  $error['date_birth'];
                                        } ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="salary">Salary</label>
            <input type="text" class="form-control" name="salary" autocomplete="off">
            <span class="text-danger"><?php
                                        if (!empty($error['salary'])) {
                                            echo  $error['salary'];
                                        } ?>
            </span>
        </div>

     <button type="submit" class="btn btn-primary" name="submit" value="yes">Submit</button>
     <button class="btn btn-secondary m-5"><a href="index.php" class="text-light"> Home </a></button>
    </form>

</div>
</main>