<!DOCTYPE html>
<html lang="en">

  <head>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
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

    <title>Egy Droids - Contact Page</title>

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
              <li class="nav-item">
                <a class="nav-link" href="aboutloggedin.php">About Us</a>
              </li>
              <li class="nav-item active">
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
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>contact us</h4>
              <h2>let???s get in touch</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">

            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13811.66946955597!2d31.020704!3d30.067903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9fbd976cf0e573b1!2sSmart%20Villages%20Development%20and%20Management%20Company!5e0!3m2!1sen!2seg!4v1607190785433!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>About our office</h4>
              <p>Our main office resides beside major tech branches in Egypt in order to gather the best resources and people so that our products and services would be of the highest quality </p>
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

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button" onclick="sendEmail()">Send Message</button>
                      <script type="text/javascript ">
      function sendEmail(){
        Email.send({
    Host : "smtp.gmail.com",
    Username : "mido.is.one1@gmail.com",
    Password : "oooo0000",
    To : document.getElementById('email').value,
    From : "mido.is.one1@gmail.com",
    Subject : "EgDroids",
    Body : "Your Message was succesfly recieved by EgDroids , You will recieve a reply within 24 hours"
    
}).then(
  message => alert(message)
);
      }
      </script>
                    </fieldset>
                  </div>
                
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
  
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
