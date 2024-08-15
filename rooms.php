<!doctype html>
<html class="no-js" lang="zxx">
    

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Blue Waves-Rooms</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
        
        <link rel="stylesheet" href="css/dripicons.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <script type="text/javascript" src="js/js.js"></script>

        <?php include './model/function.php'; ?>
        <base href="<?php ___page_setup__()?>" /> 
       <?php meta_data($con,3); ?>
    </head>
    <body>
        <!-- header -->
        <?php include 'inc/header.php'; ?>
        <!-- header-end -->
        
        <!-- main-area -->
        <main>
       <!-- breadcrumb-area -->

        <?php 
               

              $banner_url="";  $banner_title="";
              $result = mysqli_query($con, "SELECT * FROM page_banner WHERE banner_type_idbanner_type='3'");
                      while ($row = mysqli_fetch_array($result)) {
                          $banner_url=$row['banner_url']; 
                          $banner_title=$row['banner_title'];                           
              }

              $title=""; $description="";
               $result = mysqli_query($con, "SELECT * FROM rooms_page ");
                      while ($row = mysqli_fetch_array($result)) {
                          $title=$row['title']; 
                          $description=$row['description'];                           
              }
             
              
            
            ?>

            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(admin/<?php echo $banner_url;?>)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title">
                                    <h2><?php echo $banner_title;?></h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.web">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $banner_title;?></li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
			  <!-- room-area-->
            <section id="services" class="services-area pt-120 pb-90">
              
                <div class="container">
                    
                    <div class="row">
                        <?php 
                                             $result = mysqli_query($con, "SELECT * FROM rooms_suites ");
                                               while ($row = mysqli_fetch_array($result)) {
                                                  $idrooms_suites=$row['idrooms_suites']; 
                                                  $room_type=$row['room_type']; 
                                                  $room_special=$row['room_special'];
                                                  $room_size=$row['room_size'];
                                                  $room_view=$row['room_view'];                            
                                                  $room_url=$row['room_url'];
                                                  $dafault_price=$row['dafault_price'];
                                                  $rooms_description  =$row['rooms_description'];
                                                  $enid=my_encrypt($idrooms_suites);
                                                  $p_name = str_replace (" ", "-", $room_type);
                                                 $rd= limit_text($rooms_description,50);

                                            ?>
                        <div class="col-xl-4 col-md-6">
                            <div class="single-services ser-m mb-30">
                                <div class="services-thumb">
									<a class="gallery-link popup-image" href="admin/<?php echo $room_url;?>">
                                    <img src="admin/<?php echo $room_url;?>" alt="<?php echo $room_type; ?>" style="height: 300px;">
									</a>
                                </div>
                                <div class="services-content" style="height: 400px;"> 
                                    <div class="day-book">
                                        <ul>
                                            <li>Rs.<?php echo $dafault_price;?>/Night</li>
                                            <li><a href="rooms_details.web/<?php echo $p_name;?>/<?php echo $enid;?>">Book Now</a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="rooms_details.web/<?php echo $p_name;?>/<?php echo $enid;?>"><?php echo $room_type. $room_special;?></a></h4>    
                                    <p><?php echo $rooms_description;?></p>
                                    <!--
                                    <div class="icon">
                                        <ul>
                                            <li><img src="img/icon/sve-icon1.png" alt="img"></li>
                                            <li><img src="img/icon/sve-icon2.png" alt="img"></li>
                                            <li><img src="img/icon/sve-icon3.png" alt="img"></li>
                                            <li><img src="img/icon/sve-icon4.png" alt="img"></li>
                                            <li><img src="img/icon/sve-icon5.png" alt="img"></li>
                                            <li><img src="img/icon/sve-icon6.png" alt="img"></li>
                                        </ul>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                        
                        
                    </div>
                </div>
            </section>
            <!-- room-area-end -->    
             
             <!-- booking-area -->
            <section class="booking pt-120 pb-120 p-relative fix">
                <div class="animations-01"><img src="img/bg/an-img-01.png" alt="an-img-01"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                             <div class="contact-bg02">
                                <div class="section-title center-align">
                                    <h5>make appointment</h5>
                                    <h2>
                                       Book A Room
                                    </h2>
                                </div>                                
                                <div class="contact-form mt-30">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-user"></i> Full Name</label>
                                                     <input type="text" id="name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-home"></i> Address</label>
                                                     <input type="text" id="address" name="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-envelope"></i> Email</label>
                                                     <input type="email" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-phone"></i> Contact No.</label>
                                                     <input type="text" id="contact" name="contact">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-globe"></i> Country</label>
                                                     <input type="text" id="country" name="country">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-option mb-20">                                   
                                            <label><i class="fal fa-hotel"></i> Rooms</label>
                                               <select name="room" id="room">
                                                  <option value="sports-massage">Rooms</option>
                                                  <?php 
                                             $result = mysqli_query($con, "SELECT * FROM rooms_suites ");
                                               while ($row = mysqli_fetch_array($result)) {
                                                  $idrooms_suites=$row['idrooms_suites']; 
                                                  $room_type=$row['room_type']; 
                                                  $room_special=$row['room_special'];
                                                  $room_size=$row['room_size'];
                                                  $room_view=$row['room_view'];                            
                                                  $room_url=$row['room_url'];
                                                  $dafault_price=$row['dafault_price'];
                                                  $rooms_description  =$row['rooms_description'];
                                                  $enid=my_encrypt($idrooms_suites);
                                                  $p_name = str_replace (" ", "-", $room_type);
                                                 $rd= limit_text($rooms_description,50);

                                            ?>
                                                  <option value="<?php echo $room_type. $room_special;?>"><?php echo $room_type. $room_special;?></option>
                                              <?php } ?>
                                                    
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-users"></i> Number Of Adults</label>
                                                     <input type="text" id="adults" name="adults">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-child"></i> Number Of Children</label>
                                                     <input type="text" id="child" name="child">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-name mb-20">                                    
                                           <label><i class="fal fa-badge-check"></i> Check In Date</label>
                                                     <input type="date" id="chackin" name="chackin">
                                        </div>                               
                                    </div>

                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-times-octagon"></i> Check Out Date</label>
                                                     <input type="date" id="chackout" name="chackout">
                                        </div>
                                    </div>                             	
                                    
                                    <div class="col-lg-12 col-md-12">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-comment"></i> Message</label>
                                                     <input type="text" id="message" name="message">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="slider-btn mt-15">                                          
                                                    <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s" id="send_btn" button type="submit" onclick="room_booking();return false;"><span>Book Now</span></button>				
                                                </div>                             
                                    </div>

                                    <div class="col-md-12">

                 <div class="alert alert-success" id="success" style="background: green;padding: 20px;color: white;display: none;">
                    <strong>Success!</strong> Your request has sent Thank you.
                </div>

                <div class="alert alert-danger" id="error" style="background: red;padding: 20px;color: white;display: none;width: 100%;">
                    <strong>Sorry !</strong> Please enter all details.
                </div>
                                        </div>

                                    </div>
                            </div>                            
                            </div>  
                                             
                        </div>
                        <div class="col-lg-6 col-md-6">
                             <div class="booking-img">
                                 <img src="img/bg/booking-img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- booking-area-end -->	
              
            
        </main>
        <!-- main-area-end -->
       <!-- footer -->
        <?php include 'inc/footer.php'; ?>
        <!-- footer-end -->
		<!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/paroller.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/js_isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/parallax-scroll.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/element-in-view.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>