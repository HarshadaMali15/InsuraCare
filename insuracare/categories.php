<?php
include('functions/userfunctions.php');
include('includes/header.php'); 

?>
   
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <h1>Categories</h1>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-secondary">Home</a></li>
                    <li class="breadcrumb-item active text-dark" aria-current="page">Categories</li>
                </ol>
            </nav>
                <hr>
                <div class="row">
    <?php
        $categories = getAllActive("categories");

        if(mysqli_num_rows($categories) > 0)
        {
            foreach($categories as $item)
            {
            ?>
               <div class="col-md-3 mb-4"> <!-- Increased margin-bottom for better spacing -->
                 <a href="feature.php?category=<?=$item['name'];?>" style="text-decoration: none; width: 100%;">
                    <div class="card shadow-lg card-hover" style="background-color: #0d1126; border-radius: 12px; transition: all 0.3s ease-in-out; padding: 20px; height: 120px;">
                 <div class="card-body">
                <h4 class="text-center" style="color: white; font-weight: bold;"><?php echo $item['name']; ?></h4>
            </div>
        </div>
    </a>
</div>

            <?php
            }
        }
        else
        {
            echo "No data available";
        }
    ?>
</div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>


