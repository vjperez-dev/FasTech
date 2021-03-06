<?php
session_start();
include("test.php");
$isActive = isset($_SESSION['email']);
if($isActive){
  $user = $_SESSION['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Set An Appointment - FasTech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="icon" href="images/iconft.png"> -->
    
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
    <link href="css/timepicki.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
      $( "#datepicker" ).datepicker({
        showOtherMonths: true,
        selectOtherMonths: true
      });
    });
    <?php
      switch ($isActive) {
        case true:{
          echo "$(document).ready(function(){
            $('#name').val('" . $firstname . " " . $lastname  . "');
            $('#email').val('" . $user . "');
          });";
          break;
        }
        default:{
          break;
          }
      }
      ?>
    </script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/fastech1.png" width="125" height="120"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link">Clients</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link">Our Company</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <?php
              if($isActive){
                echo "<li class='nav-item cta'><a href='myaccount.php' class='nav-link'><span>My Account</span></a></li>&nbsp &nbsp
                  <li class='nav-item cta'><a href='logout.php' class='nav-link'><span>Logout</span></a></li> ";
              }
              else{
                echo "<li class='nav-item cta'><a href='login.php' class='nav-link'><span>Log In</span></a></li> &nbsp &nbsp
                  <li class='nav-item cta'><a href='register.php' class='nav-link'><span>Register</span></a></li>";
                echo "
                <script>
                  window.location.href = 'login.php';
                </script>";
                ;
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <br><br><br><br>
    <div class="d-md-flex">
      <div class="one-half align-self-center">
        &nbsp &nbsp &nbsp &nbsp &nbsp <img src="images/2.png" width="700" height="700">
      </div>
      <div class="one-forth ml-md-5 align-self-center">
        <br>
        <div class="text mt-5">
          <span class="subheading1">WE ARE MORE THAN GLAD TO HELP YOU</span>
          <h1 class="mb-3" style="font-size: 30px;"><b><span>Set An Appointment</span></b></h1>
          <form action="php/book.php" name="form2" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" id="name" class="form-control"  placeholder="Full Name" name="name" style="font-size: 16px;" required >
              </div>
              <div class="form-group">
                <input type="text" id="phone" class="form-control" placeholder=" Phone" onkeypress="validate(event)"
                pattern=".{10,}" title="Valid phone number format: XXX-XXX-XXXX" name="phone" style="font-size: 16px;" required>
              </div>
            <script>
              function validate(evt) {
                var theEvent = evt || window.event;
                  if (theEvent.type === 'paste') {
                  key = event.clipboardData.getData('text/plain');
                } else {
                var key = theEvent.keyCode || theEvent.which;
                  key = String.fromCharCode(key);
                }
                var regex = /[0-9]|\./;
                  if( !regex.test(key) ) {
                    theEvent.returnValue = false;
                  if(theEvent.preventDefault) theEvent.preventDefault();
                }
              }
            </script>
            <div class="form-group">
              <input type="text" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                title="Kindly follow the format (example@email.com)"placeholder=" Email" name="email" style="font-size: 16px;" >
            </div>        
            <div class="form-group">
              <input type="text" id="address" class="form-control"  placeholder=" Home Address" name="address" style="font-size: 16px;" required>
            </div>
            <div class="form-group">
              <select class="form-control" id="service"  name="service" style="font-size: 16px;" required>
                <option value="null">What service would you like to avail?</option>
                <option value="Troubleshooting & Networking Installation">Troubleshooting & Networking Installation</option>
                <option value="Hardware & Software Repair and Installation">Hardware & Software Repair and Installation</option>
                <option value="Virus and Malware Removal">Virus and Malware Removal </option>
                <option value="Data Recovery & Backup Services">Data Recovery & Backup Services</option>
                <option value="Maintenance Services, Systems Setup and Configuration">Maintenance Services, Systems Setup and Configuration</option>
              </select>
            </div>
            <div class="form-group">
              <input type="date" id="date" placeholder=" Date of Appointment" name="date"
              style="padding: 10px; padding-right: 341px;" required>
            </div>
            <div class="form-group">
              <input id="time" type="time" placeholder=" Time of Appointment" name="time"
              style="border: 1px solid #e6e6e6; padding: 10px; padding-right: 341px;" required><br>
              <span>Office hours are available at 8:00 AM to 5:00 PM only</span>
            </div>
            <div class="form-group">
              <textarea id="message" cols="30" rows="7" class="form-control" placeholder=" Elaborate your Technical Issue/ Concern" name="message"
              style="font-size: 16px;"></textarea>
            </div>
            <div class="form-group">
              <input id="savebtn" type="submit" name="setapp" value="Set An Appointment" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div><br><br>
      </div>
    </div>
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
              <p>FasTech is an award-winning computer repair & service shop that offers cutting the edge digital solutions.</p>
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
                <li><a href="service3.php" class="py-2 d-block">Hardware & Software Repair and Installation</a></li>
                <li><a href="service4.php" class="py-2 d-block">Virus and Malware Removal</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"></h2>
              <ul class="list-unstyled">
                <br>
                <li><a href="service5.php" class="py-2 d-block">Data Recovery and Backup Services</a></li>
                <li><a href="service6.php" class="py-2 d-block">Maintenance Services, Systems Setup and Configuration</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Office</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Unit 12 One Corporate Center, San Antonio, Pasig, Philippines</span></li>
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
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">CompuPartners</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    <script src="js/timepicki.js"></script>
    <script>
      $('#timepicker1').timepicki();
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/bootstrap.min.js"></script>
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
    <script src="js/scrollax.min.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script src="js/booking.js"></script>
  </body>
</html>