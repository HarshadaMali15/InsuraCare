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
                    $product = getByID('products',$id);
                    
                    if(mysqli_num_rows($product) > 0)
                    {
                        $data = mysqli_fetch_array($product);

                        ?>
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Policy Plan
                                    <a href="products.php" class="btn float-end" style="background-color: #004080; color: #f0f0f0; border: none;">Back</a>
                                </h4>
                                
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="">Select Category</label>
                                            <select name ="category_id" class="form-select mb-2">
                                                <option selected>Select Category</option>
                                                <?php
                                                $categories = getAll("categories");

                                                if(mysqli_num_rows($categories) > 0)
                                                {
                                                    foreach($categories as $item)
                                                    {
                                                        ?>
                                                            <option value="<?= $item['id']; ?>"<?= $data['category_id'] == $item['id']?'selected':'' ?>><?= $item['name']; ?></option>
                                                        <?php
                                                    }
                                                }
                                                else
                                                {
                                                    echo "No category available";
                                                }
                                                
                                                ?>     
                                            </select>
                                        </div>
                                        <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                                        <div class="col-md-12">
                                            <label class="mb-0">Plan number</label>
                                            <input type="number" required name="plan_num" value="<?= $data['plan_num']; ?>" placeholder="Enter plan number" class="form-control mb-2">
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-0">Plan Name</label>
                                            <input type="text" required name="plan_name" value="<?= $data['plan_name']; ?>" placeholder="Enter Plan Name" class="form-control mb-2">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-0">Slug</label>
                                            <input type="text" required name="slug" value="<?= $data['slug']; ?>" placeholder="Enter Slug" class="form-control mb-2">
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-0">Age</label>
                                            <input type="text" required name="age" value="<?= $data['age']; ?>" placeholder="Enter age" class="form-control mb-2">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mb-0">Maximum Age</label>
                                            <input type="text" required name="max_age" value="<?= $data['max_age']; ?>" placeholder="Enter Maximum Age" class="form-control mb-2">
                                        </div>
                                        </div>
                                                            
                                            <div class="row">
                                            <div class="col-md-6">
                                                <label class="mb-0">Policy Term</label>
                                                <input type="text" required name="policy_term" value="<?= $data['policy_term']; ?>" placeholder="Enter Policy Term" class="form-control mb-2">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-0">Sum Assured</label>
                                                <input type="text" required name="sum_assured" value="<?= $data['sum_assured']; ?>" placeholder="Enter Sum Assured" class="form-control mb-2">
                                            </div>
                                            </div>


                                        <div class="row">
                                        <div class="col-md-6">
                                                <label class="mb-0">Sum Aassured Multiples</label>
                                                <input type="text" required name="sum_assured_multiples" value="<?= $data['sum_assured_multiples']; ?>" placeholder="Enter Sum Aassured Multiples" class="form-control mb-2">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-0">Mode of Payment</label>
                                                <input type="text" required name="mode_of_payment" value="<?= $data['mode_of_payment']; ?>" placeholder="Enter Mode of Payment" class="form-control mb-2">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <label class="mb-0">GST</label>
                                                <input type="text" required name="gst" value="<?= $data['gst']; ?>" placeholder="Enter GST" class="form-control mb-2">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-0">Loan</label>
                                                <input type="text" required name="loan" value="<?= $data['loan']; ?>" placeholder="Enter Loan" class="form-control mb-2">
                                            </div>
                                        </div>
                                            <div class="col-md-12">
                                                <label class="mb-0">Surrender</label>
                                                <input type="text" required name="surrender" value="<?= $data['surrender']; ?>" placeholder="Enter Surrender" class="form-control mb-2">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="mb-0">Risk Cover</label>
                                                <textarea rows="3" required name="risk_cover" value="<?= $data['risk_cover']; ?>" placeholder="Enter Risk Cover" class="form-control mb-2"></textarea>
                                                
                                            </div>
                                            <div class="col-md-12">
                                                <label class="mb-0">On Maturity</label>
                                                <textarea rows="3" required name="on_maturity" value="<?= $data['on_maturity']; ?>" placeholder="Enter On Maturity" class="form-control mb-2"></textarea>
                                            
                                            </div>
                                            <div class="col-md-12">
                                            <label class="mb-0">Upload Image</label>
                                            <input type="hidden" name="old_image" value="<?= $data['image']; ?>">
                                            <input type="file" name="image" class="form-control mb-2">
                                            <label class="mb-0">Current Image</label>
                                            <img src="../uploads/<?= $data['image']; ?>" alt="Product Image" height="50px" width="50px">
                                        </div>
                                        
                                        <div class="row">
                                        
                                        <div class="col-md-3">
                                            <label class="mb-0">Hidden</label> <br>
                                            <input type="checkbox" name="status" <?= $data['status'] == '0'?'':'checked' ?> >
                                        </div>
                                        <div class="col-md-3">
                                            <label class="mb-0">Visible</label> <br>
                                            <input type="checkbox" name="trending" <?= $data['trending'] == '0'?'':'checked' ?>>
                                        </div>                                   
                                    
                                        <div class="col-md-12">
                                            <button type="submit" class="btn" name="update_product_btn" style="background-color: #fcd82c; color: #004080; border: none;">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php
                    }
                    else
                    {
                        echo "Product Not found for given id";
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

