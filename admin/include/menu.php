<style>
    /* Style for the submenu links */
    .nav-item .collapse.menu-dropdown .nav-item:hover .nav-link {
        color: black; /* Change color to black on hover */
    }
</style>

<header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="dashboard.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/pestLogo.jpeg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/pestLogo.jpeg" alt="" height="17">
                                </span>
                            </a>

                            <a href="dashboard.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/pestLogo.jpeg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/pestLogo.jpeg" alt="" height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->

                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>

                        <!-- <div class="dropdown topbar-head-dropdown ms-1 header-item">
                           
                           <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        
                        >
                        <a href="calendar.php">  <i class='bx bx-bell fs-22'></i></a>
                          <span
                              class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span
                                  class="visually-hidden">unread messages</span></span>
                      </button>
                        </div> -->
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span
                                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo $_SESSION['login_user'] ?></span>
                                       
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome <?php echo $_SESSION['login_user'] ?></h6>

                              
                                <a class="dropdown-item" href="logout.php">
                                    <i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

<div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box logo-title">
                <!-- Dark Logo-->
                <!-- LOGO -->
                <div class="navbar-brand-box logo-title">
                    <div class="navbar-brand-box">
                        <!-- Dark Logo-->
                        <a href="dashboard.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img class="logo-inner" src="assets/images/pestLogo.jpeg" alt=""
                                    height="22">
                            </span>
                            <span class="logo-lg">
                                <img class="logo-inner2" src="assets/images/pestLogo.jpeg" alt="">
                            </span>
                        </a>
                        <!-- Light Logo-->
                        <a href="dashboard.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img class="logo-inner" src="assets/images/pestLogo.jpeg" alt=""
                                    height="22">
                            </span>
                            <span class="logo-lg">
                                <img class="logo-inner2" src="assets/images/pestLogo.jpeg" alt="">
                            </span>
                        </a>

                    </div>

                </div>


                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

          
          

                <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu"></div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                     
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApps>">
                                <i class="ri-apps-2-line"></i>
                                <span data-key="t-apps">Master</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                   
                                    <li class="nav-item">
                                        <a href="services.php" class="nav-link" data-key="t-calendar">
                                        Services
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="meta-tags.php" class="nav-link" data-key="t-calendar">
                                        Meta Tags
                                        </a>
                                    </li>
                                   
                               </ul>
                            </div> 
                        </li>
                        <!-- end Dashboard Menu -->
                       

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
          

          
          
           

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>