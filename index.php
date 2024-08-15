<!doctype html>
<html class="no-js" lang="zxx">
    

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Blue Waves-Home</title>
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

        <?php include './model/function.php'; ?>
        <base href="<?php ___page_setup__()?>" /> 
       <?php meta_data($con,9); ?>
    </head>
    <body>

<?php include 'inc/header.php'; ?>
        
        <!-- main-area -->
        <?php 
               
              $description=""; $title="";
              $result = mysqli_query($con, "SELECT * FROM about_us ");
                      while ($row = mysqli_fetch_array($result)) {
                          $title=$row['title']; 
                          $description=$row['description'];                           
              }
             
              
            
            ?>
        <main>
           <!-- slider-area -->
            <section id="home" class="slider-area fix p-relative">
               
                <div class="slider-active" style="background: #101010;">
                    <?php 
                       $result = mysqli_query($con, "SELECT * FROM main_slider  WHERE   is_main_slider  ='1' ");
                             while ($row = mysqli_fetch_array($result)) {
                                    $slider_url=$row['slider_url'];
                    ?>
				<div class="single-slider slider-bg d-flex align-items-center" style="background-image: url(<?php echo 'admin/'.$slider_url;?>); background-size: cover;">
                        <div class="container">
                           <div class="row justify-content-center align-items-center">
                              
                               <div class="col-lg-7 col-md-7">
                                    <div class="slider-content s-slider-content mt-80 text-center">
                                         <h2 data-animation="fadeInUp" data-delay=".4s">Enjoy A Luxuary Experience</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Donec vitae libero non enim placerat eleifend aliquam erat volutpat. Curabitur diam ex, dapibus purus sapien, cursus sed nisl tristique, commodo gravida lectus non.</p>
                                        
                                          <div class="slider-btn mt-30 mb-105">     
                                             <a href="contact.html" class="btn ss-btn active mr-15" data-animation="fadeInLeft" data-delay=".4s">Discover More </a>
                                              <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="video-i popup-video" data-animation="fadeInUp" data-delay=".8s" style="animation-delay: 0.8s;" tabindex="0"><i class="fas fa-play"></i> Intro Video</a>
                                        </div>        
                                                              
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    
                    </div>
                    
               
            </section>
            <!-- slider-area-end -->
             <!-- booking-area -->
             <!--
            <div id="booking" class="booking-area p-relative">
                <div class="container">
                    <form action="#" class="contact-form" >
							<div class="row align-items-center">
                                <div class="col-lg-12"> 
                                    <ul>
                                        <li> 
                                            <div class="contact-field p-relative c-name">  
                                               <label><i class="fal fa-badge-check"></i> Check In Date</label>
                                                     <input type="date" id="chackin" name="date">
                                            </div>      
                                        </li>
                                        <li> 
                                            <div class="contact-field p-relative c-name">  
                                                 <label><i class="fal fa-times-octagon"></i> Check Out Date</label>
                                                     <input type="date" id="chackout" name="date">
                                            </div>      
                                        </li>
                                         <li> 
                                            <div class="contact-field p-relative c-name">  
                                                 <label><i class="fal fa-users"></i> Adults</label>
                                                <select name="adults" id="adu">
                                                  <option value="sports-massage">Adults</option>
                                                  <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>      
                                        </li>
                                         <li> 
                                            <div class="contact-field p-relative c-name">  
                                                 <label><i class="fal fa-baby"></i> Child</label>
                                                <select name="child" id="cld">
                                                  <option value="sports-massage">Child</option>
                                                  <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>      
                                        </li>
                                         <li> 
                                            <div class="contact-field p-relative c-name">  
                                                <label><i class="fal fa-concierge-bell"></i> Room</label>
                                               <select name="room" id="rm">
                                                  <option value="sports-massage">Room</option>
                                                  <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>      
                                        </li>
                                        
                                        <li>
                                            <div class="slider-btn">    
                                                <label><i class="fal fa-calendar-alt"></i></label>
                                            <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Check Availability</button>
                                        </div>     
                                        </li>
                                    </ul>
                                </div>
                          
                            </div>
                        
                    </form>
                </div>
            </div>
        -->
            <!-- booking-area-end -->

             <!-- about-area -->
            <section class="about-area about-p pt-120 pb-120 p-relative fix">
                <div class="animations-02"><img src="img/bg/an-img-02.png" alt="contact-bg-an-02"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="img/features/final1.png" alt="img">   
                               <div class="about-icon">
                                     <img src="img/features/final2.jpg" alt="img" style="border: 10px solid #d9d9d9;">   
                                </div>
                            </div>                          
                        </div>
                        
                    <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content  wow fadeInRight  animated pl-30" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                    <h5>About Us</h5>
                                    <h2><?php echo $title;?></h2>                                   
                                </div>
                                   <p><?php echo $description;?></p>
                                    <div class="about-content3 mt-30">
                                    <div class="row justify-content-center align-items-center">
                                  
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Featured Specials--area start -->
            <section class="team-area2 fix p-relative pt-105 pb-80">  
                <div class="container">  
                    <div class="row">   
                        <div class="col-lg-12 p-relative">
                            <div class="section-title center-align mb-40 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                 <h5>Why Choose Us</h5>
                                <h2>
                                     Top Reasons to Stay
                                </h2>
                                
                            </div>
                        </div>                        
                         
                    </div>
                   <div class="row team-active">
                   <?php 
                            $count=0;
                            $result = mysqli_query($con, "SELECT * FROM why_choose ");
                            while ($row = mysqli_fetch_array($result)) {
                            $title=$row['title'];
                            $description=$row['description'];
                            $image_url=$row['image_url'];
                            $count++;
                            $rsk='rs-'.$count;
                        ?>               
                        <div class="col-xl-4 col-md-6">
                            <div class="single-team mb-40" >
                                <div class="team-thumb">
                                    <div class="brd">
                                         <img src="<?php echo 'admin/'.$image_url;?>" alt="" style="height: 200px;">
                                        
                                    </div>
                                </div>
                                <div class="team-info" >
                                    <h4 style="height: 70px;"><?php echo $title;?></h4>
                                    <div style="height: 160px; padding-left: 20px; padding-right: 20px; overflow: hidden;"><p><?php echo $description;?></p></div> 
                                    <div class="blog-btn"><a href="about_us.web">Read More</a></div>                                   
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                        
                    </div>
                </div>
            </section>
            <!-- Featured Specials-area-end --> 

            
            

            <!-- room-area-->
            <section id="services" class="services-area pt-113 pb-150">
              
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">    
                            <div class="section-title center-align mb-50 text-center">
                                <h5>The pleasure of luxury</h5>
                                <h2>Rooms & Suites</h2>
                            
                            </div>
                        </div>
                    </div>
                    <div class="row services-active">



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
                            <div class="single-services mb-30">
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

            <!-- things_to_do-area-start -->
            <section id="blog" class="blog-area p-relative fix pt-90 pb-90">
                 <div class="animations-02"><img src="img/bg/an-img-06.png" alt="contact-bg-an-05"></div>
                <div class="container">
                    <div class="row align-items-center"> 
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                 <h5>Things To Do</h5>
                                <h2>
                                    Best place to visit
                                </h2>
                                
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <?php 
              $place_name='';
              $description='';
              $result = mysqli_query($con, "SELECT * FROM best_place LIMIT 3");
                      while ($row = mysqli_fetch_array($result)) {
                          $place_name=$row['place_name'];
                          $description=$row['description'];
                          $place_url=$row['place_url'];
                          $place_title=$row['place_title'];
                                          
              
            
            ?>     
                       <div class="col-lg-4 col-md-6">
                            <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="things_to_do.web"><img src="admin/<?php echo $place_url; ?>" alt="<?php echo $place_name; ?>" style="height: 300px;"></a>
                                </div>                    
                                <div class="blog-content2">    
                                    
                                    <h4 style="height: 70px;"><a href="things_to_do.web"><?php echo $place_title; ?></a></h4> 
                                    <div style="height: 150px; overflow: hidden;"><p><?php echo $description; ?></p></div>
                                    
                                    <div class="blog-btn"><a href="things_to_do.web">Read More</a></div>
                                     
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                         
                    </div>
                </div>
            </section>
            <!-- things_to_do-area-end -->
            
            
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

<?php include 'inc/footer.php'; ?>

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