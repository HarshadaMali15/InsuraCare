<header class="bg-white py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <img src="./assets/images/logo.png" alt="Emblem Left" class="img-fluid d-none d-md-block custom-logo">
                <div class="text-center fancy-logo">
                    <h5 class="m-0">InsuraCare</h5>
                </div>
                <img src="./assets/images/logo.png" alt="Emblem Right" class="img-fluid d-none d-md-block custom-logo">
            </div>
        </div>
        <nav class="navbar navbar-expand-lg  mt-2" style="background-color: #072146;">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./main_about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./categories.php">Categories</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact Us</a>
                        </li>
                        <?php
          if(isset($_SESSION['auth']))
          {
            ?>
            <li class="nav-item1 dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $_SESSION['auth_user']['name']; ?>
              </a>
                <ul class="dropdown-menu">
                  
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
            <?php
          }
          else
          {
          
            header('Location: start_index.php');   
          
          }
        ?>  
                       
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>