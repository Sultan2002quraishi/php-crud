<?php include ('includes/header.php');?>
<?php include('db.php') ?>
<?php
$id = $_GET['id'];
$update_query = "SELECT * FROM register WHERE id='$id' ";
$update_query_run = mysqli_query($conn,$update_query);

if(mysqli_num_rows($update_query_run) > 0)
{
    while($row = mysqli_fetch_array($update_query_run))
    {
        
        
        ?>
    
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>Register update </h4>
                </div>
                    <div class="card-body">

                    <form action="code.php" method="post">
                        <input type="hidden" name="edit_id" class="form-control" value="<?php echo $row['id']?>">

                        <div class="mb-3">
                            <label >First Name</label>
                            <input type="text" name="first_name" class="form-control" value="<?php echo $row['fname'] ?>">
                        </div>
                        <div class="mb-3">
                            <label >Last Name</label>
                            <input type="text" name="last_name" class="form-control"value="<?php echo $row['lname'] ?>">
                        </div>
                        <div class="mb-3">
                            <label >Email address</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">
                        </div>
                        <div class="mb-3">
                            <label >Password</label>
                            <input type="text" name="password" class="form-control" value="<?php echo $row['password'] ?>">
                        </div>
                        <div class="mb-3">
                            <label >Phone Number</label>
                            <input type="text" name="Phone_number" class="form-control" value="<?php echo $row['phone'] ?>">
                        </div>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="register_update_btn" class="btn btn-info">Update</button>
                    </form>
                    
                    </div>
                </div>
        </div>
    </div>
</div>
<?php
    }
}else{
    echo "No data found this talbel";
}
?>

<?php include ('includes/footer.php') ?>