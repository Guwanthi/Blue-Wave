<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <?php include './model/function.php'; ?>
        <base href="<?php ___page_setup__()?>" /> 
       <?php meta_data($con,1); ?>

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


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>        

        
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">        
        <link rel="stylesheet" href="css/dripicons.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">


        <script type="text/javascript" src="js/js.js"></script>

    </head>
    <body>
      <!-- header -->
        <?php include 'inc/header.php'; ?>
        <!-- header-end -->
        
        <!-- main-area -->

        <?php 
                 $id=0;
              if(isset($_GET['id'])){
                 $id=my_decrypt($_GET['id']);
              }


              $banner_url="";  $banner_title="";
              $result = mysqli_query($con, "SELECT * FROM page_banner WHERE banner_type_idbanner_type='3'");
                      while ($row = mysqli_fetch_array($result)) {
                          $banner_url=$row['banner_url']; 
                          $banner_title=$row['banner_title'];                           
              }
              $bed_count=0;
              $result = mysqli_query($con, "SELECT * FROM beds WHERE bed_type_idbed_type='3'");
                      while ($row = mysqli_fetch_array($result)) {
                          $bed_count=$row['bed_count'];                       
              }
              $folding_bed=0;
              $result = mysqli_query($con, "SELECT * FROM beds WHERE bed_type_idbed_type='2'");
                      while ($row = mysqli_fetch_array($result)) {
                          $folding_bed=$row['bed_count'];                       
              }

             

              $room_type=""; $rooms_description=""; $dafault_price=0; $adults=0; $childern=0; $extra_bed=0; $rooms_assign=0; $rooms_count=0; $extra_bed_statues=0;
               $result = mysqli_query($con, "SELECT * FROM rooms_suites WHERE idrooms_suites='$id' ");
                      while ($row = mysqli_fetch_array($result)) {
                          $room_type=$row['room_type']; 
                          $rooms_description=$row['rooms_description']; 
                          $room_special=$row['room_special']; 
                          $dafault_price=$row['dafault_price']; 
                          $rooms_count=$row['rooms_count'];
                          $adults=$row['adults']; 
                          $childern=$row['childern']; 
                          $extra_bed=$row['extra_bed'];
                          $extra_bed_statues=$row['extra_bed_statues'];                           
              }
              
              $adults2=0; $childern2=0; $extra_bed2=0; $rooms_count2=0; $idrooms_suites=0;
             // if($rooms_assign==0){
            

                 $result = mysqli_query($con, "SELECT * FROM rooms_suites WHERE rooms_assign='$id' ");
                      while ($row = mysqli_fetch_array($result)) {
                          $idrooms_suites=$row['idrooms_suites'];
                          $rooms_assign=$row['rooms_count'];
                          $adults2=$row['adults']; 
                          $childern2=$row['childern']; 
                          $extra_bed2=$row['extra_bed'];
                          $rooms_assign=$row['rooms_assign'];                           
                 }
             // }

              $cc='';
             
              if($childern!=0){
                if($childern>1){
                  $cc= 'Childerns : '.$childern;
                }else if($childern=1){
                  $cc= 'Childern : '.$childern;
                }
 
              } 
              $ac='';
              if($adults!=0){
                $ac= 'Per One Room Capacity  : Adults : '.$adults; 
              }    

              $adu_count=($adults*$rooms_count)+1;
              $chld_count=($childern*$rooms_count)+1;
              
            
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



        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/bg/bdrc-bg.jpg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title">
                                    <h2><?php echo $room_type;?></h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.web">Home</a></li>
                                        <li class="breadcrumb-item"><a href="rooms.web"><?php echo $banner_title;?></a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $room_type;?></li>
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
			<!-- service-details-area -->
            <div class="about-area5 about-p p-relative">
                <div class="container pt-120 pb-40">
                    <div class="row">
                     <!-- #right side -->
                        <div class="col-sm-12 col-md-12 col-lg-4 order-2">
                           <aside class="sidebar services-sidebar">
                        
                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <div class="widget-content">
                                <h2 class="widget-title">  Book A Room  </h2>
                                <!-- Services Category -->
                                  <!-- booking-area -->
                                <div class="booking">
                                     <div class="contact-bg"> 
                                        <form action="https://htmldemo.zcubethemes.com/riorelax/mail.php" method="post" class="contact-form mt-30">
                                            <div class="row">
                                        <div class="col-lg-12 ">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-user"></i> Full Name</label>
                                                     <input type="text" id="name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-home"></i> Address</label>
                                                     <input type="text" id="address" name="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-envelope"></i> Email</label>
                                                     <input type="email" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-phone"></i> Contact No.</label>
                                                     <input type="text" id="contact" name="contact">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-globe"></i> Country</label>
                                                     <input type="text" id="country" name="country">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 ">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-users"></i> Number Of Adults</label>
                                                     <input type="text" id="adults" name="adults">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-child"></i> Number Of Children</label>
                                                     <input type="text" id="child" name="child">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="contact-field p-relative c-name mb-20">                                    
                                           <label><i class="fal fa-badge-check"></i> Check In Date</label>
                                                     <input type="date" id="chackin" name="chackin">
                                        </div>                               
                                    </div>

                                    <div class="col-lg-12 ">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-times-octagon"></i> Check Out Date</label>
                                                     <input type="date" id="chackout" name="chackout">
                                        </div>
                                    </div>                         
                                    
                                    <div class="col-lg-12 ">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-comment"></i> Message</label>
                                                    
                                                     <textarea class="contact-field p-relative c-subject mb-20" id="message" name="message" ></textarea>
                                                     <input type="hidden" value="<?php echo $room_type. $room_special;?>" id="mtype" name="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="slider-btn mt-15">                                          
                                                    <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s" id="send_btn" button type="submit" onclick="room_page_booking();return false;"><span>Book This Room</span></button>               
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
                                    </form>                            
                                    </div>  
                                </div>
                                <!-- booking-area-end -->	
                            </div>
                        </div>
                        <!--Service Contact-->
                        <div class="service-detail-contact wow fadeup-animation" data-wow-delay="1.1s">
                            <h3 class="h3-title">If You Need Any Help Contact With Us</h3>
                            <a href="tel:+<?php echo $contact1;?>">+<?php echo $contact1;?></a>
                        </div>

                    </aside>
                        </div>
                        <!-- #right side end -->
                       
                        
					<div class="col-lg-8 col-md-12 col-sm-12 order-1">
                           <div class="service-detail">
                      
                          <!-- Two Column -->
                            <div class="two-column">
                                <div class="row">
                                     <div class="image-column col-lg-12 col-md-12">




                          
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">


        <?php 
                                $count =0;
                               $result = mysqli_query($con, "SELECT * FROM room_slider WHERE   rooms_suites_idrooms_suites='$id' ");
                                while ($row = mysqli_fetch_array($result)) {
                                $room_img_url=$row['room_img_url']; 
                                    $count++;
                                    $active=''; 
                                    if ($count==1) {
                                                       $active='active';    
                                                       }                   
                                

                        ?>



      <div class="item <?php echo $active; ?>">
        <img src="admin/<?php echo $room_img_url; ?>" alt="<?php echo $room_type; ?>" style="width:100%;">
      </div>

      <?php } ?>
    </div>

    <!--img/bg/single-room-img02.png
     Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

 </div>
</div>


<div class="content-box">
                            <div class="row align-items-center mb-50">
                                <div class="col-lg-6 col-md-6">
                                    <div class="price">
                                        <h2><?php echo $room_type. $room_special;?></h2>
                                        <span>Rs.<?php echo $dafault_price;?>/Night</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <img src="img/testimonial/review-icon.png" alt="img">
                                </div>

                            </div>
                            
                          
                            
                            <p><?php echo $rooms_description;?></p>

                             
                            
                            <h3>Additional Information</h3>
                            <?php 
                               $result = mysqli_query($con, "SELECT * FROM room_information WHERE   rooms_suites_idrooms_suites='$id' ");
                                while ($row = mysqli_fetch_array($result)) {
                                $information=$row['information']; 
                                  echo '<li>'.$information.'</li>';                       
                                }

                              ?> 

                            
                            <!--
                            <ul class="room-features d-flex align-items-center">
                                <li>
                                <i class="fal fa-tv-retro"></i> TV
                                </li>
                                <li>
                                <i class="fal fa-wifi"></i> Free Wifi
                                </li>
                                <li>
                                <i class="fal fa-air-conditioner"></i> Air Condition
                                </li>
                                <li>
                                <i class="fal fa-dumpster-fire"></i> Heater
                                </li>
                                <li>
                               <i class="fal fa-phone-rotary"></i> Phone
                                </li>
                              
                                <li>
                                <i class="fal fa-dryer-alt"></i> Laundry
                                </li>
                                 <li>
                                <i class="fal fa-user"></i> Adults: 2
                                </li>
                                 <li>
                                    <i class="fal fa-square"></i> Size: 24m²
                                </li>
                                 <li>
                                    <i class="fal fa-bed"></i> Bed Type: One bed
                                </li>
                                 
                                </ul>
                            -->
                            <br>
                             <h3>Pricing Plans</h3>
                            <?php 
                           
                           date_default_timezone_set('Asia/Colombo');
                           $y=date("Y");
                           
                           $first_date=$y.'-01-01';
                           $last_date= $y.'-12-31';
                            $result = mysqli_query($con, "SELECT * FROM price_type rpp  ");
                      while ($row = mysqli_fetch_array($result)) {
                                $idprice_type=$row['idprice_type']; 
                                $ptype=$row['ptype'];  
                             
                                  echo '
                                      <table style="color: black;">
                                          <tr>
                                              <th style="width:80%;">'.$ptype.'</th>
                                              <th style="width:20%;">Price</th>
                                          </tr>';
                              

                             $result2 = mysqli_query($con, "SELECT * FROM room_price_plans rpp  WHERE rooms_suites_idrooms_suites='$id' && price_type_idprice_type='$idprice_type' &&  ( date1 BETWEEN '$first_date' AND '$last_date' || date2 BETWEEN '$first_date' AND '$last_date' || ( date2 < '$first_date' && date2 > '$last_date') ) ");
                              while ($row = mysqli_fetch_array($result2)) {
                                $date1=$row['date1']; 
                                $date2=$row['date2'];  
                                $price=$row['price']; 

                                echo '
                                 <tr>
                                  <td>'.$date1.' - '.$date2.'</td>
                                  <td> Rs.  '.$price.'</td>
                                  
                                </tr>
                                ';
                                           
                              }
                              echo ' </table>';
                          }

                            ?>
                            
                            
    
                        </div>
                    </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- service-details-area-end -->
            
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