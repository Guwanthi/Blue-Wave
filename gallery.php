<!doctype html>
<html class="no-js" lang="zxx">
    

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Blue Waves-Gallery</title>
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
       <?php meta_data($con,1); ?>
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
              $result = mysqli_query($con, "SELECT * FROM page_banner WHERE banner_type_idbanner_type='6'");
                      while ($row = mysqli_fetch_array($result)) {
                          $banner_url=$row['banner_url']; 
                          $banner_title=$row['banner_title'];                           
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
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $banner_title;?> </li>
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
            
         <!-- gallery-area -->
            <section class="profile fix pt-120">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                             <div class="my-masonry text-center mb-50">
                                <div class="button-group filter-button-group ">                                    
                                    <button class="active" data-filter="*">All</button>

                                    <?php 
                                             $result = mysqli_query($con, "SELECT * FROM gallery_type ");
                                                while ($row = mysqli_fetch_array($result)) {
                                                  $type=$row['type']; 
                                                  $gtype = str_replace (" ", "-", $type);
                                            ?>
                                     <button data-filter=".<?php echo $gtype; ?>"><?php echo $type; ?> </button>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="masonry-gallery-huge">
                                <div class="grid col2">
                                    <?php 
                                             $result = mysqli_query($con, "SELECT * FROM gallery g INNER JOIN gallery_type gt ON g.gallery_type_idgallery_type  = gt.idgallery_type ");
                                                while ($row = mysqli_fetch_array($result)) {
                                                  $image_url=$row['image_url'];
                                                  $type=$row['type']; 
                                                  $gtype = str_replace (" ", "-", $type);
                                            ?>
                                    <div class="grid-item <?php echo $gtype; ?>">
                                          <a class="popup-image" href="admin/<?php echo $image_url; ?>">
                                                <figure class="gallery-image">
                                                  <img src="admin/<?php echo $image_url; ?>" alt="<?php echo $gtype; ?>" class="img"> 
                                                </figure>
                                            </a>
                                    </div>
                                <?php } ?>
                                    
                                </div>
                         </div>
                        
                        </div>
                    
                    </div>
					
                </div>
            </section>
             <!-- gallery-area-end -->
       
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