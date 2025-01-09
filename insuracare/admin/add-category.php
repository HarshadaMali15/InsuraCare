<?php
include('../middleware/adminMiddleware.php');
include('includes/header.php');

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Categories</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Enter Category Name" class="form-control">
                            </div>
                           
                            <div class="col-md-6">
                                <label for="">Hidden</label>
                                <input type="checkbox" name="popular">
                            </div>
                            <div class="col-md-6 mt-2"> <!-- mt is used for top padding-->
                                <label for="">Visible</label>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="col-md-12">
                            <button type="submit" class="btn" name="add_category_btn" 
                                style="background-color: #fcd82c; color: #004080; border: none;">Save</button>
                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>

