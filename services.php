<!doctype html>
<html class="no-js" lang="zxx">
    

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <?php include './model/function.php'; ?>
        <base href="<?php ___page_setup__()?>" /> 
       <?php meta_data($con,2); ?>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Blue Waves-Services</title>
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
    </head>
    <body>
        <!-- header -->
        <?php include 'inc/header.php'; ?>
        <!-- header-end -->

        <?php 
                $id=0;
                if(isset($_GET['id'])){
                  $id=my_decrypt($_GET['id']);
                }

              $banner_url="";  $banner_title="";
              $result = mysqli_query($con, "SELECT * FROM page_banner WHERE banner_type_idbanner_type='2'");
                      while ($row = mysqli_fetch_array($result)) {
                          $banner_url=$row['banner_url']; 
                          $banner_title=$row['banner_title'];                           
              }
              $service_title=""; $description=""; 
              $result = mysqli_query($con, "SELECT * FROM services ");
                      while ($row = mysqli_fetch_array($result)) {
                          $service_title=$row['service_title'];
                          $description=$row['description'];                
              }

              
            
            ?>
        
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?php echo 'admin/'.$banner_url;?>);">
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


            <!-- service-description-area start-->
                        <section id="blog" class="blog-area p-relative fix pt-90 pb-90" >
                 <div class="animations-02" ><img src="img/bg/an-img-06.png" alt="contact-bg-an-05"></div>
                <div class="container" >
                    <div class="row align-items-center"> 
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                 <h5><?php echo $banner_title;?></h5>
                                <h2>
                                   <?php echo $service_title;?>
                                </h2>
                                <p><?php echo $description;?></p>
                            </div>                           
                        </div>
                    </div>                    
                </div>
            </section>


            <!-- service-description-area end -->


			 <!-- service-details2-area -->
            <section id="service-details2" class="pt-120 pb-90 p-relative" style="margin-top: -100px;">
                 <div class="animations-01"><img src="img/bg/an-img-01.png" alt="an-img-01"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6">
                                <div class="services-08-item mb-30">
                                    <div class="services-icon2">
                                       <img src="img/icon/fe-icon01.png" alt="img">
                                    </div>
                                    <div class="services-08-thumb">
                                     <img src="img/icon/fe-icon01.png" alt="img">
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="single-service.html"> Qulity Room</a></h3>
                                        <p>Nullam molestie lacus sit amet velit fermentum feugiat. Mauris auctor eget nunc sit amet.</p>
                                        
                                    </div>
                                </div>
                            </div>
                              <div class="col-lg-4 col-md-6">                                  
                                <div class="services-08-item mb-30">
                                     <div class="services-icon2">
                                       <img src="img/icon/fe-icon04.png" alt="img">
                                    </div>
                                    <div class="services-08-thumb">
                                   <img src="img/icon/fe-icon04.png" alt="img">
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="single-service.html">Privet Beach</a></h3>
                                       <p>Nullam molestie lacus sit amet velit fermentum feugiat. Mauris auctor eget nunc sit amet.</p>
                                         
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6">
                               <div class="services-08-item mb-30">
                                     <div class="services-icon2">
                                       <img src="img/icon/fe-icon05.png" alt="img">
                                    </div>
                                    <div class="services-08-thumb">
                                     <img src="img/icon/fe-icon05.png" alt="img">
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="single-service.html">Best Accommodation</a></h3>
                                        <p>Nullam molestie lacus sit amet velit fermentum feugiat. Mauris auctor eget nunc sit amet.</p>
                                         
                                    </div>
                                </div>
                            </div>
                         <div class="col-lg-4 col-md-6">
                               <div class="services-08-item mb-30">
                                     <div class="services-icon2">
                                       <img src="img/icon/fe-icon06.png" alt="img">
                                    </div>
                                    <div class="services-08-thumb">
                                     <img src="img/icon/fe-icon06.png" alt="img">
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="single-service.html"> Wellness & Spa</a></h3>
                                        <p>Nullam molestie lacus sit amet velit fermentum feugiat. Mauris auctor eget nunc sit amet.</p>
                                        
                                    </div>
                                </div>
                            </div>
                              <div class="col-lg-4 col-md-6">
                               <div class="services-08-item mb-30">
                                   <div class="services-icon2">
                                       <img src="img/icon/fe-icon07.png" alt="img">
                                    </div>
                                    <div class="services-08-thumb">
                                   <img src="img/icon/fe-icon07.png" alt="img">
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="single-service.html">Restaurants & Bars</a></h3>
                                       <p>Nullam molestie lacus sit amet velit fermentum feugiat. Mauris auctor eget nunc sit amet.</p>
                                         
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6">
                                <div class="services-08-item mb-30">
                                    <div class="services-icon2">
                                       <img src="img/icon/fe-icon08.png" alt="img">
                                    </div>
                                    <div class="services-08-thumb">
                                     <img src="img/icon/fe-icon08.png" alt="img">
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="single-service.html">Special Offers</a></h3>
                                        <p>Nullam molestie lacus sit amet velit fermentum feugiat. Mauris auctor eget nunc sit amet.</p>
                                         
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
            <!-- service-details2-area-end -->
             <!-- service-details3-area -->
            <section class="feature-area2 p-relative fix" style="background: #f7f5f1;">
                 <div class="animations-02"><img src="img/bg/an-img-02.png" alt="contact-bg-an-05"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <?php 
                                     $service_title=""; $description=""; 
                                        $result = mysqli_query($con, "SELECT * FROM service_type ");
                                            while ($row = mysqli_fetch_array($result)) {
                                              $type_name=$row['type_name'];
                                              $type_description=$row['type_description'];                
                                              $type_url=$row['type_url']; 
                                    ?>



                         <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                           <div class="feature-img"  style="margin: 20px;">                               
                                  <img src="<?php echo 'admin/'.$type_url;  ?>" alt="<?php echo $type_name;  ?>" style="width: 100%;" class="img" >              
                                </div>
                        </div>
					   <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="feature-content s-about-content">
                                <div class="feature-title pb-20">                               
                                    
                                <h3>
                                 <?php echo $type_name;  ?>
                                </h3>                             
                                </div>
                                <p><?php echo $type_description;  ?></p>
                                
                               
                                
                            </div>
                        </div>
                       <?php } ?>
                     
                    </div>
                </div>
            </section>
            <!-- service-details3-area-end -->
	
              <!-- testimonial-area -->
            <section class="testimonial-area pt-120 pb-90 p-relative fix" style="background-image: url(img/bg/testimonial-bg.png); background-size: cover;">
                <div class="container">
                    <div class="row">
                         <div class="col-lg-12">
                              <div class="section-title center-align mb-50 text-center">
                                <h5>Testimonial</h5>
                                <h2>What Our Clients Says</h2>
                                <p>Proin consectetur non dolor vitae pulvinar. Pellentesque sollicitudin dolor eget neque viverra, sed interdum metus interdum. Cras lobortis pulvinar dolor, sit amet ullamcorper dolor iaculis vel</p>
                            </div>
                           
                        </div>
                        <div class="col-lg-12">
                            <div class="testimonial-active">
                                <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="img/testimonial/testi_avatar.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Jina Nilson</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                    <div class="review-icon">
                                        <img src="img/testimonial/review-icon.png" alt="img">
                                     </div>
                                    <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="img/testimonial/testi_avatar_02.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Braitly Dcosta</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                   <div class="review-icon">
                                        <img src="img/testimonial/review-icon.png" alt="img">
                                     </div>
                                      <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="img/testimonial/testi_avatar_03.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Roboto Dose</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                    <div class="review-icon">
                                        <img src="img/testimonial/review-icon.png" alt="img">
                                     </div>
                                    <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="img/testimonial/testi_avatar_02.png" alt="img">
                                        <div class="ta-info">
                                            <h6>Braitly Dcosta</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                   <div class="review-icon">
                                        <img src="img/testimonial/review-icon.png" alt="img">
                                     </div>
                                      <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
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