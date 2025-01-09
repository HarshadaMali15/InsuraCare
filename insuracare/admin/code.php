<?php

include('../config/dbcon.php');
include('../functions/myfunctions.php');

if(isset($_POST['add_category_btn']))
    {
        $name=$_POST['name'];
        
        
        $status=isset($_POST['status']) ? '0':'1';
        $popular=isset($_POST['popular']) ? '0':'1';

      
       

        $cate_query = "INSERT INTO categories (name,status,popular) 
        VALUES('$name','$status','$popular')";
        
        $cate_query_run = mysqli_query($con,$cate_query);
        if($cate_query_run)
        {
           

            redirect("add-category.php","Category added succesfully");
        }
        else
        {
            redirect("add-category.php","Something Went Wrong");
        }
    }
else if(isset($_POST['update_category_btn']))
    {
        $category_id = $_POST['category_id'];
        $name=$_POST['name'];
        
       
        $status=isset($_POST['status']) ? '0':'1';
        $popular=isset($_POST['popular']) ? '0':'1';

      

    
        $update_query = "UPDATE categories SET name='$name' , status='$status',  popular='$popular' WHERE id='$category_id' ";

        $upadate_query_run = mysqli_query($con, $update_query);

        if($upadate_query_run)
        {
           
            redirect("edit-category.php?id=$category_id", "Category Updated Successfully");
        }
        else
        {
            redirect("edit-category.php?id=$category_id", "Something went wrong");
        }

    }
else if(isset($_POST['delete_category_btn']))
    {
        $category_id = mysqli_real_escape_string($con,$_POST['category_id']);

        $category_query =  "SELECT * FROM categories WHERE id='$category_id' ";
        $delete_query_run = mysqli_query($con,$category_query);
        $category_data = mysqli_fetch_array($delete_query_run);
      

        $delete_query =  "DELETE FROM categories WHERE id='$category_id' ";
        $delete_query_run = mysqli_query($con,$delete_query);

        if($delete_query_run)
        {
           
            //redirect("category.php", "Category deleted Successfully");
            echo 200;
        }
        else
        {
            //redirect("category.php", "Something went wrong");
            echo 500;
        }

    }
   else if (isset($_POST['add_product_btn'])) {
        // Collect data from the form
        $category_id = mysqli_real_escape_string($con, $_POST['category_id']);
        $plan_num = mysqli_real_escape_string($con, $_POST['plan_num']);
        $plan_name = mysqli_real_escape_string($con, $_POST['plan_name']);
        $slug = mysqli_real_escape_string($con, $_POST['slug']);
        $age = mysqli_real_escape_string($con, $_POST['age']);
        $max_age = mysqli_real_escape_string($con, $_POST['max_age']);
        $policy_term = mysqli_real_escape_string($con, $_POST['policy_term']);
        $sum_assured = mysqli_real_escape_string($con, $_POST['sum_assured']);
        $sum_assured_multiples = mysqli_real_escape_string($con, $_POST['sum_assured_multiples']);
        $mode_of_payment = mysqli_real_escape_string($con, $_POST['mode_of_payment']);
        $gst = mysqli_real_escape_string($con, $_POST['gst']);
        $loan = mysqli_real_escape_string($con, $_POST['loan']);
        $surrender = mysqli_real_escape_string($con, $_POST['surrender']);
        $risk_cover = mysqli_real_escape_string($con, $_POST['risk_cover']);
        $on_maturity = mysqli_real_escape_string($con, $_POST['on_maturity']);
        
        $status = isset($_POST['status']) ? '1' : '0'; // Assume '1' is active, '0' is inactive
        $trending = isset($_POST['trending']) ? '1' : '0'; // Assume '1' is trending, '0' is not trending
    
        $image = $_FILES['image']['name'];

        $path= "../uploads";

        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_ext;

        // Validate mandatory fields
        if ($plan_name != "" && $slug != "" && $risk_cover != "") {
            // Prepare the SQL query
            $product_query = "INSERT INTO products (category_id, plan_num, plan_name, slug, age, max_age, policy_term, sum_assured, sum_assured_multiples, mode_of_payment, gst, loan, surrender, risk_cover, on_maturity, status, trending,image) 
                              VALUES ('$category_id', '$plan_num', '$plan_name', '$slug', '$age', '$max_age', '$policy_term', '$sum_assured', '$sum_assured_multiples', '$mode_of_payment', '$gst', '$loan', '$surrender', '$risk_cover', '$on_maturity', '$status', '$trending','$filename')";
    
            // Execute the query
            $product_query_run = mysqli_query($con, $product_query);
    
            // Check if query execution was successful
            if ($product_query_run) {
                move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$filename);
                redirect("add-product.php", "Product added successfully");
            } else {
                // Include error details for debugging
                redirect("add-product.php", "Something went wrong: " . mysqli_error($con));
            }
        } else {
            redirect("add-product.php", "All fields are mandatory");
        }
    }
    
else if(isset($_POST['update_product_btn']))
{
    $product_id = $_POST['product_id'];
    $category_id = $_POST['category_id'];
    $plan_num=$_POST['plan_num'];
    $plan_name=$_POST['plan_name'];
    $slug=$_POST['slug'];
    $age=$_POST['age'];
    $max_age = $_POST['max_age'];
    $policy_term = $_POST['policy_term'];
    $sum_assured = $_POST['sum_assured'];
    $sum_assured_multiples = $_POST['sum_assured_multiples'];
    $mode_of_payment = $_POST['mode_of_payment'];
    $gst = $_POST['gst'];
    $loan = $_POST['loan'];
    $surrender = $_POST['surrender'];
    $risk_cover = $_POST['risk_cover'];
    $on_maturity = $_POST['on_maturity'];
  
    $status=isset($_POST['status']) ? '1':'0';
    $trending=isset($_POST['trending']) ? '1':'0';

    $path= "../uploads";

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != "")
    {
        //$update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time().'.'.$image_ext;
    }
    else
    {
        $update_filename = $old_image;
    }


    $upadate_product_query = "UPDATE products SET plan_num='$plan_num', plan_name='$plan_name',slug='$slug',age='$age',max_age='$max_age', policy_term='$policy_term', sum_assured='$sum_assured', sum_assured_multiples='$sum_assured_multiples', mode_of_payment='$mode_of_payment', gst='$gst', loan='$loan', surrender='$surrender', risk_cover='$risk_cover', on_maturity='$on_maturity', status='$status',trending='$trending',image='$update_filename' WHERE id='$product_id' ";
    $upadate_product_query_run= mysqli_query($con, $upadate_product_query);

    if($upadate_product_query_run)
    {
        if($_FILES['image']['name'] != "")
        {
            move_uploaded_file($_FILES['image']['tmp_name'],   $path.'/'.$update_filename);
            if(file_exists("../uploads/".$old_image))
            {
                unlink("../uploads/".$old_image);
            }
        }
        
        redirect("edit-product.php?id=$product_id", "Product Updated Successfully");
    }
    else
    {
        redirect("edit-product.php?id=$product_id", "Something went wrong");
    }
}

else if(isset($_POST['delete_product_btn']))
{
    $product_id = mysqli_real_escape_string($con,$_POST['product_id']);

        $product_query =  "SELECT * FROM products WHERE id='$product_id' ";
        $product_query_run = mysqli_query($con,$product_query);
        $product_data = mysqli_fetch_array($product_query_run);
       

        $delete_query =  "DELETE FROM products WHERE id='$product_id' ";
        $delete_query_run = mysqli_query($con,$delete_query);

        if($delete_query_run)
        {
            if(file_exists("../uploads/".$image))
                {
                    unlink("../uploads/".$image);
                }
            // redirect("products.php", "Product deleted Successfully");
            echo 200;
        }
        else
        {
            // redirect("products.php", "Something went wrong");
            echo 500;
        }

}


else if(isset($_POST['policy_form_delete']))
{
    $policy_form_id =$_POST['policy_form_delete'];
    
    $query =  "DELETE FROM policy_form_data WHERE id='$policy_form_id ' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        
        redirect("policy_form.php?id=$policy_form_id", "Policy form deleted Successfully");
       
    }
    else
    {
        redirect("policy_form.php?id=$policy_form_id", "Something went wrong");
        
    }
}


// else if(isset($_POST['delete_policy_form_btn']))
// {
//     $id = mysqli_real_escape_string($con,$_POST['id']);

//         $policy_form_data_query =  "SELECT * FROM policy_form_data WHERE id='$id' ";
//         $policy_form_data_query_run = mysqli_query($con,$policy_form_data_query);
//         $policy_form_data = mysqli_fetch_array($policy_form_data_query_run);
       

//         $delete_query =  "DELETE FROM policy_form_data WHERE id='$id' ";
//         $delete_query_run = mysqli_query($con,$delete_query);

//         if($delete_query_run)
//         {
           
//             // redirect("products.php", "Product deleted Successfully");
//             echo 200;
//         }
//         else
//         {
//             // redirect("products.php", "Something went wrong");
//             echo 500;
//         }

// }


else if(isset($_POST['update_register_btn']))
    {
        $register_id = $_POST['register_id'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        
        $password=$_POST['password'];
        $role_as=$_POST['role_as'];
        $created_at=$_POST['created_at'];     
        
        $update_query = "UPDATE users SET name='$name' ,phone='$phone',  email='$email',  password='$password', role_as='$role_as', created_at='$created_at' WHERE id='$register_id' ";

        $upadate_query_run = mysqli_query($con, $update_query);

        if($upadate_query_run)
        {
          
            redirect("edit-register.php?id=$register_id", "Registration details Updated Successfully");
        }
        else
        {
            redirect("edit-register.php?id=$register_id", "Something went wrong");
        }

    }
else if(isset($_POST['user_delete']))
{
    $user_id =$_POST['user_delete'];
    
    $query =  "DELETE FROM users WHERE id='$user_id' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        
        redirect("visited_users.php?id=$user_id", "User/Admin details deleted Successfully");
       
    }
    else
    {
        redirect("visited_users.php?id=$user_id", "Something went wrong");
        
    }

}

else if(isset($_POST['contact_user_delete']))
{
    $user_id =$_POST['contact_user_delete'];
    
    $query =  "DELETE FROM contact WHERE id='$user_id' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        
        redirect("contact_user.php?id=$user_id", "Deleted Successfully");
       
    }
    else
    {
        redirect("contact_user.php?id=$user_id", "Something went wrong");
        
    }

}

else{
    header('Location: ../index.php');
}


?>