<!DOCTYPE html>
<html lang="en">

  <head>
  <?php

session_start();

   $name=$_SESSION['sess_name'];
   if ($name==NULL){
    header("Location:home.php");
  }
  
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Egy Droids - About Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="home.php"><h2>Egy <em>Droids</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              
                <li class="nav-item  ">
                <a class="nav-link" id="x" href="loggedin.php">Home</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link" href="productsloggedin.php">Our Products</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="aboutloggedin.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactloggedin.php">Contact Us</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="home.php">Log Out</a>
              </li>
                  <li class="nav-item" >
                      
                  <a class="nav-link" href="member.php" ><strong style="color:red"> Welcome,  <?=$_SESSION['sess_name'];?> </a>
               
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>about us</h4>
              <h2>our company</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Background</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Who we are &amp; What we do?</h4>
              <p>We are a group of software developers and robotics engineers that want to prepare people for the future by provoding them with high quality automated products ranging from domestic cleaning droids to educational robots for children</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Team Members</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/team_01.jpg" alt="" >
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="https://www.facebook.com/MostafaaGhozal/"><i class="fa fa-facebook"></i></a></li>
                 
                      <li><a href="https://www.linkedin.com/in/ghozal/"><i class="fa fa-linkedin"></i></a></li>
        
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Mostafa Ashraf</h4>
                  <span>Founder</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/team_02.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="https://www.facebook.com/hazem.abdulrahman.7"><i class="fa fa-facebook"></i></a></li>
                  
                      <li><a href="https://www.linkedin.com/in/hazem-hassan-642b1a16a/"><i class="fa fa-linkedin"></i></a></li>
                    
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Hazem Abdulrahman</h4>
                 <span>Founder</span>
             
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/team_03.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                    <li><a href="https://www.facebook.com/aly.abouelazm.9"><i class="fa fa-facebook"></i></a></li>
                
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Ali Abul Azm</h4>
                <span>Founder</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/me.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="https://www.facebook.com/mohamed.hazem.9041/"><i class="fa fa-facebook"></i></a></li>
               
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Mohamed Hazem</h4>
                <span>Founder</span>
              </div>
            </div>
          </div>
         
        
        </div>
      </div>
    </div>


    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>Product Management</h4>
                <p>Our art and science of identifying the market opportunity, and  developing a differentiable product that addresses the market is one of a kind.</p>
             
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>Customer Relations</h4>
                <p>We provide a <strong>24/7 </strong>customer support to our valued customers using remote support .</p>
               
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>International Shipping</h4>
                <p>We Provide a simple yet efficient protocol for packaging and shipping our products to ensure you get your order in the fastest and the best service ever  .</p>
         
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>


    

    
    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                   
      if(! cleared[t.id]){                      
          cleared[t.id] = 1;  
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
