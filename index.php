<?php include ('includes/header.php')?>
<?php   include ('db.php'); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h1>php crud 
                        <a href="register.php" class="btn btn-primary float-end"> Register/add</a>
                    </h1>
                    </div>
                    <div class="card-body">
                            <!-- reed data in data show in your table -->
                        <?php 

                        $register = "SELECT * FROM register";
                        $register_run = mysqli_query($conn, $register);

                        if(mysqli_num_rows($register_run) > 0)
                        {
                        ?>

                    <div class="table-responsive">
                    <table class="table table-bordered">
                         
                         <thead>
                             <tr>
                             <th scope="col">ID</th>
                             <th scope="col">First</th>
                             <th scope="col">Last</th>
                             <th scope="col">Email</th>
                             <th scope="col">password</th>
                             <th scope="col">phone</th>
                             <th scope="col">Edit</th>
                             <th scope="col">Delete</th>
                             
                            
                             </tr>
                         </thead>
                         <tbody>
                              <!-- reed data in data show in your table -->
                             <?php
                              while($reg_row = mysqli_fetch_array($register_run ))
                              {
                             ?>
                             <tr>
                             <th><?php echo $reg_row['id'] ?></th>
                             <td><?php echo $reg_row['fname']; ?></td>
                             <td><?php echo $reg_row['lname'];?></td>
                             <td><?php echo $reg_row['email']; ?></td>
                             <td><?php echo $reg_row['password']; ?></td>
                          <td><?php echo $reg_row['phone']; ?></td>
                             <td>
                                 <a href="register-edit.php?id=<?php echo $reg_row['id'] ?>" class="btn btn-info">Edit</a>
                             </td>
                             <td>
                                 <form action="code.php" method="POST">
                                     <input type="hidden" name="delete_id" value="<?php echo $reg_row['id']; ?>">
                                     <button type="submit" name="register_delete_btn" class="btn btn-danger" >Delete</button>
                                 </form>
                             </td>
                             </tr>
                             <?php  } ?>
                         </tbody>
                         </table>
 
                         <?php
                         }else{
                             echo "no record Found";
                         }
                         ?>
 
                     </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Delete Confirmation with SweetAlert2 -->
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'This record will be permanently deleted!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'delete.php?id=' + id;
            }
        });
    }
</script>

<?php include('includes/footer.php'); ?>

 <?php include ('includes/footer.php')?>