<?php
  session_start();
  $isActive = isset($_SESSION['email']);
  if($isActive){
    $user = $_SESSION['email'];
  } else {
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FasTech</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    {
      box-sizing: border-box;
    }

    /* Set additional styling options for the columns*/
    .column1 {
      float: left;
      width: 47.6%;
      margin-right: 10px;
    }

    .row1:after {
      content: "";
      display: table;
      clear: both;
    }

    table {
      border-collapse: collapse;
      width: 130%;
    }

    th,
    td {
      text-align: left;
      padding: 10px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    [data-title] {
      position: relative;
    }

    [data-title]:hover::before {
      content: attr(data-title);
      position: absolute;
      bottom: -34px;
      display: inline-block;
      padding: 3px 6px;
      border-radius: 2px;
      background: #000;
      color: #fff;
      font-size: 12px;
      font-family: sans-serif;
      white-space: nowrap;
    }

    [data-title]:hover::after {
      content: '';
      position: absolute;
      bottom: -10px;
      display: inline-block;
      color: #fff;
      border: 8px solid transparent;
      border-bottom: 8px solid #000;
    }

    .paynow {
      border: 0px;
    }
  </style>
  
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
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="#section-counter" class="nav-link">Clients</a></li>
          <li class="nav-item"><a href="#company" class="nav-link">Our Company</a></li>
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
  <br><br><br><br><br><br>
  <section class="ftco-section">
    <div class="container">
      <img src="images/user2.png" class="img-fluid" alt="" style="float:left;width:170px;height:170px;">
      <div class="row justify-content-left mb-5 pb-5">
        <div class="col-md-7 text-left heading-section ftco-animate">
          <span class="subheading1">Hi there!</span>
          <?php
            include('php/config.php');
            $sql = "SELECT * FROM registered_accounts WHERE email = '" .$_SESSION['email']. "'";
            $res = mysqli_query($con, $sql );
            if(! $res ) {
              die('Could not get data: ' . mysql_error());
            }
            while($row=mysqli_fetch_array($res)){
              $firstname = $row["firstname"];
              $lastname = $row["lastname"];
              echo "<h2 class='mb-4'>$firstname $lastname</h2>";
            }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
          <div class="nav ftco-animate nav-pills justify-content-left text-center" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen" role="tab"
              aria-controls="v-pills-nextgen" aria-selected="true" style="color: black">Dashboard <img
                src="images/dashboard.png" style="width:30px;height:30px;"></a>

            <a class="nav-link" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance" role="tab"
              aria-controls="v-pills-performance" aria-selected="false" style="color: black">Edit Profile <img
                src="images/user1.png" style="width:30px;height:30px;"></a>

            <a class="nav-link" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect" role="tab"
              aria-controls="v-pills-effect" aria-selected="false" style="color:black">Privacy Policies <img
                src="images/login.png" style="width:30px;height:30px;"></a>
          </div>
        </div>
        <div class="col-md-12 align-items-center ftco-animate">
          <br><br>
          <div class="tab-content ftco-animate" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel"
              aria-labelledby="v-pills-nextgen-tab">
              <div class="d-md-flex">
                <div class="order-last align-self-center">
                  <img src="images/undraw_laravel_and_vue_59tp.svg" class="img-fluid" alt=""
                    style="float:right; margin-right: -70%;width:400px;height:400px;">
                </div>
                <div class="order-first" style="margin-left: -20%;">
                <form method="POST" id="dashboard-data" enctype="multipart/form-data">
                  <table>
                    <tr>
                      <th>Appointment</th>
                      <th>Appointment Ticket</th>
                      <th>&nbsp &nbsp Status</th>
                      <th>Actions</th>
                    </tr>
                    <?php
                        include('php/config.php');
                        $sql = "SELECT * FROM appointments WHERE email = '" .$_SESSION['email']. "' ORDER BY date ASC";
                        $res = mysqli_query($con, $sql );
                        if(! $res ) {
                          echo "There is no data to show";
                          die('Could not get data: ' . mysql_error());
                        }
                        if (mysqli_num_rows($res) != 0) {
                          while($row=mysqli_fetch_array($res)){
                            $time = $row['time'];
                            $time =  date('g:i A', strtotime($time));
                            
                            if ($row['status'] == 'completed') {
                              $status = "<button type='button' class='btn btn-success' data-title='Your appointment is now secured. Our technician will be contacting you on the day of the appointment'>Completed</button>";
                              $action = "<i class='fa fa-file-text-o' aria-hidden='true'></i> Evaluate the Technician";
                            } else if ($row['status'] == 'servicing') {
                              $status = "<button type='button' class='btn btn-primary' data-title='Your appointment is now secured. Our technician will be contacting you on the day of the appointment.'>For Servicing</button>";
                              $action = "<i class='fa fa-eye' aria-hidden='true'></i> View Details";
                            } else if ($row['status'] == "payment") {
                              $status = "<button type='button' class='btn btn-info' data-title='Your appointment has been approved. Kindly settle your payment now.'>For Payment</button>";
                              // $action = "<i class='fa fa-money' aria-hidden='true'></i> Proceed to Payment";
                              // $action = "<button type='button' name='paynow' id='paynow' class='btn btn-info' value=".$row['ticket']." data-title='Your appointment has been approved. Kindly settle your payment now.'></button>";
                              // $action = "<div id='paypal-button'></div>";
                              $action = "<button type='button' name='paypal-button' id='paypal-button' class='paynow' value=".$row['ticket']." data-title='Your appointment has been approved. Kindly settle your payment now.'></button>";
                            } else if ($row['status'] == 'pending') {
                              $status = "<button type='button' name='paypal-button' class='btn btn-warning' data-title='Your appointment is still being reviewed. Kindly wait for our confirmation email.'>For Approval</button>";
                              $action = "<i style='font-size:20px' class='fa'>&#xf00d;</i> Cancel Appointment";
                            } else if ($row['status'] == "declined") {
                              $status = "<button type='button' class='btn btn-danger' data-title='Your appointment has been declined. Click on 'View Details' to know more.'>Declined</button>";
                              $action = "<i class='fa fa-eye' aria-hidden='true'></i> View Details";
                            } else if ($row['status'] == 'cancelled'){
                              $status = "<button type='button' class='btn btn-danger' data-title='You have cancelled this appointment. Click on 'View Details' to know more.'>Cancelled</button>";
                              $action = "<i class='fa fa-eye' aria-hidden='true'></i> View Details";
                            }
                            echo "<tr>
                                    <td><b>" .$row['service']. "</b><br>Date: ". $row['date'] ."<br>Time: ". $time ."</td>".
                                    "<td><p>".$row['ticket']."</p></td>".
                                    "<td>".$status."</td>".
                                    "<td>".$action."</td>
                                  </tr>";
                          }
                        } else {
                          echo "<tr><td> There is no data to show.</td></tr>";
                        }
                      ?>
                  </table>
                      </form>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-performance" role="tabpanel"
              aria-labelledby="v-pills-performance-tab">
              <div class="d-md-flex">
                <div class="one-forth align-self-center">
                  <img src="images/undraw_visual_data_b1wx.svg" class="img-fluid" alt="" style="margin-top: -50%;">
                </div>
                <div class="one-half order-first mr-md-5 align-self-center">
                  <form name="form1" method="post" enctype="multipart/form-data">
                    <div class="row1">
                      <div class="column1">
                        <div class="form-group">
                          <input type="text" name="firstname" id="firstname" class="form-control" required>First Name*
                        </div>
                      </div>
                      <div class="column1">
                        <div class="form-group">
                          <input type="text" name="lastname" id="lastname" class="form-control" required>Last Name*
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" name="email" id="email" class="form-control"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                        title="Kindly follow the format (example@email.com)" required>Email Address*
                    </div>
                    <div class="form-group">
                      <input type="text" name="phone" onkeypress="validate(event)" pattern=".{10,}"
                        title="Valid phone number format: XXX-XXX-XXXX" id="phone" class="form-control" required>Phone
                      Number*
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
                        if (!regex.test(key)) {
                          theEvent.returnValue = false;
                          if (theEvent.preventDefault) theEvent.preventDefault();
                        }
                      }
                    </script>
                    <div class="form-group">
                      <input type="password" name="pass" id="pass" class="form-control" pattern=".{8,}"
                        title="Your password must contain eight (8) or more characters." required>Password*
                    </div>
                  </form>
                  <br>
                  <p><a href="#" class="btn btn-primary py-3">Save Changes</a></p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-effect" role="tabpanel" aria-labelledby="v-pills-effect-tab">
              <div class="d-md-flex">
                <div class="align-self-center">
                  <img src="images/undraw_business_plan_5i9d.svg" class="img-fluid" alt="" style="margin-top: -120%;">
                </div>
                <div class="order-first align-self-center" style="margin-left: -20%;">
                  <h3 class="heading">Use of Site</h3>
                  <p>Commercial use or use on behalf of any third party is prohibited, except as explicitly permitted by
                    FasTech, in advance. Any breach of these Terms of Trade shall result in the immediate revocation of
                    the license or access granted in this paragraph, without notice to you.
                    Content provided on this site is solely for informational purposes which you posted, uploaded,
                    published, and/or submitted or requested to be published.</p>
                  <br>
                  <p>Should you choose to register or subscribe for any such services or related features, you agree to
                    provide accurate and current information about yourself, and to promptly update such information if
                    there are any changes.
                    Every user of the Site is solely responsible for keeping passwords and other account identifiers
                    safe and secure. Fastech shall not be responsible or liable, directly or indirectly, in any way for
                    any loss or damage of any kind incurred as a result of, or in connection with, your failure to
                    comply with this section.</p>
                  <br>
                  <h3 class="heading">Amendments</h3>
                  <p>FasTech, reserves the right, without notice, to amend, revise, enhance, change, modify, alter or
                    remove portions of these Terms of Trade at any time. Amendments shall take effect once posted on the
                    Site. Regular update of the Terms of Trade is your responsibility. The continued use of the Site
                    following the posting of any amendments hereto constitutes your acceptance to those amendments and
                    are thus, bound by its current amendments. FasTech, further reserves the right to suspend, or
                    permanently discontinue all or any part of this Site and to restrict or prohibit access to it. </p>
                </div>
              </div>
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
  <script src="js/payment.js"></script> 
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
  <script src="js/paypal.js"></script>

</body>
</html>