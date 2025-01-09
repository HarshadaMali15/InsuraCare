<?php
include('includes/temp.php');
?>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
        <div class="container position-relative">
            <h1 class="display-4 font-weight-bold text-primary">Company Overview</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-secondary">Home</a></li>
                    <li class="breadcrumb-item active text-dark" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
        <!-- Positioned image in the right corner -->
        <img src="./assets/images/about1.jpeg" alt="Company overview" class="hero-image">
    </section>

    <!-- Second Section  -->
    <div class="container card-section bg-transparent">
        <div class="row text-center">
            <!-- Card 1: Who I Am -->
            <div class="col-md-4 " >
                <div class="card1 " style="padding: 20px; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); ">
                    <div class="card-body ">
                        <!-- <img src="who-i-am.png" alt="Who I Am" class="icon"> -->
                        <i class="fa-solid fa-people-group" style="font-size: 40px; color: #A0522D;"></i>
                        <h5 class="card-title">Who I Am</h5>
                        <p class="card-text">
                            I am a dedicated LIC agent committed to securing the financial well-being of my clients through honest, reliable, and personalized service. With a deep understanding of insurance products and a passion for helping individuals and families, I aim to provide peace of mind by offering the best life insurance solutions tailored to each client's unique needs and goals.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Card 2: Vision -->
            <div class="col-md-4">
                <div class="card1" style="padding: 20px; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); ">
                    <div class="card-body">
                        <!-- <img src="vision.png" alt="Vision" class="icon"> -->
                        <i class="fa-solid fa-bullseye" style="font-size: 40px; color: #4A90E2;"></i>
                        <h5 class="card-title">Vision</h5>
                        <p class="card-text">
                            To be a trusted financial advisor, empowering individuals and families with the right insurance solutions, ensuring financial security and peace of mind at every stage of life. My vision is to build lasting relationships based on trust, transparency, and personalized service, helping clients achieve their financial goals while fostering a sense of safety for future generations.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Card 3: Mission -->
            <div class="col-md-4">
                <div class="card1" style="padding: 20px; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); ">
                    <div class="card-body">
                        <!-- <img src="mission.png" alt="Mission" class="icon"> -->
                        <i class="fa-solid fa-lightbulb" style="font-size: 40px; color: #F39C12;"></i>
                        <h5 class="card-title">Mission</h5>
                        <p class="card-text">
                            To provide individuals and families with comprehensive and personalized insurance solutions that secure their financial future. By offering expert guidance, integrity, and a deep understanding of clients’ needs, the mission is to empower clients to make informed decisions about life insurance and related financial products, ensuring peace of mind and financial stability for every stage of life.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Third Section  -->
    <div class="container choose-us-section">
        <h6 class="text-primary">WHY CHOOSE US</h6>
        <h2>Why Choose Us?</h2>
        <hr style="width: 50px; border-top: 3px solid #1a2a6c; margin: 15px auto;">
        
        <div class="values-content row">
            <!-- Left Side Cards -->
            <div class="col-md-4">
                <div class=" container d-flex justify-content-center">
                <div class="card-icon">
                    <i class="fas fa-user"></i> <!-- Icon for Personalized Service -->
                </div>
            </div>
                <div class="card mb-4 bg-transparent">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="card-title">Personalized Service</h5>
                            <p class="card-text">We believe in one-on-one consultations to assess your needs and recommend the right plans for you.</p>
                        </div>
                    </div>
                </div>
                
                <div class=" container d-flex justify-content-center">
                <div class="card-icon">
                    <i class="fas fa-hand-holding-usd"></i> <!-- Icon for Expert Guidance -->
                </div>
            </div>
                <div class="card bg-transparent">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="card-title">Expert Guidance</h5>
                            <p class="card-text">With deep knowledge of LIC’s wide range of products, we guide you through every step of the process.</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Center Image -->
            <div class="col-md-4">
                <img src="./assets/images/about2.jpeg" alt="Team Image" class="img-fluid">
            </div>
    
            <!-- Right Side Cards -->
            <div class="col-md-4">
                <div class=" container d-flex justify-content-center">
                <div class="card-icon">
                    <i class="fas fa-heart"></i> <!-- Icon for Long-Term Relationships -->
                </div>
            </div>
                <div class="card mb-4 bg-transparent">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="card-title">Long-Term Relationships</h5>
                            <p class="card-text">Our focus is on building lasting relationships based on trust, transparency, and mutual respect.</p>
                        </div>
                    </div>
                </div>
                
                <div class=" container d-flex justify-content-center">
                <div class="card-icon">
                    <i class="fas fa-smile"></i> <!-- Icon for Customer-Centric Approach -->
                </div>
            </div>
                <div class="card bg-transparent">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="card-title">Customer-Centric Approach</h5>
                            <p class="card-text">Your satisfaction and peace of mind are our top priorities. We work to ensure your claims are processed smoothly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
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

    <?php
include('includes/temp_footer.php');
?>

