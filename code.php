<?php
include ('db.php');

if(isset($_POST['register_btn']))
{ 
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['Phone_number'];

    $query = "INSERT INTO register (fname, lname, email, password, phone) values('$fname','$lname','$email','$password','$phone')";
    $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            // echo "Register Successfully";
            header('Location: index.php');
        }
        else{
            // echo "someting worring Error";
            header('Location: register.php');
        }
}

// update code and query
if(isset($_POST['register_update_btn']))
{
    $update_id = $_POST['edit_id'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['Phone_number'];

    $update_query = "UPDATE register SET fname='$fname',lname='$lname',email='$email',password='$password',phone='$phone' WHERE id='$update_id' ";
    $query_update_run = mysqli_query($conn,$update_query);

    if($query_update_run)
    {
        // echo "update Successfully";
        header('Location: index.php');
    }
    else{
        // echo "Data not update somting error";
        header('Location: index.php');
    }

}
// Delete code 

if(isset($_POST['register_delete_btn']))
{
    $delete_id = $_POST['delete_id'];

    $delete_query = "DELETE FROM register WHERE id='$delete_id' ";
    $up_query_run = mysqli_query($conn, $delete_query);

    if($up_query_run)
    {
        // echo "data delete Successfull";
        header('Location: index.php');
    }
    else{
        // echo "Data not delete";
        header('Location: index.php');
    }

}
?>