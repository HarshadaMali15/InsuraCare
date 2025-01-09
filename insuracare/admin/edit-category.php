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
                $category = getByID("categories",$id);    

                if(mysqli_num_rows($category) > 0)
                {
                    $data = mysqli_fetch_array($category);
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Category
                                <a href="category.php" class="btn float-end" style="background-color: #004080; color: #f0f0f0; border: none;">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="category_id" value="<?= $data['id'] ?>">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="<?= $data['name'] ?>" placeholder="Enter Category Name" class="form-control">
                                    </div>
                                   
                                 
                                    <div class="col-md-6">
                                        <label for="">Hidden</label>
                                        <input type="checkbox" <?= $data['popular'] ? "checked":"" ?> name="popular">
                                    </div>
                                    <div class="col-md-6 mt-2"> <!-- mt is used for top padding-->
                                        <label for="">Visible</label>
                                        <input type="checkbox" <?= $data['status'] ? "checked":"" ?> name="status">
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn " name="update_category_btn" style="background-color: #fcd82c; color: #004080; border: none;">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php

                }
                else
                {
                    echo "Category not found";
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

