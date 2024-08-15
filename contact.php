<!doctype html>
<html class="no-js" lang="zxx">
    

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Blue Waves-Contact</title>
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
        <?php meta_data($con,7); ?>
    </head>
    <body>
       <!-- header -->
        <?php include 'inc/header.php'; ?>
        <!-- header-end -->        
        <!-- main-area -->
        <main>
            
            <?php 
               

              $banner_url="";  $banner_title="";
              $result = mysqli_query($con, "SELECT * FROM page_banner WHERE banner_type_idbanner_type='7'");
                      while ($row = mysqli_fetch_array($result)) {
                          $banner_url=$row['banner_url']; 
                          $banner_title=$row['banner_title'];                           
              }

              $contact1=""; $contact2=""; $address=""; $email1=""; $email2="";
               $result = mysqli_query($con, "SELECT * FROM conntact_details ");
                      while ($row = mysqli_fetch_array($result)) {
                          $contact1=$row['contact1']; 
                          $contact2=$row['contact2'];
                          $address=$row['address'];
                          $email1=$row['email1'];
                          $email2=$row['email2'];                           
              }
             
              
            
            ?>

            <!-- breadcrumb-area -->
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
            <!-- contact-area -->
            <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix">
                <div class="container">
             
					<div class="row justify-content-center align-items-center">
						
                         <div class="col-lg-4 order-1">
                             
                            <div class="contact-info">
                                  <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-map"></i>
                                        </div>
                                        <h5>Office Address</h5>
                                        <p><?php echo $address;?></p>
                                    </div>
                                    <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <h5>Contact Us</h5>
                                        <p><a href="tel:+<?php echo $contact1;?>">+<?php echo $contact1;?></a> </p>
                                        <p><a href="tel:+<?php echo $contact2;?>">+<?php echo $contact2;?></a> </p>
                                    </div>
                                     <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <h5>Message Us</h5>
                                        <p> <a href="mailto:<?php echo $email1;?>"><?php echo $email1;?></a><br><a href="mailto:<?php echo $email2;?>"><?php echo $email2;?></a></p>
                                        
                                    </div>
                                     <div class="single-cta wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <h5>Working Hours</h5>
                                        <p>Monday to Friday 09:00 to 18:30 <br> 
                                            Saturday 15:30</p>
                                    </div>
                                </div>							
                        </div>
                        <div class="col-lg-8 order-2">
                            <div class="contact-bg02">
                                <div class="section-title center-align mb-40 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h2>
                                  Get In Touch
                                </h2>
                                </div>                               
                                <div class="contact-form mt-30">
                                    <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-name mb-20">                                    
                                            <input type="text" id="name" name="name" placeholder="Name" required>
                                        </div>                               
                                    </div>

                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                            <input type="text" id="email" name="email" placeholder="Eamil" required>
                                        </div>
                                    </div>		
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                            <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                                        </div>
                                    </div>	
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                            <input type="text" id="subject" name="subject" placeholder="Subject">
                                        </div>
                                    </div>	
                                    <div class="col-lg-12">
                                        <div class="contact-field p-relative c-message mb-30">                                  
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                        </div>
                                        <div class="slider-btn">                                          
                                                    <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s" id="send_btn" button type="submit" onclick="contact_mail();return false;"><span>Send Message</span></button>				
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
					</div>
                    
                </div>
               
            </section>
            <!-- contact-area-end -->
          <!-- newslater-area -->
            <section class="newslater-area p-relative pt-120 pb-120" style="background-color: #f7f5f1;">
                <div class="animations-01"><img src="img/bg/an-img-07.png" alt="contact-bg-an-05"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center text-center">
                        <div class="col-xl-9 col-lg-9">
                            <div class="section-title center-align mb-40 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                 <h5>Location</h5>
                                <h2>
                                    Visit Our Hotel
                                </h2>
                                
                            </div>
                            <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7292428919413!2d81.28676889549459!3d6.299265391537817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae69dae20585db5%3A0x6ad7b6728f446ad3!2sTara%20Watergate%20Hotel!5e0!3m2!1sen!2slk!4v1626256713273!5m2!1sen!2slk" width="600" height="450" style="border:0; width: 100%; height: 750px"  allowfullscreen="" loading="lazy"></iframe></div>                    
                            
                            
                        </div>
                       
                    </div>
                   
                </div>
            </section>
            <!-- newslater-aread-end -->
             
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