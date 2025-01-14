<?php include ('includes/header.php');?>


<div class="container ">
    <div class="row">
        <div class="col-md-10">
            <div class="card ">
                <div class="card-header">
                    <h4>Register Now</h4>
                </div>
                    <div class="card-body ">

                    <form action="code.php" method="post">

                        <div class="mb-3">
                            <label >First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="Enter your Name">
                        </div>
                        <div class="mb-3">
                            <label >Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Enter your Name">
                        </div>
                        <div class="mb-3">
                            <label >Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your Name">
                        </div>
                        <div class="mb-3">
                            <label >Password</label>
                            <input type="text" name="password" class="form-control" placeholder="Enter your Name">
                        </div>
                        <div class="mb-3">
                            <label >Phone Number</label>
                            <input type="text" name="Phone_number" class="form-control" placeholder="Enter your Name">
                        </div>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                    </form>
                    
                    </div>
                </div>
        </div>
    </div>
</div>


<?php include ('includes/footer.php') ?>