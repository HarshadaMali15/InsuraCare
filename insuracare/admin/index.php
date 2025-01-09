<?php
include('../middleware/adminMiddleware.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4" style="background-color: #f0f4f8; font-weight: bold;">
        <li class="breadcrumb-item active" style="color: #004080;">Dashboard</li>
    </ol>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color: #004080; border-radius: 8px;">
                <div class="card-body">Total Users
                <?php
                  $dash_user_query = "SELECT * from users";
                  $dash_user_query_run = mysqli_query($con, $dash_user_query);
                  if ($user_total = mysqli_num_rows($dash_user_query_run)) {
                   
                    echo '<h4 class="mb-0" style="color: #f0f4f8;">' . $user_total . '</h4>';
                  } else {
                    echo '<h4 class="mb-0" style="color: #f0f4f8;">No Data</h4>';
                  }
                ?>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color: #fcd82c; border-radius: 8px;">
                <div class="card-body">Total Categories
                <?php
                  $dash_categories_query = "SELECT * from categories";
                  $dash_categories_query_run = mysqli_query($con, $dash_categories_query);
                  if ($categories_total = mysqli_num_rows($dash_categories_query_run)) {
                   
                    echo '<h4 class="mb-0" style="color: #f0f4f8;">' . $categories_total . '</h4>';
                  } else {
                    echo '<h4 class="mb-0" style="color: #f0f4f8;">No Data</h4>';
                  }
                ?>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color: #00796b; border-radius: 8px;">
                <div class="card-body">Total Policy Plans
                <?php
                  $dash_products_query = "SELECT * from products";
                  $dash_products_query_run = mysqli_query($con, $dash_products_query);
                  
                  if ($products_total = mysqli_num_rows($dash_products_query_run)) {
                      echo '<h4 class="mb-0" style="color: #f0f4f8;">' . $products_total . '</h4>';
                  } else {
                      echo '<h4 class="mb-0" style="color: #f0f4f8;">No Data</h4>';
                  }
                  
                  
                ?>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color:rgb(127, 27, 189); border-radius: 8px;">
                <div class="card-body">Submitted Policy Forms 
                <?php
                  $dash_categories_query = "SELECT * from policy_form_data";
                  $dash_categories_query_run = mysqli_query($con, $dash_categories_query);
                  if ($categories_total = mysqli_num_rows($dash_categories_query_run)) {
                   
                    echo '<h4 class="mb-0" style="color: #f0f4f8;">' . $categories_total . '</h4>';
                  } else {
                    echo '<h4 class="mb-0" style="color: #f0f4f8;">No Data</h4>';
                  }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>
