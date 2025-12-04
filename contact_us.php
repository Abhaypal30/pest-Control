
<?php
include_once('include/head.php');

?>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="images/civic_s_logo.jpg" id="preloader_image" class="logoSizePreload" alt="loader">
        </div>
    </div>
	<!-- color picker start -->
	
	<!-- color picker end --> 
    <!--top header start-->
    
    <!--header menu wrapper-->
    <div class="menu_wrapper header-area hidden-menu-bar stick">
        <div class="container">
            <div id="search_open" class="gc_search_box">
                <input type="text" placeholder="Search here">
                <button><i class="flaticon-magnifier"></i></button>
            </div>
            <div class="menu_wrapper_mn">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">

                        <div class="pst_logo hidden-xs">
                            <a href="index.php">
                                <img class="logoSize" src= "images/civic_s_logo.jpg" alt="Logo">
                            </a>
                        </div>
                        <nav class="navbar hidden-xs">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse nav_response" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav" id="nav_filter">
                                    <li class="active"><a href="index.php" >home</a>
                                    </li>
                                    <li><a href="about_us.php">about us</a>
                                    </li>
                                    <li><a href="bussiness.php">Business</a>
                                    </li>
                                    
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pest Services <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pest Control</a>
                                                <!-- Submenu for Pest -->
                                                <ul class="home-submenu">
                                                    <li><a href="about_us.php?service=bedbug_control">Bedbug Control</a></li>
                                                    <li><a href="about_us.php?service=mosquito_control">Mosquito Control</a></li>
                                                    <li><a href="about_us.php?service=cockroach_control">Cockroach Control</a></li>
                                                    <li><a href="about_us.php?service=rodent_control">Rodent Control</a></li>
                                                    <li><a href="about_us.php?service=termite_control">Termite Control</a></li>
                                                    <li><a href="about_us.php?service=woodborer_control">Wood Borer Control</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home Cleaning</a>
                                                <!-- Submenu for Home -->
                                                <ul class="home-submenu">
                                                    <li><a href="#">Bathroom Cleaning</a></li>
                                                    <li><a href="#">Sofa Cleaning </a></li>
                                                    <li><a href="#">Full Home Cleaning</a></li>
                                                    <li><a href="#">Fridge Cleaning </a></li>
                                                    <li><a href="#">Kitchen Cleaning</a></li>
                                                    <li><a href="#"> Combo Services</a></li>
                                                    <li><a href="#">Steam Sanitization Services</a></li>
                                                    <li><a href="#"> Car Cleaning Services</a></li>
                                                
                                                </ul>
                                            </li>
                                             <li class="dropdown-submenu">
  <a href="about_us.php?service=birdnetting_control">Bird</a>
</li>
                                            <li class="dropdown-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Covid</a>
                                                <!-- Submenu for Covid -->
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rat Guard</a>
                                                <!-- Submenu for Covid -->
                                            </li>
                                           <li>
    <a href="about_us.php?service=mosquitoPlate_control">
        Mosquito Plated Nets
    </a>
</li>

                                            <li class="dropdown-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Invisible Grill Installations</a>
                                                <!-- Submenu for Covid -->
                                            </li>
                                        </ul>
                                    </li>
                                   
                                    <li><a href="offers.php">Offers</a>
                                    </li>
									
                                    
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                          <div class="rp_mobail_menu_main_wrapper visible-xs">
                            <div class="row">
                                <div class="col-xs-4 header_nav_div">
                                  <a href="#"><img class="logoSizeMOB" src="images/civic_s_logo.jpg" alt="logo"></a>
                                </div>
                                <div class="col-xs-8">
                                    <div id="toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                            <g>
                                                <g>
                                                    <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#000" />
                                                </g>
                                                <g>
                                                    <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#000" />
                                                </g>
                                                <g>
                                                    <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#000" />
                                                </g>
                                                <g>
                                                    <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#000" />
                                                </g>
                                                <g>
                                                    <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#000" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>

                            </div>
                            <div id="sidebar">
                                <img src="images/civic_s_logo.jpg" alt="logo" class="img-responsive logoSizeMOB">
                                <div id="toggle_close">&times;</div>
                                <div id='cssmenu' class="wd_single_index_menu">
                                    <ul>

                                        <li ><a href="index.php" >home</a>
                                        </li>
                                         <li><a href="about_us.php">about us</a>
                                        </li>
                                        <li><a href="bussiness.php">Business</a>
                                        </li>
                                        
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pest Services <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
    <ul class="dropdown-menu">
        <!-- Pest Control -->
        <li class="dropdown-submenu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pest Control</a>
            <ul class="home-submenu dropdown-menu">
                <li><a href="about_us.php?service=bedbug_control">Bedbug Control</a></li>
                <li><a href="about_us.php?service=mosquito_control">Mosquito Control</a></li>
                <li><a href="about_us.php?service=cockroach_control">Cockroach Control</a></li>
                <li><a href="about_us.php?service=rodent_control">Rodent Control</a></li>
                <li><a href="about_us.php?service=termite_control">Termite Control</a></li>
                <li><a href="about_us.php?service=woodborer_control">Wood Borer Control</a></li>
            </ul>
        </li>

        <!-- Home Cleaning -->
        <li class="dropdown-submenu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home Cleaning</a>
            <ul class="home-submenu dropdown-menu">
                <li><a href="#">Bathroom Cleaning</a></li>
                <li><a href="#">Sofa Cleaning</a></li>
                <li><a href="#">Full Home Cleaning</a></li>
                <li><a href="#">Fridge Cleaning</a></li>
                <li><a href="#">Kitchen Cleaning</a></li>
                <li><a href="#">Combo Services</a></li>
                <li><a href="#">Steam Sanitization Services</a></li>
                <li><a href="#">Car Cleaning Services</a></li>
            </ul>
        </li>

        <!-- Bird -->
        <li class="dropdown-submenu">
  <a href="about_us.php?service=birdnetting_control">Bird</a>
</li>
                                            <li class="dropdown-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Covid</a>
                                                <!-- Submenu for Covid -->
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rat Guard</a>
                                                <!-- Submenu for Covid -->
                                            </li>
                                           <li>
    <a href="about_us.php?service=mosquitoPlate_control">
        Mosquito Plated Nets
    </a>
</li>

                                            <li class="dropdown-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Invisible Grill Installations</a>
                                                <!-- Submenu for Covid -->
                                            </li>

        <!-- Covid -->
        <li class="dropdown-submenu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Covid</a>
            <ul class="home-submenu dropdown-menu">
                <li><a href="#">Covid Sanitization</a></li>
            </ul>
        </li>
    </ul>
</li>

                                       
                                        <li><a href="offers.php">Offers</a>
                                    </li>
                                        <li><a href="contact_us.php" style="color: black;">Contact Us</a>
                                        </li>
										</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="appointmnt_wrapper hidden-xs hidden-sm">
                            <ul>
                                <li>
                                    <a href="contact_us.php" class="appint-btn hidden-xs hidden-sm" style="color: black;">
                                        <div class="btn-front"><i class="fa fa-phone"></i>Contact Us</div>
                                        <div class="btn-back"><i class="fa fa-phone"></i>Contact Us</div>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-buttons">

  <a href="https://wa.me/919320402004" class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
  </a>
</div>
    <!--top header end-->
    <!-- page_title_section start -->
    <div class="page_title_section">
        <div class="page_title_overlay"></div>
        <div class="page_header text-center">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="page_header_line">
                            <h1 class="pst_bottompadder30"><span>contact us</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="page_header_bottom">
                        <ul class="sub_title">
                            <li><a href="#"> Home </a></li>
                            <li class="icon_breamcum"> > </li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_title_section end -->
    <!-- map section start -->
    <div class="map_main_wrapper">
        <!-- <div id="map"></div> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.4309374474865!2d72.95746777425437!3d19.17637134881576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b85655555555%3A0x879d4596068a3289!2sEcstasy%20Business%20Park!5e0!3m2!1sen!2sin!4v1709543272020!5m2!1sen!2sin" width="1400" height="530" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- map section end. -->
    <!--contact us section start-->
    <div class="contact_us_page_wrapper pst_toppadder100 pst_bottompadder100">
        <div class="cnt_page_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-xs-12 col-sm-12 col-lg-offset-1">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">

                        <div class="cnt_icon_wrapper wow  zoomIn animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                            <div class="cnt-icon-img">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="cnt-icon-content">
                                <p>
                                    <br> 9320402004</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                        <div class="cnt_icon_wrapper wow  zoomIn animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                            <div class="cnt-icon-img">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="cnt-icon-content">
                                <a href="#">
                                    
                                <p>

                                </a>
                                <br><a href="#">
                         info@civicpestcontrol.com
                        
                        </p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                        <div class="cnt_icon_wrapper wow  zoomIn animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                            <div class="cnt-icon-img">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            </div>
                            <div class="cnt-icon-content">
                                <p>Office No - G21 , Ecstasy Business Park, Mulund(W) - 400080.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact us section end-->
    <!-- message section start -->
    <div class="sp_fm_contact_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<div class="contact_form_section">
                        <h4>leave your message</h4>
                        <p class="pst_toppadder10 pst_bottompadder30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aem aliqua. Ut enim ad minim veniam.</p>

                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="inquiry_section-pos">
                                        <div class="form-group">
                                            <label class="sr-only">Name</label>
											 <input type="text" name="full_name" placeholder="Full Name" class="require form-control">
                                        </div>
                                    </div>
                                    <div class="inquiry_section-e">
                                        <div class="form-group">
                                            <label class="sr-only">Email</label>
                                            <input type="email" name="email" placeholder="Email" class="require form-control" data-valid="email" data-error="Email should be valid.">
                                        </div>
                                    </div>
                                    <div class="inquiry_section-p">
                                        <div class="form-group">
                                            <label class="sr-only">Phone</label>
											<input type="text" name="contact_no" placeholder="Phone" class="require form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="inquiry_section-m">
                                        <div class="form-group">
                                            <label class="sr-only">Message</label>
                                          <textarea rows="7" name="message" placeholder="Message" class="require form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-md-6 -->

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="response"></div>
                                    <div class="cntct_2_btn_wrapper">
                                        
										<button type="button" class="btn cntct_btn submitForm" type="contact">Send</button>
                                    </div>
                                </div>
                        </div>
                        <!-- /.row -->
					</form>
				</div>
			</div>
			<!-- /.col-md-8 -->

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <!--contact_section_info start-->

                    <div class="contact_section_hours">
                        <h4>opening time</h4>
                        <ul class="working-hours">
                            <li>Monday <span>7:30 am - 5.30 pm</span></li>
                            <li>Tuesday <span>10:00 am - 5.30 pm</span></li>
                            <li>Wednesday <span>7:30 am - 5.30 pm</span></li>
                            <li>Thursday <span>8:00 am - 5.30 pm</span></li>
                            <li>Friday <span>7:30 am - 5.30 pm</span></li>
                            <li>Saturday <span>7:30 am - 3.00 pm</span></li>
                            <li>Sunday <span>9:30 am - 3.00 pm</span></li>
                        </ul>
                    </div>

                    <!--contact_section_info end-->
                </div>
            </div>
        </div>
    </div>
    <!-- message section end -->
   
    <!-- footer section start-->
    <div class="footer_wrapper newPStBottom">
       
        <div class="footer_wrapper_second">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                        <div class="wrapper_second_about">
                            <div class="wrapper_first_image pst_bottompadder40">
                                <a href="index.php"><img src="images/foter_logo.png" class="img-responsive" alt="logo" /></a>
                            </div>
                            <div class="abotus_content">
                                <p>Fusce et sem elementum, mis nibh nec, tincidunt ipsum etiau eu ctor turpis. Quisque sitmi elit. Cras vel dui vel orciarel gravida. tincidunt ipsum etiau.</p>
                            </div>
                            <div class="aboutus_social_icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                    </li>
                                    <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                        <div class="wrapper_second_useful">
                            <h4>Usefull Link</h4>
                            <ul>
                                <li><a href="index.php"><i class="fa fa-circle"></i>Home </a>
                                </li>
                                <li><a href="about_us.php"><i class="fa fa-circle"></i>About Company</a>
                                </li>
                                <li><a href="services.php"><i class="fa fa-circle"></i> Pest Services </a>
                                </li>
                               
                               
                                <li><a href="contact_us.php"><i class="fa fa-circle"></i>Contact Us</a> </li>
                            </ul>
                        </div>
                    </div>
                 
                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                        <div class="wrapper_second_useful wrapper_second_useful_2">
                            <h4>services</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-circle"></i>Disinefting and Sanitizing</a>
                                </li>
                                <li><a href="#"><i class="fa fa-circle"></i> Residential Services</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-6">
                        <div class="wrapper_second_useful wrapper_second_useful_2">
                            <h4>Contact</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-circle"></i>Ecstasy Business Park ,
                                    Office No - G21 , Mulund(W).</a>
                                </li>
                                <li><a href="#"><i class="fa fa-circle"></i> info@civicpestcontrol.com
                                    </a> </li>
                                    <li><a href="#"><i class="fa fa-circle"></i>  9320402004</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section3_bottom_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-xs-10 col-sm-10">
                    <div class="section3_copyright">
                        <p>Copyright 2024  <a href="index.php">  Civic Pest Control </a>. all right reserved - design by <a href="index.php">3SP Techmind</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">
                    <div class="close_wrapper">
                        <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i>top</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer wrapper start-->
    <!--main js files-->
    <script src="js/jquery_min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="venobox/js/venobox.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/plugin/rs_slider/jquery.themepunch.revolution.min.js"></script>
    <script src="js/plugin/rs_slider/jquery.themepunch.tools.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.addon.snow.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.actions.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.carousel.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.kenburn.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.layeranimation.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.migration.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.navigation.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.parallax.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.slideanims.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.video.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.addon.slicey.min.js"></script>
    <script src="js/custom.js"></script>
    <!--js code-->
    <script>
        function initMap() {
            var uluru = {
                lat: -36.742775,
                lng: 174.731559
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                scrollwheel: false,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&amp;callback=initMap">
    </script>
    <!-- map Script-->

</body>


<!-- Mirrored from www.webstrot.com/html/smartpest/contact_us.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Feb 2024 15:22:52 GMT -->
</html>