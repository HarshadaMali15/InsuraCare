<?php
include('../middleware/adminMiddleware.php');
include('includes/header.php');

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Policy Plan</h4>
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
                                                <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
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
                            <div class="col-md-12">
                                <label class="mb-0">Plan Number</label>
                                <input type="number" required name="plan_num" placeholder="Enter Plan Name" class="form-control mb-2">
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <label class="mb-0">Plan Name</label>
                                <input type="text" required name="plan_name" placeholder="Enter Plan Name" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0">Slug</label>
                                <input type="text" required name="slug" placeholder="Enter Slug" class="form-control mb-2">
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-6">
                                <label class="mb-0">Age</label>
                                <input type="text" required name="age" placeholder="Enter Age" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0">Maximum Age</label>
                                <input type="text" required name="max_age" placeholder="Enter Maximum Age" class="form-control mb-2">
                            </div>
                            </div>
                            
                            <div class="row">
                            <div class="col-md-6">
                                <label class="mb-0">Policy Term</label>
                                <input type="text" required name="policy_term" placeholder="Enter Policy Term" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0">Sum Assured</label>
                                <input type="text" required name="sum_assured" placeholder="Enter Sum Assured" class="form-control mb-2">
                            </div>
                            </div>


                           <div class="row">
                           <div class="col-md-6">
                                <label class="mb-0">Sum Aassured Multiples</label>
                                <input type="text" required name="sum_assured_multiples" placeholder="Enter Sum Aassured Multiples" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0">Mode of Payment</label>
                                <input type="text" required name="mode_of_payment" placeholder="Enter Mode of Payment" class="form-control mb-2">
                            </div>
                           </div>
                           <div class="row">
                           <div class="col-md-6">
                                <label class="mb-0">GST</label>
                                <input type="text" required name="gst" placeholder="Enter GST" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0">Loan</label>
                                <input type="text" required name="loan" placeholder="Enter Loan" class="form-control mb-2">
                            </div>
                           </div>
                            <div class="col-md-12">
                                <label class="mb-0">Surrender</label>
                                <input type="text" required name="surrender" placeholder="Enter Surrender" class="form-control mb-2">
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0">Risk Cover</label>
                                <textarea rows="3" required name="risk_cover" placeholder="Enter Risk Cover" class="form-control mb-2"></textarea>
                                
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0">On Maturity</label>
                                <textarea rows="3" required name="on_maturity" placeholder="Enter On Maturity" class="form-control mb-2"></textarea>
                               
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0">Upload Image</label>
                                <input type="file" required name="image"  placeholder="Upload image" class="form-control mb-2">
                            </div>

                            <div class="row">
                            
                            <div class="col-md-3">
                                <label class="mb-0">Hidden</label> <br>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="col-md-3">
                                <label class="mb-0">Visible</label> <br>
                                <input type="checkbox" name="trending">
                            </div>
                           
                            <div class="col-md-12">
                                <button type="submit" class="btn " name="add_product_btn" style="background-color: #fcd82c; color: #004080; border: none;">Save</button>
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

