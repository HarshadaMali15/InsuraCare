<?php
include('../middleware/adminMiddleware.php');
include('includes/header.php');

?> 

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Categories</h4>
                </div>
                <div class="card-body" id="category_table">
                    <table id="datatableid" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $category = getAll("categories");

                                if(mysqli_num_rows($category) > 0)
                                {
                                    foreach($category as $item)
                                    {
                                        ?>
                                            <tr>
                                                <td><?= $item['id']; ?></td>
                                                <td><?= $item['name']; ?></td>
                                                
                                                <td>
                                                    <?= $item['status'] == '0'? "visible":"Hidden"?>
                                                </td>
                                                <td>
                                                    <a href="edit-category.php?id=<?= $item['id']; ?>" class="btn " style="background-color: #fcd82c; color: #004080; border: none;">Edit</a>
                                                    <!---<form action="code.php" method="POST">
                                                        <input type="hidden" name="category_id" value="<?= $item['id'];?> ">
                                                        <button type="submit" class="btn btn-sm btn-danger" name="delete_category_btn">Delete</button>
                                                    </form>---->
                                    </td><td>
                                                    <button type="button" class="btn btn-sm btn-danger delete_category_btn" value="<?= $item['id']; ?>">Delete</button>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No longer record";
                                }
                            ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>