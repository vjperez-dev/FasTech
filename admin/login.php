<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log In - FasTech</title>
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
  <div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
      <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
        <img class="one-half js-fullheight align-self-end order-md-last img-fluid" src="images/team.png" alt="">
        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
          <div class="text mt-5">
            <span class="subheading">For Administrator only</span>
            <h1 class="mb-3" style="font-size: 30px;"><span>Log In to your FasTech Administrator Account</span></h1>
            <form name="form1" method="post" action="php/loginprocess.php">
              <div class="form-group">
                <input type="text" name="user" id="user" class="form-control" placeholder="" required>user
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="" required>Password
              </div>
              <div class="form-group">
                <?php
                  if(isset($_SESSION["error"])) {
                      $error = $_SESSION["error"];
                      echo "<span style='color:red;'>$error</span>";
                  }
                ?> 


              </div>
              <div class="col-md-4 ftco-animate" style="margin-left: -5%;">
                <input type="submit" id="login" name="login" value="Log In" class="btn btn-primary py-3 px-4">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is
						made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
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
<?php 
    unset($_SESSION["error"]);
?>