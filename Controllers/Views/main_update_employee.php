<main>
     <div class="container m-5">

       <form method="POST" >
         <?php foreach ($update->upd($id) as $data) { ?>
           <div class="mb-3">
             <label for="full_name">Full name</label>
             <input type="text" class="form-control" name="full_name" autocomplete="off" value=<?php echo $data['full_name'] ?>>
           </div>
           <div class="mb-3">
             <label for="email">Email</label>
             <input type="text" class="form-control" name="email" autocomplete="off" value=<?php echo $data['email'] ?>>
           </div>
           <div class="mb-3">
             <label for="phone_number">Phone number</label>
             <input type="text" class="form-control" name="phone_number" autocomplete="off" value=<?php echo $data['phone_number'] ?>>
           </div>
           <div class="mb-3">
             <label for="date_birth">Date of birth</label>
             <input type="text" class="form-control" name="date_birth" autocomplete="off" value=<?php echo $data['date_birth'] ?>>
           </div>
           <div class="mb-3">
             <label for="salary">Salary</label>
             <input type="text" class="form-control" name="salary" autocomplete="off" value=<?php echo $data['salary'] ?>>
           </div>
           <button type="submit" class="btn btn-success" name="submit">Update</button>
           <button class="btn btn-secondary m-5"><a href="index.php" class="text-light"> Home </a></button>
       </form>
     <?php } ?>
     </div>
   </main>