
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
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pest Services <b class="caret"></b></a>
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
                                             <a href="about_us.php?service=mosquitoPlate_control">Mosquito Plated Nets</a>
                                            </li>

                                            <li class="dropdown-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Invisible Grill Installations</a>
                                                <!-- Submenu for Covid -->
                                            </li>

                                            
            </ul>
        </li>
        <li><a href="offers.php">Offers</a></li>
                                        <li><a href="contact_us.php" style="color: black;">Contact Us</a></li>

                                        </li>
    </ul>
<!-- </li>                                     <li><a href="offers.php">Offers</a></li>
                                        <li><a href="contact_us.php" style="color: black;">Contact Us</a></li>

                                        </li> -->
                                       
                                        

										</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="appointmnt_wrapper hidden-xs hidden-sm">
                            <ul>
                                <li>
                                    <a href="contact_us.php" class="appint-btn hidden-xs hidden-sm" style="color: black;" >
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
                           <?php
$service = $_GET['service'] ?? '';
$service_title = '';

if ($service) {
    $title = str_replace('_', ' ', $service);   // Replace underscores with spaces
    $service_title = ucwords($title);           // Capitalize words
}
?>

<h1 class="pst_bottompadder30">
    <span>About Us</span>
    <?php if ($service_title): ?>
        – <span><?= $service_title ?></span>
    <?php endif; ?>
</h1>

                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="page_header_bottom">
                        <ul class="sub_title">
                            <li><a href="#"> Home </a></li>
                            <li class="icon_breamcum"> > </li>
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <?php
$service = $_GET['service'] ?? '';
$service_title = '';

if ($service) {
    // Create title from slug like mosquito_control => Mosquito Control
    $title = str_replace( '_control','', $service);       // remove '_control'
    $title = str_replace('_', ' ', $title);               // replace _ with space
    $service_title = ucwords($title);                     // capitalize
}
?>

<!-- Breadcrumb Section -->
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
    <div class="row">
        <div class="page_header_bottom">
            <ul class="sub_title">
                <li><a href="index.php">Home</a></li>
                <li class="icon_breamcum"> > </li>
                <li><?= $service_title ?: 'About Us' ?></li>
            </ul>
        </div>
    </div>
</div>

<!-- Main Heading (Just the Service Title) -->
<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="serv_page_txt">
        <h2 class="span_ele pst_toppadder20">
            <?= $service_title ?: 'India\'s Hygiene Expert' ?>
        </h2>
    </div>
</div> -->

        </div>
    </div>
    <!-- page_title_section end -->
    <!-- about us page start-->
    
    <!-- about us page end-->
    <div class="service_page_section pst_toppadder100 pst_bottompadder100">
        <div class="container">
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="service_slider_wrapper">
                        
                            <div class="item">
                                <div class="abt_img">
                                    <img src="images/abt_img.jpg" alt="img" class="img-responsive">
                                   
                                </div>

                            </div>
                           
                       
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   <?php
$service = isset($_GET['service']) ? $_GET['service'] : '';
$service_file = "services/" . $service . ".php";

if ($service && file_exists($service_file)) {
    // Ensure $service_parts is available after include
    $service_parts = [];
    include $service_file;

    // ✅ Dynamically echo part1
    if (isset($service_parts[$service]['part1'])) {
        echo $service_parts[$service]['part1'];
    } else {
        echo "<p>Error: Part 1 not defined for service '$service'.</p>";
    }
} else {
    // Default static content when no ?service= is passed or file not found
    ?>
    <div class="serv_page_txt">
        <h2 class="span_ele pst_toppadder20">India's Hygiene Expert</h2>
        <p class="pst_toppadder10">
            <span style="font-weight: bold; color: #000000">Who We Are</span> <br>
Since 2011, Civic Pest Control has been the trusted name in pest management and home safety solutions. With years of experience, trained professionals, and thousands of satisfied customers, we’re redefining hygiene and safety for homes and businesses.        </p>
            <!-- Civic Pest Control is a Digital, Responsible, and Hygiene company for Complete Home and Institutional solution in India. As a national brand with a legacy of three decades, we have served over 30 lakh homes and 300+ corporates. -->
        </p>

        <h2 class="span_ele pst_toppadder20">Digital Hygiene</h2>
        <p class="pst_toppadder10">
            We love to set benchmarks in digital hygiene by offering hassle-free and 24x7 online transparency. We follow one-nation-one-price for almost all our services and all our service protocols, scheduling, the intimation of service, audit reports, infestation trends and billing details are done in a paperless and robust ecosystem, online.
        </p>

        <h2 class="span_ele pst_toppadder20">Responsible Hygiene</h2>
        <p class="pst_toppadder10"> 
            As India’s leading hygiene brand, we place a great onus on taking care of the environment, our customers and our Hygiene Experts.
        </p>

        <h2 class="span_ele pst_toppadder20">Comprehensive Hygiene Solutions</h2>
        <p class="pst_toppadder10"> 
            We are truly India’s one-stop-destination for hygiene and pest control – namely, pest control, disinfection and cleaning.
        </p>
    </div>
    <?php
}
?>


    </div>
    </div>
    </div>
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
    <!-- sp choose wrapper Start -->
   <div class="sp_choose_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-lg-offset-2">
                <div class="sp_choose_heading_main_wrapper pst_bottompadder50">
                   <?php
$service = $_GET['service'] ?? '';
$service_title = '';

if ($service) {
    $title = str_replace('_', ' ', $service);   // Replace underscores with spaces
    $service_title = ucwords($title);           // Capitalize words
}
?>
<br><br>
<h2 >
    <span>About Civic</span>
    <?php if ($service_title): ?>
        <span><?= $service_title ?></span>
    <?php endif; ?>
</h2>

                    <p>
                        Civic Pest Control is a Digital, Responsible, and Hygiene company for Complete Home and Institutional solution in India. As a national brand with a legacy of three decades, we have served over 30 lakh homes and 300+ corporates.
                    </p>
                    <div class="container">
  

<div class="container" 
     style="display: flex; flex-wrap: wrap; gap: -30px; align-items: flex-start; text-align: left;">

  <div class="box" style="flex: 1 1 300px; min-width: 280px;">
    <h2>Why Civic?</h2>
    <ul>
      <li>✔ Government-approved chemicals</li>
      <li>✔ Safe for kids and pets</li>
      <li>✔ Customized AMC plans</li>
      <li>✔ Transparent pricing</li>
      <li>✔ Quick response, same-day service</li>
    </ul>
  </div>

  <div class="box" style="flex: 1 1 300px; min-width: 280px;">
    <h2>Clients We Serve</h2>
    <ul>
      <li>🏠 Residential Apartments & Row Houses</li>
      <li>🏢 Commercial Offices, Shops, Hotels</li>
      <li>🏫 Institutions – Schools, Colleges, Clinics, Hospitals</li>
    </ul>
  </div>

</div>


                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="abt_right_statistic_wrapper">
                   <?php
// ✅ Only display Part 2 of the current service
$service = $_GET['service'] ?? '';
$service_file = "services/" . $service . ".php";

if ($service && file_exists($service_file)) {
    // Ensure service_parts is defined
    $service_parts = [];
    include $service_file;

    // ✅ Display Part 2 if defined
    if (isset($service_parts[$service]['part2'])) {
        echo $service_parts[$service]['part2'];
    } else {
        echo "<p>Error: Part 2 not defined for service '$service'.</p>";
    }
}
?>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    <!--sp choose wrapper end-->
  
    
  
   
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
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="venobox/js/venobox.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/Chart.bundle.js"></script>
    <script src="js/chart.js"></script>
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

</body>



</html>