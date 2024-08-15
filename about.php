<!doctype html>
<html class="no-js" lang="zxx">
    

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Blue Waves-About Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="" href="img/logo/logo.png">

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
       <?php meta_data($con,1); ?>
         
    </head>
    <body>
       
       <?php include 'inc/header.php'; ?>
        
        <!-- main-area -->
        <main>

            <?php 
               

              $banner_url="";  $banner_title="";
              $result = mysqli_query($con, "SELECT * FROM page_banner WHERE banner_type_idbanner_type='1'");
                      while ($row = mysqli_fetch_array($result)) {
                          $banner_url=$row['banner_url']; 
                          $banner_title=$row['banner_title'];                           
              }
              $description=""; $title="";
              $result = mysqli_query($con, "SELECT * FROM about_us ");
                      while ($row = mysqli_fetch_array($result)) {
                          $title=$row['title']; 
                          $description=$row['description'];                           
              }
             
              
            
            ?>
            
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?php echo 'admin/'.$banner_url;?>)">
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
            <!-- about-area -->
            <section class="about-area about-p pt-120 pb-120 p-relative fix">
                <div class="animations-02"><img src="img/bg/an-img-02.png" alt="contact-bg-an-02"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="img/features/final1.png" alt="1st img"> 
                            

                               <div class="about-icon">
                                     <img src="img/features/final2.jpg" alt="2nd img" style="border: 10px solid #d9d9d9;">   
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
            
            
              <!-- why_choose_us-area -->

            <section id="blog" class="blog-area p-relative fix pt-90 pb-90">
                 <div class="animations-02"><img src="img/bg/an-img-06.png" alt="contact-bg-an-05"></div>
                <div class="container">
                    <div class="row align-items-center"> 
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                 <h5>Why Choose Us</h5>
                                <h2>
                                    Top Reasons to Stay
                                </h2>
                                </div>
                           
                        </div>
                    </div>
                    <div class="row">
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

                       <div class="col-lg-4 col-md-6">
                            <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="#!"><img src="<?php echo 'admin/'.$image_url;?>" alt="img" style="width: 100%; height: 300px;"></a>
                                </div>                    
                                <div class="blog-content2" style=" height: 350px;">    
                                    
                                    <h4><a href="#!"><?php echo $title;?></a></h4> 
                                    <p><?php echo $description;?></p>
                                    
                                     
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                         
                      </div>
                </div>
            </section>
            <!-- why_choose_us-area-end -->

            <!-- unic_feature-area -->

<section class="feature-area2 p-relative fix" style="background: #f7f5f1;">
                 <div class="animations-02"><img src="img/bg/an-img-02.png" alt="contact-bg-an-05"></div>
                <div class="container">

            <?php 
                                               $result = mysqli_query($con, "SELECT * FROM about_special_things ");
                                              while ($row = mysqli_fetch_array($result)) {
                                                $title1=$row['title1'];
                                                $title2=$row['title2'];
                                                $description=$row['description'];
                                                $st_url=$row['st_url'];
                                            
                                            ?>

            
                    <div class="row justify-content-center align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                           <div class="feature-img">                               
                                  <img src="admin/<?php echo $st_url;?>" alt="img" class="img" style="width: 100%;">              
                                </div>
                        </div>
                       <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="feature-content s-about-content">
                                <div class="feature-title pb-20">                               
                                    <h5><?php echo $title1;?></h5>
                                <h2>
                                 <?php echo $title2;?>
                                </h2>                             
                                </div>
                                <p><?php echo $description;?></p>
                                
                                
                                
                            </div>
                        </div>
                       
                     
                    </div>

<br>
<?php } ?>
                   
                </div>
            </section>
            <!-- unic_feature-area-end -->
            
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