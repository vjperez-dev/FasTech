<?php
  session_start();
  $isActive = isset($_SESSION['email']);
  if($isActive){
    $user = $_SESSION['email'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Recovery & Backup Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="images/iconft.png">

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/fastech1.png" width="125" height="120"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="index.php" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="index.php" class="nav-link">Clients</a></li>
          <li class="nav-item"><a href="index.php" class="nav-link">Our Company</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <?php
              switch ($isActive) {
                case 'value':{
                  echo "<li class='nav-item cta'><a href='myaccount.php' class='nav-link'><span>My Account</span></a></li>&nbsp &nbsp
                    <li class='nav-item cta'><a href='logout.php' class='nav-link'><span>Logout</span></a></li> ";
                  break;
                }
                  
                
                default:{
                  echo "<li class='nav-item cta'><a href='login.php' class='nav-link'><span>Log In</span></a></li> &nbsp &nbsp
                  <li class='nav-item cta'><a href='register.php' class='nav-link'><span>Register</span></a></li>";
                  break;
                }
                  
              }
            ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
      <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
        <img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="images/5.png" alt="">
        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
          <div class="text mt-5">
            <span class="subheading">SERVICES</span>
            <h1 class="mb-3"><span>Data Recovery</span> <span>and Backup</span> <span>Services</span></h1>
            <p>Sometimes, due to issues such as hardware crashes or a virus, your important data might get lost. It
              might not possible for you to recover the data, but professional computer technicians can recover the data
              by tracking information. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3 ftco-animate">
        <div class="col-md-12 text-center heading-section ftco-animate">
          <h2>We perform Backup and Recovery Services</h2>
          <p>Disasters happen, regardless of how flashy your equipment is.<br>
            Minimizing the effects comes down to the preemptive measures you take. Disaster prep requires a keen
            understanding of the policies, tools, and backup procedures to enable the smooth recovery and continuation
            of your business.
            <br>
            FasTech performs thorough backups and establishes strong safeguard processes to protect your irreplaceable
            data. </p>
          <br>
        </div>
        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex align-items-center">
            <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
              <h3 class="heading">Peace of Mind by Design</h3>
              <p class="mb-0">Backups by IT combines the entire process of disaster recovery into a single service.
                Storage, design, testing, monitoring, restoration assistance, failover, reporting and more. You can rest
                assured that when the day comes to recover your data, we can pull any file, application or database you
                need right away.
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex align-items-center">
            <div class="media-body pl-4">
              <h3 class="heading">Instant Recovery</h3>
              <p class="mb-0">Extended power loss? Theft? Fire? Our Instant-On Cloud Server deploys in minutes as an
                exact clone of your local server so your team can be back online fast. With a BDR appliance you get that
                same feature locally, the BDR appliance becomes a temporary server in the event of a software or
                hardware failure. </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex align-items-center">
            <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
              <h3 class="heading">Backup testing & Validation</h3>
              <p class="mb-0">We prevent your restores from failing by testing your backups weekly before they go
                off-site. Our BDR appliance includes a fully integrated testing environment so we can test and validate
                backups for you. Fingers lifted? Zero. </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex align-items-center">
            <div class="media-body pl-4">
              <h3 class="heading">End-to-End Encryption</h3>
              <p class="mb-0">Backups by IT delivers built-in end-to-end AES 256-bit encryption, giving you the ability
                to encrypt backup files and data at source, in-flight and at rest. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br><br>
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5 pb-5 align-items-center d-flex">
        <div class="col-md-6">
          <div class="heading-section heading-section-white ftco-animate">
            <span class="subheading">Let us help you</span>
            <h2 style="font-size: 30px;">We are ready to cater your technical concerns</h2>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <div class="price">
            <h3><img src="images/work.png" width="150px" height="170px"></h3>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <p class="mb-0"><a href="appointment.php" class="btn btn-primary py-3 px-4">Set An Appointment</a></p>
        </div>
      </div>
      <br>
      <hr style="color: white;">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 bg-primary p-4">
            <h2 class="ftco-heading-2">FasTech</h2>
            <p>FasTech is an award-winning computer repair & service shop that offers cutting the edge digital
              solutions.</p>
            <ul class="ftco-footer-social list-unstyled mb-0">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Our Services</h2>
            <ul class="list-unstyled">
              <li><a href="service1.php" class="py-2 d-block">Troubleshooting & Networking Installation</a></li>
              <li><a href="service2.php" class="py-2 d-block">Website and Portal Development</a></li>
              <li><a href="service3.php" class="py-2 d-block">Hardware & Software Repair and Installation</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2"></h2>
            <ul class="list-unstyled">
              <br>
              <li><a href="service4.php" class="py-2 d-block">Virus and Malware Removal</a></li>
              <li><a href="service5.php" class="py-2 d-block">Data Recovery and Backup Services</a></li>
              <li><a href="service6.php" class="py-2 d-block">Maintenance Services, Systems Setup and Configuration</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Office</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Unit 12 One Corporate Center, San
                    Antonio, Pasig, Philippines</span></li>
                <li><span class="icon icon-phone"></span><span class="text">+02 639 7848</span></li>
                <li><span class="icon icon-envelope"></span><span class="text">inquiries@fastech.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with
            <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
              target="_blank">CompuPartners</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html>