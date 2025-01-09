<?php

include('functions/userfunctions.php'); 
include('includes/header.php');
?>


        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
           
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                   
                    <h1 class="display-4 mb-4">If you have any query please contact now</h1>
                </div>
                <?php 
                if(isset($_SESSION['message1'])) 
                { 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey! </strong> <?= $_SESSION['message1']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['message1']);
                }
                ?>
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="contact-img d-flex justify-content-center" >
                            <div class="contact-img-inner">
                                <img src="./assets/images/contact-img.png" class="img-fluid w-100"  alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div>
                            <h4 style="color: #0d1126;">Contact Us</h4>
                            
                            <form action="functions/authcode.php" method="POST">
                                <div class="row g-3">
                                    <div class="col-lg-12 ">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="name" name="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="email" name="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-floating">
                                            <input type="phone" class="form-control border-0" id="phone"  name="phone" placeholder="Phone">
                                            <label for="phone">Your Phone</label>
                                        </div>
                                    </div>
                                   
                                  
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" name="message" style="height: 120px"></textarea>
                                            <label for="message">Message</label>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="contact_btn" class="btn w-100 py-3" style="background-color: #0d1126; color: #ffffff;">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="contact-add-item">
                                        <div class="contact-icon mb-4" style="color: #0d1126; ">
                                            <i class="fas fa-map-marker-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4 style="color: #EEC641;">Address</h4>
                                            <p class="mb-0">A/P Miraj, Dist: Sangli</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="contact-add-item">
                                        <div class="contact-icon  mb-4" style="color: #0d1126; ">
                                            <i class="fas fa-envelope fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4 style="color: #EEC641;">Mail Us</h4>
                                            <p class="mb-0">suryakantmali94@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="contact-add-item">
                                        <div class="contact-icon mb-4" style="color: #0d1126; ">
                                            <i class="fa fa-phone-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4 style="color: #EEC641;">Contact</h4>
                                            <p class="mb-0">91+ 9890696982</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="contact-add-item">
                                        <div class="contact-icon mb-4" style="color: #0d1126; ">
                                            <i class="fab fa-firefox-browser fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4 style="color: #EEC641;">Yoursite@ex.com</h4>
                                            <p class="mb-0">(+012) 3456 7890</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="rounded">
                          <iframe  class="rounded w-100" 
                            style="height: 400px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61104.877071077484!2d74.60436119874852!3d16.823636456014288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc123ca0f0a504f%3A0x8790662199014c4f!2sMiraj%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1736017356569!5m2!1sen!2sin"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

         
  <!-- footer section --> 
   <footer class="footer">
    <div class="footer-overlay"></div>
    <div class="container footer-content">
      <div class="row">
        <!-- Column 1 -->
        <div class="col-lg-5 col-md-6 mb-4">
          <h5>InsuraCare</h5>
          <p>A/P Miraj, Dist: Sangli</p>
          <p>Phone: 9890696982</p>
          <p>Email: suryakantmali94@gmail.com</p>
        </div>

        <!-- Column 2 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <h5>Our Services</h5>
          <ul class="list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><a href="main_about.php">About Us</a></li>
            <li><a href="categories.php">categories</a></li>
            <li><a href="contact.php">Contact Us</a></li>
           
          </ul>
        </div>

        <!-- Column 3 -->
        <div class="col-lg-2 col-md-6 mb-4">
          <h5>Recent Post</h5>
          <ul class="list-unstyled">
            <li><a href="#">Participate in staff meetings <br> <small>December 15, 2024</small></a></li>
            <li><a href="#">Future Plan & Strategy for Clients <br> <small>November 25, 2024</small></a></li>
          </ul>
        </div>

       
    
      </div>

      <div class="row mt-4">
        <div class="col text-center">
          <p>InsuraCare © All Rights Reserved</p>
          <div class="social-icons">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-google"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
        <?php include('includes/footer.php'); ?>
