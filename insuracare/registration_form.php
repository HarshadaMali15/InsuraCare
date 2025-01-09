
<?php
session_start();

if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You are already logged In";
    header('Location: index.php');
    exit();
}

include('includes/temp.php');
?>

        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <!-- <h4 class="text-primary">Contact Us</h4> -->
                    <!-- <h1 class="display-4 mb-4">If you have any comments please apply now</h1> -->
                </div>
                <div class="row g-5">

                <?php 
                if(isset($_SESSION['message'])) 
                { 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey! </strong> <?= $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                }
                ?>
                
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="contact-img d-flex justify-content-center" >
                            <div class="contact-img-inner">
                                <img src="./Registration/img/blog-4.png" class="img-fluid w-100"  alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div>
                           <h4 class=" ud-heading" style="color: #0d1126;" >Sign Up </h4>
                             <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                            <form action="functions/authcode.php" method="POST">
                                <div class="row g-3">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="name" name="name" placeholder="Your Name" required>
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="email" name="email" placeholder="Your Email" required>
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="form-floating">
                                            <input type="phone" class="form-control border-0" id="phone" name="phone" placeholder="Phone" required>
                                            <label for="phone">Your Phone</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 col-xl-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control border-0" id="password" name="password" placeholder="Password" required>
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 col-xl-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control border-0" id="cpassword" name="cpassword" placeholder="Re-type Password" required>
                                            <label for="cpassword">Confirm Password</label>
                                        </div>
                                    </div>
                                    <!-- <div class="d-flex justify-content-between align-items-center"> -->
                                        <!-- Checkbox -->
                                        <!-- <div class="form-check mb-0">
                                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                          <label class="form-check-label" for="form2Example3">
                                            Remember me
                                          </label>
                                        </div>
                                        <a href="#!" class="text-body">Forgot password?</a>
                                      </div>-->
                                    <div class="col-12"> 
                                    
                                        <button  type="submit" class="btn w-100 py-3" style="background-color: #0d1126; color: #ffffff;"  name="register_btn">Sign Up</button>
                                    </div>
                                    
                                </div>
                            </form>

                              <div class="text-center text-lg-start mt-4 pt-2">
                               
                                <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account?<a href="login_form.php"
                                    class="link-danger">Log in</a></p>
                              </div>
                        </div>
                    </div>

                    <?php
                    include('includes/temp_footer.php');
                    ?>
       