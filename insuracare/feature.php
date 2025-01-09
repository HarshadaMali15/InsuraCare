<?php
include('functions/userfunctions.php'); 
include('includes/header.php');  

// Check if 'category' is set in the URL
if (isset($_GET['category'])) {
    $category_name = $_GET['category'];
    
    // Fetch category data
    $category_data = getNameActive("categories", $category_name);
    $category = mysqli_fetch_array($category_data);
    
    // Check if category data exists
    if ($category) {
        $cid = $category['id'];
    } else {
        $cid = null;
        $error_message = "Category not found.";
    }
} else {
    $category_name = null;
    $cid = null;
    $error_message = "No category specified.";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

        
<!-- Feature Start -->
<div class="container-fluid feature bg-light py-5">
<nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-secondary">Home</a></li>
                    <li class="breadcrumb-item"><a href="categories.php" class="text-secondary">Categories</a></li>
                    <li class="breadcrumb-item active text-dark" aria-current="page">Plans</li>
                </ol>
            </nav>
            <hr>
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
           
                <!-- Show category name or error message -->
                <?php if ($cid): ?>
                    <h1 class="text-center text-warning display-3" style="font-family: 'Georgia', serif; ">
    <?= $category['name']; ?>
</h1>

                    <h1 class="display-5 mb-4">Insurance Provides You a Better Future</h1>
                     </div>
                    
                    <div class="row g-4">
                        <?php
                        // Fetch products by category
                        $products = getProdByCategory($cid);
                        if (mysqli_num_rows($products) > 0) {
                            foreach ($products as $item) {
                                ?>
                                  <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
    <div class="feature-item p-4 pt-0" style="background-color:rgb(242, 238, 252); color: #333; transition: all 0.3s ease;">
        <div class="feature-icon p-4 mb-4">
            <h1 class="fa-3x" style="color: #333; transition: all 0.3s ease;"><?= $item['plan_num']; ?></h1>
        </div> 
        <h4 class="mb-4" style="color: #333; transition: all 0.3s ease;"><?= $item['plan_name']; ?></h4>
        <dl class="row">
            <dt class="col-sm-7 mb-5" style="color: #333; transition: all 0.3s ease;">Age Entry:</dt>
            <dd class="col-sm-4 mb-1" style="color: #333; transition: all 0.3s ease;"><?= $item['age']; ?></dd>
            <dd class="col-sm-19">
                <a href="product_view.php?product=<?= $item['slug']; ?>" class="btn btn-outline-primary"   style="background-color: #0d1126; color: white; border: none; transition: none;">View More</a>
            </dd>
        </dl>   
    </div>
</div>

<style>
    .feature-item:hover {
        background-color: #EEC641 !important; /* Dark background */
        color: white !important;
    }

    .feature-item:hover h1 {
        color: #EEC641 !important; /* Yellow for plan number */
        
    }

    .feature-item:hover h4,
    .feature-item:hover dt,
    .feature-item:hover dd {
        color: white !important;
    }

    .feature-item:hover .btn-outline-primary {
        color: white !important;
        border-color: white !important;
    }
</style>

                                <?php
                            }
                        } else {
                            echo "<p class='text-center text-white'>No products available for this category.</p>";
                        }
                        ?>
                    </div>
                <?php else: ?>
                    <h1 class="text-center text-danger"><?= $error_message; ?></h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<?php include('includes/footer.php'); ?>
