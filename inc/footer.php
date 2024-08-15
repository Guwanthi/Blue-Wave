         <!-- footer -->
        <footer class="footer-bg footer-p">
         <div class="footer-top  pt-90 pb-40" style="  background: rgb(2,0,36);
background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(9,9,121,0.9192810913427871) 27%, rgba(0,212,255,0.9024743686537114) 88%, rgba(146,231,248,1) 100%);  ">
                <div class="container">
                    <div class="row justify-content-between">
                        
                          
                          <div class="col-xl-4 col-lg-4 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title mb-30">
                                   <img src="img/logo/logo.png" alt="img">
                                </div>
                                <div class="f-contact">
                                    <ul>
                                    <li>
                                        <i class="icon fal fa-phone"></i>
                                        <span>+<?php echo $contact1;?><br>+<?php echo $contact2;?></span>
                                    </li>
                                   <li><i class="icon fal fa-envelope"></i>
                                        <span>
                                            <a href="mailto:<?php echo $email1;?>"><?php echo $email1;?></a>
                                       <br>
                                       <a href="mailto:<?php echo $email2;?>"><?php echo $email2;?></a>
                                       </span>
                                    </li>
                                    <li>
                                        <i class="icon fal fa-map-marker-check"></i>
                                        <span><?php echo $address;?></span>
                                    </li>
                                    
                                </ul>
                                    
                                    </div>
                            </div>
                        </div>
						<div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Our Links</h2>
                                </div>
                                <div class="footer-link">
                                    <ul>                                        
                                        <li><a href="home.web">Home</a></li>
                                        <li><a href="about_us.web"> About Us</a></li>
                                        <li><a href="rooms.web">Our Rooms </a></li>
                                        <li><a href="services.web"> Our Services </a></li>
                                        <li><a href="things_to_do.web">Things To Do </a></li>
                                        <li><a href="gallery.web">Gallery </a></li>
                                        <li><a href="contact.web"> Contact Us</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Our Rooms</h2>
                                </div>
                                <div class="footer-link">
                                    <ul>
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

                                        <li><a href="rooms_details.web/<?php echo $p_name;?>/<?php echo $enid;?>"><?php echo $room_type. $room_special;?></a></li>
                                    <?php } ?>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                  <h2>Subscribe Us</h2>
                                </div>
                                <div class="footer-link">
                                 <ul>
                                     <li><a href="https://www.tripadvisor.com/"><img src="img/logo/tripadvisor.png"> </a> </li>
                                     
                                 </ul>
                                </div>
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">                         
                           Copyright &copy; Riorelax 2022 . All rights reserved.         
                        </div>
                        <div class="col-lg-6 col-md-6 text-right text-xl-right">                       
                           <div class="footer-social">                                    
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>        
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->