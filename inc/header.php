<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

</head>
<body>

<?php 
               
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

    <!-- header -->
        <header class="header-area header-three" >  
           <div class="header-top second-header d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">      
                        <div class="col-lg-10 col-md-10 d-none d-lg-block" >
                             <div class="header-cta">
                               <ul>                                   
                                    <li>
                                       <i class="far fa-clock"></i>
                                        <span>Mon - Fri: 9:00 - 19:00/ Closed on Weekends</span>
                                    </li>
                                    <li>
                                       <i class="far fa-mobile"></i>
                                        <strong>+<?php echo $contact1;?></strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    
                        <div class="col-lg-2 col-md-2 d-none d-lg-block text-right">
                             <div class="header-social">
                                <span>
                                    <a href="https://www.facebook.com/" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/" title="Instagram"><i class="fab fa-instagram"></i></a>               
                                    <a href="https://twitter.com/?lang=en" title="Twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/" title="Youtube"><i class="fab fa-youtube"></i></a>
                                   </span>                    
                                   <!--  /social media icon redux -->                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
              <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu" >
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="home.web"><img src="img/logo/logo.png" alt="logo"></a>
                                </div>
                            </div>
                           <div class="col-xl-8 col-lg-8">
                              
                                <div class="main-menu text-center">
                                    <nav id="mobile-menu">
                                          <ul>
                                            <li>
                                                <a href="home.web">Home</a>                                                
                                            </li>
                                            <li><a href="about_us.web">About</a></li>        
                                            <li><a href="rooms.web">our rooms</a></li>     
                                            <li><a href="services.web">Our Services</a></li>
                                            <li><a href="things_to_do.web">Things To Do</a></li>  
                                            <li><a href="gallery.web">Gallery</a></li>                                          
                                            <li><a href="contact.web">Contact</a></li>                                               
                                        </ul>
                                    </nav>
                                </div>
                            </div>   
                             <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                                 <a href="rooms.web" class="top-btn mt-10 mb-10">reservation </a>
                            </div>
                            
                                <div class="col-12">
                                    <div class="mobile-menu"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->

</body>
</html>

        