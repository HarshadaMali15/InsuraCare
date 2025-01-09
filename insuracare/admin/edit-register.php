<?php
include('../middleware/adminMiddleware.php');
include('includes/header.php');

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if(isset($_GET['id']))
            { 
                $id = $_GET['id']; 
                $query = "SELECT * FROM users WHERE id='$id' "; 
                $query_run = mysqli_query($con,$query);    

                if(mysqli_num_rows($query_run) > 0)
                {
                    $data = mysqli_fetch_array($query_run);
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Users Details
                                <a href="visited_users.php" class="btn btn-primary float-end">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="register_id" value="<?= $data['id'] ?>">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="<?= $data['name'] ?>" placeholder="Enter Name" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                       
                                        <label for="">Email Id</label>
                                        <input type="text" name="email" value="<?= $data['email'] ?>" placeholder="Enter email id" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <label for="">Phone</label>
                                        <input type="text" name="phone" value="<?= $data['phone'] ?>" placeholder="Enter phone number" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <label for="">Password</label>
                                        <input type="text" name="password" value="<?= $data['password'] ?>" placeholder="Enter password" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <label for="">Role as</label>
                                        <input type="text" name="role_as" value="<?= $data['role_as'] ?>" placeholder="Enter role_as" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                       
                                        <label for="">Created at</label>
                                        <input type="text" name="created_at" value="<?= $data['created_at'] ?>" placeholder="Enter created_at" class="form-control">
                                    </div>
                                    <div class="col-md-12 py-4">
                                        <button type="submit" class="btn btn-warning" name="update_register_btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php

                }
                else
                {
                    echo "Details not found";
                }
               
            }
            else
            {
                echo "Id missing from url";
            }
            ?>

        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>

