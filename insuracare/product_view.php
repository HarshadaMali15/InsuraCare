<?php
include('functions/userfunctions.php'); 
include('includes/header.php');  

// Check if 'category' is set in the URL
if (isset($_GET['product'])) {
    $product_slug = $_GET['product'];
    
    // Fetch product data
    $product_data = getSlugActive("products", $product_slug);
    $product = mysqli_fetch_array($product_data);
    if ($product) {
       ?>
        

        <div class="bg-light py-4">
        <div class="py-3 ">
            <div class="container ">
                <div class="text-dark">
                    <a class="text-dark" href="index.php">
                        Home /
                    </a>
                    <a class="text-dark" href="categories.php">
                        Categories /
                    </a>
                   
                    <?=$product['plan_name']; ?>
                    <hr>
                </div>
            </div>
        </div>
       <div class="container mt-3" >
        <div class="row">
            <div class="col-md-4 mt-4">
                <div class="shadow">
                    <img src="uploads/<?= $product['image']; ?>" alt="product Image" class="w-100">
                </div>
            </div>
            <div class="col-md-8">
            <dl class="row mt-3">
                 <dt class="col-sm-4 mt-1 ">Plan Name:</dt>
                 <dd class="col-sm-8 mt-1"><?=$product['plan_name']; ?></dd>
                 <dt class="col-sm-4 mt-1">Age Entry: </dt>
                 <dd class="col-sm-8 mt-1"><?=$product['age']; ?></dd>
                 <dt class="col-sm-4 mt-1">Maximum Maturity Age: </dt>
                 <dd class="col-sm-8 mt-1"><?=$product['max_age']; ?></dd>
                 <dt class="col-sm-4 mt-1">Policy Term: </dt>
                 <dd class="col-sm-8 mt-1"><?=$product['policy_term']; ?></dd>
                 <dt class="col-sm-4 mt-1">Sum Assured: </dt>
                 <dd class="col-sm-8 mt-1"><?=$product['sum_assured']; ?></dd>
                 <dt class="col-sm-4 mt-1">Sum Assured Multiples: </dt>
                 <dd class="col-sm-8 mt-1"><?=$product['sum_assured_multiples']; ?></dd>
                 <dt class="col-sm-4 mt-1">Mode of Payment: </dt>
                 <dd class="col-sm-8 mt-1"><?=$product['mode_of_payment']; ?></dd>
                 <dt class="col-sm-4 mt-1">GST: </dt>
                 <dd class="col-sm-8 mt-1"><?=$product['gst']; ?></dd>
                 <dt class="col-sm-4 mt-1">Loan: </dt>
                 <dd class="col-sm-8 mt-1"><?=$product['loan']; ?></dd>
                 <dt class="col-sm-4 mt-1">Surrender: </dt>
                 <dd class="col-sm-8 mt-1"><?=$product['surrender']; ?></dd>
                 <dt class="col-sm-4 mt-1">Risk Cover: </dt>
                 <dd class="col-sm-8 mt-1"><?=$product['risk_cover']; ?></dd>
                 <dt class="col-sm-4 mt-1">On Maturity: </dt>
                 <dd class="col-sm-8 mt-1"><?=$product['on_maturity']; ?></dd>
                 <hr>
                <div class="row">
                <dd class="col-sm-4 mt-3">
    <a href="calculator.php" class="btn btn-outline-primary button-hover" 
       style="transition: all 0.3s ease; color: black; border-color: black;">Premium Calculator</a>
</dd>
<dd class="col-sm-8 mt-3">
    <a href="policyForm.php" class="btn btn-outline-primary button-hover" 
       style="transition: all 0.3s ease; color: black; border-color: black;">Buy Now</a>
</dd>

<style>
    .button-hover:hover {
        background-color: #0d1126 !important;
        color: white !important; /* Makes the text color white for better readability */
        border-color: #0d1126 !important;
    }
</style>

                </div>
            </dl>
            </div>
        </div>
       </div>
       </div>
       <?php
    } else {
       
        echo "Product not found.";
    }

}
    else {
        echo "Something Went Wrong";
    }
 include('includes/footer.php'); ?>