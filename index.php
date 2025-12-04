<?php
include_once('admin/dbOperation/crude.php');

?>

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
    <!-- <div class="top_header_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="pst_logo hidden-xs">
                        <a href="index.php">
                            <img class="logoSize" images/civic_s_logo.jpg alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="top_header_add pst_toppadder30 pst_bottompadder30">
                        <ul>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">info@civicpestcontrol.com</a></li>
                            <li class="hidden-sm hidden-xs"><i class="fa fa-phone" aria-hidden="true"></i>9320402004</li>
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--header menu wrapper-->
    <div class="menu_wrapper header-area hidden-menu-bar stick nav-hide">
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
                                <img class="logoSize" src="images/civic_s_logo.jpg" alt="Logo">
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
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Pest Services <b class="caret"></b>
    </a>
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
            </ul>
        </li>

        <!-- Covid -->
        <li class="dropdown-submenu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Covid</a>
            <ul class="home-submenu dropdown-menu">
                <li><a href="#">Covid Sanitization</a></li>
            </ul>
        </li>
         <li class="dropdown-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rat Guard</a>
                                                <!-- Submenu for Covid -->
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mosquito Plated Nets</a>
                                                <!-- Submenu for Covid -->
                                            </li>
                                             <li><a href="offers.php">Offers</a>
                                    </li>
                                        <li><a href="contact_us.php" style="color: black;">Contact Us</a>
                                        </li>
    </ul>
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
    <!--top header end-->
    <!--Slider wrapper Start -->

    <div class="slider_area">
        <div id="rev_slider_24_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="website-intro" data-source="gallery" style="background:#000000;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="rev_slider_24_1" class="rev_slider fullscreenbanner tiny_bullet_slider" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                   
                    <!-- SLIDE  -->
                    <li data-index="rs-67" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="600" data-thumb="images/woman2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider_bg.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 35 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-9" data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']" data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']" data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 36 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-10" data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']" data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']" data-width="['150','150','100','100']" data-height="['200','150','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 37 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-29" data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']" data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']" data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 38 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-12" data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']" data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']" data-width="['250','250','100','100']" data-height="150" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 39 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-34" data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']" data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']" data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 40 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-11" data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']" data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']" data-width="150" data-height="['250','150','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 41 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-27" data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']" data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']" data-width="['250','250','150','150']" data-height="['300','300','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 42 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-28" data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']" data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']" data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 43 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-30" data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']" data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']" data-width="['300','300','150','200']" data-height="['250','250','150','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 44 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-31" data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']" data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']" data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 45 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-32" data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']" data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']" data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 46 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-33" data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']" data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']" data-width="['450','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 47 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-35" data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']" data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']" data-width="['350','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 48 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-68-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 49 -->
                        <div class="tp-caption   tp-resizeme slider_txt_1" id="slide-68-layer-2" data-x="['left','left','center','center']" data-hoffset="['60','120','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-120','-140','-200','-200']" data-fontsize="['60','50','40','30']" data-lineheight="['70','60','60','50']" data-width="['none','none','481','360']" data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 19; white-space: nowrap; font-size: 60px; top: 265px!important;font-family: 'Montserrat', sans-serif; line-height: 70px; font-weight: 800; color: #fff; ">Protecting Your   <span style="color:#fad604; margin-left: 3px; font-family: 'Montserrat', sans-serif;"> Home and</span>
                            <br> Business from  <span style="color:#fad604; margin-left: 3px; font-family: 'Montserrat', sans-serif;"> Unwanted Pests</span></div>

                        <!-- LAYER NR. 50 -->
                        <div class="tp-caption slider_txt_2  tp-resizeme" id="slide-68-layer-3" data-x="['left','left','center','center']" data-hoffset="['60','120','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-50','-70','-90']" data-fontsize="['28','28','24','20']" data-lineheight="['35','35','35','30']" data-width="['480','480','480','360']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="  z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 28px; line-height: 28px; font-weight: 500;     color: rgb(255, 255, 255); letter-spacing: 0px;top: 107px!important">Effective Pest Control Solutions</div>

                        <!-- LAYER NR. 51 -->
                       <a class="tp-caption rev-btn  tp-resizeme slider_btn_2" 
   href="contact_us.php" 
   target="_blank" 
   id="slide-68-layer-7" 
   data-x="['left','left','center','center']" 
   data-hoffset="['60','120','0','0']" 
   data-y="['middle','middle','middle','middle']" 
   data-voffset="['80','40','10','-10']" 
   data-width="220" 
   data-height="none" 
   data-whitespace="nowrap" 
   data-type="button" 
   data-actions='' 
   data-responsive_offset="on" 
   data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;border:2px solid #fad604;bg:transparent;bw:2px 2px 2px 2px;"}]' 
   data-textAlign="['center','center','center','center']" 
   data-paddingtop="[0,0,0,0]" 
   data-paddingright="[50,50,50,50]" 
   data-paddingbottom="[0,0,0,0]" 
   data-paddingleft="[50,50,50,50]" 
   style="z-index: 21; min-width: 170px; max-width: 170px; white-space: nowrap; font-size: 18px; line-height: 55px; font-weight: 700; font-family: 'Lato', sans-serif; text-transform: capitalize; color: #000000; letter-spacing: 0px; background-color:#fad604; border:2px solid #fad604; border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none; 
   top: 232px!important;">
   Contact Us
</a>


                    </li>
                   
                    <li data-index="rs-66" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="600" data-thumb="images/woman2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider_bg.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 35 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-9" data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']" data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']" data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 36 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-10" data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']" data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']" data-width="['150','150','100','100']" data-height="['200','150','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 37 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-29" data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']" data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']" data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 38 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-12" data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']" data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']" data-width="['250','250','100','100']" data-height="150" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 39 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-34" data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']" data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']" data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 40 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-11" data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']" data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']" data-width="150" data-height="['250','150','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 41 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-27" data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']" data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']" data-width="['250','250','150','150']" data-height="['300','300','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 42 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-28" data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']" data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']" data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 43 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-30" data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']" data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']" data-width="['300','300','150','200']" data-height="['250','250','150','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 44 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-31" data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']" data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']" data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 45 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-32" data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']" data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']" data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 46 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-33" data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']" data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']" data-width="['450','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 47 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-35" data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']" data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']" data-width="['350','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 48 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-68-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 49 -->
                        <div class="tp-caption   tp-resizeme slider_txt_1" id="slide-68-layer-2" data-x="['left','left','center','center']" data-hoffset="['60','120','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-120','-140','-200','-200']" data-fontsize="['60','50','40','30']" data-lineheight="['70','60','60','50']" data-width="['none','none','481','360']" data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 19; white-space: nowrap; font-size: 60px; top: 265px!important;font-family: 'Montserrat', sans-serif; line-height: 70px; font-weight: 800; color: #fff; ">Expert <span style="color:#fad604; margin-left: 3px; font-family: 'Montserrat', sans-serif;"> Solutions </span>
                            <br> for a Pest-Free <span style="color:#fad604; margin-left: 3px; font-family: 'Montserrat', sans-serif;"> Environment</span></div>

                        <!-- LAYER NR. 50 -->
                        <div class="tp-caption  slider_txt_2 tp-resizeme" id="slide-68-layer-3" data-x="['left','left','center','center']" data-hoffset="['60','120','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-50','-70','-90']" data-fontsize="['28','28','24','20']" data-lineheight="['35','35','35','30']" data-width="['480','480','480','360']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 28px; line-height: 28px; font-weight: 500; color: #ffffff; letter-spacing: 0px;top: 107px!important">Safe and Reliable Pest Management</div>

                        <!-- LAYER NR. 51 -->
                        <a class="tp-caption rev-btn  tp-resizeme slider_btn_2" 
   href="contact_us.php" 
   target="_blank" 
   id="slide-68-layer-7" 
   data-x="['left','left','center','center']" 
   data-hoffset="['60','120','0','0']" 
   data-y="['middle','middle','middle','middle']" 
   data-voffset="['80','40','10','-10']" 
   data-width="220" 
   data-height="none" 
   data-whitespace="nowrap" 
   data-type="button" 
   data-actions='' 
   data-responsive_offset="on" 
   data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;border:2px solid #fad604;bg:transparent;bw:2px 2px 2px 2px;"}]' 
   data-textAlign="['center','center','center','center']" 
   data-paddingtop="[0,0,0,0]" 
   data-paddingright="[50,50,50,50]" 
   data-paddingbottom="[0,0,0,0]" 
   data-paddingleft="[50,50,50,50]" 
   style="z-index: 21; min-width: 170px; max-width: 170px; white-space: nowrap; font-size: 18px; line-height: 55px; font-weight: 700; font-family: 'Lato', sans-serif; text-transform: capitalize; color: #000000; letter-spacing: 0px; background-color:#fad604; border:2px solid #fad604; border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none; 
   top: 232px!important;">
   Contact Us
</a>

                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-68" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="600" data-thumb="images/woman2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider_bg.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 35 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-9" data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']" data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']" data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 36 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-10" data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']" data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']" data-width="['150','150','100','100']" data-height="['200','150','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 37 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-29" data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']" data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']" data-width="['250','250','150','150']" data-height="['150','150','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 38 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-12" data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']" data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']" data-width="['250','250','100','100']" data-height="150" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 39 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-34" data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']" data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']" data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 40 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-11" data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']" data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']" data-width="150" data-height="['250','150','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 41 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-27" data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']" data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']" data-width="['250','250','150','150']" data-height="['300','300','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 42 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-28" data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']" data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']" data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 43 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-30" data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']" data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']" data-width="['300','300','150','200']" data-height="['250','250','150','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 44 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-31" data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']" data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']" data-width="['300','300','150','150']" data-height="['250','250','100','100']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 45 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-32" data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']" data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']" data-width="['300','300','150','150']" data-height="['200','200','150','150']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="300" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 46 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-33" data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']" data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']" data-width="['450','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 47 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" id="slide-68-layer-35" data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']" data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']" data-width="['350','400','250','250']" data-height="['100','100','50','50']" data-whitespace="nowrap" data-type="shape" data-slicey_offset="250" data-slicey_blurstart="0" data-slicey_blurend="20" data-responsive_offset="on" data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 48 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-68-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18;background-color:rgba(0, 0, 0, 0.7);"> </div>

                        <!-- LAYER NR. 49 -->
                        <div class="tp-caption   tp-resizeme slider_txt_1" id="slide-68-layer-2" data-x="['left','left','center','center']" data-hoffset="['60','120','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-120','-140','-200','-200']" data-fontsize="['60','50','40','30']" data-lineheight="['70','60','60','50']" data-width="['none','none','481','360']" data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 19; white-space: nowrap; font-size: 60px; top: 265px!important;font-family: 'Montserrat', sans-serif; line-height: 70px; font-weight: 800; color: #fff; ">Doctor Proof YOUR <span style="color:#fad604; margin-left: 3px; font-family: 'Montserrat', sans-serif;"> Home Fuirniture</span>
                            <br> With The <span style="color:#fad604; margin-left: 3px; font-family: 'Montserrat', sans-serif;"> Specialist</span></div>

                        <!-- LAYER NR. 50 -->
                        <div class="tp-caption slider_txt_2 tp-resizeme" id="slide-68-layer-3" data-x="['left','left','center','center']" data-hoffset="['60','120','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-50','-70','-90']" data-fontsize="['28','28','24','20']" data-lineheight="['35','35','35','30']" data-width="['480','480','480','360']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 28px; line-height: 28px; font-weight: 500; color: #ffffff; letter-spacing: 0px;top: 107px!important">PASTE AROUND YOUR HOME</div>

                        <!-- LAYER NR. 51 -->
                       <a class="tp-caption rev-btn  tp-resizeme slider_btn_2" 
   href="contact_us.php" 
   target="_blank" 
   id="slide-68-layer-7" 
   data-x="['left','left','center','center']" 
   data-hoffset="['60','120','0','0']" 
   data-y="['middle','middle','middle','middle']" 
   data-voffset="['80','40','10','-10']" 
   data-width="220" 
   data-height="none" 
   data-whitespace="nowrap" 
   data-type="button" 
   data-actions='' 
   data-responsive_offset="on" 
   data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;border:2px solid #fad604;bg:transparent;bw:2px 2px 2px 2px;"}]' 
   data-textAlign="['center','center','center','center']" 
   data-paddingtop="[0,0,0,0]" 
   data-paddingright="[50,50,50,50]" 
   data-paddingbottom="[0,0,0,0]" 
   data-paddingleft="[50,50,50,50]" 
   style="z-index: 21; min-width: 170px; max-width: 170px; white-space: nowrap; font-size: 18px; line-height: 55px; font-weight: 700; font-family: 'Lato', sans-serif; text-transform: capitalize; color: #000000; letter-spacing: 0px; background-color:#fad604; border:2px solid #fad604; border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none; 
   top: 232px!important;">
   Contact Us
</a>

                    </li>
                    
                </ul>
                <div class="tp-bannertimer tp-bottom slider_btm_border" style="height: 5px;  z-index: 20; background: #fad604;"></div>
            </div>
            
        </div>
        
        <!-- <div class="hero-wrapper">
  <div class="hero-container">
    <h1 class="hero-headline">
      <span class="highlight">Welcome Peace of Mind.</span>
    </h1>
   
    <div class="info-section">
        <div class="info-box">
    <p class="info-text">
      <strong>Protecting Homes</strong>, Societies, Schools, and Businesses Across <br>
      Mumbai, Navi Mumbai, Thane, Kalyan-Dombivli & Satara
    </p>
    
  </div> -->
  <!-- Box 1 -->
  <!-- <div class="info-box">
    <p class="info-text">
      At <strong>Civic Pest Control</strong>, we offer end-to-end protection for your space — 
      from expert pest control and deep cleaning to safety-first bird netting, mosquito plated nets, 
      invisible grills, and rat guard services.
    </p>
    
  </div> -->

  <!-- Box 2 -->
  <!-- <div class="info-box" onclick="toggleBox(this)">
    <p class="info-text">
      We’ve proudly served over <strong>2000+ individual homes</strong> and 
      <strong>100+ societies, schools, and hotels</strong> across Mumbai, Navi Mumbai, Thane, 
      Kalyan-Dombivli, Satara, and all stations on the Central, Western, and Trans-Harbour railway lines.
      <br><br>
      <em>One Call Covers It All.</em>
    </p>
    
  </div> -->
<!-- </div> -->
 <div class="info-section">
  <!-- Image -->
  <div class="info-image">
    <img src="images/img_2.jpg" alt="Pest Control" />
  </div>

  <!-- Text -->
  <div class="info-texts">
    <p class="info-text">
      We’ve proudly served over <strong>2000+ individual homes</strong> and 
      <strong>100+ societies, schools, and hotels</strong> across Mumbai, Navi Mumbai, Thane, 
      Kalyan-Dombivli, Satara, and all stations on the Central, Western, and Trans-Harbour railway lines.
      <em>One Call Covers It All.</em>
    </p>

    <p class="info-text">
      At <strong>Civic Pest Control</strong>, we offer end-to-end protection for your space — 
      from expert pest control and deep cleaning to safety-first bird netting, mosquito plated nets, 
      invisible grills, and rat guard services.
    </p>

    <p class="info-text">
      <strong>Protecting Homes</strong>, Societies, Schools, and Businesses Across 
      Mumbai, Navi Mumbai, Thane, Kalyan-Dombivli & Satara
    </p>
  </div>
</div>

    <div class="hero-buttons">

  <a href="https://wa.me/919320402004" class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
  </a>
</div>

  </div>
</div>
    </div>
   





    <!-- sp choose wrapper Start -->
    <div class="sp_choose_main_wrapper tab_center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 no-padding">
                    <button class="button active"><i class="fa fa-bug"></i> &nbsp;&nbsp;&nbsp;Pest Control</button>
                    <button class="button"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;Home Cleaning</button>
                    <!-- <button class="button" onclick="window.location.href='about_us.php?service=birdnetting_control'">
                        <i class="fa fa-crow"></i>&nbsp;&nbsp;&nbsp;Bird Netting</button> -->
                    <!-- <button class="button"> <i class="fa fa-wrench"></i>&nbsp;&nbsp;&nbsp;Invisible Grill Installation</button> -->
                    <!-- <button class="button" onclick = "window.location.href='about_us.php?service=mosquitoPlate_control'"> <i class="fa fa-shield-alt"></i>&nbsp;&nbsp;&nbsp;Mosquito Plated Nets</button>
                    <button class="button"> <i class="fa fa-paw"></i>&nbsp;&nbsp;&nbsp;Rat Guard </button>
                    <button class="button"> <i class="fa fa-hand-sparkles"></i>&nbsp;&nbsp;&nbsp; Services Pest Control</button> -->
                    
                  
                </div>

            </div>
            <div class="row justify-content-start" style="margin-top: 10px;">
                <div class="col-12 col-sm-6 col-md-4" id="PestControlType">
                    <select class="form-control">
                        <option value="">Select Pest Control</option>
                        <option value="cockroach-control">Cockroach Control</option>
                        <option value="mosquito-control">Mosquito Control</option>
                        <option value="rodent-control">Rodent Control</option>
                        <option value="termite-control">Termite Control</option>
                        <option value="wood-borer-control">Wood Borer Control</option>
                    </select>
                </div>

                
                <div class="col-md-4" id="PestControlBHK">
                    <select class="form-control">
                    <option value="">Select BHK</option>
                                                        <option value="1-bhk">1 BHK</option>
                                                        <option value="2-bhk">2 BHK</option>  
                                                        <option value="3-bhk">3 BHK</option>
                                                        <option value="4-bhk">4 BHK</option>  
                                                        <option value="5-bhk">5 BHK</option>
                                                        <option value="6-bhk">6 BHK</option>  
                                                        <option value="7-bhk">7 BHK</option>
                                                        <option value="8-bhk">8 BHK</option>  
                                                        <option value="9-bhk">9 BHK</option>
                                                        <option value="10-bhk">10 BHK</option>  
                    </select>
                   
                </div>
                <div class="col-md-4" id="PestControlSer">
                    <select class="form-control" id="serviceType">
                        <option value="" >Select Service</option>
                        <option value="single-service">Single Service</option>
                        <option value="3-services-1-year">3 Services 1 Year </option>
                        <option value="6-services-2-year">6 Services 2 Year </option>  
                    </select>
                </div>
                <div class="col-md-4" id="HomeCleaningType">
                    <select class="form-control" >
                    <option value="">Select Home Cleaning</option>
                                                  <option value="full-home-cleaning"> Full Home Cleaning</option>
                                                  <option value="bathroom-cleaning"> Bathroom Cleaning</option>
                                                  <option value="kitchen-cleaning"> Kitchen Cleaning</option>
                                                  <option value="sofa-cleaning"> Sofa Cleaning</option>
                                                  <option value="combo-services"> Combo Services</option>
                                                  <option value="chair-and-carpet-cleaning"> Chair and Carpet Cleaning</option>
                                                  <option value="steam-sanitzation-services"> Steam Sanitization Services</option>
                                                  <option value="car-cleaning-services"> Car Cleaning Services</option>
                                                  <option value="fridge-cleaning"> Fridge Cleaning</option>
                    </select>
                </div>
                <div class="col-md-4" id="homeCleaningbhk">
                    <select class="form-control">
                    <option value="">Select BHKs</option>
                                                  <option value="1RK(upto-400-sqft)">1RK (upto 400 sq ft)</option>
                                                  <option value="1BHK(401-600-sqft)">1BHK (401 - 600 sq ft)</option>
                                                  <option value="2BHK-(601–1000-sqft)">2BHK (601 – 1000 sq ft)</option>
                                                  <option value="3BHK-(1001–1500-sqft)">3BHK (1001 – 1500 sq ft)</option>
                                                  <option value="4-BHK-Regular-(1501-2100-Sqft)">4 BHK Regular (1501 -2100 Sqft)</option>
                                                  <option value="4-BHK-Lar-(2101-2500-Sqft)">4 BHK Lar (2101 - 2500 Sqft)</option>
                                                  <option value="5BHK-(2500-3000-sqft)">5BHK (2500 - 3000 sq ft)</option>
                                                  <option value="less-than-1200-Sqft">less than 1200 Sq ft</option>
                                                  <option value="1200-2000-Sqft">1200-2000 Sq ft</option>
                                                  <option value="2001-3000-Sqft">2001 -3000 Sq ft</option>
                                                  <option value="3001-4000-Sqft">3001 - 4000 Sq ft</option>
                                                  <option value="4001-5000-Sqft">4001-5000 Sq ft</option>
                                                  <option value="5001-6000-Sqft">5001- 6000 Sq ft</option>
                    </select>
                   
                </div>
                
                    
            <!-- <div class="col-md-4" id="HomeCleaningSer">
                <select class="form-control">
                    <option value="" >Select Service</option>
                    <option value="single-service">Single Service</option>
                    <option value="3-services-1-year-contract">3 Services 1 Year Contract</option>    
                </select>
            </div>  -->
                
            </div>
            
            <div id="services-container" class="row packages_row">
                <!-- Services will be dynamically loaded here -->
            </div>



            
        </div>
        <!-- <div class="container margin_top" >
           
					
               
            </div>
        </div> -->
    </div>
    <!-- sp choose wrapper End -->
    <!--about us section start-->
    <div class="about_us_section pst_toppadder100 pst_bottompadder100">
        <div class="sp_abt_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-lg-offset-2">
                    <div class="sp_choose_heading_main_wrapper sp_dark_heading pst_bottompadder50">
                        <h2><span>About Us</span></h2>
                        <p>Our pest control service provides comprehensive data analysis to track infestation trends and assess treatment effectiveness. Through our paperless system, clients have access to detailed audit reports and billing information online.</p>
                        
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="aboutus_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="abt_img img-effect zoom-slow">
                                    <img src="images/abt_img.jpg" alt="img" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="abt_img img-effect zoom-slow">
                                    <img src="images/abt_img.jpg" alt="img" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="abt_img img-effect zoom-slow">
                                    <img src="images/abt_img.jpg" alt="img" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="text_wrapper">

                        <div class="icon_wrapper">

                            <div class="icon_content_box">
                                <h4><a href="index.php">India's Hygiene Expert</a></h4>
                                <p>
                                    Civic Pest Control stands as India's premier hygiene company, providing digital solutions for complete home and institutional pest control. </p>
                            </div>
                            <div class="sp_icon_img">
                                <a href="index.php"><i class="fa fa-angle-right"></i></a>

                            </div>
                        </div>
                        <div class="icon_wrapper">

                            <div class="icon_content_box">
                                <h4><a href="index.php">DIGITAL HYGIENE</a></h4>
                                <p>
                                    Our digital ecosystem manages service protocols, scheduling, service intimation, audit reports, and infestation trends seamlessly.</p>
                            </div>
                            <div class="sp_icon_img">
                                <a href="index.php"><i class="fa fa-angle-right"></i></a>

                            </div>
                        </div>
                        <div class="icon_wrapper">

                            <div class="icon_content_box">
                                <h4><a href="index.php">RESPONSIBLE HYGIENE</a></h4>
                                <p>
                                    as India's leading hygiene brand, prioritizes environmental stewardship, customer well-being, and the welfare of our Hygiene Experts.</p>
                            </div>
                            <div class="sp_icon_img">
                                 <a href="index.php"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--about us section end-->
    <!-- sp services wrapper Start -->
    <div class="sp_services_wrapper pst_toppadder100 pst_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-lg-offset-2">
                    <div class="sp_choose_heading_main_wrapper pst_bottompadder50">
                        <h2><span>Our Services</span></h2>
                        <p>Civic Pest Control stands as a digital, responsible, and hygiene-centric company providing comprehensive home and institutional solutions throughout India. With a three-decade legacy as a national brand

                        </p>
                    </div>
                </div>
                <div class="sp_feature_cntnt ser_service_icon_centnt">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                        <div class="main sp_ser_img_box1">
                            <div class="rotate rotate_1">
                                <i class="flaticon-insect"></i>
                            </div>
                            <h4 class="text-center pst_bottompadder10"><a href="#">Pest Control</a></h4>
                            <p class="text-center">
                                Bought a new house and now you feel that you and your family would live there happily!</p>
                            <!-- <h3><a href="#">Read More </a></h3> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                        <div class="main sp_ser_img_box2">
                            <div class="rotate rotate_1">
                                <i class="flaticon-mosquito-1"></i>
                            </div>
                            <h4 class="text-center pst_bottompadder10"><a href="#">Covid Disinfection</a></h4>
                            <p class="text-center">
                                Our Spatial treatment is a precautionary treatment and will disinfect only the premises</p>
                            <!-- <h3><a href="#">Read More </a></h3> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                        <div class="main sp_ser_img_box3">
                            <div class="rotate rotate_1">
                                <i class="flaticon-butterfly-with-a-heart-on-frontal-wing-on-side-view"></i>
                            </div>
                            <h4 class="text-center pst_bottompadder10"><a href="#">Home Cleaning </a></h4>
                            <p class="text-center">
                                Home sweet home is the place where we can be ourselves and sleep, cook, eat, and work.</p>
                            <!-- <h3><a href="#">Read More </a></h3> -->
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- sp services wrapper End -->

    <!-- counter wrapper start-->
    <div class="counter_section">
        <div class="counter_overlay">
            <section class="counter-section section-padding" data-stellar-background-ratio="0.5">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow  zoomIn animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: zoomIn;">
                            <div class="icon"> <a href="#"><i class="flaticon-certification-award"></i></a>
                            </div>
                            <div class="count-description"><span class="timer">10Lacs</span>+
                                <h5 class="con1">
                                    Happy Customers</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow  zoomIn animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: zoomIn;">
                            <div class="icon"> <a href="#"><i class="flaticon-happy"></i></a>
                            </div>
                            <div class="count-description"> <span class="timer">400</span>+
                                <h5 class="con2">
                                     Reviews on Google</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow  zoomIn animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: zoomIn;">
                            <div class="icon"> <a href="#"><i class="flaticon-medal"></i></a>
                            </div>
                            <div class="count-description"> <span class="timer">30 </span>+
                                <h5 class="con2">
                                    Cities</h5>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- counter wrapper end-->
    
  
    <!--project area start here-->
    <div class="service_page_section pst_toppadder100 pst_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="service_slider_wrapper">
                        
                            <div class="item">
                                <div class="abt_img">
                                    <img src="images/serv_slider_img.jpg" alt="img" class="img-responsive">
                                   
                                </div>

                            </div>
                           
                       
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="serv_page_txt">
                        <h2>We Take Pride in Making India Proud</h2>
                        <p class="pst_toppadder30">During the mosquito-borne epidemic of 2019, which saw over 1 lakh cases of Dengue, Malaria, and Chikungunya in India, we responded swiftly by introducing India's pioneering anti-dengue and anti-malaria pest control services tailored to address the specific needs of our nation.</p>
                        <p class="pst_toppadder20">As trailblazers in the industry, we were the first in India to innovate by incorporating mosquito repellent garbage bags and a patented drain-cleaning enzyme, effectively combating the menace of cockroaches.</p>

                        <p class="pst_toppadder20">Introducing wall-traps for mosquitoes using a micro-suspension capsule spray on walls was yet another milestone, setting new standards in pest control practices nationwide.</p>
                        <!-- <p class="pst_toppadder20"> Our commitment to innovation and safety led us to become the first in India to utilize a safe and herbal Silver Nano spray for the disinfection of homes and premises against the coronavirus, ensuring the well-being of our communities.s</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--project area end here-->
     <!--testimonial area start-->
    <div class="testimonial_wrapper pst_toppadder100">
        <div class="test_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="sp_choose_heading_main_wrapper sp_dark_heading testi_heading_wrapper pst_toppadder50">
                        <h2><span>testimonial</span></h2>
                        <!-- <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p> -->
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                    <div class="testimonial_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p>I am very impressed with the Civic Pest Control kitchen cleaning service. Kitchen stuff was rearranged by them leaving it neat and clean. Great effort. Highly recommended
                                        </p>
                                    <h4>Kranti Kadam,  <span> Mumbai </span> </h4>
                                </div>
                            </div>
                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p>The Civic Pest Control team did an amazing job on my bathroom deep clean. They were very professional and thorough. My bathroom looks amazing and I am very happy with their work.
                                        </p>
                                    <h4>Rishnan Mehra,  <span> Gurugram </span> </h4>
                                </div>
                            </div>
                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p>They have always provided me with timely service and we have able to get rid of the cockroaches in my home.
                                        </p>
                                    <h4>Gopal Swami,  <span>Chennai</span> </h4>
                                </div>
                            </div>
                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p>Civic Pest Control provides excellent bed bug pest control services. They are very professional and know exactly what they are doing. They use the latest technology and equipment to get rid of bed bugs quickly and efficiently. I would highly recommend Civic Pest Control to anyone who is looking for bed bug pest control services.
                                      </p>
                                    <h4>  Pranav Rangan, <span>Bangalore</span> </h4>
                                   

                                </div>
                            </div>

                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p> Civic Pest Control has been extremely effective in combating the termite problem in my home. Their service is reliable and affordable, and I have not had any issues with termites since I started using their service. I would highly recommend Civic Pest Control to anyone with a termite problem.
                                      
                                        </p>
                                    <h4>  Amit Rodrigues,   <span>Mumbai</span> </h4>
                                </div>
                            </div>
                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p>They were professional and courteous throughout the process, and I'm very glad I chose them to get the job done.
                                        </p>
                                    <h4> Reyansh Shah,   <span>Pune</span> </h4>
                                </div>
                            </div>
                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p>
                                        I am very pleased with the service I received from Civic Pest Control. They were prompt and professional, and they did an excellent job of getting rid of the cockroaches in my home. I would highly recommend their services to anyone who is looking for pest control.
                                       
                                        </p>
                                    <h4> Vibhore Patil,  <span>Pune</span> </h4>
                                </div>
                            </div>
                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p>
                                        Civic Pest Control's termite treatment for wood is extremely effective. I had a major termite problem in my house and their treatment got rid of the problem completely. I highly recommend their services.
                                        </p>
                                    <h4>Parakram Gosh,   <span>Kolkata</span> </h4>
                                </div>
                            </div>
                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p>Civic Pest Control's cockroach control service is very effective. I have been using it for several months and have not seen a single cockroach in my house.
                                        </p>
                                    <h4>Rohini Uniyal,   <span>Mumbai</span> </h4>
                                </div>
                            </div>
                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p>Civic Pest Control's mosquito control service is excellent. They are always on time and they do a great job. Their service has helped me keep my family safe. Thankyou Hi Care.
                                     </p>
                                    <h4>    Mohit Tiwari,   <span>Delhi</span> </h4>
                                </div>
                            </div>
                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p>Civic Pest Control pest control service is excellent. Termite Issue, effectively resolved.
                                        </p>
                                    <h4> Yogendra Mittal,  <span>Ahmedabad</span> </h4>
                                </div>
                            </div>
                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p>Civic Pest Control offers a full home cleaning service that is both professional and reliable. I have used their service on multiple occasions and have always been impressed with the quality of their work.
                                        
                                          </p>
                                    <h4>Anup Naglesh,  <span>Hyderabad</span> </h4>
                                </div>
                            </div>
                            <div class="item box_testimonial">
                                <div class="section2_img_wrapper">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->

                                    <!-- /.post-thumbnail -->
                                </div>

                                <div class="section2_text_wrapper">

                                    <p>Civic Pest Control provides excellent deep home cleaning services and they do a great job of cleaning my home. I would highly recommend their services to anyone looking for a deep home cleaning service.
                                       </p>
                                    <h4>  Prashant Shrivastava,   <span>Bangalore</span> </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--testimonial area end-->
   

    <div class="blog_section pst_toppadder100">
        <div class="container">
            <div class="row blog-post equal-heightt">
                <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-lg-offset-2">
                    <div class="sp_choose_heading_main_wrapper pst_bottompadder50">
                        <h2><span>Latest Offers</span></h2>
                        <p>Maintaining personal hygiene is imperative for numerous reasons, spanning personal, social, health, and psychological facets, ultimately becoming a way of life. Upholding elevated hygiene standards serves as a barrier against the proliferation and dissemination of infectious disease-causing germs</p>
                    </div>
                </div>
                   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
  <div class="lest_news_box_wrapper img-effect zoom-slow">
    <div class="lest_news_img_wrapper">
      <img src="images/blog_1.jpg" alt="blog_img">
    </div>
    <div class="lest_news_cont_wrapper">
      <h5><a href="#">10% OFF on Termite Control Service AMC | Use Code: TMS10</a></h5>
      <ul>
        <li>- Free Inspection & Proactive Guidance</li>
        <li>- Drill - Fill - Seal Technique</li>
        <li>- 2-Year Warranty</li>
      </ul>
      <h4><a href="javascript:void(0)" class="read-more">Read More</a></h4>

      <!-- Hidden Text -->
      <div class="more-text">
       <ul>
        <li>- Eco friendly Treatment</li>
    <li>- Professional Technicians</li>
    <li>- Long lasting Protection</li>
       </ul>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
  <div class="lest_news_box_wrapper img-effect zoom-slow">
    <div class="lest_news_img_wrapper">
      <img src="images/blog_1.jpg" alt="blog_img">
    </div>
    <div class="lest_news_cont_wrapper">
      <h5><a href="#">10% OFF on Bed Bug Control Service AMC | Use Code: BBMS10</a></h5>
      <ul>
        <li>- Inspection by Experts</li>
        <li>- European Approved Chemicals</li>
        <li>- 90 Days Protection</li>
      </ul>
      <h4><a href="javascript:void(0)" class="read-more">Read More</a></h4>

      <!-- Hidden Text -->
      <div class="more-text">
        <ul><li>- Odor-free Solutions</li>
    <li>- Family & Pet Safe</li>
    <li>- Kills Hidden Infestations</li></ul>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
  <div class="lest_news_box_wrapper img-effect zoom-slow">
    <div class="lest_news_img_wrapper">
      <img src="images/blog_2.jpg" alt="blog_img">
    </div>
    <div class="lest_news_cont_wrapper">
      <h5><a href="#">10% OFF on 4D Cockroach Control & Ant Control Service AMC | Use Code: CMS10</a></h5>
      <ul>
        <li>- European Approved Chemicals</li>
        <li>- Complimentary Ant Treatment</li>
      </ul>
      <h4><a href="javascript:void(0)" class="read-more">Read More</a></h4>

      <!-- Hidden Text -->
      <div class="more-text">
        <ul>
            <li>- Gel Baiting Method</li>
    <li>- Preventive Barrier Spray</li>
    <li>- Kitchen & Home Protection</li>
        </ul>
      </div>
    </div>
  </div>
</div>

            </div>
        </div>
    </div>

    <script>
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".read-more").forEach(link => {
      link.addEventListener("click", function () {
        const moreText = this.closest(".lest_news_cont_wrapper").querySelector(".more-text");

        if (moreText.style.display === "block") {
          moreText.style.display = "none";
          this.textContent = "Read More";
        } else {
          moreText.style.display = "block";
          this.textContent = "Read Less";
        }
      });
    });
  });
</script>

    
    <!--blog section end-->

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
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script>
$(document).ready(function(){
    // Initially hide all select boxes except Pest Control
    $('#HomeCleaningType, #homeCleaningbhk, #HomeCleaningSer').hide();

    // Show select boxes based on active button
    $('.button').click(function(){
        $('.button').removeClass('active');
        $(this).addClass('active');
        var buttonText = $(this).text().trim();
        if (buttonText === 'Pest Control') {
            $('#PestControlType, #PestControlBHK, #PestControlSer').show();
            $('#HomeCleaningType, #homeCleaningbhk, #HomeCleaningSer').hide();
        } else if (buttonText === 'Home Cleaning') {
            $('#HomeCleaningType, #homeCleaningbhk, #HomeCleaningSer').show();
            $('#PestControlType, #PestControlBHK, #PestControlSer').hide();
        } else {
            // If another button is clicked, hide all select boxes
            $('#HomeCleaningType, #PestControlBHK, #homeCleaningbhk, #HomeCleaningSer, #PestControlType, #PestControlSer').hide();
        }
    });
});
</script> -->

<script>
    // $(document).ready(function() {
    //     // Initially hide all select boxes
    //     $('#PestControlType, #PestControlBHK, #PestControlSer, #HomeCleaningType, #homeCleaningbhk, #HomeCleaningSer').hide();

    //     // Fetch and display default services
    //     filterServices('pest-control');

    //     // Event listener for button clicks
    //     $('.button').click(function() {
    //         $('.button').removeClass('active');
    //         $(this).addClass('active');
    //         var buttonText = $(this).text().trim();
    //         var typeValue = "";

    //         // Set the type value based on the active button
    //         if (buttonText === 'Pest Control') {
    //             typeValue = 'pest-control';
    //             $('#PestControlType, #PestControlBHK, #PestControlSer').show();
    //             $('#HomeCleaningType, #homeCleaningbhk, #HomeCleaningSer').hide();
    //         } else if (buttonText === 'Home Cleaning') {
    //             typeValue = 'home-cleaning';
    //             $('#HomeCleaningType, #homeCleaningbhk, #HomeCleaningSer').show();
    //             $('#PestControlType, #PestControlBHK, #PestControlSer').hide();
    //         } else {
    //             // If another button is clicked, hide all select boxes
    //             $('#HomeCleaningType, #PestControlBHK, #homeCleaningbhk, #HomeCleaningSer, #PestControlType, #PestControlSer').hide();
    //         }

    //         // Fetch and display filtered results
    //         filterServices(typeValue);
    //     });

    //     // Function to filter services based on type
    //     function filterServices(type) {
    //         $.ajax({
    //             type: "POST",
    //             url: "filter_services.php",
    //             data: { type: type },
    //             success: function(response) {
    //                 $('#services-container').html(response);
    //                 //alert(response);
    //             },
    //             error: function(xhr, status, error) {
    //                 console.error(xhr.responseText);
    //             }
    //         });
    //     }
    // });
//     $(document).ready(function() {
//     // Initially hide all select boxes except Pest Control
//     $('#PestControlType, #PestControlBHK, #PestControlSer').show();
//     $('#HomeCleaningType, #homeCleaningbhk, #HomeCleaningSer').hide();

//     // Fetch and display default filtered results
//     filterDefault();

//     // Event listener for button clicks
//     $('.button').click(function() {
//         $('.button').removeClass('active');
//         $(this).addClass('active');
//         var buttonText = $(this).text().trim();
//         var typeValue = "";

//         // Set the type value based on the active button
//         if (buttonText === 'Pest Control') {
//             typeValue = 'pest-control';
//             $('#PestControlType, #PestControlBHK, #PestControlSer').show();
//             $('#HomeCleaningType, #homeCleaningbhk, #HomeCleaningSer').hide();
//         } else if (buttonText === 'Home Cleaning') {
//             typeValue = 'home-cleaning';
//             $('#HomeCleaningType, #homeCleaningbhk, #HomeCleaningSer').show();
//             $('#PestControlType, #PestControlBHK, #PestControlSer').hide();
//         } else {
//             // If another button is clicked, hide all select boxes
//             $('#HomeCleaningType, #PestControlBHK, #homeCleaningbhk, #HomeCleaningSer, #PestControlType, #PestControlSer').hide();
//         }

//         // Fetch and display filtered results
//         filterServices(typeValue);
//     });

//     // Event listener for select changes
//     $('select').change(function() {
//         var typeValue = $('.button.active').text().trim();
//         var type = typeValue === 'Pest Control' ? 'pest-control' : 'home-cleaning';
//         var serviceType = $('#'+type+'Type select').val();
//         var bhk = $('#'+type+'BHK select').val();
//         var service = $('#'+type+'Ser select').val();

//         // Fetch and display filtered results
//         filterServices(type, serviceType, bhk, service);
//     });

//     // Function to fetch and display default filtered results
//     function filterDefault() {
//         var typeValue = $('.button.active').text().trim();
//         var type = typeValue === 'Pest Control' ? 'pest-control' : 'home-cleaning';

//         // Fetch and display default filtered results
//         filterServices(type);
//     }

//     // Function to filter services based on type, serviceType, bhk, and service
//     function filterServices(type, serviceType, bhk, service) {
//         $.ajax({
//             type: "POST",
//             url: "filter_services.php",
//             data: { 
//                 type: type,
//                 serviceType: serviceType,
//                 bhk: bhk,
//                 service: service
//             },
//             success: function(response) {
//                 $('#services-container').html(response);
//             },
//             error: function(xhr, status, error) {
//                 console.error(xhr.responseText);
//             }
//         });
//     }
// });
$(document).ready(function() {
    // Initially hide all select boxes except Pest Control
    $('#PestControlType, #PestControlBHK, #PestControlSer').show();
    $('#HomeCleaningType, #homeCleaningbhk, #HomeCleaningSer').hide();

    // Fetch and display default filtered results
    filterDefault();

    // Event listener for button clicks
    $('.button').click(function() {
        $('.button').removeClass('active');
        $(this).addClass('active');
        var buttonText = $(this).text().trim();
        var typeValue = "";

        // Set the type value based on the active button
        if (buttonText === 'Pest Control') {
            typeValue = 'pest-control';
            $('#PestControlType, #PestControlBHK, #PestControlSer').show();
            $('#HomeCleaningType, #homeCleaningbhk, #HomeCleaningSer').hide();
        } else if (buttonText === 'Home Cleaning') {
            typeValue = 'home-cleaning';
            $('#HomeCleaningType, #homeCleaningbhk, #HomeCleaningSer').show();
            $('#PestControlType, #PestControlBHK, #PestControlSer').hide();
        } else {
            // If another button is clicked, hide all select boxes
            $('#HomeCleaningType, #PestControlBHK, #homeCleaningbhk, #HomeCleaningSer, #PestControlType, #PestControlSer').hide();
        }

        // Fetch and display filtered results
        filterServices(typeValue);
    });
    // Event listener for select changes
    $('#PestControlType select').change(function() {
        filterServices('pest-control', $(this).val(), '', '');
    });

    $('#HomeCleaningType select').change(function() {
        filterServices('home-cleaning', $(this).val(), '', '');
    });

    // Event listener for select changes
    
    // Function to fetch and display default filtered results
        function filterDefault() {
        var typeValue = $('.button.active').text().trim();
        var type = typeValue === 'Pest Control' ? 'pest-control' : 'home-cleaning';

        // Fetch and display default filtered results
        filterServices(type);
    }

    // Function to filter services based on type, serviceType, bhk, and service
  // Function to filter services based on type, serviceType, bhk, and service
function filterServices(type, serviceType, bhk, service) {
    $.ajax({
        type: "POST",
        url: "filter_services.php",
        data: { 
            type: type,
            serviceType: serviceType,
            bhk: bhk,
            service: service
        },
        success: function(response) {
            $('#services-container').html(response);
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

});


</script>

    <script>
        window.addEventListener('load', function() {
    equalizeBlogPostHeights();
});

function equalizeBlogPostHeights() {
    let blogPosts = document.querySelectorAll('.blog-post');
    let maxHeight = 0;

    blogPosts.forEach(function(post) {
        maxHeight = Math.max(maxHeight, post.offsetHeight);
    });

    blogPosts.forEach(function(post) {
        post.style.height = maxHeight + 'px';
    });
}

    </script>
</body>


</html>