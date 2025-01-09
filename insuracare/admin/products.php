<?php
include('../middleware/adminMiddleware.php');
include('includes/header.php');
?> 

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Policy Plan</h4>
                </div>
                <div class="card-body table-responsive" id="products_table">
                    <table id="datatableid" class="table table-bordered table-striped ">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                
                                <th>Plan Number</th>
                                <th>Plan Name</th>
                                <th>Slug</th>
                                <th>Age</th>
                                <th>Maximum Age</th>
                                <th>Policy Term</th>
                                <th>Sum Assured</th>
                                <th>Sum Aassured Multiples</th>
                                <th>Mode of Payment</th>
                                <th>GST</th>
                                <th>Loan</th>
                                <th>Surrender</th>
                                <th>Risk Cover</th>
                                <th>On Maturity</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $products = getAll("products");

                                if(mysqli_num_rows($products) > 0)
                                {
                                    while ($item = mysqli_fetch_assoc($products)) 
                                    {
                                        ?>
                                            <tr>
                                                <td><?= isset($item['id']) ? $item['id'] : 'N/A'; ?></td>
                                                
                                                <td><?= isset($item['plan_num']) ? $item['plan_num'] : 'N/A'; ?></td>
                                                <td><?= isset($item['plan_name']) ? $item['plan_name'] : 'N/A'; ?></td>
                                                <td><?= isset($item['slug']) ? $item['slug'] : 'N/A'; ?></td>
                                                <td><?= isset($item['age']) ? $item['age'] : 'N/A'; ?></td>
                                                <td><?= isset($item['max_age']) ? $item['max_age'] : 'N/A'; ?></td>
                                                <td><?= isset($item['policy_term']) ? $item['policy_term'] : 'N/A'; ?></td>
                                                <td><?= isset($item['sum_assured']) ? $item['sum_assured'] : 'N/A'; ?></td>
                                                <td><?= isset($item['sum_assured_multiples']) ? $item['sum_assured_multiples'] : 'N/A'; ?></td>
                                                <td><?= isset($item['mode_of_payment']) ? $item['mode_of_payment'] : 'N/A'; ?></td>
                                                <td><?= isset($item['gst']) ? $item['gst'] : 'N/A'; ?></td>
                                                <td><?= isset($item['loan']) ? $item['loan'] : 'N/A'; ?></td>
                                                <td><?= isset($item['surrender']) ? $item['surrender'] : 'N/A'; ?></td>
                                                <td><?= isset($item['risk_cover']) ? $item['risk_cover'] : 'N/A'; ?></td>
                                                <td><?= isset($item['on_maturity']) ? $item['on_maturity'] : 'N/A'; ?></td>

                                                <td>
                                                    <img src="../uploads/<?= isset($item['image']) ? $item['image'] : 'default.jpg'; ?>" width="50px" height="50px" alt="<?= isset($item['plan_name']) ? $item['plan_name'] : 'No Name'; ?>">
                                                </td>
                                               
                                                <td>
                                                    <?= isset($item['status']) ? ($item['status'] == '0' ? "Visible" : "Hidden") : 'N/A'; ?>
                                                </td>
                                                <td>
                                                    <a href="edit-product.php?id=<?= isset($item['id']) ? $item['id'] : ''; ?>" class="btn " style="background-color: #fcd82c; color: #004080; border: none;">Edit</a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-danger delete_product_btn" value="<?= isset($item['id']) ? $item['id'] : ''; ?>">Delete</button>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No record found";
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
